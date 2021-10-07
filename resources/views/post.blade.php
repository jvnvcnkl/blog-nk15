<html>

<head>
    <title> {{$post->title}}</title>
</head>

<body>
    <a href="/posts">Go to posts page</a>
    <h2>
        {{$post->title}}
    </h2>
    <div>
        {{$post->body}}
    </div>
</body>

</html>