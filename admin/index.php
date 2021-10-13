<!DOCTYPE HTML>
<html>
<head>
<title>Share Market</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login" style="background-color: white;">
  <div class="login-logo" style="color:black">
   <h2 style="background:white;color: red;font-weight: bolder;">Share Market</h2>
  </div>
  
  <div class="app-cam" style="background-color: white;padding: 5px;">
	  <form action="" role="form" class=" " method="post" enctype="multipart/form-data">
  		<input type="text" class="text" name="user" value="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}">
  		<input type="password" name="pwd" value="pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
  		<div class="submit"><input type="submit" value="Login"></div>
  		<div class="login-social-link">
        
      </div>
      
	  </form>
  </div>

</body>
</html>
<?php
include '../connect.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
  {
     // username and password sent from form 
      $user = $_POST['user'];
      $pwd = $_POST['pwd'];
     // echo "$user $pwd";
      $query = mysqli_query($con,"SELECT * FROM login WHERE username = '$user' && pwd = '$pwd'");
      $row = mysqli_fetch_array($query);
      if($row["username"] == $user && $row["pwd"] ==$pwd)
      {
        
        $_SESSION['user'] = $row['username'];
          $_SESSION['pwd'] = $row['pwd'];
            $_SESSION['role'] = $row['role'];
       
      header("location:admin.php");
      }
      else
      {
        echo"<script>alert('Sorry, your credentials are not valid, Please try again.!');</script>";
      }
     
  }
?>