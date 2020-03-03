<html>
<body>

<?php 
    session_start();
    $sname=$pass="";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
</body>
</html>