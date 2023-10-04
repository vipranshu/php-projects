<?php
session_start();
if(!isset($_SESSION['loguser'])){
    header("Location:login1.php");    
  }?><html>
<?php include 'Header.php'; ?>

    <head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>




<script>
    /*
function validun20()
{
var un = /^[a-zA-Z0-9_.\-]+$/;
var a=document.getElementById("amount").value;
if(a=="")
{
document.getElementById("eru16").innerHTML=("Enter pin it is mandatory");
document.getElementById("amount").style.border="2px solid red";
}
else
{
document.getElementById("eru16").innerHTML="";
document.getElementById("amount").style.border="2px solid green";
}

}



function validun6()
{
var un = /^[a-zA-Z0-9_.\-]+$/;
var a=document.getElementById("p").value;
if(a=="")
{
document.getElementById("eru13").innerHTML=("Enter pin it is mandatory");
document.getElementById("p").style.border="2px solid red";
}


else
{
if(a.length>6 || a.length<2)
{
document.getElementById("eru13").innerHTML="*Password Should be min 6 and Max 10 digit Long";
document.getElementById("p").style.border="2px solid red";

}
else
{
document.getElementById("eru13").innerHTML="";
document.getElementById("p").style.border="2px solid green";
}}



}


function validun11()
{
var un = /^[a-zA-Z0-9_.\-]+$/;
var a=document.getElementById("n1").value;
if(a=="")
{
document.getElementById("eru10").innerHTML=("Enter Last Name it is mandatory");
document.getElementById("n1").style.border="2px solid red";
}
else
{
document.getElementById("eru10").innerHTML="";
document.getElementById("n1").style.border="2px solid green";
}

}


function validun7()
{
var un = /^[a-zA-Z0-9_.\-]+$/;
var a=document.getElementById("g").value;
if(a=="")
{
document.getElementById("eru11").innerHTML=("Enter gender it is mandatory");
document.getElementById("g").style.border="2px solid red";
}
else
{
document.getElementById("eru11").innerHTML="";
document.getElementById("g").style.border="2px solid green";
}

}



function validun8()
{
var un = /^[a-zA-Z0-9_.\-]+$/;
var a=document.getElementById("con").value;
if(a=="")
{
document.getElementById("eru12").innerHTML=("Enter country it is mandatory");
document.getElementById("con").style.border="2px solid red";
}

}


function validun9()
{
var un = /^[a-zA-Z0-9_.\-]+$/;
var a=document.getElementById("state").value;
if(a=="")
{
document.getElementById("eru14").innerHTML=("Enter state it is mandatory");
document.getElementById("state").style.border="2px solid red";
}
else
{
document.getElementById("eru14").innerHTML="";
document.getElementById("state").style.border="2px solid green";
}

}


function validun10()
{
var un = /^[a-zA-Z0-9_.\-]+$/;
var a=document.getElementById("city").value;
if(a=="")
{
document.getElementById("eru15").innerHTML=("Enter City  it is mandatory");
document.getElementById("city").style.border="2px solid red";
}
else
{
document.getElementById("eru15").innerHTML="";
document.getElementById("city").style.border="2px solid green";
}

}









function validun()
{
var un = /^[a-zA-Z0-9_.\-]+$/;
var a=document.getElementById("n").value;
if(a=="")
{
document.getElementById("eru").innerHTML=("Enter User Name it is mandatory");
document.getElementById("n").style.border="2px solid red";
}
else
{
if(!un.test(a))//Test is use to compare the content in java script.
{
document.getElementById("eru").innerHTML="*Enter Valid User Name";
document.getElementById("n").style.border="2px solid red";

}
else
{
document.getElementById("eru").innerHTML="";
document.getElementById("n").style.border="2px solid green";
}
}
}
function validun1()
{

var pn = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!#$@\*\?])(?=.)/;
var b=document.getElementById("p").value;
if(b=="")
{
document.getElementById("eru2").innerHTML=("Enter Password it is mandatory");
document.getElementById("p").style.border="2px solid red";
}
else
{
if(b.length>10 || b.length<6)
{
document.getElementById("eru2").innerHTML="*Password Should be min 6 and Max 10 Char Long";
document.getElementById("p").style.border="2px solid red";

}
else
{
if(b.indexOf(' ')>-1)
{
document.getElementById("eru2").innerHTML="*space not allowed";
document.getElementById("p").style.border="2px solid red";

}
else
{
if(!pn.test(b))
{
document.getElementById("eru2").innerHTML="Password should containt altleast one capital samall number and special";
document.getElementById("p").style.border="2px solid red";

}
else
{
document.getElementById("eru2").innerHTML="";
document.getElementById("p").style.border="2px solid green";
}
}
}
}
}
function validun2()
{
var un = /[^a-zA-Z0-9._\-]@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;

var b=document.getElementById("e").value;
if(b=="")
{
document.getElementById("eru3").innerHTML=("Enter Email it is mandatory");
document.getElementById("e").style.border="2px solid red";
}
else
{
if(!un.test(b))
{
document.getElementById("eru3").innerHTML="*Enter valid Email";
document.getElementById("e").style.border="2px solid red";

}
else
{
document.getElementById("eru3").innerHTML="";
document.getElementById("e").style.border="2px solid green";
}
}
}
function validun3()
{
var un = /^[5-9]\d{9}$/;

var b=document.getElementById("ph").value;
if(b=="")
{
document.getElementById("eru4").innerHTML=("Enter Phone number it is mandatory");
document.getElementById("ph").style.border="2px solid red";
}
else
{
if(!un.test(b))
{
document.getElementById("eru4").innerHTML="*Enter Valid Phone";
document.getElementById("ph").style.border="2px solid red";

}
else
{
document.getElementById("eru4").innerHTML="";
document.getElementById("ph").style.border="2px solid green";
}
}
}
function validun4()
{

var b=document.getElementById("e").value;
if(b=="")
{
document.getElementById("eru5").innerHTML=("Enter Address it is mandatory");
document.getElementById("ad").style.border="2px solid red";
}
else
{
document.getElementById("eru5").innerHTML="";
document.getElementById("ad").style.border="2px solid green";
}
}

function valid()
{
function validun()
{
var a=document.getElementById("n").value;
if(a=="")
{
document.getElementById("eru").innerHTML=("User name can not e blank");
document.getElementById("n").style.border="2px solid red";
}
else

{
document.getElementById("eru").innerHTML="";
document.getElementById("n").style.border="2px solid green";
}

function validun1()
{

var b=document.getElementById("p").value;
if(b=="")
{
document.getElementById("eru2").innerHTML=("Enter Password it is mandatory");
document.getElementById("p").style.border="2px solid red";
}
}
validun1();
}
validun();

}
*/

