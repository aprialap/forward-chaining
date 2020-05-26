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
                        <h4 class="card-title">Tambah Relsi</h4>
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('admin.relasi.update', $data->id)}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Penyakit<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select name="penyakit" class="form-control" required>
                                            <option value="">Pilih Penyakit</option>
                                            @foreach ($penyakit as $item)
                                                <option value="{{$item->id}}" @if($item->kd_penyakit == $data->kd_penyakit)  SELECTED @endif>{{$item->kd_penyakit}} - {{$item->nama_penyakit}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Gejala<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select name="gejala" class="form-control" required>
                                            <option value="">Pilih Gejala</option>
                                            @foreach ($gejala as $item)
                                                <option value="{{$item->id}}"  @if($item->kd_gejala == $data->kd_gejala)  SELECTED @endif >{{$item->kd_gejala}} - {{$item->gejala}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="submit" class="btn btn-secondary" onclick="window.history.back()"> Kembali</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection
