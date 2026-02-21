<?= $this->extend("layouts/default"); ?>


<?= $this->section("title"); ?><?= esc($title); ?><?= $this->endSection(); ?>


<?= $this->section("content"); ?>

<h1><?= esc($title); ?></h1>
<p>
    <?= esc($article->content); ?>
</p>
<p>
    <a href="<?= url_to("Article::index"); ?>">All articles</a> |
    <a href="<?= url_to("Article::edit", $article->id); ?>">Edit</a> |
    <a href="<?= url_to("Article::delete", $article->id); ?>">Delete</a>
</p>

<?= $this->endSection(); ?>