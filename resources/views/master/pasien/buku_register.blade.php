@extends('master.dashboard')
@section('content')
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" >
              <div class="x_panel">
                <div class="x_title">

                  <h2>Buku Register<small>Master</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr> 
                        <th>Nomor</th>
                        <th>Medrec</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>J/K</th>
                        <th>Alamat</th>
                        <th>Obat</th>
                        <th>Tindakan</th>
                        <th>Dokter</th>
                        <th>Bayar</th>
                        <th class="column-title no-link last"><span class="nobr">Aksi</span></th>
                      </tr>
                    </thead>
                         <?php $i = 1; ?>
                  @foreach ( $buku_register as $data)
                    <tbody>
                    <tr>
                        <td><?php  echo $i; $i+=1; ?></td>
                        <td>{{ $data->medrec }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ Carbon\Carbon::parse($data->tgl_lahir)->age }} Tahun </td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->alamat }}</td>    
                        <td>{{ $obat->nama_obat_merk}}</td>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td> 
                        <td class=" last">
                          <a href="#/{{ $data->id }}"><i class=" fa fa-edit"></i> Lihat Kwitansi</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
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

@endsection