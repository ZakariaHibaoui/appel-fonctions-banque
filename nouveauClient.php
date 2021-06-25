<?php


include "../dao/Clientsql.inc";
include "../dao/Comptesql.inc";


$a = $_POST['nom'];
$b = $_POST['prenom'];
$c = $_POST['address'];
$d = $_POST['numero'];
$e = $_POST['montant'];
$f = $_POST['cin'];






nouveauClient($a,$b,$c,$d,$e,$f);


?>