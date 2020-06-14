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
 
                         {{-- <div class="row">
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
                         </div> --}}

                         <div class="table-responsive">
                            <table id="table-diagnosa" class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr class="text-center">
                                        <th width="10px">No.</th>
                                        <th>Nama</th>
                                        <th>Profesi</th>
                                        <th>Tempat Praktek</th>
                                        <th>No. HP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Safitri</td>
                                        <td>Dokter Praktek</td>
                                        <td>Puskesmas Kemalo Abung</td>
                                        <td>085789892218</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Tusi Anggraini, Amd.Keb</td>
                                        <td>Bidan Praktek</td>
                                        <td>Puskesmas Kemalo Abung</td>
                                        <td>0895610009920</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Meyta EKa F., Amd.Keb</td>
                                        <td>Bidan Praktek</td>
                                        <td>Puskesmas Kemalo Abung</td>
                                        <td>082281995338</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Resmasari. Amd.Keb</td>
                                        <td>Bidan Praktek</td>
                                        <td>Puskesmas Kemalo Abung</td>
                                        <td>085960291469</td>
                                    </tr>
                                  
                                   
                                </tbody>
                                <tfoot class="text-center">
                                    <tr class="text-center">
                                        <th width="10px">No.</th>
                                        <th>Nama</th>
                                        <th>Profesi</th>
                                        <th>Tempat Praktek</th>
                                        <th>No. HP</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

@endsection
