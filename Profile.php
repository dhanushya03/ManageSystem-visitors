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
     button {
            background-color: #c5b037;
            color: purple;
            font-weight:bold;
            padding: 14px;
            border-radius: 15px;
            border: none;
            cursor: pointer;
            width: 30%;
            text-align:center;
            margin: 15px 0 0 0;
            margin-left: 180px;
            font-size:20px;
           }
    .welcome  
    {
        margin-left:25%;
        height:10px;
    }
      
     .welcome td, th {
        border: 1px solid black;
        text-align: left;
        padding: 20px;
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
    padding-top: -20px;
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
  <li><a href="home.php">Home</a></li>
  <li><a href="new.php">New Visitors</a></li>
  <li><a href="visitorlist.php">Visitors List</a></li>
  <li><a class="active" href="Profile.php">Profile</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<h1>ADMIN DETAILS</h1>
<div class="welcome">
<table>
    <tr>
      <th>Admin Name</th>
      <th>Phone No</th>
    </tr>
     <?php
     $con = new mysqli("localhost","root","","managementsystem");
     if(!$con)
     {
         die('Could not Connect My Sql:' .mysql_error());
     }
     $sql = "SELECT aname,aphone from admindetail";
     $result = $con->query($sql);
     if($result-> num_rows > 0)
     {
       while($row = $result-> fetch_assoc())
       {
         echo "<tr><td>". $row["aname"]. "</td><td>" . $row["aphone"]. "</td></tr>";
       }
     }
     
    ?>
     
    </table>
    <button onclick="window.location.href='update.html'">UPDATE</button>
    </div>

    
</body>
</html>
