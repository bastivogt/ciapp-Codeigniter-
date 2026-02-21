    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?= old("title", esc($article->title)); ?>">

    </div>

    <div>
        <label for="content">Content</label>
        <textarea name="content" id="content"><?= old("content", esc($article->content)); ?></textarea>

    </div>

    <div>
        <button>Save</button>
    </div>