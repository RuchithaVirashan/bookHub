
<!DOCTYPE html>
<html>
<head>
	<title>Admin-Home</title>
	<link rel="stylesheet" type="text/css" href="./styles/admin_login.css">
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

    $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         fclose( $file );
</style>
<body>

<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout_admin.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: admin_login.php");
     exit();
}
 ?>