<?php  
session_start();//session starts here  
?>

  <link type="text/css" rel="stylesheet" href="caret.css">
<!-- Nav -->
										<nav id="nav" >
											<ul>
												
												<li>
													<a href="index.php">Home </a>
													<ul>
														<li><a href="index.php#link2">About Us</a></li>
														
														<li><a href="#footer-wrapper">Contact us</a></li>
													</ul>
												</li>
												<li><a href="jobcreation.php">Create job</a></li>
												<li><a href="apply1.php">Apply for job</a></li>
												<li>
												<?php if ((isset($_SESSION['User'])==false) || ($_SESSION['User']=='')){
        echo '<a href="SignIn.php"> Login</a>';}
        else{
          echo '<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hi, '.$_SESSION['User'].'
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Logout.php">Logout</a></li>
        </ul>
      </li> ';
        }?>
													</li>


											</ul>
										</nav>

<button onclick="topFunction()" id="myBtn" title="Go to top"  class="button big icon fa-arrow-circle-up" style="display: none;
  position: fixed;
  bottom: 2vmax;
  right: 2vmax;
  z-index: 99;
  font-size: 18px;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;" >Top</button>