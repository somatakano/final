<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<?php
$pdo = new PDO($connect , user , pass);
$sql = $pdo->query('select * from pub, category where pub.category_id = category.category_id');

echo '<div class="container">';
foreach( $sql as $row){
    echo '<div class="block">';
    echo '<div class="pub-name">', $row['pub_name'] ,'</div>';
    echo '<div class="address">', $row['address'] ,'</div>';
    echo '<div class="image">', $row['image'] ,'</div>';
    echo '<div class="visit">', $row['visit'] ,'</div>';
    echo '<div class="category">', $row['category_name'] ,'</div>';
    echo '<div class="food-name">', $row['food_name'] ,'</div>';
    echo '<div class="review">', $row['review'] ,'</div>';
    echo '<div class=""><input ';
    echo '</div>';
}
echo '</div>'
?>


<?php require 'footer.php'; ?>