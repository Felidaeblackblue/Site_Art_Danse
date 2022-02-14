@extends('layouts.index')
@section('Art Danse', 'Activités et Tarifs')
@section('css', 'tarifs')
@section('content')
    <div class="container-fluid welcome">
        <h2 class="title">Activités et tarifs</h2>
        <p>Nous proposons des cours pour tous les niveaux.</p>
        <p>Peu importe votre niveau l'important c'est de s'amuser !</p>
    </div>


    <div class="cartes container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card danse">
                    <img src="./images/Afro.png" class="card-img-top img-fluid pictures" alt="danse">
                    <div class="card-body">
                        <h5 class="card-title danz-titre">Danse Afro</h5>
                        <p class="card-text description">La danse afro très énergétique et rythmée, elle est un très
                            moyen de rester
                            en forme. Les chorégraphies sont adaptées en fonction du niveau.</p>
                    </div>
                    <div class="tarif">
                        <p class="prix">250€/An</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./images/Bollywood.png" class="card-img-top img-fluid pictures" alt="danse">
                    <div class="card-body">
                        <h5 class="card-title danz-titre">Danse Bollywood</h5>
                        <p class="card-text description">Très à la mode de nos jours, la danse Bollywood allie danse
                            classique et
                            moderne. Elle vous permettra de vous lâcher mais avant tout de vous amuser.</p>
                    </div>
                    <div class="tarif">
                        <p class="prix">250€/An</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./images/tango.png" class="card-img-top img-fluid pictures" alt="danse">
                    <div class="card-body">
                        <h5 class="card-title danz-titre">Le Tango</h5>
                        <p class="card-text description">Le tango est une danse avec toute une histoire à multiples
                            facettes. Nous
                            vous invitons à venir les découvrir et vibrer aux sons de tous ses rythmes.</p>
                    </div>
                    <div class="tarif">
                        <p class="prix">250€/An</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./images/Zumba.png" class="card-img-top img-fluid pictures" alt="danse">
                    <div class="card-body">
                        <h5 class="card-title danz-titre">Zumba</h5>
                        <p class="card-text description">Basé sur des pas variés sur de la musique principalement
                            latino-américaine,
                            la zumba vous permettra de travailler tous les muscles de votre corps. Ainsi vous resterait
                            en forme tout en prenant du plaisir. </p>
                    </div>
                    <div class="tarif">
                        <p class="prix">250€/An</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./images/Rock.png" class="card-img-top img-fluid pictures" alt="danse">
                    <div class="card-body">
                        <h5 class="card-title danz-titre">Rock Acrobatique</h5>
                        <p class="card-text description">La danse acrobatique est une danse basée sur le principe du
                            rock à six temps dans lequel sont introduits des acrobaties. Pratiquée surtout lors de
                            compétitions et
                            démonstrations.Let's Rock'n'roll !</p>
                    </div>
                    <div class="tarif">
                        <p class="prix">250€/An</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./images/Jazz.png" class="card-img-top img-fluid pictures" alt="danse">
                    <div class="card-body">
                        <h5 class="card-title danz-titre">Modern Jazz</h5>
                        <p class="card-text description">Le Modern Jazz peut procurer un véritable bien-être.
                            Cette danse est de plus en plus popularisée et aimée. Moyen
                            d'expression comme toutes les danses, elle demande une souplesse et une douceur
                            particulière.
                        </p>
                    </div>
                    <div class="tarif">
                        <p class="prix">250€/An</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
