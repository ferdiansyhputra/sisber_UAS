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
 <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

 <title>Welcome</title> 

</head> 

<body> 

 <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2> 

 <p><a href="../proses/proses_logout.php">Logout</a></p> 

</body> 
<script src="../js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>