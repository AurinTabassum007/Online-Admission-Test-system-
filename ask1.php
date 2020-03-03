<html>
<head>
     <style>
     form {
    font-family: arial, sans-serif;
    width: 50%;
    margin-left:45%; 
    margin-top:50px; 
}
      body  {
    background-image: url("e.jpg");
    background-color: #cccccc;
}
    
    </style>
    
</head>
<body>
  
  <form method="post" action="" >
<!- from validation ->
<label> <p style="color:white;"><b>INPUT YOUR EMAIL : </b></p></label>
   <input  type="email" name="email" title="input your email" required>
  <br>
  
<label> <p style="color:white;"><b> PASSWORD : </b></p></label>

   <input  type="password" name="pass" title="input your password" required>
   <br><br>
  <input type="submit" name="submit" value="Submit">  <br>
</form>
  <br>
   <?php 
    include("dbconn.php");
    
    if(isset($_POST['email']))
        { 
            $input = $_POST['email'];
            $input2 = $_POST['pass'];
			
            $sql1 = "SELECT * FROM info
                WHERE email= '$input' and password = '$input2'; ";
            $sql2 = "SELECT * FROM mark
                WHERE email= '$input'; ";
    
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
	
        if(mysqli_num_rows($result1) > 0 && mysqli_num_rows($result2) > 0){
		
			$sql = "SELECT * FROM mark
            WHERE email= '$input' ; ";
	   
   $retval = mysqli_query( $conn, $sql );
   
   while($row = mysqli_fetch_array($retval)) {
      echo
         "<p align = 'center'><font size = '5pt' color = white>Email : {$row['email']} </font></p><br> ".
         "<p align = 'center'><font size = '5pt' color = white>Mark : {$row['count']} </font></p><br>".
         "<p align = 'center'><font size = '5pt' color = white>------------------------------------------------</font></p>";
		 
		  if ($row['count']>4){
	echo "<p align = 'center'><strong><font color = Green size = '5pt'>CONGRATULATIONS!!! YOU ARE QUALIFIED FOR THE PROGRAM!</font></strong></p>";
             } 
          else {
	echo "<p align = 'center'><strong><font color = red size = '5pt'> SORRY! YOU HAVE FAILED THE TEST!!</font></strong></p>";
               }
		 
   }			
			
   
   mysqli_close($conn);
		}

       else{
         echo "<p align = 'center'> <font color = white size = '5pt'> YOU DID NOT GIVE THE EXAM OR WRONG EMAIL! </font> </p>";

		}
		}
?>
    </body>
</html>