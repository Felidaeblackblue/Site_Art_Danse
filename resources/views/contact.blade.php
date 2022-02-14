@extends('layouts.index')
@section('Art Danse', 'Contact')
@section('css', 'contact')
@section('content')
    <main>
        <div class="container-fluid my-5">
            <h4>N'hésitez pas à nous envoyer un message si vous souhaitez plus d'informations sur nos cours de danse.</h4>
        </div>
        <div class="container-fluid justify-content-spacearound row mt-2">
            <div class="col-md-6 imagecontact">
                <img src="./images/yellowLetterBox.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col-md-6 padForm">
                <form action="/sendmail" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nom Prénom</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Numéro de téléphone</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder=""
                            name="phonenumber">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">E-mail</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Votre Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            name="message"></textarea>
                    </div>
                    <div class="bouton0">
                        <button type="submit" class="btn bouton">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection
