<!DOCTYPE html>
<html>
<head>
    <title>Dashboard UAS Keamanan Web</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header>
    <h1>🛡️ Dashboard Simulasi Keamanan Web</h1>
    <p>UAS Keamanan Data dan Informasi (Praktikum)</p>
</header>

<div class="container">

    <h2>🔴 Versi Rentan (Vulnerable)</h2>
    <div class="grid">
        <div class="card vulnerable">
            <h3>🔓 Login</h3>
            <p>Rentan brute force & password lemah</p>
            <a href="vulnerable/login.php">Buka Modul</a>
        </div>

        <div class="card vulnerable">
            <h3>💬 Komentar</h3>
            <p>Rentan XSS</p>
            <a href="vulnerable/comment.php">Buka Modul</a>
        </div>

        <div class="card vulnerable">
            <h3>📂 File Viewer</h3>
            <p>Rentan LFI</p>
            <a href="vulnerable/file.php?file=test.txt">Buka Modul</a>
        </div>
    </div>

    <h2 style="margin-top:40px;">🟢 Versi Aman (Secure)</h2>
    <div class="grid">
        <div class="card secure">
            <h3>🔐 Login Aman</h3>
            <p>Password hashing & rate limiting</p>
            <a href="secure/login.php">Buka Modul</a>
        </div>

        <div class="card secure">
            <h3>🛡️ Komentar Aman</h3>
            <p>CSRF Token & XSS Protection</p>
            <a href="secure/comment.php">Buka Modul</a>
        </div>

        <div class="card secure">
            <h3>📁 File Viewer Aman</h3>
            <p>Whitelist file</p>
            <a href="secure/file.php?file=file1">Buka Modul</a>
        </div>
    </div>

</div>

<div class="footer">
    © 2026 – UAS Keamanan Web | Simulasi Akademik
</div>

</body>
</html>
