<?php
include_once ("db.php");
include_once("employee.php");
include_once("genderdao.php");

class EmployeeDao{
    static function getById($id){

    $employee=new Employee();

    $query="select * from employee where id=$id";
    $dbconn=CommonDao::getConnection();
    $result=$dbconn->query($query);
    $row=$result->fetch_assoc();

    $employee->setId($row['id']);
    $employee->setName($row['name']);
    $employee->setAge($row['age']);
    $gender=GenderDao::getById($row['gender_id']);
    $employee->setGender($gender);

    return $employee;

    }
    static function getAll(){

        $employees=array();

        $query="select * from employee";
        $dbconn=CommonDao::getConnection();
        $result=$dbconn->query($query);

        while ($row=$result->fetch_assoc()){
            $employee=new Employee();

            $employee->setId($row['id']);
            $employee->setName($row['name']);
            $employee->setAge($row['age']);
            $gender=GenderDao::getById($row['gender_id']);
            $employee->setGender($gender);

            array_push($employees,$employee);
        }
        return $employees;
    }
}

?>
