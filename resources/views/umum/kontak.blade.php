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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kontak Pakar</h4>
                        <div class="basic-form">
 
                         <div class="row">
                             <div class="col-6">
                             <table class="table">
                                     <tr>
                                         <th class="text-dark mr-4">Nama</th>
                                         <th class="text-dark mr-4">:</th>
                                         <td>Bambang</td>
                                     </tr>
                                     <tr>
                                         <th class="text-dark mr-4">Profesi</th>
                                         <th class="text-dark mr-4">:</th>
                                         <td>Dokter</td>
                                     </tr>
                                     <tr>
                                         <th class="text-dark mr-4">Tempat Praktek/Bekerja</th>
                                         <th class="text-dark mr-4">:</th>
                                         <td>RSUD ADISUCIPTO</td>
                                     </tr>
                                     <tr>
                                         <th class="text-dark mr-4">No. Hp</th>
                                         <th>:</th>
                                         <td>0899776655</td>
                                     </tr>
                                   
                                </table>
 
                             </div>
                             <div class="col-6">
                                 <div class="media align-items-center mb-3"> 
                                     <img  class="mr-3 circle-rounded" src="{{asset('template/images/user/1.png')}}"  width="200" height="200" alt="">
                                 </div>
                             </div>
                         </div>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

@endsection
