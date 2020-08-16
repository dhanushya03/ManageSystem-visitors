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
    h2{
      text-align:center;
      padding-bottom: 5px;
      color:darkred;
      font-weight:bold;
    } 
    .welcome table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 85%;
        margin:0;
        color:purple;
      }
    .welcome  
    {
        margin-left:25%;
        height:10px;
        margin-top: 30px;
    }
      
     .welcome td, th {
        border: 2px solid black;
        text-align: left;
        padding: 10px;
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
.container {
  background:repeating-linear-gradient(to right,#276174,#33c58e,#63fd88);
	border-radius: 20px;
  	box-shadow:20px 20px 20px rgb(86, 75, 75);
	width: 300px;
	height: 70px;
  margin: auto;
  margin-top:200px;
  margin-left:390px;
	padding: 40px 20px;
   
}
.contain{
  
  background:repeating-linear-gradient(to right,#276174,#33c58e,#63fd88);
	border-radius: 20px;
  	box-shadow:20px 20px 20px rgb(86, 75, 75);
	width: 300px;
	height: 70px;
  padding: 50px 20px;
  margin-top:30px;
  margin-left: -16px; 
  padding: 40px 20px;
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
 
 <ul>
 <img src=img/unicorn/unic.jpg> 
  <li><a  href="home.php">Home</a></li>
  <li><a class="active" href="new.php">New Visitors</a></li>
  <li><a  href="visitorlist.php">Visitors List</a></li>
  <li><a href="Profile.php">Profile</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<h1>RECENT VISITORS LIST</h1>
<div class="welcome">
<table>
    <tr>
      <th>Visitor Name</th>
      <th>Flat No</th>
      <th>Phone</th>
      <th>Date</th>
      <th>address</th>
    </tr>
     <?php
     $con = new mysqli("localhost","root","","managementsystem");
     if(!$con)
     {
         die('Could not Connect My Sql:' .mysql_error());
     }
     $sql = "SELECT * from visitor order by udate Desc limit 4";
     $result = $con->query($sql);
     if($result-> num_rows > 0)
     {
       while($row = $result-> fetch_assoc())
       {
         echo "<tr><td>". $row["uname"]. "</td><td>" . $row["flat"]. "</td><td>" . $row["Phone"]. "</td><td>" . $row["udate"]. "</td><td>" . $row["uaddress"]. "</td></tr>";
       }
       
     }

    ?>
     
    </table>
    </div>
    <div class="container">
    
    <h2>Total Visitors</h2>
    <?php
        $count = "SELECT count(distinct uname) as total  from visitor";
        $res= $con->query($count);
        $value= mysqli_fetch_assoc($res);
        $num_rows=$value['total'];
        echo  "<h2>$num_rows</h2>";
    ?>
    
    <div class="contain">
    <h2>Today's Visitors</h2>
    <?php
        $co = "SELECT count(distinct uname) as total from visitor where date(udate) = curdate()";
        $r= $con->query($co);
        $val= mysqli_fetch_assoc($r);
        $num_rows=$val['total'];
        echo  "<h2>$num_rows</h2>";
    ?>
    </div>
    </div>
    
    
</body>
</html>
