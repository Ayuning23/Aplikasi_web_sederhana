<?php
session_start();

$hashed_password = password_hash("admin123", PASSWORD_BCRYPT);

if (!isset($_SESSION['attempt'])) {
    $_SESSION['attempt'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_SESSION['attempt'] >= 5) {
        die("Terlalu banyak percobaan login");
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && password_verify($password, $hashed_password)) {
        $_SESSION['attempt'] = 0;
        echo "<p>Login berhasil</p>";
    } else {
        $_SESSION['attempt']++;
        echo "<p>Login gagal</p>";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Login</button>
</form>
