<?php

class CommonDao{

   public static function getConnection(){
        $servername="localhost";
        $username="root";
        $password="kawshan6358";
        $database="earth1";

        $dbconn=new mysqli($servername,$username,$password,$database);
            if (!$dbconn){
                die("connection error".$dbconn->connect_error);
            }
            return $dbconn;
        }
}


?>
