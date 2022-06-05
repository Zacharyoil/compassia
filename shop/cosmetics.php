<?php
session_start();  
include('../../../connection.php'); 

if (isset($_SESSION['email'])) {
$email = $_SESSION['email'];
}

if (!isset($_SESSION['CREATED'])) {
  $_SESSION['CREATED'] = time();
} else if (time() - $_SESSION['CREATED'] > 1440) {
  // session started more than 30 minutes ago
  session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
  $_SESSION['CREATED'] = time();  // update creation time
}

//display user pfp in top right corner (not done)
$sql = $con->prepare("SELECT *FROM user WHERE email = ?");
$sql->bind_param('s', $email);
$sql->execute();
$result = $sql->get_result();
$row = $result->fetch_assoc();

  if (isset($_SESSION['username'])) {
    $l = 'Log-Out';
    $directto = 'account/logout.php';
  } else {
    $l = 'Log-In';
    $directto = 'account/login.php';
  }
echo "
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
 <div class='topnav' id='topnav'>
  <a href='../index'>Home</a>
  <a href='http://compassiamc.com:8123'>Dynmap</a>
  <a href='http://compassiamc.com:8100'>Bluemap</a>

  <div class='topnav-right'>
  <a href='../ranks'>Ranks</a>
  <a href='../donation'>Donation</a>
  <a href='../shop/cosmetics' class='active'>Cosmetics</a>
  <a href='../contact'>Contact</a>
  <a href='../about'>About</a>
  <a href='../$directto'>$l</a>
  <a href='javascript:void(0);' class='icon' onclick='myFunction()'>
    <i class='fa fa-bars'></i>
  </a>
</div>
</div>
";

?>

<!DOCTYPE html>
<head>
    <title>Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5208830673186153"
     crossorigin="anonymous"></script>
     
</head>

<style>
    body {
    font-family: sans-serif;
    color: white;
    background-color: rgb(54, 57, 63);
    }

    a {
      color: inherit;
    }

/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
  position: relative;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav-centered a {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.topnav-right {
  float: right;
}

.topnav .icon {
  display: none;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(a *) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

  .topnav a, .topnav-right {
    float: none;
    display: block;
  }
  
  .topnav-centered a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.corner {
    border: 2px solid grey;
    border-radius: 20px;
}

.copybtn {
    border: none;
    background-color: inherit;
    cursor: pointer;
}

.invfield {
    background-color: inherit;
    border: none;
    outline: none;
    color: white;
    font-family: sans-serif;
    font-size: 16px;
}

.imgbanner {
  height: 10%;
}

.logo-image{
    width: 46px;
    height: 46px;
    overflow: hidden;
    margin-top: -6px;
}

.bgdiv {
  background-color:  rgb(61, 61, 61);
  border: 5px solid gray;
  width: 200px;
  height: 300px;
  float: left;
  margin-top: 20px;
  margin-left: 20px;
  cursor: pointer;
}

.imgdiv {
  background-color: rgb(35, 39, 42);
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
    </style>

<body>
   
<script>
function myFunction() {
  var x = document.getElementById("topnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<body>

<div onclick="location.href='/shop/item/particles.php'" class="bgdiv">
<div class="imgdiv" style="max-width:50%">
<img src="starshop.png" alt="star" style="">
</div>
<div>
<p style="text-align:center">Player Particles</p>
<h4 style="text-align:center">10$</h4>
</div>
</div>


<div onclick="location.href='/shop/item/nametag.php'" class="bgdiv">
<div class="imgdiv" style="max-width:50%">
<img src="popsicle.png" alt="popsicle" style="">
</div>
<div>
<p style="text-align:center">Customizable Nametag</p>
<h4 style="text-align:center">8$</h4>
</div>
</div>

<div onclick="location.href='/shop/item/commands.php'" class="bgdiv">
<div class="imgdiv" style="max-width:50%">
<img src="tuglife.png" alt="popsicle" style="">
</div>
<div>
<p style="text-align:center">/head + /hat Command</p>
<h4 style="text-align:center">5$</h4>
</div>
</div>

</body>