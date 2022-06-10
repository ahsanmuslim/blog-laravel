@extends('layout.main')


@section('container')


<div class="container">
    <h2 class="mb-2 py-3">{{ $post->title }}</h2>

    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">

    <article class="mt-3">
        <p>By. <a href="/posts?authors={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?=cate/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    </article>

    {!! $post->body !!}
    
    <br><br>
    <a href="/posts">Back to posts</a>
</div>


@endsection