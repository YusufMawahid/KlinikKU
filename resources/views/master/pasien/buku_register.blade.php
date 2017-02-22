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
                        <th>Nama</th>
                        <th>Keluhan</th>
                        <th>Hasil Penunjang</th>
                        <th>Pemeriksaan Fisik</th>
                        <th>Obat</th>
                        <th>Tindakan</th>
                        <th>Saran</th>
                        <th class="column-title no-link last"><span class="nobr">Aksi</span></th>
                      </tr>
                    </thead>
                         <?php $i = 1; ?>
                  @foreach ( $input_keluhan as $data)
                    <tbody>
                    <tr>
                        <td><?php  echo $i; $i+=1; ?></td>
                        <td>{{ $data->S }}</td>
                        <td>{{ $data->keluhan_utama }}</td>
                        <td>{{ $data->hasil_penunjang }}</td>
                        <td>{{ $data->pemeriksaan_fisik }}</td>
                        <td>{{ $data->R }}</td>
                        <td>{{ $data->tindakan }}</td>
                        <td>{{ $data->saran }}</td>
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