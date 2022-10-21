<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('storage/AUTH/fonts/icomoon/style.css') }} ">

        <link rel="stylesheet" href="{{ asset('storage/AUTH/css/owl.carousel.min.css') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('storage/AUTH/css/bootstrap.min.css') }}">

        <!-- Style -->
        <link rel="stylesheet" href="{{ asset('storage/AUTH/css/style.css') }}">

        <title>Ecommerce-Signin</title>
    </head>
    <body>
    <div class="content">
        <div class="container">
        <div class="row">
            <div class="col-md-6">
            <img src="{{ asset('storage/AUTH/images/undraw_remotely_2j6y.svg') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
            <div class="row justify-content-center">
                <div class="col-md-8">
                <div class="mb-4 mt-4">
                <h3>Créer un compte</h3>
                </div>
                <form action="{{ route('clients.store', Route::currentRouteName()) }}" method="post">
                    @csrf

                    @if (session('error'))
                        <div class="alert alert-danger">
                            <strong>Attention !</strong> {{ session('error') }}
                        </div>
                    @endif

                    <div class="form-group first">
                        <label for="email">Entrez votre e-mail</label>
                        <input type="text" class="form-control" id="email" name="email" required>

                    </div>
                    <div class="form-group last mb-4">
                        <label for="password">Entrez votre mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>

                    </div>

                    <input type="submit" value="Enregistrer" class="btn btn-block btn-success">

                </form>
                </div>
            </div>

            </div>

        </div>
        </div>
    </div>


        <script src="{{ asset('storage/AUTH/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('storage/AUTH/js/popper.min.js') }}"></script>
        <script src="{{ asset('storage/AUTH/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('storage/AUTH/js/main.js') }}"></script>
    </body>
</html>

