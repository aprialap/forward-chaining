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
                            <a href="{{route('admin.relasi')}}"><button type="button" class="btn mb-1 btn-success">Relasi</button></a>
                        </div><br>
                        <h4 class="card-title">Daftar Relasi</h4>
                            <a href="{{route('admin.relasi.create')}}"><button type="button" class="btn mb-1 btn-primary">Tambah</button></a>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr class="text-center">
                                        <th width="30px">No.</th>
                                        <th>Penyakit</th>
                                        <th>Gejala</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{$item->kd_penyakit}} - {{$item->penyakit->nama_penyakit}}</td>
                                        <td>{{$item->kd_gejala}} - {{$item->gejala->gejala}}</td>
                                       
                                        <td>
                                            <div class="btn-group" discount="group">
                                            <a href="{{route('admin.relasi.edit', $item->id)}}" class="span6 btn btn-small btn-warning btn-sm" title="Edit Data"> <i class='pe-7s-pen'></i> Ubah</a>
                                            <a href="{{route('admin.relasi.destroy', $item->id)}}" class="span6 btn btn-small btn-danger btn-sm" title="Edit Data"  onclick="return confirm('Hapus data?');"> <i class='pe-7s-trash'></i> Hapus</a>          
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="12" class="text-center"><i>Belum ada data.</i></td>
                                    </tr>
                                    @endforelse
                                   
                                </tbody>
                                <tfoot>
                                    <tr class="text-center">
                                        <th width="30px">No.</th>
                                        <th>Penyakit</th>
                                        <th>Gejala</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection