@extends('master.dashboard')
@section('content')
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" >
              <div class="x_panel">
                <div class="x_title">
                <button type="button" style="float:right;" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah User</button>

                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">User Baru</h4>
                      </div>
                      <div class="modal-body">
                     <form id="demo-form2" action="add_user" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Medrec</label>
                      <div class="col-md-2 col-sm-2 col-xs-4">
                        <input type="text" name="medrec" value="{{ rand(1000,9999) }}" id="first-name" required="required" class="form-control col-md-4 col-xs-8" readonly>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="username" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" name="password" id="first-name" required="required" ng-model="user.password" ui-show-password  class="form-control col-md-7 col-xs-12">
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
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthdays" name="tgl_lahir" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" name="alamat" rows="2"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Nomor Handphone</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="no_hp" class="form-control" data-inputmask="'mask' : '(999) 999-9999'">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Hak Akses</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="roles">  
                          <option value="master">Master</option>
                          <option value="dokter">Dokter</option>
                          <option value="kasir">Kasir</option>
                        </select>
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
                        <th>Medrec</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Nomor Handphone</th>
                        <th>Alamat</th>
                        <th>Pangkat</th>
                        <th class="column-title no-link last"><span class="nobr">Aksi</span></th>
                      </tr>
                    </thead>
                         <?php $i = 1; ?>
                 	@foreach ( $user as $key => $data)
                    <tbody>
                    <tr>
                        <td><?php  echo $i; $i+=1; ?></td>
                        <td>{{ $data->medrec }}</td>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->no_hp }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->roles }}</td>
                        <td class=" last">
                          <a href="edit_user/{{ $data->id }}"><i class=" fa fa-edit"></i> Edit</a>&nbsp;&nbsp;&nbsp;
                          <a href="delete_user/{{ $data->id }}"><i class="fa fa-times-circle"></i> Delete</a>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                  </table>
                  {{ $user->render() }}
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
<script>
		angular.module('starter', [
  'ionic'
])
.controller('loginController', [
  '$scope',
  function ($scope) {
    $scope.user = {
      login: '',
      password: ''
    };   
  }
])
.run(function ($ionicPlatform) {
  $ionicPlatform.ready(function() {
    // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
    // for form inputs)
    if (window.cordova && window.cordova.plugins.Keyboard) {
      cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
    }
    if (window.StatusBar) {
      StatusBar.styleDefault();
    }
  });
})
.directive('uiShowPassword', [
  function () {
  return {
    restrict: 'A',
    scope: true,
    link: function (scope, elem, attrs) {
      var btnShowPass = angular.element('<button class="button button-clear"><i class="ion-eye"></i></button>'),
        elemType = elem.attr('type');

      // this hack is needed because Ionic prevents browser click event 
      // from elements inside label with input
      btnShowPass.on('mousedown', function (evt) {
        (elem.attr('type') === elemType) ?
          elem.attr('type', 'text') : elem.attr('type', elemType);
        btnShowPass.toggleClass('button-positive');
        //prevent input field focus
        evt.stopPropagation();
      });

      btnShowPass.on('touchend', function (evt) {
        var syntheticClick = new Event('mousedown');
        evt.currentTarget.dispatchEvent(syntheticClick);

        //stop to block ionic default event
        evt.stopPropagation();
      });

      if (elem.attr('type') === 'password') {
        elem.after(btnShowPass);
      }
    }
  };
}]);

</script>
<!-- PENTINNG
<script>
	$('#search-form .term').bind('input', function(){
  console.log('this actually works');
});
</script> -->
@endsection