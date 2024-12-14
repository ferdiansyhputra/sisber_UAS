<?php 

session_start(); // Panggil session_start() hanya di sini

include("koneksi.php"); 

$username = $_POST['username']; 
$password = $_POST['password']; 

// Gunakan query untuk mengambil data pengguna
$sql = "SELECT * FROM user WHERE username = ?"; 
$stmt = $conn->prepare($sql); 
$stmt->bind_param("s", $username); 
$stmt->execute(); 
$result = $stmt->get_result(); 

// Periksa apakah ada hasil dan verifikasi password
if ($result->num_rows > 0) { 
    $user = $result->fetch_assoc(); 
    // Verifikasi password yang di-hash dengan password yang dimasukkan
    if (password_verify($password, $user['password'])) { 
        $_SESSION['username'] = $username; 
        header("Location: ../index.php"); 
    } else { 
        echo "Login gagal. Password salah. <a href='../tampilan/login.php'>Coba lagi</a>"; 
    } 
} else { 
    echo "Login gagal. Pengguna tidak ditemukan. <a href='../tampilan/login.php'>Coba lagi</a>"; 
} 

$conn->close(); 

?>
