@extends('pages.app')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bienvenue sur la page de gestion des livraisons</h1>
        </div>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Livraisons</h1>
        <p class="mb-4">Pour le moment je fais le test de la table des livraisons, donc ici s'affiche les livraisons.</p>
        <p class="mb-4">Pour ajouter une livraison, veuillez remplir le formulaire si dessous:</p>
        <form action="" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            @csrf
            <div class="input-group">


                <input type="text" name="number" value=""class="form-control bg-light border small" placeholder="Ajouter un numéro" aria-label="Search" aria-describedby="basic-addon2">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-success btn-icon-split" spellcheck="false">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                        <span class="text">Valider</span>
                    </button>
                </div>
            </div>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div id="content">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Nom du client</th>
                                <th>Lieu de livraison</th>
                                <th>Numéro de commande</th>
                                <th>Date de livraison</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($deliveries as $delivery)
                                <tr>
                                    <td>{{ $delivery->order->customer->name }}</td>
                                    <td>{{ $delivery->place }}</td>
                                    <td>{{ $delivery->order->number }}</td>
                                    <td>{{ $delivery->date }}</td>

                                    <td class="custom-td">
                                        <a href="" class="btn btn-light btn-icon-split" spellcheck="false">
                                        <span class="icon text-gray-600">
                                            <i class="far fa-edit"></i>
                                        </span>
                                            <span class="text">Modifier</span>
                                        </a>
                                        <a href="#" class="btn btn-light btn-icon-split" spellcheck="false">
                                        <span class="icon text-gray-600">
                                            <i class="far fa-eye"></i>
                                        </span>
                                            <span class="text">Voir</span>
                                        </a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $deliveries->links('pages.pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div
@endsection
