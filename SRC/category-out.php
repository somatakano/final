<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
$pdo = new PDO($connect , user , pass);
$sql = $pdo->prepare('insert into category values ( null , ? )');

$check = $pdo->prepare('select * from category where category_name = ? ');
$check->execute([$_POST['category_name']]);
$count = $check->rowCount();

if($count > 0){
    echo '<p>カテゴリー名は既に登録済みです</p>';
}else{
    $sql->execute([$_POST['category_name']]);
    echo '<p>カテゴリー名を追加しました</p>';
}
?>

<p><a href="insert-in.php">お店を登録する</a></p>
<p><a href="top.php">トップページへ</a></p>

<?php require 'footer.php'; ?>