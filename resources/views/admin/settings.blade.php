@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            Réglages généraux
        </div>

        <div class="card-body">
            <form action="{{route('admin.setting.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Logo</label>
                            <input type="file" class="form-control" name="logo">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Image de fond</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">En-tête</label>
                            <input type="text" class="form-control" value="{{$gs->h1}}" name="h1">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Texte secondaire d'en-tête</label>
                            <input type="text" class="form-control" value="{{$gs->h2}}" name="h2">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Sauvegarder" name="image">
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
