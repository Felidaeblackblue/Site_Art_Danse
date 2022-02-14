@extends('layouts.index')
@section('Art Danse', 'Planning')
@section('css', 'planning')


@section('content')
    <div class="container-fluid ">
        <h4 class="text-center texte">Planning</h4>
    </div>
    <div class="container-fluid tableau">
        <div class="lundi">
            <div class="en-tete"><p>LUNDI</p></div>
            <div class="danses afro"><p>{{$danses[0]->name}}<br><span class="horaire">11H - 12H </span></p></div>
            <div class="vide"></div>
            <div class="danses tango"><p>{{$danses[2]->name}}<br><span class="horaire">15H - 16H </span></p></div>
            <div class="danses zumba"><p>{{$danses[3]->name}}<br><span class="horaire">16H15 - 17H </span></p></div>
            <div class="danses bolly"><p>{{$danses[1]->name}}<br><span class="horaire">17H20 - 18H </span></p></div>
            <div class="danses rock"><p>{{$danses[4]->name}}<br><span class="horaire">19H - 20H </span></p></div>
            <div class="danses jazz"><p>{{$danses[5]->name}}<br><span class="horaire">20H10 - 21H </span></p></div>
        </div>
        <div class="mardi">
            <div class="en-tete"><p>MARDI</p></div>
            <div class="danses bolly"><p>{{$danses[1]->name}}<br><span class="horaire">11H - 12H </span></p></div>
            <div class="vide"></div>
            <div class="danses afro"><p>{{$danses[0]->name}}<br><span class="horaire">15H - 16H </span></p></div>
            <div class="danses jazz"><p>{{$danses[5]->name}}<br><span class="horaire">16H15 - 17H </span></p></div>
            <div class="danses tango"><p>{{$danses[2]->name}}<br><span class="horaire">17H20 - 18H </span></p></div>
            <div class="danses zumba"><p>{{$danses[3]->name}}<br><span class="horaire">19H - 20H </span></p></div>
            <div class="danses rock"><p>{{$danses[4]->name}}<br><span class="horaire">20H10 - 21H </span></p></div>
        </div>
        <div class="mercredi">
            <div class="en-tete"><p>MERCREDI</p></div>
            <div class="danses afro"><p>{{$danses[0]->name}}<br><span class="horaire">11H - 12H </span></p></div>
            <div class="vide"></div>
            <div class="danses tango"><p>{{$danses[2]->name}}<br><span class="horaire">15H - 16H </span></p></div>
            <div class="danses zumba"><p>{{$danses[3]->name}}<br><span class="horaire">16H15 - 17H </span></p></div>
            <div class="danses bolly"><p>{{$danses[1]->name}}<br><span class="horaire">17H20 - 18H </span></p></div>
            <div class="danses rock"><p>{{$danses[4]->name}}<br><span class="horaire">19H - 20H </span></p></div>
            <div class="danses jazz"><p>{{$danses[5]->name}}<br><span class="horaire">20H10 - 21H </span></p></div>
        </div>
    <div class="jeudi">
        <div class="en-tete"><p>JEUDI</p></div>
        <div class="danses bolly"><p>{{$danses[1]->name}}<br><span class="horaire">11H - 12H </span></p></div>
        <div class="vide"></div>
        <div class="danses afro"><p>{{$danses[0]->name}}<br><span class="horaire">15H - 16H </span></p></div>
        <div class="danses jazz"><p>{{$danses[5]->name}}<br><span class="horaire">16H15 - 17H </span></p></div>
        <div class="danses tango"><p>{{$danses[2]->name}}<br><span class="horaire">17H20 - 18H </span></p></div>
        <div class="danses zumba"><p>{{$danses[3]->name}}<br><span class="horaire">19H - 20H </span></p></div>
        <div class="danses rock"><p>{{$danses[4]->name}}<br><span class="horaire">20H10 - 21H </span></p></div>
        </div>
    <div class="vendredi">
        <div class="en-tete"><p>VENDREDI</p></div>
        <div class="danses afro"><p>{{$danses[0]->name}}<br><span class="horaire">11H - 12H </span></p></div>
        <div class="vide"></div>
        <div class="danses tango"><p>{{$danses[2]->name}}<br><span class="horaire">15H - 16H </span></p></div>
        <div class="danses zumba"><p>{{$danses[3]->name}}<br><span class="horaire">16H15 - 17H </span></p></div>
        <div class="danses bolly"><p>{{$danses[1]->name}}<br><span class="horaire">17H20 - 18H </span></p></div>
        <div class="danses rock"><p>{{$danses[4]->name}}<br><span class="horaire">19H - 20H </span></p></div>
        <div class="danses jazz"><p>{{$danses[5]->name}}<br><span class="horaire">20H10 - 21H </span></p></div>
        </div>
    <div class="samedi">
        <div class="en-tete"><p>SAMEDI</p></div>
            <div class="danses bolly"><p>{{$danses[1]->name}}<br><span class="horaire">12H - 13H </span></p></div>
            <div class="vide"></div>
            <div class="danses afro"><p>{{$danses[0]->name}}<br><span class="horaire">15H - 16H </span></p></div>
            <div class="danses jazz"><p>{{$danses[5]->name}}<br><span class="horaire">16H15 - 17H </span></p></div>
            <div class="danses tango"><p>{{$danses[2]->name}}<br><span class="horaire">17H20 - 18H </span></p></div>
            <div class="danses zumba"><p>{{$danses[3]->name}}<br><span class="horaire">19H - 20H </span></p></div>
            <div class="danses rock"><p>{{$danses[4]->name}}<br><span class="horaire">20H10 - 21H </span></p></div>
    </div>
    </div>

@endsection
