@extends('layouts.index')
@section('Art Danse', 'Ajouter un article')
@section('css', 'updateActu') 
@section('content')

<div class="container-fluid centertitle">
    <h1>Ajouter un nouvel article</h1>
    <form action="/actualites" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="image">Ajouter une image</label>
            <div>
                <input type="file" id="image" name="image" value="">
            </div>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title" name="title" value="">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="textarea" class="form-control" id="description" name="description" value="">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>


@endsection
