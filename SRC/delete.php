<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
$pdo = new PDO($connect , user , pass);
$sql = $pdo->prepare('delete from pub where pub_id = ?');
if($sql->execute([$_POST['id']])){
    echo '<p>削除が完了しました</p>';
}else{
    echo '<p>削除できませんでした</p>';
}
?>

<?php require 'footer.php'; ?>