@extends('dokter.dashboard')
@section('content')

        <div class="row">
          <div class="col-md-7 col-sm-5 ol-xs-12" >
          <div class="x_panel">
<form id="demo-form2" action="{{ url('tambah_taksiran_persalinan') }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <span class="section">Taksiran Persalinan</span>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal HPHT</label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input id="hpht" name="tanggal_hpht" class="date-picker form-control col-md-7 col-xs-12" required="required" placeholder="contoh : 05/19/1999" type="text">
                       </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Taksiran Persalinan</label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input readonly id="taksiran" name="taksiran_persalinan" class="date-picker form-control col-md-7 col-xs-12" type="text">
                       </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                    </div>

                     <style type="text/css">
          	.daterangepicker.dropdown-menu {
          		z-index: 9999;
          	}
          			</style>
                    </form>

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
              $('#hpht').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
              }, function(start, end, label) {
                //console.log(start.toISOString(), end.toISOString(), label);
                var hpht = moment($("#hpht").val(), "MM/DD/YYYY");
                $("#taksiran").val(hpht.add(9,'months').format("MM/DD/YYYY"));
              });
            });
          </script>
          <script type="text/javascript">
            $(document).ready(function() {
              $('#birthdayss').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
              }, function(start, end, label) {
                //console.log(start.toISOString(), end.toISOString(), label);
                $("#umur").html("AAAA");

              });
            });
            function asign(an) {
              $("#anu").val(an);
            }
          </script>
@endsection