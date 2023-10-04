<?php
session_start();
if(!isset($_SESSION['loguser'])){
    header("Location:login1.php"); 
    }
    
    ?>
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


    <center><h1><b>About US</b></h1></center>
      
      <h4>

State Bank of India (SBI) a Fortune 500 company, is an Indian Multinational, Public Sector Banking and Financial services statutory body headquartered in Mumbai. The rich heritage and legacy of over 200 years, accredits SBI as the most trusted Bank by Indians through generations.

SBI, the largest Indian Bank with 1/4th market share, serves over 45 crore customers through its vast network of over 22,000 branches, 62617 ATMs/ADWMs, 71,968 BC outlets, with an undeterred focus on innovation, and customer centricity, which stems from the core values of the Bank - Service, Transparency, Ethics, Politeness and Sustainability.

The Bank has successfully diversified businesses through its various subsidiaries i.e SBI General Insurance, SBI Life Insurance, SBI Mutual Fund, SBI Card, etc. It has spread its presence globally and operates across time zones through 229 offices in 31 foreign countries.

Growing with times, SBI continues to redefine banking in India, as it aims to offer responsible and sustainable Banking solutions..
</h4>

</div>
</body>
</html>