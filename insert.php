<?php

require_once("connection\connect.php");


if(isset($_POST['submit']))
{
   if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']))
   {
        echo 'Please Fill in the Blank' ;
   }
   else
   {
      $UserName=$_POST['name'];
      $UserEmail=$_POST['email'];
      $UserPassword=$_POST['password'];

      $query="INSERT INTO data (Name,Email,Password) VALUES('$UserName','$UserEmail','$UserPassword')";
      $result=mysqli_query($con,$query);

      if($result)
      {
          header("location:form2.php");
      }
      else{
          echo ('Please Check Your Query ');
      }
   }
}
else
{
    header("location:login.php");
}







?>