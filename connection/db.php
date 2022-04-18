<?php

function Createdb(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="User";

//create connection
   $con=mysqli_connect($servername,$username,$password);

//check connection
if(!$con){
    die("Connection Failed:".mysqli_connect_error());
}

//create Database
$sql="CREATE DATABASE IF NOT EXISTS $dbname";

if(mysqli_query($con,$sql)){
    $con=mysqli_connect($servername,$username,$password,$dbname);


 $sql=" CREATE TABLE IF NOT EXISTS userform(
        form_id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        name_list VARCHAR(80) NOT NULL ,
        department VARCHAR(80) NOT NULL,
        email VARCHAR(80) NOT NULL,
        contact INT(10) NOT NULL,
        about  VARCHAR(1000) NOT NULL,
        autobiography VARCHAR(180) NOT NULL

 )";
     if(mysqli_query($con,$sql)){
        return $con;
     }else{
         echo"Cannot Create table ";
     }

}else{
    echo"Error while creating database";
}

}

?>





