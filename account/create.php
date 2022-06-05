<!DOCTYPE html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

.buton {
    border-radius: 20px;
    border: none;
    float: left;
    background-color: #272a2b;
    color: white;
    height: 35px;
    width: 80px;
    cursor: pointer;
}


form.search input[type=text] {
    color: white;
    float: left;
    border-style: solid;
    border-color: gray;
    height: 35px;
    width: 80%;
    border-radius: 10px;
    background-color: #272a2b;
}

form.search input[type=password] {
    color: white;
    float: left;
    border-style: solid;
    border-color: gray;
    height: 35px;
    width: 80%;
    border-radius: 10px;
    background-color: #272a2b;
}

form.search button {
    border-radius: 20px;
    border: none;
    float: left;
    background-color: #272a2b;
    color: white;
    height: 35px;
    width: 20%;
    cursor: pointer;
}
    </style>

<body>
    <!-- naviguation bar -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <div class="topnav" id="topnav">
  <a href="../index">Home</a>
  <a href="http://compassiamc.com:8123">Dynmap</a>
  <a href="http://compassiamc.com:8100">Bluemap</a>

  <div class="topnav-right">
  <a href="../ranks">Ranks</a>
  <a href="../donation">Donation</a>
  <a href="../shop/cosmetics">Cosmetics</a>
  <a href="../contact">Contact</a>
  <a href="../about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>
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

<form name="f1" action = "createdb.php" onsubmit = "return validation()" method = "POST" style="margin:auto;max-width:300px" class="search">  
            <p>  
                <label> Email: </label><br> 
                <input type = "text" id ="email" name  = "email" />  
            </p>
            <p><br><br>
                <label> Username: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>
            <p><br><br>
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>
            <p><br><br><br><br>
                <label> Discord Username (with the tag): </label>  
                <input type = "text" id ="discord" name  = "discord" />  
            </p> 
            
            <p>     
            <br><br><button type="submit">Create</button> 
            </p>  
            <br><br>
        <a href='/account/login.php'>Login</a>
        </form>
</body>