
<center><h1=>LOGIN PAGE</h1></center><hr>
<br><br><br>
<center>
    <form method="POST">
    <table>
        <tr>
            <td>Enter email</td>
            <td><input type="text" name="e"></td>
</tr>
<tr>
            <td>Enter Pin</td>
            <td><input type="text" name="p"></td>
</tr>
<tr>
            <td><input type="submit" name="submit" vlaue="Login"></td>
</tr>

</tr>
</table>
</form>
<?php
$con=mysqli_connect('localhost','root','','vip123');
if(isset($_REQUEST['submit']))
{
    $e=$_REQUEST['e'];
    $p=$_REQUEST['p'];
   
    $q="select * from `student` where email='$e' && pin='$p'";
    $rs=mysqli_query($con,$q);
{
    session_start();
    $_SESSION['loguser']=$p;
    header('location:home.php');
}
    echo "<h2>Invalid PIN</h1>";
}
?>
</center>