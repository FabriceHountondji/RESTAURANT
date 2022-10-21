@extends('dashboard')

@section('content')

<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Formulaire de modification clients</h5>
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('clients.update', $client->id) }}" enctype="multipart/form-data">

                @csrf
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="firstname">Prénom(s)</label>
                    <div>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" value="{{ old('firstname') ? old('firstname') : $acteur->firstname }}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <div>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" value="{{ old('lastname') ? old('lastname') : $acteur->lastname }}" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Numéro de Téléphone</label>
                    <div>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="N-Téléphone" value="{{ old('phone') ? old('phone') : $acteur->phone }}" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="datenat">Date de naissance</label>
                    <input type="text" class="form-control" data-toggle="datepicker-year" name="birthday" value="{{ old('birthday') ? old('birthday') : $acteur->birthday }}"/>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Sexe</label>
                    <select name="sexe" id="exampleSelect" class="form-control">
                        <option value="Masculin" {{ $acteur->sexe == 'Masculin' ? 'selected' : '' }} >Masculin</option>
                        <option value="Féminin" {{ $acteur->sexe == 'Féminin' ? 'selected' : '' }}>Féminin</option>
                    </select>
                </div>

                <label for="exampleFile"> Profile </label>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" name="photo">
                    <label class="input-group-text" for="inputGroupFile02">Télécharger</label>
                </div>

                <div class="form-group">
                    <label for="lastname">Adresse</label>
                    <div>
                        <input type="text" class="form-control" id="adresse" name="address" placeholder="Adresse" value="{{ old('adresse') ? old('adresse') : $acteur->adresse }}"/>
                    </div>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Compte utilisateur</label>
                    <select name="user_id" id="exampleSelect" class="form-control">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ $acteur->user->email == $user->email ? 'selected' : '' }}> {{ $user->email }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="enregistrer" value="Enregistrer">Enregister les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>


@stop
