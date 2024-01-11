<?php session_start() ?>
<?php require 'header.php'; ?>

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
        <select name="category">
            <option value="1">居酒屋</option>
            <option value="2">和食</option>
        </select>
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