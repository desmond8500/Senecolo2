@extends('0 Eiser.layout')

@section('content')
    @include('0 Eiser.index.banner')

    <div class="row">
        <div class="col-mf-4 offset-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Connexion</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('logme')}} " method="post">
                        @csrf
                        <input type="text" name="type" value="login" hidden>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mot de passe </label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-success">Se Connecter</button>

                        <a class="btn btn-outline-success" href="{{route('register')}}">Créer un nouveau compte</a>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('footer')

@endsection

