@extends('layout.main')


@section('container')

<div class="container p-3">
    <h2 class="mb-4 text-center">{{ $title }}</h2>
    
    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <form action="/posts">

                @if (request('category'))
                    <input type="hidden" name='category' value={{ request('category') }}>
                @endif

                @if (request('author'))
                    <input type="hidden" name='author' value={{ request('author') }}>
                @endif

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari artikel..." name="cari">
                    <button class="btn btn-danger">Cari</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        
    <div class="card mb-3 text-center">
        @if ($posts[0]->image)
            <div class="img-fluid mt-3" style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/'.$posts[0]->image) }}" class="card-img-top mb-2 mt-3" alt="{{ $posts[0]->category->name }}">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        @endif
        <div class="card-body">
            <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
            <p>
                <small class="text-muted">
                    By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }} </a>{{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more....</a>
        </div>
    </div>
    
    <div class="container">


        <div class="row">

            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.5)">
                        <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }} </a>
                    </div>
                    @if ($post->image)
                        <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @else
                        <img src="https://source.unsplash.com/500x500/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                        <small class="text-muted">
                            <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</p> 
                        </small>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more....</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    @else
    <p class="text-center fs-1">No posts found</p>    
    @endif

    {{ $posts->links() }}

</div>

@endsection