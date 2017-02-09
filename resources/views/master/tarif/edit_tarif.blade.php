@extends('master.dashboard')
@section('content')
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">

<form action="{{ url('edit_tarif'.'/'.$edit_tarif->id) }}" method="POST" class="form-horizontal form-label-left" novalidate>
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$edit_tarif->id}}">
                    <span class="section">EDIT DATA {{ $edit_tarif->nama_tarif }}</span>
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Tarif</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nama_tarif" value="{{$edit_tarif->nama_tarif}}" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Klinik</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="klinik" id="klinik" value="{{$edit_tarif->klinik}}" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': 'Rp. 99999999'">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Dokter</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="dokter" id="dokter" value="{{$edit_tarif->dokter}}" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': 'Rp. 99999999'">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Asisten</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="asisten" id="asisten" value="{{$edit_tarif->asisten}}" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': 'Rp. 99999999'">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">BHP</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="bhp" id="bhp" value="{{$edit_tarif->bhp}}" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': 'Rp. 99999999'">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Jumlah</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="jumlah_total" value="Rp. {{ number_format($edit_tarif->jumlah) }}" id="jumlah" onchange="myFunction" class="form-control col-md-7 col-xs-12" readonly>
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
                       <a href="{{ url('tarif') }}">
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
<script>
  $("#klinik").change(function(){
    var klinik = parseInt($('#klinik').inputmask('unmaskedvalue'));
    var dokter = parseInt($('#dokter').inputmask('unmaskedvalue'));
    var asisten = parseInt($('#asisten').inputmask('unmaskedvalue'));
    var bhp = parseInt($('#bhp').inputmask('unmaskedvalue'));
    $("#jumlah").val(klinik+dokter+asisten+bhp);
  });

  $("#dokter").change(function(){
    var klinik = parseInt($('#klinik').inputmask('unmaskedvalue'));
    var dokter = parseInt($('#dokter').inputmask('unmaskedvalue'));
    var asisten = parseInt($('#asisten').inputmask('unmaskedvalue'));
    var bhp = parseInt($('#bhp').inputmask('unmaskedvalue'));
    $("#jumlah").val(klinik+dokter+asisten+bhp);
  });
  $("#asisten").change(function(){
    var klinik = parseInt($('#klinik').inputmask('unmaskedvalue'));
    var dokter = parseInt($('#dokter').inputmask('unmaskedvalue'));
    var asisten = parseInt($('#asisten').inputmask('unmaskedvalue'));
    var bhp = parseInt($('#bhp').inputmask('unmaskedvalue'));
    $("#jumlah").val(klinik+dokter+asisten+bhp);
  });
  $("#bhp").change(function(){
    var klinik = parseInt($('#klinik').inputmask('unmaskedvalue'));
    var dokter = parseInt($('#dokter').inputmask('unmaskedvalue'));
    var asisten = parseInt($('#asisten').inputmask('unmaskedvalue'));
    var bhp = parseInt($('#bhp').inputmask('unmaskedvalue'));
    $("#jumlah").val(klinik+dokter+asisten+bhp);
  });



</script>
<!-- PENTINNG
<script>
  $('#search-form .term').bind('input', function(){
  console.log('this actually works');
});
</script> -->
@endsection
