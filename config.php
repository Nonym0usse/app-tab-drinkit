<?php
# @Author: CYRIL VELLA
# @Date:   2018-05-13T13:49:59+02:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-11-17T15:58:48+01:00




//-- nom du dossier
$dossier_name = 'drinkit';

//-- domaine
if($_SERVER['SERVER_NAME']=='localhost'){
  define('NDD_PATH',"http://localhost/".$dossier_name);
  error_reporting(0);
}else{
  define("NDD_PATH", "https://www.microvella.com"); //url du site public
}


$conf['recaptcha'] = "6LeCDVIUAAAAAP86GJ95Z-0OY8CeUaG-oEeIpYcF";
$conf['recaptcha_secret'] = "6LfGC04UAAAAABRTtED65GNMmr2_ZyDpr_3L5k-N";


?>
