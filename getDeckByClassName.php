
<html>

<head>
<title>
    Page 4
</title>
    <meta charset="utf-8">
    <!-- bootstrappy things -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">

    <script href="js/bootstrap.js" type="text/javascript"></script>
    <script href="js/jquery-1.6.1.min.js" type="text/javascript"></script>
    
    <style>
   
    body
        {
            background:#33b5e5;
        }
    
    </style>

    
</head>

<body align="center">

    <h1> Page 4 of Alfred, Doug, and Johnny's Hearthstone DB </h1>
    
    <h3> The Result of the Class Cards you requested! </h3>

  <div align="center" style="border:1px solid red">


<?php 


$getClassName = $_GET["inputOne"];

// Connect to the mySQL database
// need to change the dbname, user and password
// code selects all tuples from persons table

// Create connection
$con = mysqli_connect("dbdev.cs.kent.edu","dcallah5","810557586","dcallah5");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
  {
  echo "mySQL status: Connected to Database <br /> <br />";
  }


//select all data from persons table
$result = mysqli_query($con, " SELECT Card.CardName, Card.Type, Card.HitPoints, Card.Attack, Card.ManaCost, Card.Effect,
 Card.CardClass, Card.Rarity FROM Card
WHERE Card.CardClass = '$getClassName' ;");
	
echo "<table border='1'>
  <tr>
  <th>CardName</th>
  <th>Type</th>
  <th>HitPoints</th>
  <th>Attack</th>
  <th>ManaCost</th>
  <th>Effect</th> 
  <th>CardClass</th>
  <th>Rarity</th>
  </tr>";


while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['CardName'] . "</td>";
  echo "<td>" . $row['Type'] . "</td>";
  echo "<td>" . $row['HitPoints'] . "</td>";
  echo "<td>" . $row['Attack'] . "</td>";
  echo "<td>" . $row['ManaCost'] . "</td>";
  echo "<td>" . $row['Effect'] . "</td>";
  echo "<td>" . $row['CardClass'] . "</td>";
  echo "<td>" . $row['Rarity'] . "</td>";
  echo "</tr>";
  }
echo "</table>";


?>


<br />
<br />

<a href="index.html"> Return to Main Menu</a>
<a href="page3.html"> GO TO THE PREVIOUS PAGE! </a>



</div>
</body>
</html>