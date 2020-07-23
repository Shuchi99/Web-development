<?php include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!DOCTYPE HTML>
<html>
    <head>
        <title>Nartana</title>


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
                <link rel="stylesheet" type="text/css" href="pro.css">


    </head>
    <body>
    <nav class="navbar navbar-default navbar-inverse bg-inverse navbar-fixed-top">
                    <div class="container">
                <div class="navbar-header">
                	<img src="art.jpg" width="50px" height="50px">
                    <a class="navbar-brand" href="#">Nartana</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="nartana.html"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                        
                        <li><a href="review.html"><span class="glyphicon glyphicon-pencil"></span>Reviews</a></li>
                        <li><a href="budget.html">Budget</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li><a href="https://www.instagram.com/_nartana_/" target="_blank">Instagram</a></li>
                        <li><a href="https://www.youtube.com/channel/UCdz7yLRKPzKgwiWrJSQNqug" target="_blank">Youtube</a></li>
                    </ul>    
                        <li><a href="about.html">About us</a></li>
                    </ul>
                </div>
            </div>
        </nav> 
       			</form>
       		</div>
       	</div>
       </div>
        </section>
	<!--div>
		<a href="nartana.html">Home</a>
	</div-->
<div class="header">
<h2>Register</h2>
</div>
<form method="post" action="signup.php">
<?php include('errors.php');
?>
<div class="input-group">
<label>Username</label>
<input type="text" name="username" value="<?php echo $username; ?>">
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="password_1">
</div>
<div class="input-group">
<label>Confirm Password</label>
<input type="password" name="password_2">
</div>
<div class="input-group">
<button type="submit" name="signup"class="btn">Sign Up!</button>
</div>
<p>
Already a user?Sign in! <a href="login.php">Sign in</a>
</p>
</form>
</body>
</html>