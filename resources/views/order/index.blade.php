@extends('pages.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bienvenue sur la page de gestion des commandes</h1>
    </div>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Commandes</h1>
    <p class="mb-4">Pour le moment je fais le test de la table des commandes, donc ici s'affiche les commandes.</p>
    <p class="mb-4">Pour ajouter une commande, veuillez remplir le formulaire si dessous:</p>
    <form action="{{ route('order.store')}}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @csrf
        <div class="input-group">
            <select type="text" name="customer_id" class="form-control bg-light border small" aria-label="Search" aria-describedby="basic-addon2">
                <option value="">Choisissez un client</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}"> {{ $customer->name }}</option>
                @endforeach
            </select>

            <input type="text" name="number" value="{{old('number')}}"class="form-control bg-light border small" placeholder="Ajouter un numéro" aria-label="Search" aria-describedby="basic-addon2">

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
                                <th>Numéro de commande</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td style="width: 33%;">{{$order->customer->name}}</td>
                                    <td style="width: 33%;">{{$order->number}}</td>
                                    <td class="custom-td">
                                        <a href="{{ route('order.edit', $order->id) }}" class="btn btn-light btn-icon-split" spellcheck="false">
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
                    {{ $orders->links('pages.pagination') }}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
