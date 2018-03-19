<!doctype html>


<head>
<title>Airline Registration</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

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
  .div_f{
    margin-top: 10%;
    background-color: white;
    border-style: solid;
    border-radius: 20px;
    border-width: 5px;
    width: 30em;
    height: 22em;
  }

  .div{
    margin-top: 10%;
    background-color: white;
    border-style: solid;
    border-radius: 20px;
    border-width: 5px;
    width: 30em;
    height: 50em;
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
          <li class="start selected"><a href="index.html">Home</a></li>
            <!--<li class=""><a href="#">Book Flight</a></li>
            <li><a href="#">Cancel Flight</a></li>-->
            <li><a href="#">Search Flight</a></li>
            <li class="end"><a href="contact.html">Contact Us</a></li>
        </ul>
    </nav>

 
<?php

$con=mysqli_connect("localhost", "root", "", "users");

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$pass2=$_POST['pass2'];
$result= mysqli_query($con,"select * from customers where username='$username'");
$rows= mysqli_affected_rows($con);
$result2= mysqli_query($con,"select * from customers where email='$email'");
$row= mysqli_affected_rows($con);
if($password!=$pass2)
{

	echo "The passwords do not match. Please try again";
	echo  '<a href="register.html"> Ok</a>';
}


else if($rows>=1)
{
	echo "Username already exists.";
	echo  '<a href="register.html">Ok</a>';
}
else if($row>=1)
{
	echo " Email address already exists.";
	echo  '<a href="register.html">Ok</a>';
}
else{
mysqli_query($con,"insert into customers (username, password, email) values ('$username' , '$password', '$email')");
	header("location:index_verify.html");
}

mysqli_close($con);

?>