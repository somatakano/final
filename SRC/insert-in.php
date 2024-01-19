<?php session_start() ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<form action="insert-out.php" method="post">
    <div class="i-block">
    <div class="i-pub_name">店名
        <input type="text" name="name">
    </div>
    <div class="i-address">住所
        <input type="text" name="address">
    </div>
    <div class="i-image">画像
        <input type="text" name="image">
    </div>
    <div class="i-visit">行った日にち
        <input type="date" name="date">
    </div>
    <div class="i-category">カテゴリー
        <?php
        $pdo = new PDO($connect , user , pass);
        echo '<select name="category">';
        echo '<option hidden>カテゴリーを選択</option>';
        foreach($pdo->query('select * from category') as $row){
            echo '<option value="' , $row['category_id'] ,'">', $row['category_name'] ,'</option>';
        }
        echo '</select>';
        ?>
        <a href="category-in.php">カテゴリーを追加</a>
    </div>
    <div class="i-food-name">おすすめの料理
        <input type="text" name="food">
    </div>
    <!-- 感想 -->
    <div class="i-review"><textarea name="review" placeholder="レビュー" cols="50" rows="4" maxlength="200"></textarea></div>

    <div class="i-button"><button type="submit">登録する</button></div>
    </div>
</form>

<?php require 'footer.php'; ?>