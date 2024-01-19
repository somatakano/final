<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
$pdo=new PDO($connect, user, pass);

$sql=$pdo->prepare('insert into pub values (null , ? , ? , ? , ? , ? , ? , ?)');
if(empty($_POST['name'])){
    echo '店名を入力してください';
}else if(empty($_POST['address'])){
    echo '住所を入力してください';
}else if(empty($_POST['image'])){
    echo '画像へのパスを入力してください';
}else if(empty($_POST['date'])){
    echo '日付を選択してください';
}else if(empty($_POST['category'])){
    echo 'カテゴリーを選択してください';
}else if(empty($_POST['food'])){
    echo 'おすすめの料理を入力してください';
}else if(empty($_POST['review'])){
    echo 'レビューを入力してください';
}else if($sql->execute([$_POST['name'],$_POST['address'],$_POST['image'],
         $_POST['date'],$_POST['category'],$_POST['food'],$_POST['review']])){
    echo '<p>お店を追加しました</p>';   
}
?>

<?php require 'footer.php'; ?>