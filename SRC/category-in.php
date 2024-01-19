<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<form action="category-out.php" method="post">
<div class="c-block">
<p>カテゴリー名を入力</p>
<p><input type="text" name="category_name"></p>
<p><button type="submit">登録</button></p>
</div>
</form>

<?php require 'footer.php'; ?>