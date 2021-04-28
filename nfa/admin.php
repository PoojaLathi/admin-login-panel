<?php
   require("connection.php") 
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin login panel</title>
	<meta charset="utf-8" name="viewport" content="width-device-width,initial_scale=1.0 shrink-to-fit=no">
	<link rel="stylesheet"  href="fontawesome-free-5.15.3-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
<div class="login-form"> 
	<h2>ADMIN LOGIN PANEL</h2>
	<form method="POST">
		<div class="input-field">
			<i class="fas fa-user"></i>
			<input type="text" placeholder="Admin name" name="AdminName" value="">
		</div>
		<div class="input-field">
			<i class="fas fa-lock"></i>
			<input type="password" placeholder="password" name="AdminPassword" value="">
			</div>
			<button type="submit" name="Signin">Sign In</button>

			<div class="extra">
				<a href="#">Forgot Password ?</a>
	    </div>
	</form>
	
</div>
<?php
 if(isset($_POST['Signin']))
 {
	 $adminName=$_POST['AdminName'];
	 $adminPass=$_POST['AdminPassword'];
	 $adminName=stripslashes($adminName);
	 $adminName=addslashes($adminName);
	 $adminPass=stripslashes($adminPass);
	 $adminPass=addslashes($adminPass);
	
	 $q= "select * from admin_login where admin_name='$adminName' and admin_password='$adminPass'";
	 $result=mysqli_query($con,$q);
	 
	 $row=mysqli_num_rows($result);

      if($row==1)
         {
            session_start();
			echo "hello";
            $_SESSION['AdminLoginId']=$_POST['AdminName'];
            header("location:admin panel.php");
 
		}
		else
		{
        echo "<script>alert('incorrect password');</script>";
        }
    }
 ?>
</body>
</html> 