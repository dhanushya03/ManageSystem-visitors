<?php
  
  $username= $_POST['username'];
  $pass=$_POST['password'];
  session_start();
  
  //db connection
  $con = new mysqli("localhost","root","","managementsystem");
     if($con->connect_error)
    {
        die("Failed to connect");
    }
    else{
        $stmt = $con -> prepare("select * from admin where username = ? ");
        $stmt->bind_param('s',$username);
        $stmt->execute();
        $stmt_result= $stmt->get_result();
        if($stmt_result-> num_rows >0)
        {
          $data = $stmt_result->fetch_assoc();
          if($data['passcode'] === $pass)
          {
            session_regenerate_id();
	         	$_SESSION['logged'] = TRUE;
                  
            header('Location: home.php');
          }
          else
           {
            header('Location: login.html');
           }
        }
        else
        {
            echo "<h2>Invalid User or password</h2>";

        }
    }
    $stmt->close();
    $con->close();
  ?>