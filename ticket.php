<!doctype html>


<head>
<title>Scorpion Airlines</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<style type="text/css">
    body{
    background: lavender;
  }

  form{
    margin-top: 7%;
    width:20%;
    height: 300px;
    padding-top: 1%;
    padding-bottom:9%;
  }
  .input{
  width:70%;

  }
  #input{
    background: #AD0000;
    color: white;
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
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/06D32C92-67AB-7641-91C9-5A8A624DFFD3/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/F5DB006D-7254-3B4D-8603-E8CBF3CF95DA/abn/main.css"/></head>

<body>


<div id="content10" class="div">
    <header>
    	<h1><a href="index.html">Scorpion<span> Airlines</span></a></h1>
        <h2><font size="4">Online Flight Booking System</font></h2>
    </header>
    <nav>
    	<ul>
        	  <li class="start selected"><a href="index_verify.html">Home</a></li>
            <li class=""><a href="book.php">Book Flight</a></li>
            <li><a href="cancel.php">Cancel Flight</a></li>
            <li><a href="search.html">Search Flight</a></li>
            <li class="end"><a href="contact_verify.html">Contact Us</a></li>
        </ul>
    </nav>
  
<?php
$con=mysqli_connect("localhost","root","","test");
session_start();
$x=$_SESSION['var2'];

echo $x."<br> ";
$randomNo='';
	for($i=0; $i<10; $i++)
	{

		$randomNo.= mt_rand(0,9);
	}
	
	$y=$_SESSION['var1'];
	$sits=mysqli_query($con, "SELECT free_seats FROM fly WHERE flight_name='$y'");

	echo("<table border='1' style='background:burlywood; margin:5px;'>");
	echo "<tr><td>Passenger name</td><td>" .$x."</td></tr>";
	echo "<tr><td>Your ticket number is</td><td>" .$y. $randomNo .$x ."</td></tr>";
	echo "<tr><td>Your flight name is</td><td>" .$y.  "</td></tr>" ;
	echo "<tr><td>Seat number</td><td>";
	if(!$sits)
{
  echo "no. of seats not obtained";
}

while($seats=mysqli_fetch_assoc($sits))
{
  echo "{$seats['free_seats']}";
}  

echo "</td></tr>";           
	echo "<tr><td><a href='#' download>Download Ticket</a></td></tr>";
	echo "</table";
	$y=$_SESSION['var1'];
	echo " FLIGHT NAME".$y. "<br>";

  







?>
</body>
</html>