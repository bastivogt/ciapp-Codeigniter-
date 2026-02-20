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

    <?= form_open(url_to("Article::create")); ?>
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?= old("title"); ?>">

    </div>

    <div>
        <label for="content">Content</label>
        <textarea name="content" id="content"><?= old("content"); ?></textarea>

    </div>

    <div>
        <button>Create</button>
    </div>
    </form>
    <p>
        <a href="<?= url_to("Article::index"); ?>">All articles</a>
    </p>


<?= $this->endSection(); ?>