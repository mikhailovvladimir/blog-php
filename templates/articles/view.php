<?php include __DIR__ . '/../header.php'; ?>
<?php var_dump($article); exit; ?>
    <h1><?= $article->getName() ?></h1>
    <p><?= $article->getText() ?></p>
<?php include __DIR__ . '/../footer.php'; ?>