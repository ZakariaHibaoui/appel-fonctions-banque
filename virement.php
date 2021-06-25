<?php
include "../dao/Comptesql.inc";
$a  = $_POST['numero'];
$b  = $_POST['valeur'];



virement($a, $b);

?>