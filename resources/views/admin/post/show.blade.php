@extends('admin.layouts.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>Visualizza Post</h1>

                <div><strong>Titolo</strong> {{$post->title}}</div>
                <div><strong>Contenuto</strong> {{$post->content}}</div>
                <div><strong>Slug</strong> {{$post->slug}}</div>
                <div><strong>Categoria</strong> {{$post->category->name}}</div>
                <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-secondary">Modifica</a>

            </div>

        </div>

    </div>
    
@endsection