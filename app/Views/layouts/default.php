<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">    
    <link rel="stylesheet" href="/css/style.css">
        
    <title>CIApp - <?= $this->renderSection("title") ?></title>
</head>
<body>
    <?php if(session()->has("message")): ?>
        <section>
            <p><?= session("message"); ?></p>
        </section>
        
    <?php endif; ?>
    <main>
        <?= $this->renderSection("content"); ?>
    </main>

    <script src="/js/app.js"></script>
</body>
</html>