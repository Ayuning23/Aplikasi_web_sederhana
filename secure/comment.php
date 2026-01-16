<?php
session_start();

if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['token'] !== $_SESSION['token']) {
        die("CSRF terdeteksi");
    }

    $comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');
    echo "<p>Komentar:</p>";
    echo "<div>$comment</div>";
}
?>

<form method="POST">
    <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
    <textarea name="comment"></textarea><br>
    <button type="submit">Kirim</button>
</form>
