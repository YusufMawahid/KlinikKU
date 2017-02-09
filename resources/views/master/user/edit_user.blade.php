@extends('master.dashboard')
@section('content')
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">

<form action="{{ url('edit_user'.'/'.$edit_user->id) }}" method="POST" class="form-horizontal form-label-left" novalidate>
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$edit_user->id}}">
                    <span class="section">EDIT DATA</span>
                    {{ csrf_field() }}


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Medrec</label>
                      <div class="col-md-2 col-sm-2 col-xs-4">
                        <input type="text" name="medrec" value="{{ rand(1000,9999) }}" id="first-name" required="required" class="form-control col-md-4 col-xs-8" readonly>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="username" value="{{$edit_user->username}}" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" name="password" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nama" value="{{$edit_user->nama}}" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthdays" name="tgl_lahir" value="{{$edit_user->tgl_lahir}}" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" name="alamat" value="{{$edit_user->alamat}}" rows="2"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Nomor Handphone</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="no_hp" class="form-control" value="{{$edit_user->no_hp}}" data-inputmask="'mask' : '(999) 999-9999'">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Hak Akses</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="roles">
                          <option value="master">Master</option>
                          <option value="dokter">Dokter</option>
                          <option value="kasir">Kasir</option>
                        </select>
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">   
                        <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                    </div>
          </form>
                    <div class="form-group">
                      <div class="col-md-3 col-sm-2 col-xs-7 col-md-offset-4">   
                       <a href="{{ url('user') }}">
                        <button type="submit" class="btn btn-primary" data-dismiss="modal" style="margin-top:-80px;">Batal</button>
                       </a>
                      </div>
                    </div>
          <style type="text/css">
            .daterangepicker.dropdown-menu {
              z-index: 9999;
            }
          </style>

                </div>
              </div>
            </div>
          </div>
        </div>
 </div>

 <script>
    $(document).ready(function() {
      $(":input").inputmask();
    });
</script>
              
<script>
    $(document).ready(function() {
      $(":input").inputmask();
    });
</script>
</script>
@endsection
