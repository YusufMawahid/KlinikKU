@extends('dokter.dashboard')
@section('content')

        <div class="page-title">
            
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

            <div class="row">
               <form action="{{ url('mencari_pasien') }}" method="get" class="form-horizontal form-label-left">
                    {{ csrf_field() }}
              <div class="col-md-11 col-sm-6 col-xs-12">
              <div class="x_panel">
                
          <div class="page-title">
            <div class="title_left">
              <a href="{{ url('list_obat_dokter')}}"><h3>LIST OBAT</h3></a>
            </div>

            <div class="title_right">
              <div class="col-md-6 col-sm-5 col-xs-16 form-group pull-right top_search">
                <div class="input-group">
                      <input type="text" class="form-control" name="search" placeholder="Berdasarkan Nama ">    
                  <a href="{{ url('mencari_pasien') }}">
                        <span class="input-group-btn">
                            <button class="btn btn-default" style="
    position: absolute;
    margin-top: -14px;" type="button">Cari</button>
                        </span>
                      </a>
                </div>
              </div>
            </div>
          </div>
              <div class="x_title">
                  <div class="clearfix"></div>
                </div>

              </form>
                <div class="x_content">
                  <table class="table table-hover">
                
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Obat</th>
                        <th>Kandungan</th>
                        <th>Golongan</th>
                        <th>Harga</th>
                      </tr>
                    </thead>
					<?php $i = 1; ?>
                  	@foreach ($list_obat_dokter as $key => $data)
                    <tbody>
                      <tr>
                      <td><?php  echo $i; $i+=1; ?></td>
                        <td>{{ $data->nama_obat_merk }}</td>
                        <td>{{ $data->nama_obat_generik }}</td>
                        <td>{{ $data->golongan_obat }}</td>
                        <td>Rp. {{ number_format(str_replace("_", "", $data->harga_jual)) }}</td>
                       </tr>
                    </tbody>
                    @endforeach
                  </table>
{{ $list_obat_dokter->render() }}
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
          </script>
@endsection
