<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=mysqli_real_escape_string($db,$_POST['username']);
$mypassword=mysqli_real_escape_string($db,$_POST['password']);
$passwordSecure=md5($mypassword);
$sql="SELECT id FROM admin WHERE username='$myusername' and passcode='$passwordSecure'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$active=$row['active'];
$count=mysqli_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
session_register("myusername");
$_SESSION['login_user']=$myusername;

header("location: welcome.php");
}
else
{
$error="Your Login Name or Password is invalid";
}
}
?>
<style media="screen">
  form {
    border: 2px dashed grey;
    padding: 10px;
    text-align: center;
    margin-top: 20px;
    width: 50%;
    margin-right: 20%;
    margin-left: 30%;
    margin-top: 20%;
    font-size: 50px;
    background-color: rgba(209, 157, 88, 0.48);
  }
  input {
    width: 70%;
    height: 10%;
  }
  .button {
    width: 70%;
    height: 10%;
    margin: 10px;
    background-color: rgb(97, 191, 166);
    font-size: 30px;
  }
</style>
<form class="form" action="" method="post">
<label>UserName :</label>
<input type="text" name="username"/><br />
<label>Password :</label>
<input type="password" name="password"/><br/>
<input class="button" type="submit" value=" Submit "/><br />
</form>
