@extends('master.dashboard')
@section('content')
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">

<form action="{{ url('posttambah_obat'.'/'.$tambah->id) }}" method="post" class="form-horizontal form-label-left" novalidate>
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$tambah->id}}">
                    <span class="section">EDIT DATA {{ $tambah->nama_obat_merk }}</span>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama(Merk)</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nama_obat_merk" value="{{$tambah->nama_obat_merk}}" type="text" disabled="disabled">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama(Generik)</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" name="nama_obat_generik" value="{{$tambah->nama_obat_generik}}" disabled="disabled rows="3"></textarea>
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Golongan Obat(COMBO BOX)</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="golongan_obat" disabled="disabled" value="{{$tambah->golongan_obat}}" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Beli</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthdays" name="tanggal_beli" value="{{$tambah->tanggal_beli}}" class="date-picker form-control col-md-7 col-xs-12"  type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Kadaluwarsa</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthdayss" name="tanggal_kadaluarsa" value="{{$tambah->tanggal_kadaluarsa}}" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Harga Beli</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="harga_beli" value="{{$tambah->harga_beli}}" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999999'">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Harga Jual</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="harga_jual" value="{{$tambah->harga_jual}}" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999999'">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Jumlah(SEKARANG)</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="jumlah" value="{{$tambah->jumlah}}" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999999'" disabled="disabled">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Tambah Jumlah</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="jumlah" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999999'">
                      </div>
                    </div>

                  <br>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <a href="{{url('stok_obat')}}"><button type="submit" class="btn btn-primary">Batal</button></a>
                        <button id="send" type="submit" class="btn btn-success">Simpan</button>
                      </div>
                    </div>
                  </form>

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
          <script type="text/javascript">
            $(document).ready(function() {
              $('#birthdays').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
              }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
              });
            });
          </script>
          <script type="text/javascript">
            $(document).ready(function() {
              $('#birthdayss').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
              }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
              });
            });
          </script>
@endsection