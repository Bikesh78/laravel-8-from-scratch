<x-layout>
    <article>
        <!-- <h1><?= $post->title; ?></h1> -->
        <h1>{{$post->title}}</h1>
        <!-- <div><?= $post->body; ?></div> -->
        <div>{!! $post->body!!}</div>
    </article>
</x-layout>
