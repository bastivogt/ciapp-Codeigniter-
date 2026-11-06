<?= $this->extend("layouts/default"); ?>
<?php helper("form"); ?>

<?= $this->section("title"); ?>
    <?= $title; ?>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>
    <h1><?= $title; ?></h1>
    <p>Are you sure?</p>

    <?= form_open(url_to("ArticleController::destroy", $article->id)) ?>
        <input type="hidden" name="_method" value="DELETE">
        <button>Yes</button>
    </form>
    <p>
        <a href="<?= url_to("ArticleController::index"); ?>">All articles</a>
    </p>
<?= $this->endSection(); ?>