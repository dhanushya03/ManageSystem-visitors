<?php
 
  if(isset($_POST['submit'])){
    $username =  $_POST['name'];
    $flat = $_POST['flat'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $address = $_POST['subject'];
     
    $con = new mysqli("localhost","root","","managementsystem");
    if(!$con)
    {
        die('Could not Connect My Sql:' .mysql_error());
    }
    else{
        $stmt = $con->prepare("INSERT INTO visitor (uname,flat,Phone,udate,uaddress) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$username,$flat,$phone,$date,$address);
        $stmt->execute();
        $stmt->close();
    }
 }
   

   
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="login.css">
        <title>Unicorn Flat Management System</title>
        <script lang="javascript" type="text/javascript">
       window.history.forward();
      </script>
      </head>
      <style>
         .container button {
            background-color: #c5b037;
            color: purple;
            font-weight:bold;
            padding: 14px;
            border-radius: 15px;
            border: none;
            cursor: pointer;
            width: 40%;
            text-align:center;
            margin: 15px 0 0 0;
            margin-left: 180px;
           }
           img{
               padding-left:185px;
           }
         </style>
    <body>
        <div class="container">
        <h1>Welcome To Unicorn Homes!</h1>
        <img src=img/unicorn/img.jpg>
        <button onclick="window.location.href='login.html'">Login</button>
        </div>   
    </body>

</html>



