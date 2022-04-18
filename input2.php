<?php





require("connection\db.php");
$con = Createdb();

if(isset($_POST['read'])){
  
    getData();
 }
 
 
 //get data
 function getData(){
    $sql="SELECT * FROM userform";
 
   $result=mysqli_query($GLOBALS['con'],$sql);
 
   if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){
         echo "Name:".$row['name_list']."-Department:".$row['department']."-Email:".$row['email']."-Contact:".$row['contact']."-About:".$row['about']."Autobiography:".$row['autobiography'];
      }
   }
 }
 







?>