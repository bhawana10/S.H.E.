<!DOCTYPE>
<html>
    <head>
        <title>Apply</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="assets/css/search.css" />
        <script src="assets/js/user.js"></script>
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    <body class="no-sidebar">
        <div id="page-wrapper">

            <!-- Header Wrapper -->
                <div id="header-wrapper">
                    <div class="container">

                        <!-- Header -->
                            <header id="header">
                                <div class="inner">
                                    <!-- Logo -->
                                        <h1><a id="logo">.S.H.E.</a></h1>
                                    <!-- Nav -->
                                        <?php  
                                         include("navmenu.php");
                                        ?>
                                </div>
                            </header>
                            
                <div id="main-wrapper">
                    <div class="wrapper style2">
                        <div class="inner">
                            <div class="container">
                                <div id="content">
                                    <!-- Content -->
                                        <article>
                                            <header class="major">
                                                <h2>Opportunities</h2>
                                                        
                                                    <div id="form">
                                                        <form method ="get" action="apply2.php" enctype="multiport/form-data">
                                                             <input type="text" name="user_query" placeholder="type to search job" />
                                                            <input type="submit" name="search" value="Search"/>
                                                        </form>
                                                    </div>
                                                   <br><br> <br><br> <br><br>
                                            </header>                                                   
                                            <div class="panel-body">      
                  <?php
                    include("config.php");  
                    $unamee=$_SESSION['User'];
                    $check_user = "SELECT Pincode from signup WHERE `Username`='$unamee'";  
                    $run=mysqli_query($dbcon,$check_user);  
  
                    if(mysqli_num_rows($run)>0)  
                    { 
                        $row = mysqli_fetch_assoc($run); 
                        $pin= $row["Pincode"]; 
                     }  
                     $query = "SELECT * FROM jobs WHERE (`pincode`=$pin and `JobLocation`='local') or `JobLocation`='anywhere' ";
                        $query_run = mysqli_query($dbcon,$query);

                        if ($query_run)
                        {
                            while($query_row = mysqli_fetch_assoc($query_run))
                            {
               
                                $owname = $query_row['OwnerName'];
                                $jobn = $query_row['JobName'];
                                $desc = $query_row['Description'];
                                $category = $query_row['Category'];
                                $oemail=$query_row['owneremail'];
                                
                                echo "<strong>OwnerName: </strong>" . $owname . "<br><br>" ;
                                echo "<strong>JobName: </strong>" . $jobn . "<br><br>" ;
                                echo "<strong>Description: </strong>" . $desc . "<br><br>" ;
                                echo "<strong>Category: </strong>" . $category. "<br><br>" ;
                                $job=explode(" ", $jobn);
                                echo'<a href=mailto:'.$oemail.'?Subject=Application%20for%20';
                                foreach($job as $v)
                                    echo $v.'%20';
                                echo ' " target="_top"><button>APPLY</button></a>';
                                echo "<hr>";
                                
                                if(isset($_POST[''])) {
                          
                                     echo "hello";
                                }
                                }
                                }

                        else 
                        {
                            echo mysql_error();
                        }



                    ?>
                                                </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                                
                </div>

        
                        <!-- Footer Wrapper -->
                <div id="footer-wrapper">
                    <footer id="footer" class="container">
                        <div class="row">
                            <div class="3u 12u(mobile)">

                                
                            </div>
                            <div class="6u 12u(mobile)">

                                <!-- About -->
                                    <section>
                                        <a href="mailto: admin@gmail.com" class="button alt icon fa-arrow-circle-right">contact</a>
                                    </section>

                                <!-- Contact -->
                                    <section>
                                        <h2>Get in touch</h2>
                                        <div>
                                            <div class="row">
                                                <div class="6u 12u(mobile)">
                                                    <dl class="contact">
                                                        <dt>Twitter</dt>
                                                        <dd><a href="#">@untitled-corp</a></dd>
                                                        <dt>Facebook</dt>
                                                        <dd><a href="#">facebook.com/untitled</a></dd>
                                                        <dt>WWW</dt>
                                                        <dd><a href="#">untitled.tld</a></dd>
                                                        <dt>Email</dt>
                                                        <dd><a href="#">user@untitled.tld</a></dd>
                                                    </dl>
                                                </div>
                                                <div class="6u 12u(mobile)">
                                                    <dl class="contact">
                                                        <dt>Address</dt>
                                                        <dd>
                                                            1234 Fictional Rd<br />
                                                            Lucknow<br />
                                                            India
                                                        </dd>
                                                        <dt>Phone</dt>
                                                        <dd>(000) 000-0000</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                            </div>
                        </div>
                        <div class="row">
                            <div class="12u">
                                <div id="copyright">
                                    <ul class="menu">
                                        <li>&copy; Untitled. All rights reserved</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>

        </div>
<!-- Scripts -->

            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.dropotron.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/skel-viewport.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>

    </body>
</html>