<style type="text/css">
    .page-break {
        page-break-after: always;
        
    }

    .p {
        font-size: 9px;
    }
    </style>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            
           
                    <img src="{{asset('template/images/baktihusada.jpeg')}}" width="150" height="80">
                    <h4 class="card-title">Hasil Diagnosa</h4>
                    <div class="alert alert-success">Berdasarkan diagnosa yang dikumpulkan bahwa sistem meyimpulkan:</div>
                    <table>
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
                        <div >
                            @foreach ($gejala as $item)
                            
                             {{$item->gejala->gejala}}
                            @endforeach
                           </div>
                  
                    </p>

                    <h6>Pengobatan/Solusi : </h6>
                    <p>
                          {{$penyakit->solusi}}
                       
                    </p>
                           
                </div>
            </div>
        </div>
    </div>
</div>