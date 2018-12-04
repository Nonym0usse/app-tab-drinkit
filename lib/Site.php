<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-13T22:50:04+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-11-17T16:19:14+01:00

/**
*
*/

require_once 'Database.php';

class Site
{

  public function load_content()
  {

    if(!empty($_REQUEST['op'])){

      $file = 'views/' . $_REQUEST['op'] . '.php';

      if(file_exists($file)){
        require_once $file;
      }
      else{
        require_once 'views/accueil.php';
      }
    }
    else{
      require_once 'views/accueil.php';
    }
  }

  public function getBoisson($type)
  {
    $db = new \lib\Database();
    $data = $db->query("SELECT * FROM boisson WHERE type = '$type'");
    return $data;
  }

}
