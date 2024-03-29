


    <!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Picoti - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <form class="user" method="POST" action="{{ route('login.store') }}">
                        @csrf
                        <div>
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Bienvenue</h1>
                                </div>
                                    <!-- Email -->
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control form-control-user"
                                           value="{{old('email')}}" required autofocus autocomplete="username"
                                           aria-describedby="emailHelp"
                                           placeholder="Enter Email Address..." name="email">
                                </div>
                                    <!-- Password -->
                                    <div class="mt-4">
                                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password" name="password" required autocomplete="current-password">
                                    </div>
                                    <!-- Remeber me -->
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Se souvenir de moi</label>
                                    </div>
                                </div>
                                    <!-- Login -->

                                <button type="submit" class="ml-3 btn btn-primary btn-user btn-block">
                                    Connexion
                                </button>
{{--                                {{dd($errors)}}--}}
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>

</div>


@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (\Session::has('error'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ \Session::get('error') }}</li>
                </ul>
            </div>
        @endif

<!-- Bootstrap core JavaScript-->


</body>

</html>
