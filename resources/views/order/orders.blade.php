@extends('pages.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bienvenue sur la page de gestion des commandes</h1>
    </div>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Commandes</h1>
    <p class="mb-4">Pour le moment je fais le test de la tables des commandes, donc ici s'affiche les commmandes</a>.</p>
    <p class="mb-4">Pour ajouter un commandes, veuillez remplir le formulaire si dessous:</p>
    <form action="{{ route('order.create')}}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @csrf
        <div class="input-group">
            <select type="text" name="customer_id" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2">
                <option value="">Choisissez un client</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}"> {{ $customer->name }}</option>
                @endforeach
            </select>

            <input type="text" name="number" class="form-control bg-light border small" placeholder="Ajouter un numéro" aria-label="Search" aria-describedby="basic-addon2">

            <div class="input-group-append">
                <button type="submit" class="btn btn-success btn-icon-split" spellcheck="false">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Valider</span>
                </button>
                <button class="btn btn-danger btn-icon-split" spellcheck="false">
                    <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Supprimer</span>
                </button>
                
            </div>
        </div>
    </form>
    <div id="content">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom du client</th>
                                <th>Numéro de commande</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->customer->name}}</td>
                                    <td>{{$order->number}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection