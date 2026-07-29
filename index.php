<?php
// Cek apakah sedang di root (bukan di halaman lain)
if ($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index.php') {
    header("Location: https://www.youtube.com/watch?v=eTM0t7Nnz_0&list=RDeTM0t7Nnz_0&start_radio=1", true, 301);
    exit();
}
?>
