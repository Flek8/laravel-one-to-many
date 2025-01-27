@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>Modifica post</h1>

                <form method="POST" action="{{route('admin.posts.update', $post->id)}}">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select class="form-control" name="category_id" id="category_id">

                            <option value="">Nessuna Categoria</option>

                            @foreach ($categories as $category)
                                <option {{(old('category_id', $post->category_id) == $category->id) ? 'selected': ''}} value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{old('title', $post->title)}}">
                    </div>

                    <div class="form-group">
                        <label for="content">Contenuto del post</label>
                        <textarea class="form-control" name="content" id="content">{{old('content', $post->content)}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Salva</button>

                </form>
            </div>

        </div>
    </div>    

@endsection