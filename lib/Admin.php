<?php
class Admin{

  public function setConnexion()
  {
    $db = new \lib\Database();

    if(!empty($_POST['email']) && !empty($_POST['password']))
    {

      $req = $db->prepare("SELECT email, motDePasse	FROM etablissement WHERE email = :email");
      $req->execute(array(
        'email' => $_POST['email']
      ));

      $resultat = $req->fetch(PDO::FETCH_OBJ);
      $pass = hash('sha256', $_POST['password']);


      if($pass == $resultat->motDePasse)
      {
        session_start();
        $_SESSION['pseudo'] = $resultat->email;
        header("Location: " . NDD_PATH);
        exit();
      }else {
        $msg = "<div class='alert alert-danger'>Mot de passe incorrect.</div>";
      }
    }
    else{
      $msg = "<div class='alert alert-warning'>Merci de renseigner un identifiant et un mot de passe.</div>";
    }
    return $msg;
  }

public function internauteEstConnecte()
  {
    if(!empty($_SESSION['pseudo']))
    {
      return true;
    }
    else
    {
      return false;
    }
  }
}

?>