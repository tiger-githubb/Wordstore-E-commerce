@extends('layouts.admin')

@section('styles')
<!-- Custom css for this page-->
<link rel="stylesheet" href="{{ asset('assets/admin/vendors/select2/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
<!-- End custom css for this page-->
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Mise a jour du produit</h4>
                    <form class="forms-sample" action="{{ url('update-produit', $produit->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="categorie">Catégorie</label>
                            <select class="form-control " id="cate_id" name="cate_id">
                                <option value="">{{$produit->categorie->nom}}</option>
                                @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input value="{{ $produit->nom }}" type="text" class="form-control" id="nom" placeholder="Nom du produit" name="nom" />
                        </div>

                        <div class="form-group">
                            <label for="slug">
                                Slug
                                <code>
                                    identique au nom mais en minusucule et sans accent !
                                </code>
                            </label>
                            <input value="{{ $produit->slug }}" type="text" class="form-control" id="slug" placeholder="Slug du produit" name="slug" />
                        </div>

                        <div class="form-group">
                            <label for="small_desc">Mini description</label>
                            <textarea class="form-control" id="small_desc" rows="3" name="small_desc" placeholder="Mini description du produit">
                            {{ $produit->small_desc }}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea class="form-control" id="desc" rows="3" name="desc" placeholder="Description du produit">
                            {{ $produit->desc }}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="prix_o">Prix Original</label>
                            <input value="{{ $produit->prix_o }}" type="number" class="form-control" id="prix_o" placeholder="Prix Original" name="prix_o" />
                        </div>

                        <div class="form-group">
                            <label for="prix_v">Prix de vente</label>
                            <input value="{{ $produit->prix_v }}" type="number" class="form-control" id="prix_v" placeholder="Prix de vente" name="prix_v" />
                        </div>

                        <div class="form-group">
                            <label for="qte">Quantité</label>
                            <input value="{{ $produit->qte }}" type="number" class="form-control" id="qte" placeholder="Quantité" name="qte" />
                        </div>

                        <div class="form-group">
                            <label for="taxe">Taxe</label>
                            <input value="{{ $produit->taxe }}" type="number" class="form-control" id="taxe" placeholder="Taxe" name="taxe" />
                        </div>

                        <div class="form-check">
                            <label class="form-check-label" for="status">
                                <input {{ $produit->status == "1" ? 'checked':'' }} type="checkbox" class="form-check-input" name="status" />
                                Publié ?
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label" for="trending">
                                <input {{ $produit->trending == "1" ? 'checked':'' }} type="checkbox" class="form-check-input" name="trending" />
                                Mise en tendance ?
                            </label>
                        </div>

                        <div class="form-group mt-3">
                            <label for="meta_title">Méta Titre</label>
                            <input value="{{ $produit->meta_title }}" type="text" class="form-control" id="nom" placeholder="Méta Titre" name="meta_title" />
                        </div>

                        <div class="form-group">
                            <label for="meta_keywords">Méta Keywords</label>
                            <textarea class="form-control" id="meta_keywords" rows="3" name="meta_keywords" placeholder="Mots clés">
                            {{ $produit->meta_keywords }}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="meta_desc">Méta Description</label>
                            <textarea class="form-control" id="meta_desc" rows="3" name="meta_desc" placeholder="Méta description">
                            {{ $produit->meta_desc }}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Ajoutez une image</label>
                            <input type="file" name="image" class="file-upload-default" />
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Uploader une Image" />
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button" style="
                                    height: 50px !important;
                                    border-radius: 0px !important;
                                    ">
                                        Choisir
                                    </button>
                                </span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary me-2"> Valider </button>
                        <button class="btn btn-dark">Annuler</button>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Image(s) du produit</h4>
                    <form class="forms-sample" action="" method="" enctype="">

                        @if ($produit->image == '')
                        <div class="h-25 w-50">
                            <img src="{{ asset('img/uploads/produit/default.jpg')}}" alt="image" class="img-thumbnail" style="border-radius: 0% !important;">
                        </div>
                        @else
                        <div class="h-25 w-50">
                            <img src="{{ asset('img/uploads/produit/'.$produit->image )}}" alt="image" class="img-thumbnail" style="border-radius: 0% !important;">
                        </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page_scripts')
<!-- plugin js for this page -->
<script src="{{ asset('assets/admin/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendors/select2/select2.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{ asset('assets/admin/js/file-upload.js') }}"></script>
<script src="{{ asset('assets/admin/js/typeahead.js') }}"></script>
<script src="{{ asset('assets/admin/js/select2.js') }}"></script>
<!-- End custom js for this page-->
@endsection