<!DOCTYPE html>
<html>
<head>
	<!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<title>Admin Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="./styles/admin_login.css">

	<link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/admin_navbar.css">	
	
	<?php require_once "head.php"?>
	
</head>
<style>
    body{
        background-image: url(Image/background4.jpg);
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>
<body>
	
	<header>
        <?php require_once "admin_navbar.php" ?>
    </header>

     <div class="container text-center">
	 	<form action="login_admin.php" method="post">
     		<h2>Admin Login</h2>

     		<?php if (isset($_GET['error'])) { ?>
    	 		<p class="error"><?php echo $_GET['error']; ?></p>
     		<?php } ?>

		 	<div class="input-feild">
            	<i class="fas fa-user"></i>
            	<input type="text" id="uname" name ="uname" placeholder="Username">
        	</div>

        	<div class="input-feild">
            	<i class="fas fa-lock"></i>
            	<input type="password" id="password" name="password" placeholder="Password">
			</div>
		
     		<button type="submit">Login</button>
     	</form>
	 </div>
	 <br>
	 <br>

	

	<?php require_once "footer.php" ?>
    <?php require_once "script.php" ?>
	
</body>
</html>