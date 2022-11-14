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
        <div class="col-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajout de catégorie</h4>
                    <form class="forms-sample" action="{{ url('store-categorie') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" placeholder="Nom de la catégorie" name="nom" />
                        </div>
                        <div class="form-group">
                            <label for="slug">
                                Slug
                                <code>
                                    identique au nom mais en minusucule et sans accent !
                                </code>
                            </label>
                            <input type="text" class="form-control" id="slug" placeholder="Slug de la catégorie" name="slug" />
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea class="form-control" id="desc" rows="3" name="desc" placeholder="Description de la catégorie"></textarea>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="status">
                                <input type="checkbox" class="form-check-input" name="status" />
                                Publié ?
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="popular">
                                <input type="checkbox" class="form-check-input" name="popular" />
                                Mise en avant ?
                            </label>
                        </div>
                        <div class="form-group mt-3">
                            <label for="meta_title">Méta Titre</label>
                            <input type="text" class="form-control" id="nom" placeholder="Méta Titre" name="meta_title" />
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Méta Keywords</label>
                            <textarea class="form-control" id="meta_keywords" rows="3" name="meta_keywords" placeholder="Mots clés"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_desc">Méta Description</label>
                            <textarea class="form-control" id="meta_desc" rows="3" name="meta_desc" placeholder="Méta description"></textarea>
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