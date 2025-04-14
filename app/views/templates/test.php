<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List nhan vien</title>
</head>
<body>

<?php foreach ($posts as $post) : ?>
    <div>
        <h2><?php echo $post ['id'] ?></h2>
        <p><?php echo $post ['email'] ?></p>
        <p><?php echo $post ['password'] ?></p>
        <p><?php echo $post ['role'] ?></p>
    </div>
<?php endforeach; ?>


</body>
</html>