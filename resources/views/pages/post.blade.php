<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/app.css">
    <script src="/app.js"></script>
    <title>Post page</title>
</head>
<body>
<article>
    <h1>My first post</h1>
    <p><?=$post->body;?></p>
    <a href="/posts">Go Back</a>
</article>
</body>
</html>
