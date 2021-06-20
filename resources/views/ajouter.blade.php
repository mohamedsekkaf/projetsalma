@extends('header')
@section('content')
<br><br>
<div class="container">
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
        <a href="{{url('/ajouter')}}"><button class="btn1"> <img class="ajouter" src="{{ asset('image/ajoute-icon.png') }}" alt="logo">Nouveau Dossier</button></a>
            <br><br>
            <br>
            <a href="{{url('/ouvrir')}}"> <button class="btn1"> <img class="ajouter" src="{{ asset('image/service1-icon.png') }}" alt="logo">Ouvrir Un Dossier</button></a>
        </div>
    </div>
    <br>
    <form action="{{ url('/ajouterdossier') }}" method="POST" enctype="multipart/form-data">
    @method('post')
    @csrf
        <div class="card">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <table class="table1">
                    <tr class="tr">
                        <td class="td1">Titre de dossier</td>
                        <td class="td2"><input type="text" name="numero" class="form-control" required></td>
                    </tr>
                    <tr><td><br></td></tr>
                    <tr class="tr">
                        <td class="td1">Numéro</td>
                        <td class="td2"><input type="number" name="titreDossier" class="form-control" required></td>
                    </tr>
                    <tr><td><br></td></tr>
                    <tr class="tr">
                        <td class="td1" >Service</td>
                        <td class="td2">
                        <select type="text" id="service" name="service" class="form-control" required  >
                            <option value="" selected disabled>Veuillez choisir le service</option>
                            <option value="Division ressources humaines">Division ressources humaines</option>
                            <option value="Division comtable et financiere">Division comtable et financiere</option>
                            <option value="Service juridique et assurance">Service juridique et assurance</option>
                            <option value="Division qualité, securite et envirennement">Division qualité, securite et envirennement</option>
                            <option value="Service audit interne">Service audit interne</option>
                            <option value="Service communication">Service communication</option>
                            <option value="Division exploitation et travaux electricite">Division exploitation et travaux electricite</option>
                            <option value="Division exploitation et travaux eau et assainissement">Division exploitation et travaux eau et assainissement</option>
                            <option value="Division etudes">Division etudes</option>
                            <option value="Division commerciale">Division commerciale</option>
                            <option value="Division moyens genereux et logistique">Division moyens genereux et logistique</option>
                            <option value="Division systeme d'information">Division systeme d'information</option>
                            </select>
                        </td>
                    </tr>
                    <tr><td><br></td></tr>
                    <tr class="tr">
                        <td class="td1">Date de création</td>
                        <td class="td2"><input type="date" name="dateCreation" class="form-control" required></td>
                    </tr>
                    <tr><td><br></td></tr>
                    <tr class="tr">
                        <td class="td1">Instance</td>
                        <td class="td2"><input type="text" name="instance" class="form-control" required></td>
                    </tr>
                    <tr><td><br></td></tr>
                    <tr class="tr">
                        <td class="td1">Description</td>
                        <td class="td2">
                            <select name="etat" class="form-control" id="" required>
                                <option value="option1">option1</option>
                                <option value="option2">option2</option>
                                <option value="option3">option3</option>
                            </select>
                        </td>
                    </tr>
                    <tr><td><br></td></tr>
                    <tr class="tr">
                        <td class="td1">Document</td>
                        <td class="td2"><input type="file" name="document" class="form-control" required></td>
                    </tr>
                </table>
                <br>
                <input class="btn2" type="submit" value="Ajouter">
            </div>
        </div>
    </form>
</div>
@endsection('content')