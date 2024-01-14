<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<p><a href="insert-in.php">お店を登録する</a></p>

<?php
$pdo = new PDO($connect , user , pass);
$sql = 
?>

<?php require 'footer.php'; ?>