<html>
<head>
     <style>
     form {
    font-family: arial, sans-serif;
    width: 50%;
    margin-left:45%; 
    margin-top:70px; 
	padding: 50px;
}
input[type=submit] {
    background-color: cccccc;
    color: black;
    padding: 15px 17px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: center;
}
      body  {
    background-image: url("mai.jpg");
    background-color: #cccccc;
}
    
    </style>
    
</head>
<body>
  
  <form method="post" action="" >
<!- from validation ->
<label> <h1 style="color:white;"><b>INPUT YOUR EMAIL : </b></h1></label>
   <input  type="email" name="email" title="input you email" required>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
  
   <?php 
    include("dbconn.php");
    
    if(isset($_POST['email']))
        { //check if form was submitted
            $input = $_POST['email']; //get input text
            $sql1 = "SELECT * FROM info
                WHERE email= '$input'; ";
            $sql2 = "SELECT * FROM mark
                WHERE email= '$input'; ";
    
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
        if (mysqli_num_rows($result1) > 0 && mysqli_num_rows($result2) == 0){
            header("Location: question.php");
        }
        else
         echo "<p> <font color = white size = '5pt'> YOU HAVE ALREADY GAVE THE EXAM OR WRONG EMAIL! </font> </p>";
        } 
?>
    </body>
</html>