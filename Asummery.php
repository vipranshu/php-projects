<?php
session_start();
if(!isset($_SESSION['loguser'])){
    header("Location:home.php");    
  }
  


/*echo "<h3>Weclome &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; ".$_SESSION['loguser']." &nbsp;  &nbsp;  &nbsp; <a href='lout.php'>Logout</a></h3>";
else
echo "<h3><a href='login.php'>login</a></h3>";*/
?><html>
<?php include 'Header.php';?>


    <head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
    <body>
<div class="container">
    <center><h1>Balance Enquery</h1></center>
    <hr>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">
<form  method="post">
     Enter Account Nubmer
    <input type="text" name="ac" class="form-control">
     Enter Pin number
    <input type="text" name="pin" class="form-control">
    
    <input type="submit" name="submit" value="Submit" class="btn btn-info">
</form>

<?php
$con=mysqli_connect("localhost","root","","'admin panel'")or die("Connection failed");

if(isset($_REQUEST['submit']))
{
$ac=$_REQUEST['ac'];
$pin=$_REQUEST['pin'];



$sql="select * from accounts where acno='$ac' && pin='$pin'";
$rs=mysqli_query($con,$sql);
$x=mysqli_num_rowS($rs);
if($x>0)
{   
$q="select * from mytrans where acno='$ac'";
$rs=mysqli_query($con,$q);
echo "<center><table class='table table-border table-striped table-hover'>";
echo "<tr><th>TID</th><th>Account/th><th>Date</th><th>Amount</th><th>Des</th></tr>";
while($r=mysqli_fetch_array($rs))
{

    echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td></tr>";
}

}
else
echo "<h2>INVALID Account or PIN</h2>";
    
}
?>
