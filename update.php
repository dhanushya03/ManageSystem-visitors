<?php
  session_start();
// If the user is not logged in redirect to the login page...
  if (!isset($_SESSION['logged'])) {
 	header('Location: login.html');
  exit();
  }
  if(isset($_POST['nupdate'])){
    $uname =  $_POST['username'];
    $uphone = $_POST['phone'];
    $con = new mysqli("localhost","root","","managementsystem");
    if(!$con)
    {
        die('Could not Connect My Sql:' .mysql_error());
    }
    else{
        $stmt = $con->prepare('UPDATE admindetail  SET aname = ? , aphone = ?');
        $stmt->bind_param("ss",$uname,$uphone);
        $stmt->execute();
        $stmt->close();
      
        echo "<script type='text/javascript'>\n";
                    echo "alert('Successfully  Updated');\n";
                    echo "</script>";

    }
    
    
 }

?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Unicorn Flat Management System</title>
  </head>
  <style>
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
            margin-left: 70px;
            font-size:20px;
           }
           h1
           {
               padding-left:30px;
               color: Darkred;
           }
           body{
    font-family: 'Poppins';
    background:repeating-linear-gradient(to right,#f17b41,#cd4bc9,purple);
    heigth:100%;
    width:100%;
	margin:0;
	padding-top: 100px;
	
}
      </style>
   <body>
           <h1>Updated Admin Details Successfully</h1>
           <button onclick="window.location.href='Profile.php'">Profile</button>  
     </body>
     </html>
