<?php  
  
include("config.php");//make connection here  
if(isset($_POST['create']))  
{  
    $oname=$_POST['ownername'];
    
    $jname=$_POST['jobname'];
    $des=$_POST['des'];
    $jtype = $_POST['jobtype'];
   
    $jcat = $_POST['jobcategory'];
    $keywords = $_POST['keywords'];
    $check_user="select * from signup WHERE Username='$oname'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run)>0)  
    { 
        $row = mysqli_fetch_assoc($run); 
        $pin= $row["Pincode"];
        $oemail = $row["Email"];
     }  
    if($jtype == 'local')
        $pincode = $pin;
      if($jname=='')  
    {  
         echo '<script>'; 
    echo 'alert("Please enter the jobname");'; 
    echo 'window.location.href = "jobcreation.php";';
    echo '</script>';
    exit();
    }  
    if($des=='')  
    {  
         echo '<script>'; 
    echo 'alert("Please enter the description of your job");'; 
    echo 'window.location.href = "jobcreation.php";';
    echo '</script>'; 
    exit();
    }  
    if($jtype=='')  
    {  
         echo '<script>'; 
    echo 'alert("Please choose the job type");'; 
    echo 'window.location.href = "jobcreation.php";';
    echo '</script>';
    exit();
    }  
     
    if($jcat=='')  
    {  
         echo '<script>'; 
    echo 'alert("Please choose the category type");'; 
    echo 'window.location.href = "jobcreation.php";';
    echo '</script>';
    exit(); 
    }  
      if($keywords=='')  
    {  
         echo '<script>'; 
    echo 'alert("Please choose some keywords");'; 
    echo 'window.location.href = "jobcreation.php";';
    echo '</script>';
    exit();
    }  
    
//insert the user into the database.  
    $insert_user="INSERT INTO `jobs`(`OwnerName`, `JobName`,`owneremail`, `Description`, `JobLocation`, `Pincode`, `Category`,`Jdate`,`Keywords`) VALUES ('$oname', '$jname', '$oemail', '$des','$jtype', '$pin','$jcat', NOW(),'$keywords')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('index.php','_self')
            alert('Job created.')
        </script>";  
    }  
  
  else
    echo mysqli_error($dbcon);
}  
?>  