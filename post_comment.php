<?php  
  
include("config.php");
if(isset($_POST['submit']))  
{  
    $cauth=$_POST['comment_author'];
    $email1=$_POST['email'];
    $comment=$_POST['comment'];
      if($cauth=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter your name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
    if($email1=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter your email')</script>";  
exit();//this use if first is not work then other will not show  
    }  
    if($comment=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please write a message')</script>";  
exit();//this use if first is not work then other will not show  
    }  