<?php
session_start();
if(!isset($_SESSION['loguser'])){
    header("Location:login1.php");    
  }?>
<!DOCTYPE html>
<html lang="en">
<?php include 'Header.php'; ?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="test32.css">
  </head>
  <body>
      
<div class="container">
    <center><h1><b>Fund transfer</b></h1></center>
      <h4>

      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    Enter Account no
    <input type="text" name="ac" class="form-control">
    Enter PIN 
    <input type="text" name="pin" class="form-control">
    Enter account to transfer 
    <input type="text" name="at" class="form-control">
    
    Enter amount to transfer 
    <input type="text" name="att" class="form-control">
    


    <input type="submit" name="submit" value="Submit" class="btn btn-info">
</form>


<?php
$con=mysqli_connect("localhost","root","","neerajk")or die("Connection failed");

if(isset($_REQUEST['submit'])
){

if(empty($_POST['ac']) || empty($_POST['pin'])|| empty($_POST['at']|| empty($_POST['att'])))
{

echo '<div class="alert-danger"> all fields must be field</div>';
die();
}
else {
    $ac=$_POST['ac'];
    $pin=$_POST['pin'];
    $tac=$_REQUEST['at'];
    $amt=$_REQUEST['att'];
    $sql="select * from accounts where acno='$ac' && pin='$pin'";
    $rs=mysqli_query($con,$sql);
    $x=mysqli_num_rowS($rs);
    if($x>0)
{
    $r=mysqli_fetch_array($rs);
    $camt=$r[11];
    if($camt>=$amt)
    {

        $q="select * from accounts where acno='$tac'";
        $rs1=mysqli_query($con,$q);
        $x=mysqli_num_rows($rs1);
        if($x>0)
        {
          $r1=mysqli_fetch_array($rs1);
          $tamt=$r1[11];
        $camt=$camt-$amt;
        $tamt=$tamt+$amt;

        $q="update accounts set amount='$camt' where acno='$ac'";
        mysqli_query($con,$q);
        $q="update accounts set amount='$tamt' where acno='$tac'";
        mysqli_query($con,$q);


        $d=date('d-m-Y');
        $t=date('h:i:s');
        $dt=$d." ".$t;
        $q="insert into mytrans(acno,dt,amount,ds)values('$ac','$dt','$amt','Transfer')";
        mysqli_query($con,$q);


        
        echo "<h2>After Transfer $amt Your Current balance is = $camt</h2>";
        }
        else
        echo "<h2>Invalid Benificary Account</h2>";
      }
    else
    echo "<h2>Insufficient balance</h2>";
}
else
echo "<h2>Invalid Accound or Pint Number</h2>";




}


}
?>
      <!----</h4>
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="f1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="f2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="f3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>-->
</div>
</body>
</html>