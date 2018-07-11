<!DOCTYPE>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
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
                                        <h1><a href="index.html" id="logo">.S.H.E.</a></h1>

                                    <!-- Nav -->
                                        <?php  
  
                          include("navmenu.php");
                          ?>

                                </div>
                            </header>
            
                    </div>
                </div>
  
        <body>  
          
          
        <div class="container">  
            <div class="row">  
                <div class="col-md-4 col-md-offset-4">  
                    <div class="login-panel panel panel-success">  
                        <div class="panel-heading">  
                            <h3 class="panel-title">Sign In</h3>  
                        </div>  
                        <div class="panel-body">  
                            <form role="form" method="post" action="login.php">  
                                <fieldset>  
                                    <div class="form-group"  >  
                                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus>  
                                    </div>  
                                    <div class="form-group">  
                                        <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                                    </div>  
          
  
                                     <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >  
                      <br>
                      <br>
                      <br>
                            <!-- Change this to a button or input when using this as a form -->  
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                        </fieldset>  
                    </form>  
                     <center><b>want to register ?</b> <br></b><a href="Registration.php">Register here</a></center>
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