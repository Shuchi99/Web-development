<?php require('server.php');
$userid=$_SESSION['username'];
if(isset($_GET['change']))
{
    $bud=$_GET['oldusername'];
    $bud1=$_GET['newusername'];
    $c=mysqli_connect('localhost','root','','registration');
    $ins="UPDATE users SET username='$bud1' WHERE username='$bud'";
                mysqli_query($c,$ins);
    $ins="UPDATE budget SET username='$bud1' WHERE username='$bud'";
                mysqli_query($c,$ins);
    if($ins)
    {
       
        echo "<br>"."Updated";
    }
    else
    {
        echo mysqli_error($c);
    }
}
?>
