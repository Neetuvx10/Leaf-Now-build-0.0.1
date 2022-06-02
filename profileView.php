<?php
    session_start();

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != 1)
	{
		$_SESSION['message'] = "You have to Login to view this page!";
		header("Location: Login/error.php");
	}
?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <title>Profile: <?php echo $_SESSION['Username']; ?></title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
        <meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />

    </head>


    <body>

        <?php
            require 'menu.php';
        ?>

        <section id="one" class="wrapper style1 align">
            <div class="inner">
                <div class="box">
                <header>
                    <center>
                    <span> <!--<img src="<?php echo 'images/profileImages/'.$_SESSION['image'].'?'.mt_rand(); ?>" class="image-circle" class="img-responsive" height="200%"></span>-->
                     <!--<img src="agroculture/images/profileImages/'.$row['profile0.png'].'" class="img-responsive img-thumbnail" style="height:256px;width:256px">'</span>-->
                     <img src="data:image/jpeg;base64,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"
                    <br>
                    <h2><? php echo $_SESSION['Name'];?></h2>
                    <h2 style="color: black;"><?php echo $_SESSION['Username'];?></h2>
                    <br>
                </center>
                </header>
                    <div class="row">
                        <div class="col-sm-3"></div>
                       
                        <div class="col-sm-3">
                            <b><font size="+1" color="black">RATINGS : 4.5 </font></b>
                            <font size="+1"><!--<?php echo $_SESSION['Rating'];?></font>-->
                        </div>
                        <div class="col-sm-3">
                            <b><font size="+1" color="black">EmailID: </font></b>
                            <font size="+1"><?php echo $_SESSION['Email'];?></font>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <b><font size="+1" color="black">Mobile No : </font></b>
                            <font size="+1"><?php echo $_SESSION['Mobile'];?></font>
                        </div>
                        <div class="col-sm-3">
                            <b><font size="+1" color="black">ADDRESS : </font></b>
                            <font size="+1"><?php echo $_SESSION['Addr'];?></font>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                        <div class="12u$">
                            <center>
                                <div class="row uniform">
                                    <div class="3u 12u$(large)">
                                        <a href="changePassPage.php" class="btn btn-danger" style="text-decoration: none;">Change Password</a>
                                    </div>
                                    <div class="3u 12u$(large)">
                                        <a href="profileEdit.php" class="btn btn-danger" style="text-decoration: none;">Edit Profile</a>
                                    </div>
                                    <div class="3u 12u$(xsmall)">
            							<a href="uploadProduct.php" class="btn btn-danger" style="text-decoration: none;">Upload Product</a>
            						</div>
                                    <div class="3u 12u$(large)">
                                        <a href="Login/logout.php" class="btn btn-danger" style="text-decoration: none;">LOG OUT</a>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>



    </body>
</html>
