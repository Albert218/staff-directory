<?php

require_once("input.php");
require_once("connection\db.php");

Createdb();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="show.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Staff</title>
</head>
<body>
    <div class="container">
        <h1><i class="fa fa-book"></i>
            Staff List</h1>
    </div>


<div class="pt-2">
<div class="d-flex table-data">
    <table class="table table-striped table-dark">
        <thead class="thead-dark">
            <tr>
             <th>Name</th>
             <th>Department</th>
             <th>Email</th>
             <th>Contact</th>
             <th>About</th>
             <th>Autobiography</th>
            </tr>
        </thead>
 <tbody id="tbody">
    <tr>
        <td>Albert</td>
        <td>Computer</td>
        <td>essilfiealbert71@gmail.com</td>
        <td>0542370880</td>
        <td>Yeah i made it</td>
        <td>Got nothing to say</td>
    </tr>
 </tbody>
    </table>

    
</div>
<div class="buttons ">
    <form action="" method="post">
   <button type="button" class="btn btn-success "><i class="fa fa-plus-circle" aria-hidden="true"></i>
</button>
<button type="submit" class="btn btn-danger" name="read" ><i class="fa fa-refresh" aria-hidden="true"></i>
</button>
<button type="button" class="btn btn-warning"><i class="fa fa-pencil-square" aria-hidden="true"></i>
</button>
<button type="button" class="btn btn-info"><i class="fa fa-trash" aria-hidden="true"></i>
</button>
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>