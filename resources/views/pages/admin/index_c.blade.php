@extends('layouts.admin')

@section('styles')

@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Liste des Catégories</h4>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Nom</th>
                                    <th>Etat</th>
                                    <th>Mis en avant</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $categorie)
                                <tr>
                                    <td>{{$categorie->id}}</td>

                                    @if ($categorie->image == '')
                                    <td>
                                        <img src="{{ asset('img/uploads/categorie/default.jpg') }}" alt="image" class="img-thumbnail" style="border-radius: 0% !important;">
                                    </td>
                                    @else
                                    <td>
                                        <img src="{{ asset('img/uploads/categorie/'.$categorie->image )}}" alt="image" class="img-thumbnail" style="border-radius: 0% !important;">
                                    </td>
                                    @endif

                                    <td>{{$categorie->nom }}</td>

                                    @if ($categorie->status == '1')
                                    <td><label class="badge badge-success">publié</label></td>
                                    @elseif ($categorie->status == '0')
                                    <td><label class="badge badge-warning">non publié</label></td>
                                    @endif

                                    @if ($categorie->popular == '1')
                                    <td><label class="badge badge-info">oui</label></td>
                                    @elseif ($categorie->popular == '0')
                                    <td><label class="badge badge-danger">non</label></td>
                                    @endif

                                    <td>{{$categorie->desc }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a type="button" href="{{ url('edit-categorie', $categorie->id)}}" class="btn btn-outline-secondary">
                                                <i class="mdi mdi-content-save-edit"></i>
                                            </a>
                                            <a type="button" href="{{ url('delete-categorie', $categorie->id)}}" class="btn btn-outline-secondary">
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