
<?php

require_once("connection\db.php");

Createdb();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form2.css">

    <title>form</title>
</head>
<body>
    
<div class="container" >
      
      <h2>Fill the form</h2>
      <div class="form ">
        <form action="input.php" method="post" class="col  ">
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label" ></label>
            <div class="col-sm-10">
              <input type="text" class="form-control card" id="inputEmail3" placeholder="Name" name="name" >
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label" ></label>
            <div class="col-sm-10">
              <input type="text" class="form-control card" id="inputEmail3" placeholder="Department" name="department" >
            </div>
          </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label" ></label>
              <div class="col-sm-10">
                <input type="Email" class="form-control card" id="inputEmail3" placeholder="Email" name="email" >
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label" ></label>
              <div class="col-sm-10">
                <input type="number" class="form-control card" id="inputPassword3" placeholder="Contact" name="contact" >
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label" ></label>
              <div class="col-sm-10">
                <input type="text" class="form-control card" id="inputPassword3" placeholder="About" name="about" >
              </div>
            </div>

            <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label" ></label></label>
              <textarea class="form-control textarea " id="exampleFormControlTextarea1" placeholder="Autobiography" rows="3" name="autobiography"></textarea>
           </div><br>
           <div class="btn-group">
            <button type="submit" style=" border-radius:20px;" class="btn btn-outline-success" name="submit1">Save</button>
            <button type="submit" style=" border-radius:20px;" class="btn btn-outline-danger" name="delete">Del</button>
            <button type="submit" style=" border-radius:20px;" class="btn btn-outline-primary" name="edit">Edit</button>
         






            </div>
          </form>
        </div>
    </div>


</body>
</html>