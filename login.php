<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>login</title>
</head>
<body>
    <div class="container">
      
      <h2>Login to update profile</h2>
      <div class="form">
        <form action="insert.php" method="post">
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
              <input type="ID" class="form-control" id="inputEmail3" name="ID" >
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="Name" class="form-control" id="inputEmail3" name="name" >
            </div>
          </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="Email" class="form-control" id="inputEmail3" name="email" >
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="Password" class="form-control" id="inputPassword3" name="password" >
              </div>
            </div>
           
            <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
          </form>
        </div>
    </div>
</body>
</html>