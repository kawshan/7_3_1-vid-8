<?php
include_once("db.php");
include_once("gender.php");
class GenderDao{
    static function getById($id){

    $gender=new Gender();

    $query="select * from gender where id=$id";
    $dbconn=CommonDao::getConnection();
    $result=$dbconn->query($query);
    $row=$result->fetch_assoc();

    $gender->setId($row['id']);
    $gender->setName($row['name']);

    return $gender;

    }
    static function getAll(){

        $genders=array();

        $query="select * from gender";
        $dbconn=CommonDao::getConnection();
        $result=$dbconn->query($query);

        while ($row=$result->fetch_assoc()){
            $gender=new Gender();
            $gender->setId($row['id']);
            $gender->setName($row['name']);

            array_push($genders,$gender);
        }
        return $genders;
    }
}

?>
