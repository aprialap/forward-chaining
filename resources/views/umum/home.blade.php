@extends('layouts.template')

@section('contents')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="javascript:void(0)">Home</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col">

               
                <div class="card">
                    <div class="card-body">
                        <style type="text/css">
                            .image-body {
                                display: block;
                                margin-left: auto;
                                margin-right: auto;
                                width: 40%;
                                border-radius: 8px;

                      
                            }
                         </style>

                        <img  class="image-body" src="{{asset('template/images/motherlove.jpeg')}}" alt="">
                        <br>
                        
                        <div class="alert alert-success">
                                    <H3>Sistem Pakar Diagnosa Penyakit Ibu Hamil</H3>
                                    <p>Aplikasi <b>Sistem Pakar</b> ini meniru cara berfikir seorang ahli kesehatan dalam melakukan
                                    diagnosis suatu kasus penyakit. Aplikasi ini membantu dalam mecari kesimpulan akan penyakit yang diderira beserta pencegahan dan pengobatan yang sesuai
                                . Program aplikasi ini menganalisa data penyakit ibu hamil, anamnesis awal serta gejala-gejala dari suatu penyakit.
                            Pengembangan sistem pakar ini menggunakan metode inferensi forward chaining, yaitu peroses inferensi yang memulai pencarian dari premis menuju konkulsi.
                        </p>

                        </div>
                       
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection
