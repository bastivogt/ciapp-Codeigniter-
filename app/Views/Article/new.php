<?= $this->extend("layouts/default"); ?>
<?php helper("form"); ?>

<?= $this->section("title"); ?>
    <?= $title; ?>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>
    <h1><?= $title; ?></h1>

    <?php if(session()->has("errors")): ?>
        <ul>
            <?php foreach(session("errors") as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?= form_open(url_to("ArticleController::create")); ?>
        <?= $this->include("Article/form"); ?>
    </form>
    <p>
        <a href="<?= url_to("ArticleController::index"); ?>">All articles</a>
    </p>


<?= $this->endSection(); ?>