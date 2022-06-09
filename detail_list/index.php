<?php

require('../liste_stagiaires.php');
$id = null; //prix l'index et la mettre en query param qui s'appelle id
$stagiaires = null; //recupere le stagiares qui correspond 

if (isset($_GET['id'])){ //si id existe dans get on le prend et on le met dans $id
    $id= $_GET['id'];
    //transforme en number 
    if (isset($stagiaires[$id])){ //si il exiqte un stagiaire avec un id
        $stagiaires = $stagiaires[$id];//on reucpeere le stagiaire dans ce cas la et on met das $id
    }

}
require('afficher.php');

?>