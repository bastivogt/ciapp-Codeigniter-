<?= $this->extend("layouts/default"); ?>


<?= $this->section("title"); ?><?= esc($title); ?><?= $this->endSection(); ?>


<?= $this->section("content"); ?>

<h1><?= esc($title); ?></h1>
<p>
    <?= esc($article["content"]); ?>
</p>
<p>
    <a href="<?= url_to("Article::index"); ?>">All articles</a>
</p>

<?= $this->endSection(); ?>