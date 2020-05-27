@extends('layouts.template')

@section('contents')

<style>

    /* Style the form */
    #regForm {
      background-color: #ffffff;
      margin: 100px auto;
      padding: 40px;
      width: 70%;
      margin-top: -30px;
      min-width: 300px;
    }
    
    /* Style the input fields */
    input {
      padding: 10px;
      width: 100%;
      font-size: 17px;
      font-family: Raleway;
      border: 1px solid #aaaaaa;
    }
    
    /* Mark input boxes that gets an error on validation: */
    input.invalid {
      background-color: #ffdddd;
    }
    
    /* Hide all steps by default: */
    .tab {
      display: none;
    }
    
    /* Make circles that indicate the steps of the form: */
    .step {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbbbbb;
      border: none; 
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
    }
    
    /* Mark the active step: */
    .step.active {
      opacity: 1;
    }
    
    /* Mark the steps that are finished and valid: */
    .step.finish {
      background-color: #4CAF50;
    }
    </style>


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
                        <h4 class="card-title">Hasil Diagnosa</h4>
                        <div class="alert alert-primary">Berdasarkan diagnosa yang dikumpulkan bahwa sistem meyimpulkan:</div>
                       <table class="table table-striped">
                           <tr>
                               <th width="150px">Nama</th>
                               <th width="30px">:</th>
                               <th>{{$pasien->nama_lengkap}}</th>
                           </tr>
                           <tr>
                                <th>Usia Kehamilan</th>
                                <th>:</th>
                                <th>{{$pasien->usia_kehamilan}} Hari</th>
                            </tr>
                            <tr>
                                <th>Umur </th>
                                <th>:</th>
                                <th>{{$pasien->umur}} tahun</th>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <th>:</th>
                                <th>{{$pasien->alamat}}</th>
                            </tr>
                            <tr>
                                <th>Nama Penyakit</th>
                                <th>:</th>
                                <th> {{$penyakit->nama_penyakit}}</th>
                            </tr>
                       </table>
                       <hr>
                       <h5>Keterangan : </h5>
                       
                       <h6>Deskripsi : </h6>
                        <p>{{$penyakit->deskripsi}}</p>

                        <h6>Gejala : </h6>
                        <p>
                            <div class="bootstrap-label">
                                @foreach ($gejala as $item)
                                
                                   <span class="label label-secondary"> {{$item->gejala->gejala}}</span>
                                @endforeach
                               </div>
                      
                        </p>

                        <h6>Pengobatan/Solusi : </h6>
                        <p>
                            <textarea readonly cols="153" rows="10">  {{$penyakit->solusi}}</textarea>
                           
                        </p>
                               
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
    
@endsection