</script>
</head>
    <body>
<div class="container">
    <center><h1>FILL REQUIRED DETAIL</h1></center>
    <hr>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">
<form>
<center>  <table>
        <tr>
            <td><b>Enter pin</b></td>
   <td> <input type="text" name="pin" id="p" onblur="validun6()" class="form-control"><br></td>
   <td id="eru13" style="color:red"></td></tr>
   
        <td><b>First name</b></td>
        <td> <input type="text" name="name"  id="n" onblur="validun()" class="form-control"><br></td>
        <td id="eru" style="color:red"></td></tr>
        <tr>  <td><b>Last name</b></td>
        <td> <input type="text" name="lastname" id="n1" onblur="validun11()" class="form-control"><br></td>
        <td id="eru10" style="color:red"></td></tr>
        <tr> <td><b> Email</b></td>
        <td><input type="text" name="email" id="e" onblur="validun2()" class="form-control"><br></td>
        <td id="eru3" style="color:red"></td>
</tr>
<tr>  <td> <b>Phone</b></td>

        <td><input type="text" name="phone" id="ph" onblur="validun3()" class="form-control"><br></td>
        <td id="eru4" style="color:red"></td>
</tr>
<tr> <td><b>Gender</b></td>
    <td> <input type="text" name="gender" id="g" onblur="validun7()" class="form-control"><br></td>
    <td id="eru11" style="color:red"></td></tr>
    <tr>  <td><b> Country</b></td>
    <td> <input type="text" name="country" id="Con" onblur="validun8()" class="form-control"><br></td>
    <td id="eru12" style="color:red"></td></tr></tr>
    <tr>  <td><b> State</b></td>
    <td> <input type="text" name="state"  id="state" onblur="validun9()" class="form-control"><br></td>
    <td id="eru14" style="color:red"></td></tr>
    <tr>  <td> <b>City</b></td>
    <td> <input type="text" name="city" id="city" onblur="validun10()" class="form-control"><br></td>
    <td id="eru15" style="color:red"></td></tr>
    <tr> <td> <b>Address</b></td>
    <td> <input type="text" name="address"  id="ad" onblur="validun4()" class="form-control"><br></td>
    <td id="eru5" style="color:red"></td>
</tr>

<tr> <td> <b>Amount</b></td>
    <td> <input type="text" name="amount" id="amount" onblur="validun20()"  class="form-control"><br></td>
    <td id="eru16" style="color:red"></td>
     </tr>
  <tr>  <td><input type="submit" name="submit" value="save" onclick="valid()" class="btn btn-info"></td></tr>


  
</table></center>
        </form>
</div></div>

        <?php
        $con = mysqli_connect("localhost","root","")or die("Could not execute query ".mysqli_error($con));
        mysqli_select_db($con,'neerajk')or die("Coudl not select datbase ".mysqli_error($con));
        if(isset($_REQUEST['submit']))
        {
        
            $pi=$_REQUEST['pin'];
            $n=$_REQUEST['name'];
            $ln=$_REQUEST['lastname'];
            $em=$_REQUEST['email'];
            $ps=$_REQUEST['phone'];
            $gn=$_REQUEST['gender'];
            $co=$_REQUEST['country'];
            $st=$_REQUEST['state'];
            $ct=$_REQUEST['city'];
            $ad=$_REQUEST['address'];
            $am=$_REQUEST['amount'];

            $ac="SBI";
            $q="select * from accounts";
            $rs=mysqli_query($con,$q);
            $r=mysqli_fetch_array($rs);
            $x=mysqli_num_rows($rs);
            if($x>0)
            {
                $x++;
                $x=$x+100;
                $ac=$ac.$x;
            }
            else
            
            $ac="SBI101";
            
                $q="insert into accounts values('$ac','$pi','$n','$ln','$em','$ps','$gn','$co','$st','$ct','$ad','$am')";
                $x=mysqli_query($con,$q);
                if($x>0)
                echo "<h2>Accout Opend Succesfully with account  Number $ac</h2>";
                else
                echo "<br>Could not Save Record";
            }
        
        ?>
        </body>
        </html>