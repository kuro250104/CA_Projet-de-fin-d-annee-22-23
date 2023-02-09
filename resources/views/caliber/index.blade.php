@extends('pages.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bienvenue sur la page de calibres</h1>
    </div>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Calibres</h1>
    <p class="mb-4">Pour le moment je fais le test de la table des différentes tailles de calibres, donc ici s'affiche les calibres.</a></p>
    <p class="mb-4">Pour ajouter un calibre, veuillez remplir le formulaire si dessous:</p>
    <form action="{{ route('caliber.create')}}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @csrf
        <div class="input-group">
            <input type="text" name="name" class="form-control bg-light border small" placeholder="Ajouter un calibre" aria-label="Search" aria-describedby="basic-addon2">
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
                                <th>Numéro ID</th>
                                <th>Taille du calibre</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($calibers as $caliber)
                                <tr>
                                    <td style="width: 33%;">{{$caliber->id}}</td>
                                    <td style="width: 33%;">{{$caliber->name}}</td>
                                    <td class="custom-td">
                                        <a href="{{ route('caliber.edit', $caliber->id) }}" class="btn btn-light btn-icon-split" spellcheck="false">
                                        <span class="icon text-gray-600">
                                            <i class="far fa-edit"></i>
                                        </span>
                                        <span class="text">Modifier</span></a>
                                        <a href="#" class="btn btn-light btn-icon-split" spellcheck="false">
                                        <span class="icon text-gray-600">
                                            <i class="far fa-eye"></i>
                                        </span>
                                            <span class="text">Voir</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $calibers->links('pages.pagination') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
