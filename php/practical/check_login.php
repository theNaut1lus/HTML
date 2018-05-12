<?php
$host="localhost"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="test"; // Table name
// Connect to server and select database.

function mysqli_result($res,$row=0,$col=0){
$numrows = mysqli_num_rows($res);
if ($numrows && $row <= ($numrows-1) && $row >=0){
    mysqli_data_seek($res,$row);
    $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
    if (isset($resrow[$col])){
        return $resrow[$col];
    }
}
return false;
}

$con=mysqli_connect("$host", "$username", "$password")or
die("cannot connect");
mysqli_select_db($con,"$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($con, $myusername);
$mypassword = mysqli_real_escape_string($con, $mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and
password='$mypassword'";

mysqli_query($con,$sql);

$count=mysqli_num_rows(mysqli_result($sql));

if($count==1){
session_register("myusername");
session_register("mypassword");
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>
