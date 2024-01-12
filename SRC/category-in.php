<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<form action="category-out.php" method="post">
<p>カテゴリー名を入力</p>
<p><input type="text" name="category_name"></p>
<p><button type="submit">登録</button></p>
</form>

<p><a href="insert-in.php">お店を登録する</a></p>
<p><a href="top.php">トップページへ</a></p>

<?php require 'footer.php'; ?>