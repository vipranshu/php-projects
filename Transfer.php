<?php
session_start();
if(!isset($_SESSION['loguser'])){
    header("Location:login1.php");   
  }?><?php
session_start();
if(isset($_SESSION['loguser']))
echo "<h3>Weclome &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; ".$_SESSION['loguser']." &nbsp;  &nbsp;  &nbsp; <a href='lout.php'>Logout</a></h3>";
else
echo "<h3><a href='login1.php'>login</a></h3>";
?>

<html>
<?php include 'Header.php'; ?>

    <head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
    <body>
<div class="container">
    <center><h1>Transfer</h1></center>
    <hr>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
     Enter Account no
    <input type="text" name="ac" class="form-control">
     Enter PIN 
    <input type="text" name="pin" class="form-control">
    Enter account to transfer
    <input type="text" name="ac1" class="form-control">
    Enter amount to transfer
    <input type="text" name="am" class="form-control">
    
    <input type="submit" name="submit" value="Submit" class="btn btn-info">
</form>



<?php
$con=mysqli_connect("localhost","root","","neerajk")or die("Connection failed");

if(isset($_POST['submit']))
{

if(empty($_POST['ac']) || empty($_POST['pin']))
{

echo '<div class="alert-danger"> all fields must be field</div>';
die();
}
else {
    $ac=$_POST['ac'];
    $pin=$_POST['pin'];
    $ac1=$_REQUEST['ac1'];
    $amt2=$_REQUEST['am'];

    
    $sql="select * from accounts where acno='$ac' && pin='$pin'";
    $rs=mysqli_query($con,$sql);
    $x=mysqli_num_rowS($rs);
    if($x>0)
{
    $r=mysqli_fetch_array($rs);
    

       
    $camt=$r[11];
    if($camt>=$amt)
    {

        $camt=$camt-$amt;
        $q="update accounts set amount='$camt' where acno='$ac'";
        mysqli_query($con,$q);
        echo "<h2>After withdraw $amt Your Current balance is = $camt</h2>";
    }
    else{
    echo "<h2>Insufficient balance</h2>";
        }
    }
else
{
echo "<h2>Invalid Accound or Pint Number</h2>";
}
}}

?>
</body>
</html>