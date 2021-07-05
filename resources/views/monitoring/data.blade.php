@extends('welcome')
@section('content')


                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Monitoring Data Karyawan Covid PT. KATOLEC INDONESIA</h1>
                 
   @if(session()->has('message'))
                            
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ session()->get('message') }}</strong>
                            </div>
                        @endif
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nama Lengkap</th>
                                            <th>NIK</th>
                                            <th>Seksi</th>
                                            <th>Shift</th>
                                            <th>Nomor Handphone</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($data as $value)
                                        <tr>
                                            <td>{{ $value->tanggal }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->nik }}</td>
                                            <td>{{ $value->section }}</td>
                                            <td>{{ $value->shift }}</td>
                                            <td>{{ $value->no_hp }}</td>
                                            
                                            <td>
                                            	<a href="{{ url('monitoring/data/detail/' . $value->id) }}" class="btn btn-info btn-circle btn-sm">
			                                        <i class="fas fa-info-circle"></i>
			                                    </a>
			                                    <a href="{{ url('monitoring/data/detail/' . $value->id) }}">
			                                    Detail
			                                </a>
			                                </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection