@extends ('layout')

@section("head")
<h1>Detailed post</h1>
@endsection

@section ('content')

<article>
    <!-- <h1><?= $post->title; ?></h1> -->
    <h1>{{$post->title}}</h1>
    <!-- <div><?= $post->body; ?></div> -->
    <div>{!! $post->body!!}</div>
</article>

@endsection
