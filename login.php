<?php  
session_start();//session starts here  

  
include("config.php");  
  
if(isset($_POST['login']))  
{  
    $uname=$_POST['username'];  
    $pass=$_POST['pass'];  
  
    $check_user="select * from signup WHERE Username='$uname'AND Password='$pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run)>0)  
    {  
        echo "<script>window.open('index.php','_self')</script>";  
  
        $_SESSION['User']=$uname;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>window.open('SignIn.php','_self')
      alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  