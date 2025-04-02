<?php
class connect_db{
    public function connect(){
        $host = 'nm407797.mysql.tools';
        $user = 'nm407797_charlie';
        $pass = 'T3d22*&Vxg';
        $db = 'nm407797_charlie';
        $connection = mysqli_connect($host,$user,$pass,$db); 
        #print_r($connection);
        //exit();
        $connection->set_charset('utf8');
        #$connect->set_charset('utf8');
        return $connection;
     }
}