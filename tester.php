<?php
include_once("genderdao.php");
echo ("testing gender");
echo ("<br><br>");

$gender=GenderDao::getById(1);
echo (json_encode($gender));
echo ("<br><br>");


$genders= GenderDao::getAll();
echo (json_encode($genders));
echo ("<hr>");

//-----------------------------------------------------------------

include_once("employeedao.php");
echo ("testing employee");

echo ("<br><br>");

$employee=EmployeeDao::getById(2);
echo (json_encode($employee));
echo ("<br><br>");

$employees= EmployeeDao::getAll();
echo (json_encode($employees));

?>
