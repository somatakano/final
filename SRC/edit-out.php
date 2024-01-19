<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
$pdo = new PDO($connect , user , pass);
$sql = $pdo->prepare('update pub set pub_name=?, address=?, image=?, visit=?, food_name=?, review=? where pub_id=?');
$sql->execute([htmlspecialchars($_POST['name']), $_POST['address'], $_POST['image'], $_POST['date'], $_POST['food'], $_POST['review'], $_POST['id']]);
echo '<p>更新が完了しました</P>';
?>

<?php require 'footer.php'; ?>