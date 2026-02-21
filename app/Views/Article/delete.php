<?= $this->extend("layouts/default"); ?>
<?php helper("form"); ?>

<?= $this->section("title"); ?>
    <?= $title; ?>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>
    <h1><?= $title; ?></h1>
    <p>Are you sure?</p>

    <?= form_open(url_to("Article::delete", $article->id)) ?>

        <button>Yes</button>
    </form>

<?= $this->endSection(); ?>