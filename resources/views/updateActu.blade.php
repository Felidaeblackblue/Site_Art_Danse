@extends('layouts.index')
@section('Art Danse', 'Modifier une actualité')
@section('css', 'updateActu')
@section('content')
    <div class="container-fluid centertitle">
        <h1>Modifier une actualité</h1>
        {{-- encoder les données de la requête input file avec enctype --}}
        <form action="/actualites/{{ $article->id }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="image">Image</label>

                <div>
                    <img style="width:100px; height:100px" src="{{ Storage::url($article->image_path) }}" />
                    <input type="file" id="image" name="image" value="{{ $article->image_path }}">
                </div>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="textarea" class="form-control" id="description" name="description"
                    value="{{ $article->description }}">
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>

@endsection
