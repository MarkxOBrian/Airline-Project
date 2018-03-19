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
            <li class=""><a href="search.html">Book Flight</a></li>
            <li><a href="cancel.php">Cancel Flight</a></li>
            <li><a href="search.html">Search Flight</a></li>
            <li class="end"><a href="contact_verify.html">Contact Us</a></li>
            <li class=""><a href="logout.php">Logout</a></li>
        </ul>
    </nav>


    <div id="body">
  

		<?php
	
	session_start();
	@$y=$_SESSION['var1'];
	echo " The flight name is: ".$y.","." ";
	
	@$z=$_SESSION['var2'];
	echo "Your name is: ".$z;

	?>
<form method="POST" action="revoke.php">
<p >Enter your name and flight name that appear in your ticket number in the fields below</p>
	<table style="background: burlywood;" width="70%" height="300px">

	
		<tr><td >Your name</td><td><input type="text" name="nam" size="40" value="<?php
	
	
	@$y=$_SESSION['var1'];
	
	
	@$z=$_SESSION['var2'];
	echo $z;

	?>"></td></tr>
		<tr><td >flight name</td><td><input type="text" name="nam2" size="40" value="<?php
			echo $y;
			?>"></td></tr>
		<tr><td><input type="submit" name="cancellation" value="Cancel"style="color: white; background:#AD0000;"></td></tr>

	</table>

</form>
</div>
</body>
</html>