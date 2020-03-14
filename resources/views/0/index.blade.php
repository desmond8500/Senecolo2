@extends('0 Tutos.index.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="jumbotron">
                <h1 class="display-4">Bonjour !</h1>
                <p class="lead">Bienvenue sur notre interface de tutoriels</p>
                <hr class="my-4">
                <p>Veuillez choisrir une section</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Plus d'informations</a>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card card-body">
                <h5 class="card-title">Fonctionnalités à venir</h5>
                <ul>
                    <li>Clipborad copy</li>
                    <li>Online Editing</li>
                    <li>Back office</li>
                    <li>Backup process</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
