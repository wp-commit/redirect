"<?php
// Cek apakah sedang di root (bukan di halaman lain)
if ($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index.php') {
    header(""Location: https://youtube.com"", true, 301);
    exit();
}
?>"