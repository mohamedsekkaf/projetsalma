@extends('header')
@section('content')
<br><br>
<div class="container">
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    {{$var1}}
                </div>
                <div class="col-4">
                    {{$var2}}
                </div>
                <div class="col-4">
                    {{$var3}}
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <a href="{{url('/ajouter')}}"><button class="btn1"> <img class="ajouter" src="{{ asset('image/ajoute-icon.png') }}" alt="logo">Nouveau Dossier</button></a>
            <br><br>
            <br>
            <a href="{{url('/ouvrir')}}"><button class="btn1"> <img class="ajouter" src="{{ asset('image/service1-icon.png') }}" alt="logo">Ouvrir Un Dossier</button></a>
        </div>
    </div>
</div>

@endsection('content')