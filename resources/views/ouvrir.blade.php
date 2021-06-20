@extends('header')
@section('content')
<br><br>
<div class="container">
<div class="container">
        <div style="width:100%;" class="card">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <form action="{{ url('/recherche') }}" method="POST" enctype="multipart/form-data">
                    @method('post')
                    @csrf
                    <input style="width:100%;text-align:center" type="text" name="numero" id="" placeholder="Entrez Numero" required>
                    <br><br>
                    <input style="width:30%;" type="submit" value="Recherche">
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <a href="{{url('/ajouter')}}"><button class="btn1"> <img class="ajouter" src="{{ asset('image/ajoute-icon.png') }}" alt="logo">Nouveau Dossier</button></a>
            <br><br>
            <br>
            <a href="{{url('/ajouter')}}"><button class="btn1"> <img class="ajouter" src="{{ asset('image/service1-icon.png') }}" alt="logo">Ouvrir Un Dossier</button></a>
        </div>
    </div>
        <div class="card">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <table class="table1">
                    <tr>
                        <th>  Numero</th>
                        <th> Titre du dossier </th>
                        <th> Service </th>
                        <th> Date de creation </th>
                        <th> Instance </th>
                        <th> Description </th>
                        <th> Document </th>
                    </tr>
                    @foreach($dossier as $d)
                    <tr>
                        <td class="tdd">{{$d->numero}}</td>
                        <td class="tdd">{{$d->titreDossier}}</td>
                        <td class="tdd">{{$d->service}}</td>
                        <td class="tdd">{{$d->dateCreation}}</td>
                        <td class="tdd">{{$d->instance}}</td>
                        <td class="tdd">{{$d->etat}}</td>
                        <form action="{{ url('/download') }}" method="POST" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <input type="hidden" name="id" value="{{$d->id}}">
                            <td class="tdd"><input type="submit" value="Telecharger"></td>
                            
                        </form>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
</div>
@endsection('content')