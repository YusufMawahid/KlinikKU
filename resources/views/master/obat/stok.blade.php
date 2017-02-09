@extends('master.dashboard')
@section('content')

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12" >
            <div class="title_left">
              <h3>OBAT | MASTER</h3>
            </div> 
            <div class="x_panel">
                <div class="x_title">
                <button type="button" style="float:left;" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Obat Baru</button>

                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Obat Baru</h4>
                      </div>
                      <div class="modal-body">
                     <form id="demo-form2" action="add_obat" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                     {{ csrf_field() }}
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama(Merk)</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nama_obat_merk" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama(Generik)</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" name="nama_obat_generik" rows="3"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Golongan</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" name="golongan_obat" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Beli</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthdays" name="tanggal_beli" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Kadaluwarsa</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthdayss" name="tanggal_kadaluarsa" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Harga Beli</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="harga_beli" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999999'">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Harga Jual</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="harga_jual" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999999'">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Jumlah</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="jumlah" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999999'">
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
                <form action="{{url('mencari_obat')}}" method="get">
                    {{ csrf_field() }}
                <div class="title_right">
                  <div class="col-md-3 col-sm-5 col-xs-16 form-group pull-right top_search">
                <div class="input-group">
                      <input type="text" class="form-control" name="search" placeholder="Cari . . .">    
                        
                  <a href="{{ url('mencari_obat') }}">
                  <span class="input-group-btn">
                            <button class="btn btn-default" style="
    position: absolute;
    margin-top: -14px;" type="submit">Cari</button>
                        </span>
                        </a>
                </div>
              </div>
            </div>
            </form>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr> 
                        <th>Nomor</th>
                        <th>Nama(Merk)</th>
                        <th>Nama(Generik)</th>
                        <th>Golongan Obat</th>
                        <th>Tanggal Beli</th>
                        <th>Tanggal Kadaluarsa</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th class="column-title no-link last"><span class="nobr">Action</span></th>
                      </tr>
                    </thead>
                         <?php $i = 1; ?>
                  @foreach ($obat as $key => $data)
                    <tbody>
                    <tr>
                        <td><?php  echo $i; $i+=1; ?></td>
                        <td>{{ $data->nama_obat_merk }}</td>
                        <td>{{ $data->nama_obat_generik }}</td>
                        <td>{{ $data->golongan_obat }}</td>
                        <td>{{ $data->tanggal_beli }}</td>
                        <td>{{ $data->tanggal_kadaluarsa}}</td>
                        <td>Rp. {{ number_format(str_replace("_", "", $data->harga_beli)) }}</td>
                        <td>Rp. {{ number_format(str_replace("_", "", $data->harga_jual)) }}</td>
                        <td>{{ str_replace("_", "", $data->jumlah) }}</td>
                        <td class=" last">
                        <a href="edit_obat/{{ $data->id }}"><i class=" fa fa-edit"></i></a>&nbsp;
                        <a href="tambah_obat/{{ $data->id }}"><i class="fa fa-plus-circle"></i></a> &nbsp;
                        <a href="delete_obat/{{ $data->id }}"><i class="fa fa-times-circle"></i></a>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                  </table>
                  {{ $obat->render() }}
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
@endsection