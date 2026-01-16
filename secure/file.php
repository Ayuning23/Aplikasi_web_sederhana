<?php
$allowed_files = [
    'file1' => 'files/file1.txt',
    'file2' => 'files/file2.txt'
];

if (isset($_GET['file'])) {
    $key = $_GET['file'];

    if (!array_key_exists($key, $allowed_files)) {
        die("Akses ditolak");
    }

    include($allowed_files[$key]);
}
?>
