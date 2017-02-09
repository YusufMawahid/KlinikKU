@extends('dokter.dashboard')
@section('content')
<div class="row">

<div class="col-md-5 col-sm-5 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2><i class="fa fa-user"></i> Detail <small>Pasien</small></h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                @foreach ($pasien as $data)
                <p>
                Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  {{ $data->nama }}
                <br>
                Umur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  {{ Carbon\Carbon::parse(date('Y-m-d', strtotime($data->tgl_lahir)))->age }} Tahun
                <br>
                Jenis Kelamin&nbsp; : {{ $data->jenis_kelamin }}
                <br>
                Nomor Telepon : {{ $data->no_hp }}
                <br>
                Pekerjaan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $data->pekerjaan }}
                </p>
                @endforeach
              </div>
            </div>
          </div>
   <form id="bmi-form">
<div class="col-md-7 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>BMI<small>Body Mass Index</small></h2>
                  <div class="clearfix"></div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                <label class="control-label col-md-3 col-sm-1 col-xs-3">kg</label>
                      <input type="number"  class="form-control" id="berat" placeholder="Berat Badan" name="BB" >
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                <label class="control-label col-md-3 col-sm-1 col-xs-3">cm</label>
                      <input type="number" class="form-control" id="tinggi" placeholder="Tinggi Badan" name="TB" >
                    </div>

<div class="col-md-9 col-sm-8 col-xs-12">
  		<input type="button" class="btn btn-default btn-xs" onClick="show()" id="showname" value="Hitung">
		<p id="result"></p>
		<p id="text"></p>
	</div>
			</div>
	</div>
	</form>
            <div class="col-md-7 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Rekam Medis</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />

                 <form action="{{ url('pemeriksaan_post' ) }}" id="form1" method="post" class="form-horizontal form-label-left input_mask" >
   {{ csrf_field() }}
    
                    
  
                <div class="x_content">	
                    <div class="form-group">
					<label class="control-label col-md-3 col-sm-1 col-xs-3">Keluhan Utama</label>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                    	<input type="text" class="form-control" name="keluhan_utama" required />
                      <input type="hidden" name="N" value="sudah_periksa">
                    </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-1 col-xs-3">Anamnesis</label>
                      <div class="col-md-9 col-sm-8 col-xs-12">
                        <textarea class="form-control" name="anamnesis" rows="2" required /></textarea>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-1 col-xs-3">Pemeriksaan Fisik</label>
                      <div class="col-md-9 col-sm-8 col-xs-12">
                        <textarea class="form-control" name="pemeriksaan_fisik" rows="1" required /></textarea>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-1 col-xs-3">Hasil Penunjang</label>
                      <div class="col-md-9 col-sm-8 col-xs-12">
                        <textarea class="form-control" name="hasil_penunjang" rows="1" required /></textarea>
                      </div>
                    </div>

				<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tarif / Tindakan</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_multiple form-control" name="tindakan" multiple="multiple" required />
                          @foreach ( $tarif as $data)
                          <option> {{ $data->nama_tarif }}</option>
                          @endforeach
                        </select>
                      </div>
                </div>


				<div class="form-group">
					<label class="control-label col-md-3 col-sm-1 col-xs-3">Saran Pemeriksaan</label>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                    	<input type="text" class="form-control" name="saran" required />
                    </div>
                    </div>

                    
                    </div>
                </div>
              </div>
	</div>

	

	
	<div class="col-md-5 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Obat Satuan</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />

				<label for="fullname">Obat 1</label>
                        <select class="select2_multiple form-control" name="R" multiple="multiple">
                          @foreach ( $obat as $data)
                          <option> {{ $data->nama_obat_merk }}</option>
                          @endforeach 
                        </select>
				
				<label for="fullname">Obat 2</label>
                    <select class="select2_multiple form-control" name="R" multiple="multiple">
                          @foreach ( $obat as $data)
                          <option> {{ $data->nama_obat_merk }}</option>
                          @endforeach
                        </select>
				
				<label for="fullname">Obat 3</label>
                    <select class="select2_multiple form-control" name="R" multiple="multiple">
                          @foreach ( $obat as $data)
                          <option> {{ $data->nama_obat_merk }}</option>
                          @endforeach
                        </select>
				
				<label for="fullname">Obat 4</label>
                    <select class="select2_multiple form-control" name="R" multiple="multiple">
                          @foreach ( $obat as $data)
                          <option> {{ $data->nama_obat_merk }}</option>
                          @endforeach
                        </select>
						 
						 <div id="content"></div>
                  <br>
                        <button type="button" id="btn1" class="btn btn-info btn-sm">Tambah Obat</button>
                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                    </div>

                 </div>
                 </div>
                 </div>
                 </form>
              
                 
                </div>
              </div>
	</div>
					

</div>
<input type="hidden" name="count" value="5" id="count">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#btn1").click(function(){
    	var count = parseInt($('#count').val());
        $("#content").append(" <label for='fullname'>Obat "+count+"</label><input type='text'id='fullname' class='form-control' placeholder='Nama Obat' name='R'/>");
        $("#count").val(count+1);
    });

});
</script>

<script>
    $(document).ready(function() {
      $(".select2_single").select2({
        placeholder: "Select a state",
        allowClear: true
      });
      $(".select2_group").select2({});
      $(".select2_multiple").select2({
        maximumSelectionLength: 5,
        placeholder: "Maksimal 5 Tarif / Tindakan",
        allowClear: true
      });
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
function show(){
 var vaha1= parseInt(document.getElementById("berat").value);
 var vyska2= parseInt(document.getElementById("tinggi").value);
var bmi=(vaha1/((vyska2/100)*(vyska2/100))); document.getElementById("result").innerHTML=bmi;


if (bmi<18.5){
  document.getElementById("text").innerHTML=("Gemuk");
}
  if (bmi>18.5 && bmi<24.9){
  document.getElementById("text").innerHTML=("Standar");
}
  if (bmi>25 && bmi<29.9){
  document.getElementById("text").innerHTML=("Terlalu gemuk");
}
  if (bmi>30 && bmi<34.9){
  document.getElementById("text").innerHTML=("Gelar obesitas 1");
}
  if (bmi>35 && bmi <39.9){
  document.getElementById("text").innerHTML=("Gelar obesitas 2");
}
  if (bmi>40){
  document.getElementById("text").innerHTML=("Pembunuhan!");
}
}

</script>
@endsection