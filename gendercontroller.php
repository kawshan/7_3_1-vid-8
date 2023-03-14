<?php
include_once("genderdao.php");

$genders= GenderDao::getAll();
echo (json_encode($genders));




?>
