@extends('layouts.index')
@section('Art Danse', 'Modifier les actualités')
@section('css', 'actualite')
@section('content')
    <div class="container-fluid centertitle">
        <h1>Espace Administrateur Actualités</h1>
        <div>
            <button><a href="/addActu">Ajouter un article</a></button>
        </div>
        <div class="card-group ">
            <div class="row container-fluid border-collapse: separate;">
                @foreach ($articles as $article)
                    <div class="card col-sm-4 ">
                        <img class="size-img" src="{{ Storage::url($article->image_path) }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->description }}</p>
                        </div>
                        <form action="/updateActu/{{ $article->id }}" method="get">
                            @csrf
                            <input type="hidden" name="id" value={{ $article->id }}>
                            <button class="btn-warning" type="submit"><i class="fas fa-pen"></i></button>
                        </form>
                        <form action="/deleteActu" method="post">
                            @csrf
                            <input type="hidden" name="id" value={{ $article->id }}>
                            <button class="btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                        <div class="card-footer">
                            {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



@endsection
