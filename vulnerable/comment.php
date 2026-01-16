<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment = $_POST['comment'];
    echo "<p>Komentar:</p>";
    echo "<div>$comment</div>";
}
?>

<form method="POST">
    <textarea name="comment"></textarea><br>
    <button type="submit">Kirim</button>
</form>
