@extends('layouts.template')

@section('contents')
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
                        <div class="alert alert-success">
                            <h3>Petunjuk</h3>
                            <p>
                           1. Sebelum anda mendiagnosa penyakit anda, silahkan daftar terlebih dahulu <a href="{{route('konsultasi')}}"><i>DISINI</i></a> <br>
                           2. Jika sudah selesai silahkan klik tombol konsultasi, <br> 
                           3. Pilihlah gejala penyakit sesuai yang anda rasakan, <br>
                           4. Klik tombol diagnosa,  <br>
                           5. Hasil diagnosa, pada halaman ini anda bisa export hasil dalam format PDF 
                            </p>
                             <hr>
                             <p>Terimakasih</p>
                 </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection
