<!DOCTYPE html>
<html>
<head>
<?php include("dbconn.php"); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
    
    body  {
    background-image: url("e.jpg");
    background-color: powderblue;
	
}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: powderblue;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;

}

.input-field:focus {
    border: 2px solid dodgerblue;
}

.btn {
    background-color: powderblue;
    color: black;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
	  text-align: center;
}

.btn:hover {
    opacity: 1;
}
</style>
</head>
<body>

<form action="LC&H.php" method="post" style="max-width:500px;margin:auto">
  <h2>Login Form</h2>
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="uname">
  </div>
  
  <div class="input-container"> 
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pass">
  </div>
  
 <input type="Submit" class="btn">
    <a href="registration.php"><p class="btn">REGISTRATION</p></a>
	
            <a href="ask1.php"><p class = "btn"> RESULT</p></a>
</form>

</body>
</html>
