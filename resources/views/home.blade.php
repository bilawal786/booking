@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner p-2">
                            <h3>{{$clients}}</h3>

                            <p>Client Total</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-folder-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner p-2">
                            <h3>{{$services}}</h3>

                            <p>Services</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-folder-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner p-2">
                            <h3>{{$employee}}</h3>

                            <p>Employes</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-folder-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner p-2">
                            <h3>{{$appoin}}</h3>

                            <p>Rendez-vous</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-folder-plus"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
