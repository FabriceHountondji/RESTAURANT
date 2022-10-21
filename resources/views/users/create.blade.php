@extends('dashboard')

@section('content')

<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Formulaire d'enregistrement compte utilisateur</h5>
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('users.store', Route::currentRouteName()) }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="username">Username</label>
                    <div>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <div>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required/>
                    </div>
                </div>

                <label for="exampleFile"> Profile </label>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" name="photo">
                    <label class="input-group-text" for="inputGroupFile02">Télécharger</label>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe" required />
                    </div>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Rôle</label>
                    <select name="role_id" id="exampleSelect" class="form-control">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}"> {{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="enregistrer" value="Enregistrer">Enregister</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop
