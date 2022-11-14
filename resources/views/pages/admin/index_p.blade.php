@extends('layouts.admin')

@section('styles')

@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Lise des produits</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Qte</th>
                                    <th>Catégorie</th>
                                    <th>PO</th>
                                    <th>PV</th>
                                    <th>Etat</th>
                                    <th>Mis en avant</th>

                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produits as $produit)
                                <tr>
                                    <td>{{$produit->id }}</td>

                                    @if ($produit->image == '')
                                    <td>
                                        <img src="{{ asset('img/uploads/produit/default.jpg') }}" alt="image" class="img-thumbnail" style="border-radius: 0% !important;">
                                    </td>
                                    @else
                                    <td>
                                        <img src="{{ asset('img/uploads/produit/'.$produit->image )}}" alt="image" class="img-thumbnail" style="border-radius: 0% !important;">
                                    </td>
                                    @endif

                                    <td>{{$produit->nom }}</td>
                                    <td>{{$produit->qte }}</td>
                                    <td>{{$produit->categorie->nom}}</td>
                                    <td>{{$produit->prix_o }}</td>
                                    <td>{{$produit->prix_v }}</td>

                                    @if ($produit->status == '1')
                                    <td><label class="badge badge-success">publié</label></td>
                                    @elseif ($produit->status == '0')
                                    <td><label class="badge badge-warning">non publié</label></td>
                                    @endif

                                    @if ($produit->trending == '1')
                                    <td><label class="badge badge-info">oui</label></td>
                                    @elseif ($produit->trending == '0')
                                    <td><label class="badge badge-danger">non</label></td>
                                    @endif

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a type="button" href="{{ url('edit-produit', $produit->id)}}" class="btn btn-outline-secondary">
                                                <i class="mdi mdi-content-save-edit"></i>
                                            </a>
                                            <a type="button" href="{{ url('delete-produit', $produit->id)}}" class="btn btn-outline-secondary">
                                                <i class="mdi mdi-trash-can"></i>
                                            </a>
                                        </div>
                                    </td>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_scripts')

@endsection