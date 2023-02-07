@extends('pages.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bienvenue sur la page des clients</h1>
    </div>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Clients</h1>
    <p class="mb-4">Veuillez modifier le client {{ $customer->name }}</p>
        <form action="{{ route('customer.update', $customer->id)}}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            @method("PUT")
            @csrf
            <div class="input-group">
                <input type="text" name="name" class="form-control bg-light border small" placeholder="Ajouter un client" aria-label="Search" aria-describedby="basic-addon2" value="{{ $customer->name }}">

                <input type="text" name="code" class="form-control bg-light border small" placeholder="Ajouter un code" aria-label="Search" aria-describedby="basic-addon2" value="{{ $customer->code }}">
                <input type="hidden" name="customer_id" value='{{$customer->id}}'>
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
    <form action="{{ route('customer.destroy', $customer->id) }}" method="POST" class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        @method("delete")
        @csrf

        <button type="submit" class="btn btn-danger btn-icon-split" spellcheck="false">
                    <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                    </span>
            <span class="text">Supprimer</span>
        </button>
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
    @if (\Session::has('error'))
        <div class="alert alert-danger">
            <ul>
                <li>{{ \Session::get('error') }}</li>
            </ul>
        </div>
    @endif
</div>


@endsection
