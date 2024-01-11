<?php session_start() ?>
<?php require 'header.php'; ?>

<form action="insert-out.php" method="post">
    <p>店名
        <input type="text" name="name">
    </p>
    <p>住所
        <input type="text" name="address">
    </p>
    <p>画像
        <input type="text" name="image">
    </p>
    <p>行った日にち
        <input type="date" name="date">
    </p>
    <p>カテゴリー</p>
</form>

<?php require 'footer.php'; ?>