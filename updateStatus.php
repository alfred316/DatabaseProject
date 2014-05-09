
<html>

<head>
<title>
    Page 8
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

    <h1> Page 8 of Alfred, Doug, and Johnny's Hearthstone DB </h1>
    
    <h3> Result of updating the match status </h3>

  <div align="center" style="border:1px solid red">


<?php 


$getPlayerName = $_POST["yourName"];
$getStatus = $_POST["matchStatus"];

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
$result = mysqli_query($con, "UPDATE dcallah5.Match SET Status = '$getStatus'
  WHERE Player = '$getPlayerName' ;");

echo "Match status updated";
	

?>


<br />
<br />

<a href="index.html"> Return to Main Menu</a>
<a href="page7.html"> GO TO THE PREVIOUS PAGE! </a>



</div>
</body>
</html>