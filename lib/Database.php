<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-18T19:29:20+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-11-17T16:17:17+01:00

namespace lib;
use \PDO;

class Database{

  private $db_name;
  private $db_user;
  private $db_pass;
  private $db_host;
  private $pdo;

  public function __construct($db_name = 'drinkit', $db_user = 'root', $db_pass = '', $db_host = 'localhost')
  {
    $this->db_name = $db_name;
    $this->db_user = $db_user;
    $this->db_pass = $db_pass;
    $this->db_host = $db_pass;
  }

  private function getPDO()
  {

    if($this->pdo == null)
    {
      if($_SERVER['SERVER_NAME'] =='localhost'){

        $pdo = new PDO('mysql:host=localhost;dbname=drinkit;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
      }else{
        $pdo = new PDO('mysql:host=microvelcmroot.mysql.db;dbname=microvelcmroot;charset=utf8', 'microvelcmroot', 'sT100573');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
      }
    }else{
		var_dump('erreur lors de la connexion à la base de données');
	}
    return $this->pdo;
  }

  public function query($data)
  {
    $req = $this->getPDO()->query($data);
    $datas = $req->fetchAll(PDO::FETCH_OBJ);
    return $datas;
  }


  public function prepare($data)
  {
    $req = $this->getPDO()->prepare($data);
    return $req;
  }

}
