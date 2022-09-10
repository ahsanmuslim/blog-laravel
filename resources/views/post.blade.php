@extends('layout.main')


@section('container')


<div class="container">
    <h2 class="mb-2 py-3">{{ $post->title }}</h2>

    @if ( $post->image )
        <div class="img-fluid mt-3" style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset("storage/$post->image") }}" class="card-img-top mb-2 mt-3" alt="{{ $post->category->name }}">
        </div>
    @else        
        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
    @endif


    <article class="mt-3">
        <p>By. <a href="/posts?authors={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?=cate/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    </article>

    {!! $post->body !!}
    
    <br><br>
    <a href="/posts">Back to posts</a>
</div>


@endsection