@extends('pages.app')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bienvenue sur la page de gestion des stocks</h1>
    </div>
    


    <div id="content">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                
                                <th>Type de calibre</th>
                                <th>Nombre d'oeufs</th>
                               
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($result as $key => $quantity)
                                <tr>
                                    <td style="width: 33%;">{{$caliber_id[$key]}}</td>
                                    <td style="width: 33%;">{{$quantity}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $orders->links('pages.pagination') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection