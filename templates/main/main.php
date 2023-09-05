<?php include __DIR__ . '/../header.php'; ?>
    <?php foreach ($list as $article): ?>
        <h2><?= $article['name'] ?></h2>
        <p><?= $article['text'] ?></p>
        <hr>
    <?php endforeach; ?>
<?php include __DIR__ . '/../footer.php'; ?>