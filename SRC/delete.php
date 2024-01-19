<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
$pdo = new PDO($connect , user , pass);
$sql = $pdo->prepare('delete from pub where pub_id = ?');
if($sql->execute([$_POST['id']])){
    echo '削除が完了しました';
}else{
    echo '削除できませんでした';
}
?>

<?php require 'footer.php'; ?>