<?= $this->extend("layouts/default"); ?>

<?= $this->section("title"); ?>
    <?= $title; ?>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>
    <p>
        <a href="<?= url_to("ArticleController::new"); ?>">Create new article</a>
    </p>
    <h1><?= esc($title); ?></h1>

    <ul>
        <?php foreach($articles as $article): ?>
            <li>
                <a href="<?= url_to("ArticleController::show", $article->id) ?>"><?= esc($article->title); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>


<?= $this->endSection(); ?>