<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/app.css">
        <script src="/app.js"></script>
        <title>Posts page</title>
    </head>
    <body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <h1>
                <a href="/posts/<?= $post->slug; ?>">
                    <?= $post->name; ?>
                </a>
            </h1>
            <div>
                <?= $post->body; ?>
            </div>
            <h16><?= $post->date; ?></h16>
        </article>
    <?php endforeach; ?>
    </body>
</html>
