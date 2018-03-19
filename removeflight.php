<!doctype html>


<head>
<title>Scorpion Airlines</title>
<link rel="stylesheet" href="styles.css" type="text/css" />


<style type="text/css">
    body{
    background: lavender;
  }

  form{
    margin-top: 7%;
    width:20%;
    height: 600px;
    padding-top: 1%;
    padding-bottom:9%;
  }
  input{
  width:70%;

  }
  form{

    font-weight: bold;
    font-weight: "Times New Roman",serif;
    width:100%;
    background-color: white;

  }
  .div{
    margin-top: 10%;
    background-color: white;
    border-style: solid;
    border-radius: 20px;
    border-width: 5px;
    width: 30em;
  }
  #submit{
    color: red;
    border-style: solid 2px;
    border-radius: 2px;
    background-color: #000000;
    font-size: +1.5;
    width:100px;
    height: 30px;
  }

  </style>
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/06D32C92-67AB-7641-91C9-5A8A624DFFD3/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/F5DB006D-7254-3B4D-8603-E8CBF3CF95DA/abn/main.css"/>
</head>

<body>


<div id="content10" class="div">
    <header>
      <h1><a href="index.html">Scorpion<span> Airlines</span></a></h1>
        <h2><font size="4">Online Flight Booking System</font></h2>
    </header>
    <nav>
      <ul>
             <li class=""><a href="adminflights.php">Flights</a></li>
            <li class=""><a href="addUI.php">Add Flight</a></li>
             <li class="end"><a href="removeflight.php">Remove Flight</a></li>
             <li><a href="booked.php">Booked Flights</a></li>
            <li><a href="cancelled.php">Cancelled Flights</a></li>
            <li class=""><a href="logout.php">Logout</a></li>
            
        </ul>
    </nav>

</body>
</html>


<?php
include('connect.php');

mysqli_select_db($con,"test");

echo "This table contains a list of vailable flights, enter the flight name in the field below this table to remove a flight";
echo ". <br>";
echo ". <br>";
echo ". <br>";
$sql= "SELECT * FROM fly";
$result=mysqli_query($con,$sql) or die("Failed to retrieve data");
$returnedrows=mysqli_affected_rows($con);

echo "<table>";
echo "<tr><th>Number</th><th>Flight name</th><th>Depature city</th><th>arrival city</th><th>departure date</th><th>arrival date</th><th>departure time</th><th>price(ksh)</th><th>Duration</th></tr>";


while($row=mysqli_fetch_assoc($result))
{
  echo "<tr><td>{$row['id']}</td><td>{$row['flight_name']}</td><td>{$row['departure_city']}</td><td>{$row['arrival_city']}</td><td>{$row['departure_date']}</td><td>{$row['arrival_date']}</td><td>{$row['departure_time']}</td><td>{$row['price']}</td><td>{$row['duration']}</td>";
  

}
echo "</table>"




?>

<form method='POST' action='removeflight.php'>
<table>
<tr><td>Enter the name of the flight to be removed </td><tr>
<tr><td  ><input type='text' name='del' ></td></tr>
<tr><td ><input type='submit' name="remove" value="Remove" id="buttn" style="background:#AD0000; color: white;"></td></tr>
<?php
include('connect.php');

mysqli_select_db($con,"test");
if(isset($_POST['remove']))
{


  $del=$_POST['del'];
  $remove=mysqli_query($con, "DELETE FROM fly WHERE flight_name='$del'");
  if(!$remove)
  {
    echo "Error while removing flight";
  }
  else
  {
    echo "<p style='color:red;'>flight: " .$del. " has sucessfullt been removed </p>";
  }
}






?>
</table>
</form>
</body>
</html>
