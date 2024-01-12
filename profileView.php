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
        <style>
            .box{
              margin:0;
                
                padding: 10px;
                background-color: white;}
  
            
        </style>

    </head>


    <body >

        <?php
            require 'menu.php';
        ?>

        <section id="one" class=" style1 align" style="background-color:black">
            <div class="inner">
                <div class="box" >
                <header>
                    <center>
                    <span><img src="<?php echo 'images/profileImages/'.$_SESSION['picName'].'?'.mt_rand(); ?>" class="image-circle" class="img-responsive" height="200%"></span>
                    <br>
                    <h2 style="color: red; font-size: 40px; font-weight:bold;"><?php echo $_SESSION['Name'];?></h2>
                    <h4 style="color: green; font-size: 30px; font-weight:bold;"><?php echo $_SESSION['Username'];?></h4>
                    <br>
                </center>
                </header>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-2"style="background-color:white;width:310px; border-radius:30px ;margin-right:100px" >
                            <b><font size="+2" color="red">RATINGS : </font></b>
                            <font size="+2" color="black"><?php echo $_SESSION['Rating'];?></font>
                        </div>
                        <div class="col-sm-3" style="background-color:white; border-radius:30px ;width:500px ;margin-right:100px">
                            <b><font size="+2" color="red" font-weight: "bold">Email ID : </font></b>
                            <font size="+2" color="black"><?php echo $_SESSION['Email'];?></font>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3 " style="background-color:white;width:310px; border-radius:30px;margin-right:100px">
                            <b><font size="+2" color="red">Mobile No : </font></b>
                            <font size="+2" color="black"><?php echo $_SESSION['Mobile'];?></font>
                        </div>
                        <div class="col-sm-3" style="background-color:white;width:380px; border-radius:30px">
                            <b><font size="+2" color="red" >ADDRESS : </font></b>
                            <font size="+2" color="black"><?php echo $_SESSION['Addr'];?></font>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                        <div class="12u$">
                            <center>
                                <div class="row uniform" >
                                    <div class="3u 12u$(large)" style="margin-right:50px">
                                        <a href="changePassPage.php" class="btn btn-danger" style="text-decoration: none;">Change Password</a>
                                    </div>
                                    <!-- <div class="3u 12u$(large)">
                                        <a href="profileEdit.php" class="btn btn-danger" style="text-decoration: none;">Edit Profile</a>
                                    </div> -->
                                    <div class="3u 12u$(xsmall)"style="margin-right:50px">
            							<a href="uploadProduct.php" class="btn btn-danger" style="text-decoration: none;">Upload Product</a>
            						</div>
                                    <div class="3u 12u$(large)"style="right:0">
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
