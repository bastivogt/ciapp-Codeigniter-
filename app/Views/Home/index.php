<?= $this->extend("layouts/default") ?>



<?= $this->section("title") ?>
    <?= $title; ?>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>
    <h1><?= $title; ?></h1>
    <p><?= $content; ?></p>
<?= $this->endSection(); ?>

