<html>


<style>
    body  {
    background-image: url("e.jpg");
    background-color: powderblue;
	
}
.error{color:#C70039;}

.container {
	
    border-radius: 5px;
    background-color:powderblue;
    border: 1px solid black;
	
}

input[type=text], select, textarea {
    width: 50%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
	float: center;
}

input[type=password]{
    width: 50%;
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
	float: center;
}
input[type=email]{
    width: 50%;
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
	float: center;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: center;
}

input[type=date]{
    width: 50%;
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 4px;
	float: center;
}

</style>


<body style = "margin : 3%">

<?php 
$nameErr = $passErr= $emailErr =$addressErr = $birthErr= $genderErr =$courseErr= "";
$name = $pass= $email = $address= $birth= $gender= $course = ""; 
?>


<h2>Assignment-01, PHP Form Validation Example</h2>



<div class="container">

<form method="post" action="regconn.php" style = "margin : 3%">



<h2> Please fill in the form below </h2>
<br>

  <b> Name: </b> <br ><input type="text" name="name" required> 
  
  
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  
  <!- uppercase, a lowercase, a number, and a special character, Minimum length 6. ->
  
  <b>Password: </b> <br ><input type="password" name="pass"
  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
  
  <!- used regular expression to check email ->
  
 <b> E-mail: </b><br ><input type="email" name="email" required>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  <!- Address in text area and at least 10 characters long ->
  
  <b>Address: </b><br ><textarea name="address" rows="5" cols="40"  ></textarea>
  <span class="error">*<?php echo $addressErr;?></span>
  <br><br>
  
  <!- 8.	Age at least 18 to register in the website ->
  
  <b>Date of birth: </b> <br ><input type="date" name="birth" value="1999-01-01" required>
  <span class="error">* <?php echo $birthErr;?></span>
  <br><br>
  
  <!- input gender ->
  
  <b>Gender: </b><br >
  <input type="radio" name="gender" value="female" required>Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br >
  
  <!- selected course number->
  
 <b> Admission for :</b> <br ><select name="course" required>
    <option value="CSE">CSE</option>
    <option value="EEE">EEE</option>
    <option value="ECE">ECE</option>
    <option value="ICE">ICE</option>
  </select> 
  <span class="error">* <?php echo $courseErr;?></span>
  <p><span class="error">* required field</span></p>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
  
  
</form>
</div>
</body>
</html>