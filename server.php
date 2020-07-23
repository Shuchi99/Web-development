<?php
	session_start();
	$username="";
	$errors=array();	
$db = mysqli_connect('localhost','root','','registration');
 if(isset($_POST['signup'])) {
 	$username=mysqli_real_escape_string($db,$_POST['username']);
 	$password_1=mysqli_real_escape_string($db,$_POST['password_1']);
 	$password_2=mysqli_real_escape_string($db,$_POST['password_2']);
 	



 	if(empty($username)){
 	   array_push($errors,"Username is required");	
 	}
 	if(empty($password_1)){
 	   array_push($errors,"Password is required");	
 	}
 	if($password_1!=$password_2){
 		array_push($errors,"The two passwords do not match");
 	}
 	if(count($errors)==0){
 		$password=md5($password_1);
 		$sql="INSERT INTO users(username,password)
 				VALUES('$username','$password')";
 		
		 mysqli_query($db,$sql);
		 $_SESSION['username']=$username;
				$_SESSION['success']="You are now logged in";
				header('location:index.php');
 	}
 }
if(isset($_POST['login'])){
		$username=mysqli_real_escape_string($db,$_POST['username']);
		$password=mysqli_real_escape_string($db,$_POST['password']);
   
		if(empty($username)){
		   array_push($errors,"Username is required");	
		}

		   if(empty($password)){
			array_push($errors,"Password is required");
		}
		if(count($errors)==0){
			$password=md5($password);
			$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result=mysqli_query($db,$query);
			if(mysqli_num_rows($result)==1){
				$_SESSION['username']=$username;
				$_SESSION['success']="You are now logged in";
				header('location:index.php');
			}
			else{
				array_push($errors,"wrong username/password combination");
			}
		}
}

 if(isset($_GET['logout'])){
	 session_destroy();
	 unset($_SESSION['username']);
	 header('location:login.php');
 }

 ?>