<?php
session_start(); 
if (!isset($_SESSION['AdminLoginId']))
 {
	header("location:admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width,initial_scale=1.0">
	<title>Admin Panel</title>
	<style>
		body{
			margin: 0px;
		}
		div.header{
			font-family:poppins;
			color: white;
			display: flex;
			justify-content:space-between; 
			align-items: center;
			padding: 0px 60px;
			background-color:#204969; 
		}
		div.header button{
            background-color: #f0f0f0;
            font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border: solid black;
            border-radius: 5px;
		}
	</style>
</head>
<body>
	<div class="header">
 <h1>WELCOME TO ADMIN PANEL-<?php echo $_SESSION['AdminLoginId']?> </h1>
 <form method="POST">
 <button name="Logout">LOG OUT</button>
</form>
</div>
<?php
if (isset($_POST['Logout']))
 {
	session_destroy();
	header("location:admin.php");
}
?>
</body>

</html>
