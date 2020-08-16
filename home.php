<?php
  session_start();
// If the user is not logged in redirect to the login page...
  if (!isset($_SESSION['logged'])) {
 	header('Location: login.html');
  exit();
  }
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Unicorn Flat Management System</title>
  </head>
    <style>
    body{margin:0;
        background:repeating-linear-gradient(to right,#f17b41,#cd4bc9,purple);
    }    
    .welcome table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 70%;
        margin:0;
      }
    .welcome  
    {
        margin-left:25%;
        height:10px;
        margin-top: 30px;
    }
      
     .welcome td, th {
        border: 1px solid black;
        text-align: left;
        padding: 8px;
        background: rgb(238, 229, 229);
      }

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 19.08%;
  background-color: rgb(223, 220, 220);
  position: fixed;
  height: 100%;
  overflow: auto;
}
h1{
    margin-left: 25%;
    color:darkred;
}
li a {
  display: block;
  color: #000;
  padding: 25px 16px;
  text-decoration: none;

}

li a.active {
  background-color: #9e33b6;
  color: white;
}

li a:hover:not(.active) {
  background-color:  #bf953b;
  color: white;
}
      
    </style>
 <body>
  <img src=img/unicorn/unic.jpg>
 <ul>
   
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="new.php">New Visitors</a></li>
  <li><a href="visitorlist.php">Visitors List</a></li>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<h1>WELCOME TO UNICORN HOMES!</h1>
<div class="welcome">
   
   <table>
    <tr>
      <th>Flat No</th>
      <th>Name</th>
      <th>Phone No</th>
    </tr>
    <tr>
      <td>F1</td>
      <td>Dhanushya C</td>
      <td>9123501175</td>
    </tr>
    <tr>
      <td>F2</td>
      <td>Hari Rithanya M</td>
      <td>9500331445</td>
    </tr>
    <tr>
      <td>F3</td>
      <td>Deephika C</td>
      <td>9123601178</td>
    </tr>
    <tr>
      <td>F4</td>
      <td>Dharshini A</td>
      <td>8838869908</td>
    </tr>
    <tr>
      <td>F5</td>
      <td>Anuroopa M</td>
      <td>9687765954</td>
    </tr>
  </table>
   </div>
</body>
</html>