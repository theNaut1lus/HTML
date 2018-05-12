<html>
<head>
<title> Page 1 </title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<?php
include ("head.html");
?>
<!-- Table for Main Body -->
<table border="0" width="100%" cellspacing="0" cellpadding="2">
<tr>
<td valign="top" align="left" width="90">
<?php
include ("menu.html");
?>
</td>
<td width="1" bgcolor="lightskyblue" valign="top">  </td>
<td valign="top">

<?php
include ("page1body.html");
?>
<br> <br>
<?php
include ("menu.html");
?>
</td>
<td width="1" bgcolor="lightskyblue" valign="top">   </td>
</tr>
<tr>
<td>
  <?php
$servername = "localhost";
$username = "root";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
</td>
</tr></table>

</body></html>
