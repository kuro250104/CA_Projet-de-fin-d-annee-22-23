@extends('pages.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bienvenue sur la page des clients</h1>
    </div>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Clients</h1>
    <p class="mb-4">Pour le moment je fais le test de la table des clients, donc ici s'affiche les clients.</a></p>
    <p class="mb-4">Pour ajouter un client, veuillez remplir le formulaire si dessous:</p>
    <form action="{{ route('customer.create')}}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @csrf
        <div class="input-group">
            <input type="text" name="name" class="form-control bg-light border small" placeholder="Ajouter un client" aria-label="Search" aria-describedby="basic-addon2">

            <input type="text" name="code" class="form-control bg-light border small" placeholder="Ajouter un code" aria-label="Search" aria-describedby="basic-addon2">
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
    <div id="content">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Code</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td style="width: 33%;">{{$customer->name}}</td>
                                    <td style="width: 33%;">{{$customer->code}}</td>
                                    <td class="custom-td">
                                        <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-light btn-icon-split" spellcheck="false">
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
                    {{ $customers->links('pages.pagination') }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
