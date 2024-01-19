<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
$pdo = new PDO($connect , user , pass);
$sql = $pdo->query('select * from pub, category where pub.category_id = category.category_id');

echo '<div class="top-container">';
foreach( $sql as $row){
    echo '<div class="t-block">';
    echo '<div class="t-pub-name">', $row['pub_name'] ,'</div>';
    echo '<div class="t-address">', $row['address'] ,'</div>';
    echo '<div class="t-image"><img src="', $row['image'] ,'"></div>';
    echo '<div class="t-visit">', $row['visit'] ,'</div>';
    echo '<div class="t-category">', $row['category_name'] ,'</div>';
    echo '<div class="t-food-name">', $row['food_name'] ,'</div>';
    echo '<div class="t-review">', $row['review'] ,'</div>';

    echo '<form action="edit-in.php" method="post">';
    echo '<input type="hidden" name="id" value="', $row['pub_id'] ,'">';
    echo '<div class="e-button"><button type="submit">更新</button></div>';
    echo '</form>';
    echo '<form action="delete.php" method="post">';
    echo '<input type="hidden" name="id" value="', $row['pub_id'] ,'">';
    echo '<div class="d-button"><button type="submit">削除</button></div>';
    echo '</form>';
    echo '</div>';
}
echo '</div>'
?>

<?php require 'footer.php'; ?>