<!doctype html>

<title>Detailed Post</title>
<link rel="stylesheet" href="/app.css" />


<body>
    <article>
        <!-- <h1><?= $post->title; ?></h1> -->
        <h1>{{$post->title}}</h1>
        <!-- <div><?= $post->body; ?></div> -->
        <div>{!! $post->body!!}</div>
    </article>
</body>
