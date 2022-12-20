<?php 
include '../classes/Adminlogin.php' ;

?>
<?php

$al = new Adminlogin() ;
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$adminuser = $_POST['adminUser'] ;
		$adminpass = md5($_POST['adminPass']) ;


		$loginchk = $al->AdminLogin($adminuser , $adminpass);
	}

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<span style = "color:red ; font-size:18px">
				<?php
					if( isset($loginchk) ){
						echo $loginchk ;
					}
				?>
			</span>
			<div>
				<input type="text" placeholder="Username" required="" name="adminUser"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="adminPass"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>