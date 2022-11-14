<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cargar datos del contribuyente</title>
</head>

<body>

<?php
$servername = "localhost";
$database = "basemuni";
$username = "root";
$password = "123456";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
//echo "Connected successfully";
/*******************************************/
$nombre=$_REQUEST['name'];
$correo=$_REQUEST['email'];
$tema=$_REQUEST['subject'];
$mensaje=$_REQUEST['message'];

$insertar = "INSERT INTO sugerencias (idsugerencias,nombre,correo,tema,mensaje,fecha,hora) VALUES(null,'$nombre','$correo','$tema','$mensaje',curdate(),curtime())";

if (mysqli_query($conn, $insertar)) {
      //echo "New record created successfully";
} else {
      echo "Error: " . $insertar . "<br>" . mysqli_error($conn);
}
//mysqli_close($conn);
?>

</body>
</html>