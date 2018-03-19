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
    height: 450px;
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
            
        </ul>
    </nav>
<form method="POST" action="add.php">
	<table>
		<tr><td>Flight name</td><td><input type="text" name="name" ></td>
      <td>Seat Capacity</td><td><input type="text" name="seats" ></td></tr>
		<tr><td>Departure city</td><td><input type="text" name="dcity" ></td>
		<td>Arrival city</td><td><input type="text" name="acity" ></td></tr>
		<tr><td>Departure date</td><td><input type="text" name="date1" ></td>
		<td>Arrival date</td><td><input type="text" name="date2" ></td><td>(yyyy-mm-dd)</td></tr>
		<tr><td>Departure Time</td><td><input type="text" name="time" ></td>
		<td>Duration</td><td><input type="text" name="duration" ></td></tr>
    <tr><td>Cost</td><td><input type="text" name="cost" ></td></tr>
		
		<tr><td><input type="submit" name="add" value="submit" style="background: #AD0000; color: white;">

	</table>


</form>
</body>
</html>