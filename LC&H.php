<html>
   <head>
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
    <style>
body  {
    background-image: url("ed.jpg");
    background-color: #cccccc;
	margin: 17%;
}
        
table {
    font-family: arial, sans-serif;
    width: 50%;
    margin-left:auto; 
    margin-right:auto;
    margin-top:150px; 
}

td, th {
    border: 1px solid black;
    text-align: center;
    padding: 15px;
}

tr{
    background-color: #dddddd;
}

    </style>
</head>
<body>
      <div class="menu">
        <ul>
            <li><a href="index.php"><h1>Home</h1></a></li>
			
            <li><a href="ask.php"><h1>QUESTION</h1></a></li>
			
        </ul>
    </div>
<?php
include("dbconn.php");

   /* $name= $_POST["name"];
    $pass= $_POST["pass"];*/
	
	
    $sql = "SELECT * FROM info
WHERE password ='$pass'; ";
	
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
       header("Location: question.php");
        echo "<table>";
            echo "<tr>";
                echo "<th>ID </th>";
                echo "<th>name</th>";
                echo "<th>email</th>";
                echo "<th>address </th>";
                echo "<th>birth </th>";
                echo "<th>gender </th>";
                echo "<th>course </th>";
            echo "</tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['birth'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['course'] . "</td>";
            echo "</tr>";
    }
        echo "</table>";
    }
 /* else {
    header("Location: index.php");
}
*/
?>
    </body>
</html>