<!-- <?php
// session_start();
// echo isset($_SESSION['login']);
// if(isset($_SESSION['login'])) {
  // header('LOCATION:main.php'); die();
// }
// ?> -->

<!DOCTYPE html>
<html>
<head>
 <meta http-equiv='content-type' content='text/html;charset=utf-8' />
 <title>Login</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <style media="screen">
   .container {
     border: 2px dashed orangered;
     padding: 20px;
     text-align: center;
     width: 50%;
     margin-left: : 40%;
     margin-top: 15%;
   }
 </style>
</head>
<body>
<div class="container jumbotron">
<h2 class="text-center alert alert-danger">LOGIN</h2>


<?php
  if(isset($_POST['submit'])){
    $username = $_POST['username']; $password = $_POST['password'];
    if($username === 'admin' && $password === 'password'){
      $_SESSION['login'] = true; header('LOCATION:admin.php'); die();
    }
    if($username === 'user' && $password === 'password'){
      $_SESSION['login'] = true; header('LOCATION:user.php'); die();
    }
    {
      echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
    }

  }
?>

<form action="" method="post">
  <div class="form-group">
    <label for="username"><strong>Username:</strong></label>
    <input type="text" class="form-control" style="width=30px;" id="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="pwd"><strong>Password:</strong></label>
    <input type="password" style="width=30px;" class="form-control" id="pwd" name="password" required>
  </div>
  <button class="btn btn-warning btn-sm"type="submit" name="submit" class="btn btn-default">Login</button>
</form>
</div>
</body>
</html>
