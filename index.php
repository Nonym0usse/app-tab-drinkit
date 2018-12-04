<?php
# @Author: CYRIL VELLA
# @Date:   2018-11-17T15:24:44+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-11-17T15:41:33+01:00
# @Copyright: Drink-It


session_start();
//-- configuration et parametres du site
require_once 'lib/Site.php';
$oSite = new Site();

require_once 'lib/lang.php';
require_once 'config.php';

require_once 'views/base_html.php';
?>
