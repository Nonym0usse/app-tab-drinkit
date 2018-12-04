<?php
# @Author: CYRIL VELLA
# @Date:   2018-05-19T08:53:40+02:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-11-17T15:42:20+01:00



if(empty($_SESSION['lang']))
{
  $_SESSION['lang'] = 'fr';
  $langue = $_SESSION['lang'];
}else{
  $langue = $_SESSION['lang'];
}

$trad['fr']['accueil'] = "Accueil";
$trad['fr']['chansons'] = "Chansons";
$trad['fr']['chansonschanter'] = "Chansons à chanter";
$trad['fr']['chansonsparoles'] = "Chansons sans paroles";
$trad['fr']['attente'] = "Attente téléphonique";
$trad['fr']['chansonseditorial'] = "Chansons éditoriales";
$trad['fr']['instrumentaux'] = "Instrumentaux";
$trad['fr']['oeuvres-original'] = "Oeuvres originales";
$trad['fr']['sonnerie'] = "Sonnerie téléphone";
$trad['fr']['virgule'] = "Virgule Sonore";
$trad['fr']['ambiance'] = "Ambiance sonore";
$trad['fr']['contact'] = "Contact";
$trad['fr']['cdc'] = "Coups de coeur";
$trad['fr']['footer1'] = "Musicien , compositeur , producteur et médecin";
$trad['fr']['footer2-1'] = "Nous contacter par e-mail";
$trad['fr']['footer2'] = "Contactez-nous";
$trad['fr']['footer3'] = "Découvrez nos oeuvres";
$trad['fr']['footer3-1'] = "sur notre site";
$trad['fr']['realisation'] = "site réalisé par ";
$trad['fr']['ecoute'] = "écoute(s)";
$trad['fr']['fermer'] = "Fermer";
$trad['fr']['nom'] = "Nom";
$trad['fr']['email'] = "e-mail";
$trad['fr']['tel'] = "téléphone";
$trad['fr']['sujet'] = "Sujet";

$trad['fr']['voir'] = "Voir les paroles";
$trad['fr']['morceau'] = "";
$trad['fr']['error-cdc'] = "<div class='alert alert-info'>Aucun coup de coeur pour aujourd'hui !</div>";
$trad['fr']['error-chansons'] = "<div class='alert alert-info'>Pas de chansons pour le moment...</div>";
$trad['fr']['notre-creatoke'] = "Ecouter notre creatoke";


//-- TRADUCTION ANGLAISE


$trad['en']['accueil'] = "Home";
$trad['en']['chansons'] = "Songs";
$trad['en']['chansonschanter'] = "Songs to sing";
$trad['en']['chansonsparoles'] = "Songs without lyrics";
$trad['en']['chansonseditorial'] = "Editorial songs";
$trad['en']['attente'] = "Telephone waiting";
$trad['en']['instrumentaux'] = "Instrumental";
$trad['en']['oeuvres-original'] = "Original works";
$trad['en']['sonnerie'] = "Ringtone phone";
$trad['en']['virgule'] = "Comma sound";
$trad['en']['ambiance'] = "Musical ambiance";
$trad['en']['contact'] = "Contact";
$trad['en']['cdc'] = "Heart stroke";
$trad['en']['footer1'] = "Musician, Producer, Composer";
$trad['en']['footer2-1'] = "Contact us by e-mail";
$trad['en']['footer2'] = "Contact us";
$trad['en']['footer3'] = "Discover our songs";
$trad['en']['footer3-1'] = "on our site";
$trad['en']['realisation'] = "site made by ";
$trad['en']['ecoute'] = "plays";
$trad['en']['voir'] = "See the lyrics";
$trad['en']['morceau'] = "";
$trad['en']['error-cdc'] = "<div class='alert alert-info'>No heart stroke for today !</div>";
$trad['en']['error-chansons'] = "<div class='alert alert-info'>No song for the moment</div>";
$trad['en']['fermer'] = "Close";
$trad['en']['nom'] = "Last Name";
$trad['en']['email'] = "E-MAIL";
$trad['en']['tel'] = "Phone";
$trad['en']['sujet'] = "Subject";
$trad['en']['notre-creatoke'] = "Listen our creatoke";


$GLOBALS['lang'] = $trad[$langue];

?>
