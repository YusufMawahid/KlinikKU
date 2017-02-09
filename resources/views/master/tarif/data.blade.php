@extends('master.dashboard')
@section('content')
<!-- 
  <div class="container body">
    <div class="main_container">
      <div class="right_col" role="main">
          <div class="clearfix"></div> -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" >
              <div class="x_panel">
                <div class="x_title">
<!-- SEARCH PENTING -->
<!-- <form id="search-form">
  <input type="text" class="term" name="Search" value="Search" autocomplete="off" />
  <input type="submit" name="Search" value="Search" />
</form> -->
                <button type="button" style="float:right;" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Tarif</button>

                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Tarif</h4>
                      </div>
                      <div class="modal-body">
                     <form id="demo-form2" action="add_tarif" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Tarif</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nama_tarif" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Klinik</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="klinik" id="klinik" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': 'Rp. 99999999'">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Dokter</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="dokter" id="dokter" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': 'Rp. 99999999'">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Asisten</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="asisten" id="asisten" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': 'Rp. 99999999'">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">BHP</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="bhp" id="bhp" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': 'Rp. 99999999'">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Jumlah</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="jumlah_total" id="jumlah" onchange="myFunction" class="form-control col-md-7 col-xs-12" readonly>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Batal</button>
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
                </div>
                
                 <h2>Tarif<small>Master</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr> 
                        <th>Nomor</th>
                        <th>Nama Tarif</th>
                        <th>Klinik</th>
                          <th>Dokter</th>
                        <th>Asisten</th>
                        <th>BHP</th>
                        <th>Total</th>
                        <th class="column-title no-link last"><span class="nobr">Aksi</span></th>
                      </tr>
                    </thead>
                         <?php $i = 1; ?>
                 	@foreach ( $tarif as $key => $data)
                    <tbody>
                    <tr>
                        <td><?php  echo $i; $i+=1; ?></td>
                        <td>{{ $data->nama_tarif }}</td>
                        <td>Rp. {{ number_format(str_replace("Rp. ", "", str_replace("_", "", $data->klinik))) }}</td>
                        <td>Rp. {{ number_format(str_replace("Rp. ", "", str_replace("_", "", $data->dokter))) }}</td>
                        <td>Rp. {{ number_format(str_replace("Rp. ", "", str_replace("_", "", $data->asisten))) }}</td>
                        <td>Rp. {{ number_format(str_replace("Rp. ", "", str_replace("_", "", $data->bhp))) }}</td>
                         <td>Rp. {{ number_format(str_replace("Rp. ", "", str_replace("_", "", $data->jumlah_total))) }}</td>
                        <td class=" last">
                          <a href="edit_tarif/{{ $data->id }}"><i class=" fa fa-edit"></i> Edit</a>&nbsp;&nbsp;&nbsp;
                          <a href="delete_tarif/{{ $data->id }}"><i class="fa fa-times-circle"></i> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                  {{ $tarif->render() }}
                </div>
              </div>
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