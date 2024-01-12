<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
$pdo=new PDO($connect, user, pass);

$sql=$pdo->prepare('insert into pub values (null , ? , ? , ? , ? , ? , ? , ?)');
$sql->execute([$_POST['name'],$_POST['address'],$_POST['image'],
              $_POST['date'],$_POST['category'],$_POST['food'],$_POST['review']]);
?>

<p><a href="top.php">トップページへ</a></p>

<?php require 'footer.php'; ?>