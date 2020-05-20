@extends('layouts.template-pakar')

@section('contents-pakar')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="general-button">
                            <a href="{{route('admin.penyakit')}}"><button type="button" class="btn mb-1 btn-info">Penyakit</button></a>
                            <a href="{{route('admin.gejala')}}"><button type="button" class="btn mb-1 btn-danger">Gejala</button></a>
                            <a href="{{route('admin.penyakit')}}"><button type="button" class="btn mb-1 btn-success">Relasi</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection
