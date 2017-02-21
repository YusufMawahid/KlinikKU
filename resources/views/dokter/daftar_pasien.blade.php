@extends('dokter.dashboard2')
@section('content')
        <div class="page-title">
            
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
            
          <form action="{{ url('periksa')}}">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Antrian Pasien</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                     <?php $i = 1; ?>
                      @foreach($pasien as $data)
                        <td><?php  echo $i; $i+=1; ?></td>
                        <td>{{ $data->nama }}</td>
                        <td>
                        <input type="hidden" id="anu" name="id">
                        <a href="periksa_pasien/{{ $data->id }}"><i class="fa fa-stethoscope"></i> <span onclick="asign({{$data->id}})" data-toggle="modal" data-target=".bs-example-modal-sm">  Periksa</span></a></td>
                      </tr>
                      @endforeach 
                    </tbody>
                  </table>
{{ $pasien->render() }}
                </div>
              </div>
            </form>
            <form action="{{ url('selesai_periksa/'.$sudah_periksa) }}">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Pasien Telah Diperiksa</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                     <?php $i = 1; ?>
                      @foreach($sudah_periksa as $data)
                        <td><?php  echo $i; $i+=1; ?></td>
                        <td>{{ $data->S }}</td>
                        <td><a href="delete_pasien_inputkeluhan/{{ $data->id }}"><i class="fa fa-trash"></i> Delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </form>
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
                //console.log(start.toISOString(), end.toISOString(), label);
                var birthday = moment($("#birthdays").val(), "MM/DD/YYYY");
                $("#umur").html(moment().diff(birthday, 'years') + " Tahun " + (moment().diff(birthday, 'months') % 12) + " Bulan");
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