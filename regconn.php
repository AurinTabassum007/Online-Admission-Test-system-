<html>
<body>
<?php

include("dbconn.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["address"])) {
    $address = "input atleast 10 characters long";
  } else {
    $address = test_input($_POST["address"]);
  }

  $bit= explode("-",$_POST["birth"]); 
  
  $year = date("Y")-$bit[0];
  $month= date("m")- $bit[1];
  if($month<0){
    $year--;
  }

  if (empty($_POST["birth"])) {
    $birthErr = "follow the given input";
  }  
  else if($year <19)
{
    $birthErr = "your age should be greater then 18";
  }
   else {
    $birth = test_input($_POST["birth"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  if (empty($_POST["course"])) {
    $courseErr = "Course is required";
  } else {
    $course = test_input($_POST["course"]);
  }

  $sql = "INSERT INTO info (name,  password,  email, address, birth, gender,  course)
        VALUES ('$name', '$pass',  '$email', '$address', '$year', '$gender',  '$course')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("Location: LC&H.php");

	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

        mysqli_close($conn);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

</body>
</html>