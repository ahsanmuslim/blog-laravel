@extends('dashboard.layout.main')

@section('container')

<div class="row">

    <div class="container">
        <div class="row my-3">
            <div class="col-md-8">

                <h2 class="mb-2 py-3">{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-sm btn-success"><span data-feather="arrow-left"></span> Back to my all posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger tombol-hapus" data-toggle="tooltip" title='Delete'><span data-feather="x-circle"></span> Delete</button>
                </form>
                
                @if ($post->image)
                    <div class="img-fluid mt-3" style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset("storage/$post->image") }}" class="card-img-top mb-2 mt-3" alt="{{ $post->category->name }}">
                    </div>
                @else    
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top mb-2 mt-3" alt="{{ $post->category->name }}">
                @endif
                
                <article class="my-3">
                    {!! $post->body !!}
                </article>
            
            </div>
        </div>
        
    </div>

</div>


@endsection