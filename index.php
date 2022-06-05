<?php
session_start();
  if (isset($_SESSION['username'])) {
    $l = 'Log-Out';
    $directto = 'account/logout.php';
  } else {
    $l = 'Log-In';
    $directto = 'account/login.php';
  }
echo "
<img class='imgbanner' src='compassia_website_banner.png' alt='banner' style='width:100%;height:250px;object-fit:cover;' class='center'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
 <div class='topnav' id='topnav'>
  <a href='index' class='active'>Home</a>
  <a href='http://compassiamc.com:8123'>Dynmap</a>
  <a href='http://compassiamc.com:8100'>Bluemap</a>

  <div class='topnav-right'>
  <a href='ranks'>Ranks</a>
  <a href='donation'>Donation</a>
  <a href='shop/cosmetics'>Cosmetics</a>
  <a href='contact'>Contact</a>
  <a href='about'>About</a>
  <a href='$directto'>$l</a>
  <a href='javascript:void(0);' class='icon' onclick='myFunction()'>
    <i class='fa fa-bars'></i>
  </a>
</div>
</div>
";

?>

<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Compassia</title>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5208830673186153"
     crossorigin="anonymous"></script>

</head>


<style>
    body {
    font-family: sans-serif;
    color: white;
    background-color: rgb(54, 57, 63);
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
    border-radius: 10px;
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
    </style>

<body>
    <!-- naviguation bar -->

<img src="lo.png" alt="Logo" style="width:128px;height:128px;" class="center">

<script>
function myFunction() {
  var x = document.getElementById("topnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function copybd() {
  var copyText = document.getElementById("bedrockcopy");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  alert("Copied the text: " + copyText.value);
}

function copyjv() {
  var copyText = document.getElementById("javacopy");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  alert("Copied the text: " + copyText.value);
}
</script>

<!-- actually display what to display 
<img class='imgbanner' src="/compassia/compassia_website_banner.png" alt="banner" style="width:100%;height:250px;object-fit: cover;" class="center">-->
<h2 style="text-align:center">Hone your speciality</h2>

<div class="corner">
    <h3>&nbsp;&nbsp;Bedrock</h3>
    <div style="display: flex">
<p>&nbsp;&nbsp;Ip: </p>
<input class="invfield" type="text" value="74.59.148.223" id="bedrockcopy" readonly>
<button class='copybtn' onclick="copybd()"><i class='fa fa-copy'></i></button>
</div>
<p>&nbsp;&nbsp;port: 19132 (default)</p>
</div>
<br>




<div class="corner">
    <h3>&nbsp;&nbsp;Java edition</h3>
    <div style="display: flex">
    <p>&nbsp;&nbsp;Ip: </p>
<input class="invfield" type="text" value="mc.compassiamc.com" id="javacopy" readonly>
<button class='copybtn' onclick="copyjv()"><i class='fa fa-copy'></i></button>
</div>
</div>

</body>