<?php  
  
include("config.php");//make connection here  
if(isset($_POST['register']))  
{  
    $fname=$_POST['name'];
    $uname=$_POST['username'];
    $pass=$_POST['pass'];
    $email = $_POST['email'];
    $add = $_POST['add'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pincode=$_POST['pincode'];  
    $phoneNo=$_POST['phoneNo']; 
    $sex=$_POST['sex'];//same  
    $occ = $_POST['occ'];
  
    if($fname=='')  
    {  
       echo '<script>'; 
    echo 'alert("please enter your name");'; 
    echo 'window.location.href = "Registration.php";';
    echo '</script>';
    exit();
    //this use if first is not work then other will not show  
    }  
      if($uname=='')  
    {  
      echo '<script>'; 
    echo 'alert("please enter your username");'; 
    echo 'window.location.href = "Registration.php";';
    echo '</script>';
    exit();
    }  
    if($pass=='')  
    {  
         echo '<script>'; 
    echo 'alert("please enter your password");'; 
    echo 'window.location.href = "Registration.php";';
    echo '</script>';
    exit();
    }  
    if($email=='')  
    {  
        echo '<script>'; 
    echo 'alert("please enter email your address");'; 
    echo 'window.location.href = "Registration.php";';
    echo '</script>';
    exit();
    }  
    if($add=='')  
    {  
        echo '<script>'; 
    echo 'alert("please enter your address");'; 
    echo 'window.location.href = "Registration.php";';
    echo '</script>';
    exit();
    }  
  
    if($city=='')  
    {  
        echo '<script>'; 
    echo 'alert("please enter your city");'; 
    echo 'window.location.href = "Registration.php";';
    echo '</script>';
    exit(); 
    }  
    if($state=='')  
    {  
        echo '<script>'; 
    echo 'alert("please enter your state");'; 
    echo 'window.location.href = "Registration.php";';
    echo '</script>';
    exit(); 
    }  

  
    if($country=='')  
    {  
       echo '<script>'; 
    echo 'alert("please enter your country");'; 
    echo 'window.location.href = "Registration.php";';
    echo '</script>';
    exit(); 
    }  
    if($pincode=='' ) 
    {  
         echo '<script>'; 
    echo 'alert("please enter correct pincode");'; 
    echo 'window.location.href = "Registration.php";';
    echo '</script>';
    exit(); 
    }  
    if($phoneNo=='' )  
    {  
       echo '<script>'; 
    echo 'alert("please enter correct phone no.");'; 
    echo 'window.location.href = "Registration.php";';
    echo '</script>';
    exit(); 
    } 
    if($sex=='')  
    {  
        echo '<script>'; 
    echo 'alert("please enter your sex ");'; 
    echo 'window.location.href = "Registration.php";';
    echo '</script>';
    exit(); 
    } 
    if($occ=='')  
    {  
       echo '<script>'; 
    echo 'alert("please enter your occupation");'; 
    echo 'window.location.href = "Registration.php";';
    echo '</script>';
    exit(); 
    }    
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from signup WHERE Username='$uname'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  

        echo '<script>'; 
    echo "alert('username $uname is already exist in our database, Please try another one!');"; 
    echo 'window.location.href = "Registration.php";';
    echo '</script>';
echo "<script>alert()</script>";  
exit();  
    }
   

//insert the user into the database.  
    $insert_user="INSERT INTO `signup`(`Name`, `Username`, `Password`, `Email`, `Address`, `City`, `State`, `Country`, `Pincode`, `Mobile No.`, `sex`, `Occupation`) VALUES ('$fname', '$uname', '$pass',  '$email' , '$add',  '$city' ,'$state',   '$country', '$pincode' , '$phoneNo' , '$sex' , '$occ')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('index.php','_self')</script>";  
    }  
    else
    echo mysqli_error($dbcon);

  
}  
  
?>  