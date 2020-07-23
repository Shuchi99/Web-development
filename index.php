<?php include('server.php');
if(empty($_SESSION['username'])){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h2>Home page</h2>
</div>
 <div class="content">
 <?php if (isset($_SESSION['success'])): ?>
	<div class="error success">
	<h3>
	<?php
	echo $_SESSION['success'];
	unset($_SESSION['success']);
	?>
	</h3>
	</div>
 <?php endif ?>
 <?php if (isset($_SESSION["username"])): ?>
 <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

 <p><a href="index.php?logout='1'"style="color:red;">Logout</a></p>
 <?php endif ?>
 <div class="input-group">
 <form action="getbudget.php" method="get">
<label>Budget</label>
<select name="noofdays">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
<br>
<label>Dance Style</label>
<select name="danceform">
  <option value="1">classical</option>
  <option value="2">bollywood</option>
  <option value="3">hip-hop</option>
  <option value="4">rock</option>
</select>
<br>
<input type="submit" name="submit" value="Submit">
</form>
TO change username : <a href="username.php">Click here</a>
<form action="delete.php">
<div class="input-group">
    <button type="remove" name="remove" class="btn">Remove Account</button>
</div>
</form>
</div>
</body>
</html>
