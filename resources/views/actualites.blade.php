@extends('layouts.index')
@section('Art Danse', 'Actualités')
@section('css', 'actualite')
@section('content')
    <div class="container-fluid top-page">
        <h1 class="text-center">Actualités</h1>

        <div class="card-group groupe">
            <div class="row container-fluid border-collapse: separate;">
                @foreach ($articles as $article)
                    <div class="card col-sm-4">
                        <img class="size-img img-fluid" src="{{ Storage::url($article->image_path) }}"
                            class="card-img-top" alt="photo">
                        <div class="card-body actu-card">
                            <h5 class="card-title titre">{{ $article->title }}</h5>
                            <p class="card-text description">{{ $article->description }}</p>
                        </div>

                        <div class="card-footer">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>





@endsection
