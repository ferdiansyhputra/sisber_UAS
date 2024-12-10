<?php 

session_start(); 

if (!isset($_SESSION['username'])) { 

 header("Location: login.php"); 

} 

?> 

<!DOCTYPE html> 

<html lang="en"> 

<head> 

 <meta charset="UTF-8"> 

 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <link href="../css/bootstrap.min.css" rel="stylesheet">

 <title>Welcome</title> 

</head> 

<body> 

 <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2> 

 <p><a href="../proses/proses_logout.php">Logout</a></p> 

</body> 
<script src="../js/bootstrap.bundle.min.js"></script>
</html>