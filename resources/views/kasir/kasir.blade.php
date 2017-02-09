@extends('kasir.dashboard')
@section('content')

        <div class="page-title">
            
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
            <div class="x_title">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Pasien</button>


                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Pasien Baru</h4>
                      </div>
                      <div class="modal-body">
                     <form id="demo-form2" action="{{ url('tambah_pasien') }}" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Medrec</label>
                      <div class="col-md-2 col-sm-2 col-xs-4">
                        <input type="text" name="medrec" value="{{ rand(1000,9999) }}" id="first-name" required="required" class="form-control col-md-4 col-xs-8" readonly>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nama" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <input id="birthdays" name="tgl_lahir" class="date-picker form-control col-md-7 col-xs-12" required="required" placeholder="contoh : 05/19/1999" type="text">
                     <h3 id="umur" style="float: left;margin-left: 220px; width: 500px; margin-top: -25px;">Tahun, Bulan</h3>
                       </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <p>
                      Pria
                      <input type="radio" class="flat" name="jenis_kelamin" id="genderM" value="Pria" checked="" required /> 
                      Wanita
                      <input type="radio" class="flat" name="jenis_kelamin" id="genderF" value="Wanita" />
                    </p>
                    </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" name="alamat" rows="2"></textarea>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone mask</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="no_hp" data-inputmask="'mask' : '(999) 999-9999'">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="pekerjaan" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Pendaftaran</label>
                      <div class="col-md-2 col-sm-4 col-xs-10">
                        <input type="text" name="jenis_pendaftaran" id="first-name" required="required" class="form-control col-md-4 col-xs-12" value="UMUM" disabled="disabled">
                      </div>
                    </div>


                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a href="javascript:void(0)" class="btn btn-primary" data-dismiss="modal">Batal</a>
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
            </div>

            <div class="row">
               <form action="{{ url('mencari_pasien') }}" method="get" class="form-horizontal form-label-left">
                    {{ csrf_field() }}
              <div class="col-md-11 col-sm-6 col-xs-12">
              <div class="x_panel">
                
          <div class="page-title">
            <div class="title_left">
              <a href="{{ url('kasir')}}"><h3>PENDAFTARAN DAN KASIR</h3></a>
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
                        <th>Medrec</th>
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Nomor Handphone</th>
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                     <?php $i = 1; ?>
                   @foreach ($user as $data)
                    <tbody>
                      <tr>
                        <td><?php  echo $i; $i+=1; ?></td>
                        <td>{{ $data->medrec }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ Carbon\Carbon::parse(date('Y-m-d', strtotime($data->tgl_lahir)))->age }} Tahun </td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->no_hp }}</td>
                        <td>{{ $data->pekerjaan }}</td>
                        <td><a href="delete_pasien/{{ $data->id }}"><i class="fa fa-trash-o"></i>  Hapus</a> &nbsp;&nbsp;&nbsp;
                        <i class="fa fa-list-alt" data-toggle="modal" data-target=".bs-example-modal-sm"></i><span onclick="asign({{$data->id}})" data-toggle="modal" data-target=".bs-example-modal-sm">  Daftarkan</span></td>
                       </tr>
                    </tbody>
                  @endforeach
                  </table>
{{ $user->render() }}
                </div>
              </div>
<!-- Small modal -->
               
            <form id="demo-form2" action="{{ url('daftar_pasien_kasir') }}" method="post" data-parsley-validate class="form-horizontal form-label-left">
            {{ csrf_field() }}

                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                <!-- lajsldk -->    <input type="hidden" id="anu" name="id">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Daftarkan Pasien</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Dokter</label>
                      <div class="col-md-9 col-sm-9 col-xs-14">
                        <select class="form-control" name="roles">
                          @foreach ($pilih_dokter as $data)
                          <option value="{{$data->id}}">{{$data->nama}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Daftarkan</button>
                      </div>
                    </div>
                  </div>
                 </div>
                </form>
                <!-- /modals -->
              </div>
            </div>
          </div>

          <form action="{{ url('antrian_pasien/'.$antrian_pasien_kasir) }}" method="get">
            {{ csrf_field() }}
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
                      </tr>
                    </thead>
                          <?php $i = 1; ?>
                   @foreach ($antrian_pasien_kasir as $data)
                    <tbody>
                      <tr>
                   <td><?php  echo $i; $i+=1; ?></td>
                   <td>{{$data->nama}}</td>
                      </tr>
                    </tbody>
                      @endforeach
                  </table>
                  {{ $antrian_pasien_kasir->render() }}
                </div>
              </div>
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
