@extends('welcome')
@section('content')
       <div class="container-fluid">
                    <!-- <h1 class="h3 mb-4 text-gray-800">Data Karyawan {{ $data->name }} </h1> -->
 <a href="{{ route('dataMonitoring') }}" class="btn btn-info btn-icon-split" style="margin-left: 90%;">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>
                    <hr>   
                      <form role="form" >
                         
                        <div class="row">

                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Karyawan {{ $data->name }}</h6>

                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label><strong>Nama Lengkap</strong></label>
                                <p class="form-control-static">{{ $data->name }}</p>
                            </div>

                            <div class="form-group">
                                <label><strong>NIK (Nomor Induk Karyawan)</strong></label>
                                <p class="form-control-static">{{ $data->nik }}</p>
                            </div>


                            <div class="form-group">
                                <label><strong>Seksi</strong></label>
                                <p class="form-control-static">{{ $data->section }}</p>
                            </div>


                            <div class="form-group">
                                <label><strong>Shift</strong></label>
                                <p class="form-control-static">{{ $data->shift }}</p>
                            </div>

                            <div class="form-group">
                                <label><strong>Nomor Handphone</strong></label>
                                <p class="form-control-static">{{ $data->no_hp }}</p>
                            </div>
                            <div class="form-group">
                                <label><strong>Tanggal</strong></label>
                                <p class="form-control-static">{{ $data->tanggal }}</p>
                            </div>
                            <div class="form-group">
                                <label><strong>Suhu</strong></label>
                                <p class="form-control-static">{{ $data->suhu }} C</p>
                            </div>
                          
                        </div>
                    </div>

               
                </div>

<div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Karyawan {{ $data->name }}</h6>
                                </div>
                                <div class="card-body">
                            
                            <div class="form-group">
                                <label><strong>Nyeri tenggorokan</strong></label>
                                <p class="form-control-static">{{ $data->sakit_tenggorokan }}</p>
                            </div>

                            <div class="form-group">
                                <label><strong>Batuk</strong></label>
                                <p class="form-control-static">{{ $data->batuk }}</p>
                            </div>

                            <div class="form-group">
                                <label><strong>Pilek</strong></label>
                                <p class="form-control-static">{{ $data->pilek }}</p>
                            </div>

                            <div class="form-group">
                                <label><strong>Sesak Nafas</strong></label>
                                <p class="form-control-static">{{ $data->sesak_nafas }}</p>
                            </div>

                            <div class="form-group">
                                <label><strong>Diare</strong></label>
                                <p class="form-control-static">{{ $data->diare }}</p>
                            </div>

                            <div class="form-group">
                                <label><strong>Indra Perasa</strong></label>
                                <p class="form-control-static">{{ $data->rasa }}</p>
                            </div>

                            
                           <div class="form-group">
                                <label><strong>Indra Penciuman</strong></label>
                                <p class="form-control-static">{{ $data->penciuman }}</p>
                            </div>

                             
                        </div>
                    </div>
                </div>

            </div>

        </form>           
    </div>
       
@endsection