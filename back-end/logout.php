<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session
session_destroy();

// menghapus semua cookie
$hour = time() - 3600 *24 * 30;
setcookie('username', '', $hour);
setcookie('active', '', $hour);
 
// mengalihkan halaman sambil mengirim pesan logout
header("location: ../index.php?pesan=logout");
?>