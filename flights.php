<!doctype html>

<head>
<title>Current flights</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<style type="text/css">
		table{
			border: 
			2px solid red;
			background-color: #FFC; 
		}
		th {
			border-bottom: 5px solid #000;
		}
		td{
			border-bottom: 2px soli##666;
		}

	
	

<style type="text/css">
    body{
    background: lavender;
  }

  form{
    margin-top: 7%;
    width:20%;
    height: 150px;
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
    height: 40em;
  }

  .div_f{
    margin-top: 10%;
    background-color: white;
    border-style: solid;
    border-radius: 20px;
    border-width: 5px;
    width: 30em;
    height: 20em;
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
          <li class="start selected"><a href="index.html">Home</a></li>
            <!--<li class=""><a href="#">Book Flight</a></li>
            <li><a href="#">Cancel Flight</a></li>-->
            <li><a href="flights.php">Search Flight</a></li>
            <li class="end"><a href="contact.html">Contact Us</a></li>
        </ul>
    </nav>

 
	<title>Displaying data</title>
	
<body>
<?php
include('connect.php');
mysqli_select_db($con,"test");
$sql=mysqli_query($con, "SELECT * FROM fly")or die('failed to retrieve data');

echo "<table>";
echo "<tr><th>Number</th><th>Flight name</th><th>Depature city</th><th>arrival city</th><th>departure date</th><th>arrival date</th><th>departure time</th><th>price (Ksh</th><th>Duration</th><th>Free Seats</th></tr>";


while($row=mysqli_fetch_assoc($sql))
{
	echo "<tr><td>{$row['id']}</td><td>{$row['flight_name']}</td><td>{$row['departure_city']}</td><td>{$row['arrival_city']}</td><td>{$row['departure_date']}</td><td>{$row['arrival_date']}</td><td>{$row['departure_time']}</td><td>{$row['price']}</td><td>{$row['duration']}</td><td>{$row['free_seats']}</td></tr>";
}

echo "</table>"





?>
</body>
</html>