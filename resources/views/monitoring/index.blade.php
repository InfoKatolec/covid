@extends('welcome')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('#myModal').modal({
            backdrop: 'static'
        });
        $('.launch-modal').click(function(){
        $('#myModals').modal({
            backdrop: 'static'
        });
    }); 
    });
</script>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pengecheckan Kondisi Terkini Karyawan. PT. KATOLEC INDONESIA</h5>
            </div>
            <div class="modal-body">
                <p>Apakah anda merasakan atau mengalami gejala gejala covid -19?
(nyeri tenggorokan, batuk, pilek, sesak nafas, diare, hilang indra perasa dan penciuman).</p>
<p>
Bila iya, silahkan untuk melanjutkan mengisi form berikut ini.</p>
               
                    <a data-dismiss="modal" class="btn btn-success">Ya</a>
                <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Tidak</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </div>
        </div>
    </div>
</div>


       <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Monitoring Data Karyawan Covid PT. KATOLEC INDONESIA </h1>
                    <hr>   
                      <form role="form" method="POST" action="{{ route('storeMonitoring') }}">
                         @csrf

                     
                         
                        <div class="row">

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Input Data Karyawan</h6>
                                </div>
                                <div class="card-body">
                            <div class="form-group">
                                <label><strong>Nama Lengkap</strong></label>
                                <input name="name" class="form-control form-control-static" value="{{ Auth::user()->name }}" readonly="true"></input>
                            </div>
                            <div class="form-group">
                                <label><strong>NIK (Nomor Induk Karyawan)</strong></label>
                                <input name="nik" class="form-control form-control-static" value="{{ Auth::user()->nik }}" readonly="true"></input>
                            </div>
                            <div class="form-group">
                                <label><strong>Seksi</strong></label>
                                <input name="section" class="form-control form-control-static" value="{{ Auth::user()->section }}" readonly="true"></input>
                            </div>
                             <div class="form-group">
                                <label><strong>Nomor Handphone</strong></label>
                                <input name="no_hp" class="form-control form-control-static" value="{{ Auth::user()->no_hp }}" readonly="true"></input>
                            </div>
                            <div class="form-group">
                                 <div class="form-group">
                                <label><strong>Shift</strong></label>
                                <select name="shift" class="form-control">
                                    <option></option>
                                    <option value="LONG SHIFT 1">LONG SHIFT 1</option>
                                    <option value="LONG SHIFT 2">LONG SHIFT 2</option>
                                    <option value="NON SHIFT">NON SHIFT</option>
                                    <option value="SHIFT 1">SHIFT 1</option>
                                    <option value="SHIFT 2">SHIFT 2</option>
                                    <option value="SHIFT 3">SHIFT 3</option>
                                </select>
                            </div>
                            </div>
                            <div class="form-group">
                                            <label><strong>Tanggal</strong></label>
                                            <input type="date" name="tanggal" class="form-control" id="datetimepicker1" data-format="dd/MM/yyyy hh:mm:ss">
                                        </div>
                            <div class="form-group">
                                <label><strong>Suhu</strong></label>
                                <input type="text" name="suhu" class="form-control">
                                
                            </div>
                          
                         </div>
                    </div>
                    <div id="myModals" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">KONFIRMASI</h5>
                </div>
                <div class="modal-body">
                    <p>Saya menyatakan bahwa saya telah mengisi formulir ini dengan sebenar benarnya.</p>
<p>Bila mana, saya berbohong, maka saya siap menerima konsekuensi berupa
sanksi dari perusahaan.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

                            <button type="button" id="myModals" class="btn btn-primary btn-icon-split btn-block launch-modal">
                                
                                        <span class="text">Kirim</span>
                            </button>
                              
                            <button type="reset" class="btn btn-warning btn-icon-split btn-block">
                            
                                        <span class="text">Cancel</span>
                            </button>

                </div>
<div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Input Data Karyawan</h6>
                                </div>
                                <div class="card-body">

                            <div class="form-group">
                                <label><strong>Nyeri Tenggorokan : </strong></label>
                            </div>
                            <div class="form-group">
                                 <label class="radio-inline">
                                    <input type="radio" name="sakit_tenggorokan" id="optionsRadiosInline1" value="Ya" checked>
                                    Ya
                                </label>&nbsp;
                                <label class="radio-inline">
                                    <input type="radio" name="sakit_tenggorokan" id="optionsRadiosInline2" value="Tidak">
                                    Tidak
                                </label>
                            </div>

                            <div class="form-group">
                                <label><strong>Batuk : </strong></label>
                            </div>
                            <div class="form-group">
                                  <label class="radio-inline">
                                    <input type="radio" name="batuk" id="optionsRadiosInline1" value="Ya" checked>
                                    Ya
                                </label>&nbsp;
                                <label class="radio-inline">
                                    <input type="radio" name="batuk" id="optionsRadiosInline2" value="Tidak">
                                    Tidak
                                </label>
                            </div>

                            <div class="form-group">
                                <label><strong>Pilek : </strong></label>
                            </div>
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input type="radio" name="pilek" id="optionsRadiosInline1" value="Ya" checked>
                                    Ya
                                </label>&nbsp;
                                <label class="radio-inline">
                                    <input type="radio" name="pilek" id="optionsRadiosInline2" value="Tidak">
                                    Tidak
                                </label>
                            </div>
                            <div class="form-group">
                                <label><strong>Sesak Nafas : </strong></label>
                                &nbsp;
                            </div>
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input type="radio" name="sesak_nafas" id="optionsRadiosInline1" value="Ya" checked>
                                    Ya
                                </label>&nbsp;
                                <label class="radio-inline">
                                    <input type="radio" name="sesak_nafas" id="optionsRadiosInline2" value="Tidak">
                                    Tidak
                                </label>
                            </div>

                            <div class="form-group">
                                <label><strong>Diare : </strong></label>
                                &nbsp;
                            </div>
                            <div class="form-group">
                                 <label class="radio-inline">
                                    <input type="radio" name="diare" id="optionsRadiosInline1" value="Ya" checked>
                                    Ya
                                </label>&nbsp;
                                <label class="radio-inline">
                                    <input type="radio" name="diare" id="optionsRadiosInline2" value="Tidak">
                                    Tidak
                                </label>
                            </div>

                            <div class="form-group">
                                <label><strong>Indra Perasa : </strong></label>
                            </div>
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input type="radio" name="rasa" id="optionsRadiosInline1" value="Merasa" checked>
                                    Merasa
                                </label>&nbsp;
                                <label class="radio-inline">
                                    <input type="radio" name="rasa" id="optionsRadiosInline2" value="Tidak">
                                    Tidak
                                </label>
                            </div>
                            <div class="form-group">
                                <label><strong>Indra Penciuman : </strong></label>
                            </div>
                            <div class="form-group">
                                  <label class="radio-inline">
                                    <input type="radio" name="penciuman" id="optionsRadiosInline1" value="Merasa" checked>
                                    Merasa
                                </label>&nbsp;
                                <label class="radio-inline">
                                    <input type="radio" name="penciuman" id="optionsRadiosInline2" value="Tidak">
                                    Tidak
                                </label>
                            </div>
                             
                        </div>
                    </div>
                        
                </div>

            </div>

        </form>           
    </div>


@endsection
