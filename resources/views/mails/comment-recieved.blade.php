<html>


<body>
    <div>
        <h1>Hello {{$author->name}}</h1>
        <p>The user {{$user->name}} has left a comment on your post : {{$post->title}}</p>

        <blockquote>
            {{$comment->body}}
        </blockquote>
    </div>
</body>

</html>