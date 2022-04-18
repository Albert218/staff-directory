<?php


require("connection\db.php");
$con = Createdb();




/*if(isset($_POST['submit1']))
{
   if(empty($_POST['name']) || empty($_POST['department']) || empty($_POST['email']) || empty($_POST['contact']) || empty($_POST['about']) || empty($_POST['autobiography']))
   {
        echo 'Please Fill in the Blank' ;
   }
   else
   {
      $Name=$_POST['name'];
      $UserDept=$_POST['department'];
      $Email=$_POST['email'];
      $Contact=$_POST['contact'];
      $About=$_POST['about'];
      $UserAuto=$_POST['autobiography'];

      $query="INSERT INTO  userform (name_list,department,email,contact,about,autobiography)VALUES('$Name','$UserDept','$Email','$Contact','$About','$UserAuto')";
      $result=mysqli_query($con,$query);

      if($result)
      {
        echo "saved";
          header("location:show.php");
      }
      else{
          echo ('Please Check Your Query ');
      }
   }
}
else
{

   
   header("location:input.php");
}

*/

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