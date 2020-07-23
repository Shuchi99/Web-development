<!DOCTYPE html>
<html>
<head>
<title>Change Username</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="header">
<h2>Change Username</h2>
</div>
<form action="update.php" method="get">
	<div class="input-group">
		<label>Old Username</label>
		<input type="text" name="oldusername">
	</div>
	<div class="input-group">
		<label>New Username</label>
		<input type="text" name="newusername">
	</div>
	<div class="input-group">
		<button type="submit" name="change"class="btn">Change</button>
</div>
</form>
</html>