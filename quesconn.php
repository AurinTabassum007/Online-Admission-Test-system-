<html>

<head>
     <style>
	 
      body  {
   background-image: url("b.jpg");
    background-color: #cccccc
	color : white;
}
    
    </style>
    
</head>

<body style = 'margin-left:100px' style = "color : white"> 

  
   <?php 
    include("dbconn.php");
   $one=$two=$three=$four=$five=$six=$seven=$eight=$nine=$ten="";
   $count=0;
    $one= $_POST["one"];
	$two= $_POST["two"];  
	$three= $_POST["three"]; 
	$four= $_POST["four"]; 
	$five= $_POST["five"]; 
	$six= $_POST["six"]; 
	$seven= $_POST["seven"];
	$nine= $_POST["nine"]; 
	$eight= $_POST["eight"]; 
	$ten= $_POST["ten"];
    $email=$_POST["email"];
	
	echo "<p><font size = '6pt'><b> -RESULT SCRIPT- </b></font></p><br>";
	
	echo "<p> <font size '4pt' ><strong> YOUR CORRECTLY ANSWERED QUESTIONS ARE : </strong></font></p>";
    
 if($one=="4") {
     $count++;
     echo "1 ";
     
 }    
 if($two=="NaCl"){
     $count++;
     echo "2 ";
 }
 if($three=="Uranium"){
     $count++;
     echo "3 ";
 }
 if($four=="Distance"){
     $count++;
     echo "4 ";
 }
 if($five=="A comet"){
     $count++;
     echo "5 ";
 }
 if($six=="2"){
     $count++;
     echo "6 ";
 }
 if($seven=="13"){
     $count++;
     echo "7 ";
 }
 if($eight=="Cell"){
     $count++;
     echo "8 ";
 }
 if($nine=="Sophia"){
     $count++;
     echo "9 ";
 }
 if($ten=="Cricket"){
     $count++;
     echo "10";
 }
echo "<br>";
echo "<br>";
    echo "<strong> YOUR ANSWERS ARE :</strong>";
    echo "<br>";
    echo "<br>";
        
	echo $one;
    echo "<br>";
    
    echo $two;
    echo "<br>";
    
    echo $three;
    echo "<br>";
 
    
    echo $four;
    echo "<br>";
 
    
    
    echo $five;
    echo "<br>";
    
    echo $six;
    echo "<br>";
    
    
    echo $seven;
    echo "<br>";
 
    
    echo $eight;
    echo "<br>";
    
    
    echo $nine;
   
    echo "<br>";
    
    echo $ten;
    echo "<br>";
	echo "<br>";
  
    
	echo "<strong> YOU CORRECTLY ANSWERED : ".$count. " QUESTIONS</strong><br>";
    echo "<br>";
    echo "<br>";
	
	if ($count>4){
	echo "<strong><font color = green size = '5pt'>CONGRATULATIONS!!! YOU ARE QUALIFIED FOR THE PROGRAM!</font></strong>";
} else {
	echo "<strong><font color = red size = '5pt'> SORRY! YOU FAILED THE TEST!!</font></strong>";
}

	echo "<br>";
	echo "<br>";
	echo "<br>";
	
    
    $sql = "INSERT INTO mark (qus1,qus2,qus3,qus4,qus5,qus6,qus7,qus8,qus9,qus10,count,email)
        VALUES ('$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten','$count','$email')";
		
if (mysqli_query($conn, $sql)) {
    echo "<p>New record created successfully</p>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    ?>
	<br>


</body>
</html>