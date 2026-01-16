<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php enhancement with laracast</title>
</head>
<body>
<h1>Let's enhanced php</h1>
<ul>
    <?php foreach ($filteredBooks as $book): ?>
        <li>
            <a href="<?= $book["purchaseUrl"]; ?>">
                <?= $book["title"]; ?> By <?= $book["author"]; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
