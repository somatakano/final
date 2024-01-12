<?php session_start() ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>

<form action="insert-out.php" method="post">
    <p>店名
        <input type="text" name="name">
    </p>
    <p>住所
        <input type="text" name="address">
    </p>
    <p>画像
        <input type="text" name="image">
    </p>
    <p>行った日にち
        <input type="date" name="date">
    </p>
    <p>カテゴリー
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
    </p>
    <p>おすすめの料理
        <input type="text" name="food">
    </p>
    <p>感想
        <input type="text" name="review">
    </p>
    <p><button type="submit">登録する</button></p>
</form>

<?php require 'footer.php'; ?>