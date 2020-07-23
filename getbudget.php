<?php require('server.php');
$userid=$_SESSION['username'];
if(isset($_GET['submit']))
{
    $bud=$_GET['noofdays'];
    $bud1=$_GET['danceform'];
    $c=mysqli_connect('localhost','root','','registration');
    $ins="INSERT INTO budget(username,Budgetno,dancestyle)
                VALUES('$userid','$bud','$bud1')";
                mysqli_query($c,$ins);
    if($ins)
    {
        
        echo "<br>"."inserted";
    }
    else
    {
        echo mysqli_error($c);
    }
}
?>
