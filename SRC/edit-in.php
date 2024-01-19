<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
$pdo = new PDO($connect , user , pass);
$sql = $pdo->prepare('select * from pub, category where pub.pub_id = ? and pub.category_id = category.category_id');
$sql->execute([$_POST['id']]);

foreach ($sql as $row){
    echo '<form action="edit-out.php" method="post">';
    echo '<input type="hidden" name="id" value="', $row['pub_id'] ,'">';
    echo '<div class="e-block">';
    echo '<div class="e-pub-name">店名<input type="text" name="name" value="', $row['pub_name'] ,'"></div>';
    echo '<div class="e-address">住所<input type="text" name="address" value="', $row['address'] ,'"></div>';
    echo '<div class="e-image">画像パス<input type="text" name="image" value="', $row['image'] ,'"></div>';
    echo '<div class="e-visit">行った日にち<input type="text" name="date" value="', $row['visit'] ,'"></div>';
    echo '<div class="e-food-name">おすすめ料理<input type="text" name="food" value="', $row['food_name'] ,'"></div>';
    echo '<div class="e-review"><textarea name="review" cols="50" rows="4" maxlength="200" value="', $row['review'] ,'">',$row['review'],'</textarea></div>';
    echo '<div class="e-button"><button type="submit">更新</button></div>'; 
    echo '</form>';
}
?>

<?php require 'footer.php'; ?>