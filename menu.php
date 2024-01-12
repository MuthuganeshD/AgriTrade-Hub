<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "Login/profile.php";
		}
		else {
				$link = "profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
			<header id="header">
				<h1><a href="index.php">AgroTrade Hub</a></h1>
				<nav id="nav " >
					<ul  >
						<li><a href="index.php" style="color:white ;font-weight:400"> Home</a></li>
						<li><a style="color:white;font-weight:400" href="market.php"> Market</a></li>
						<li><a href="myCart.php"style="color:white;font-weight:400"> MyCart</a></li>
						<li><a style="color:white;font-weight:400" href="<?= $link; ?>"><?php echo" ". $loginProfile; ?></a></li>
						<li><a style="color:white; font-weight:400" href="blogView.php"> Report</a></li>
					</ul>
				</nav>
			</header>

	</body>
</html>
