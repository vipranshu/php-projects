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

    <title>Programers</title>
  </head>
  <body>
      
<div class="container">
    <center><h1><b>Contact US</b></h1></center>
      
      <h4>
State Bank of India has an extensive administrative structure to oversee the large network of branches in India and abroad. The Corporate Centre is in Mumbai and 17 Local Head Offices and 101 Zonal Offices are located at important cities spread throughout the country. The Corporate Centre has several other establishments in and outside Mumbai, designated to cater to various functions. Our Colleges/Institutes/Training Centres are the seats of learning and research and development to spread the wings of knowledge not only to our employees but also other banks/establishments in India and abroad.

The Corporate Accounts Group is a Strategic Business Unit of the Bank set up exclusively to fulfil the specialised banking needs of top corporates in the country.

State Bank of India has 208 foreign offices/branches in 36countries across the globe as on 31.03.2019.

State Bank of India invites you to take a journey to understand the potential of not just a large but truly global organisation.

" Click here for Contact Center (SBI helpline) Services".</h4><br>
<h4>

Pensioners Helpline:- Please call SBI's 24X7 Toll free telephone number dedicated for pensioners or Toll free telephone number 18004253800 & 1800112211
</h4>
</body>
</html>