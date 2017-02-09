<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>KlinikKU! | </title>

  <!-- Bootstrap core CSS -->

  <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

  <link href="{{ url('fonts/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ url('css/animate.min.css') }}" rel="stylesheet">

  <link href="{{ url('css/select/select2.min.css') }}" rel="stylesheet">
  <!-- Custom styling plus plugins -->
  <link href="{{ url('css/custom.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ url('css/maps/jquery-jvectormap-2.0.3.css') }}" />
  <link href="{{ url('css/icheck/flat/green.css') }}" rel="stylesheet" />
  <link href="{{ url('css/floatexamples.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/3.1.2/jquery.bootstrap-touchspin.min.css" integrity="sha256-0XCFE+c7kCQ49l4F7IvzVSvXXkQMxyKCbm83EbkZu4U=" crossorigin="anonymous" />

  <!-- Custom styling plus plugins -->

  <link href="{{ url('js/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('js/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('js/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('js/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('js/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />


  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/jquery-number.js') }}"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="/" class="site_title"><i class="fa fa-hospital-o"></i> <span>KlinikKU</span></a>
          </div>
          <div class="clearfix"></div>


          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="{{ url('images/img.jpg') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{  Auth::user()->username }}</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>GENERAL</h3><br>
              <ul class="nav side-menu">
                <li><a href="{{ url('taksiran_persalinan') }}"><i class="fa fa-calendar"></i> Taksiran Persalinan</a>
                </li>
                <li><a href="{{ url('kalender_kb')}}"><i class="fa fa-calendar"></i> Kalender KB</a></li>

                <li><a href="{{ url('kalkulator_dosis')}}"><i class="fa fa-calculator"></i> Kalkulator Dosis</a></li>
                <li><a href="{{ url('list_obat_dokter') }}"><i class="fa fa-list"></i>List Obat</a>
                </li>
                <li><a href="{{ url('list_tarif_dokter') }}"><i class="fa fa-list"></i>List Tarif</a></li>
                </ul>
            </div>

          </div>
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="{{ url('images/img.jpg') }}" alt="">{{  Auth::user()->username }}
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="javascript:;">  Profile</a>
                  </li>
                  <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->


      <!-- page content -->
      <div class="right_col" role="main">
<div class="">
        <!-- footer content -->
        <!-- <footer>
          <div class="copyright-info">
            <p class="pull-right">KlinikKU - Application by <a href="https://web.facebook.com/wahidweki135" target="_blank">Yusuf Mawahid</a>
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
         --><!-- /footer content -->

@yield('content')
      </div>
    </div>
  </div>
</div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>

  <!-- bootstrap progress js -->
  <script src="{{ url('js/progressbar/bootstrap-progressbar.min.js') }}"></script>
  <script src="{{ url('js/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <!-- icheck -->
  <script src="{{ url('js/icheck/icheck.min.js') }}"></script>
  <!-- gauge js -->
  <script type="text/javascript" src="{{ url('js/gauge/gauge.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/gauge/gauge_demo.js') }}"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="{{ url('js/moment/moment.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/datepicker/daterangepicker.js') }}"></script>
  <!-- chart js -->
  <script src="{{ url('js/chartjs/chart.min.js') }}"></script>
  <!-- sparkline -->
  <script src="{{ url('js/sparkline/jquery.sparkline.min.js') }}"></script>
  <!-- Select2 -->
  <script src="{{ url('js/select/select2.full.js') }}"></script>

  <script src="{{ url('js/custom.js') }}"></script>
  <!-- skycons -->
  <script src="{{ url('js/skycons/skycons.min.js') }}"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="{{ url('js/flot/jquery.flot.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/flot/jquery.flot.pie.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/flot/jquery.flot.orderBars.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/flot/jquery.flot.time.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/flot/date.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/flot/jquery.flot.spline.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/flot/jquery.flot.stack.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/flot/curvedLines.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/flot/jquery.flot.resize.js') }}"></script>
  <!-- pace -->
  <script src="{{ url('js/pace/pace.min.js') }}"></script>
  <!-- flot -->
  <script src="{{ url('js/validator/validator.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/3.1.2/jquery.bootstrap-touchspin.min.js" integrity="sha256-WysW9u0zy9VFfxYREP30Qwo325s1aW2+TFm4BnmUr9w=" crossorigin="anonymous"></script>
        <script src="{{ url('js/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('js/datatables/dataTables.bootstrap.js') }}"></script>
        <script src="{{ url('js/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ url('js/datatables/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ url('js/datatables/jszip.min.js') }}"></script>
        <script src="{{ url('js/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ url('js/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ url('js/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ url('js/input_mask/jquery.inputmask.js') }}"></script>
        <script src="{{ url('js/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ url('js/datatables/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ url('js/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ url('js/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ url('js/datatables/responsive.bootstrap.min.js') }}"></script>
        <script src="{{ url('js/datatables/dataTables.scroller.min.js') }}"></script>


  <script>
 //New Weight Code
//$('.table').footable();
$('.resetme').on("click",function() { 
 $('input').val(' ');
    //$('span.label').text("");
 $('input:checkbox.print').attr('checked', false);
 $('label.btn').removeClass('active');
}); 
$(".wtA").on('keyup',function() {
    var wtValueA = parseFloat($('.wtA').val());
    if (!isNaN(wtValueA)) {
        $('.lbkg').text((wtValueA / 2.2046)).number(true, 2);
    } else { // the input wasn't a number
        $('.lbkg').text("");
        badWeight();
        setTimeout(function () {
            $(".wt_error").fadeOut();
        }, 2000);
        $('.wtA,.wtB,input.weight_lb, input.weight_kg').val('');
        return false;
    }
     $('.wtB').val($(".lbkg").text()).number(true, 2);
});

$(".wtB").on('keyup',function() {
    var wtValueB = parseFloat($('.wtB').val());
    if (!isNaN(wtValueB)) {
        $('.kglb').text((wtValueB * 2.2046)).number(true, 2);
    } else { // the input wasn't a number
        $('.kglb').text("");
        badWeight();
        setTimeout(function () {
            $(".wt_error").fadeOut();
        }, 2000);
        $('.wtA,.wtB,input.weight_lb, input.weight_kg').val('');
        return false;
    }
      $('.wtA').val($(".kglb").text()).number(true, 2);
});

function badWeight() {
    $("#results").find("input[type='text']").val("");
    var a = $(".wt_error").fadeIn();
}

$(".lbkg").on('click',function() {
    var value = $(this).text();
    var input = $('.wtA');
    input.val(value);
});

$(".kglb").on('click',function() {
    var value = $(this).text();
    var input = $('.wtB');
    input.val(value);
});


$('#dexdo,#concDex,#dexdoF,#concDexF').on("change",function() {
    var concvalueDex = parseFloat($('#concDex').val());
  var concvalueDexF = parseFloat($('#concDexF').val());
  var drugD = parseFloat($('#dexdo').val());
   var drugF = parseFloat($('#dexdoF').val());
var wtvalue6  = parseFloat($('.wtB').val());
   $('#dexDose').text(((wtvalue6 * drugD)/1000)/concvalueDex).number( true, 2 ).append(' ml');
  $('#dexDoseF').text(((wtvalue6 * drugF)/1000)/concvalueDexF).number( true, 2 ).append(' ml');
     return calcDose();
}); 

$('input.drug').on("change",function() {
 var drug = parseFloat($(this).val());
   var drug1 = $(this).attr('data-id');
    var drug2 = parseFloat($(this).attr('data-conc'));
    var wtBValue  = parseFloat($('.wtB').val());
    $(drug1).text((wtBValue * drug)/drug2 ).number( true, 2 ).append(' ml');
     //$("#test3").trigger("click");
    console.log(drug);
      return calcDose();
    
}); 

$(".wtA,.wtB").on('keyup',function() {
  return calcDose();
});


$('button.btn.selectpicker').addClass('btn-xs');

$("#concF1, #concF2,#concBSR").on("change",function() {
  var concvalueBSR = parseFloat($('#concBSR').val()); 
var concvalueF1 = parseFloat($('#concF1').val());
  var concvalueF2 = parseFloat($('#concF2').val());
  var bupo = parseFloat($('#bupo').val());
  var bupoF2 = parseFloat($('#bupoF2').val());
var wtvalue6  = parseFloat($('.wtB').val());
$('#buprDoseF1').text((wtvalue6 * bupo)/ concvalueF1 ).number( true, 2 ).append(' ml');
  $('#buprDoseF2').text((wtvalue6 * bupoF2)/ concvalueF2 ).number( true, 2 ).append(' ml');
  $('#buprDoseSR').text((wtvalue6 * 0.12)/ concvalueBSR ).number( true, 3 ).append(' ml');
  return calcDose(); 
});

function calcDose() {
//$("#test3").on('click',function() {
var concvalueF1 = parseFloat($('#concF1').val());
 var concvalueF2 = parseFloat($('#concF2').val());
  
   var concvalueBSR = parseFloat($('#concBSR').val()); 
 var magicDose = $("#magicdose");
var $dose4 = $("#dose4");
var ace = parseFloat($('#ace').val());
  var diazo = parseFloat($('#diazo').val());
var hydro = parseFloat($('#hydro').val());
 var propo = parseFloat($('#propo').val()); 
    var morpho = parseFloat($('#morpho').val());
   var concvalueDex = parseFloat($('#concDex').val());
   var concvalueDexF = parseFloat($('#concDexF').val());
  var drugD = parseFloat($('#dexdo').val()); 
  var drugF = parseFloat($('#dexdoF').val());
var keto = parseFloat($('#keto').val());
  var ketoF = parseFloat($('#ketoF').val());
var buto = parseFloat($('#buto').val());
  var butoF = parseFloat($('#butoF').val());
  var carpo = parseFloat($('#carpo').val());
  var meloxi = parseFloat($('#meloxi').val());
    var bupo = parseFloat($('#bupo').val());
  var bupoF2 = parseFloat($('#bupoF2').val());
var wtvalue6  = parseFloat($('.wtB').val());

 if (!isNaN(wtvalue6)) { // the input is a number
        $dose4.text(wtvalue6 * 0.2);        
$('#dexDose').text(((wtvalue6 * drugD)/1000)/concvalueDex).number( true, 2 ).append(' ml');
   $('#dexDoseF').text(((wtvalue6 * drugF)/1000)/concvalueDexF).number( true, 2 ).append(' ml');
$('#antiDose').text(((wtvalue6 * drugD)/1000)/concvalueDex).number( true, 2 ).append(' ml');
   $('#antiDoseF').text(((wtvalue6 * drugF)/1000)/concvalueDexF).number( true, 2 ).append(' ml');
$('#ketDose').text((wtvalue6 * keto)/100 ).number( true, 2 ).append(' ml');
   $('#ketDoseF').text((wtvalue6 * ketoF)/100 ).number( true, 2 ).append(' ml');
$('#valDose').text((wtvalue6 * diazo)/5 ).number( true, 2 ).append(' ml');
$('#butDose').text((wtvalue6 * buto)/10 ).number( true, 2 ).append(' ml');
   $('#butDoseF').text((wtvalue6 * butoF)/10 ).number( true, 2 ).append(' ml');
$('#aceDose').text((wtvalue6 * ace)/10 ).number( true, 2 ).append(' ml');
$('#buprDoseF2').text((wtvalue6 * bupoF2)/ concvalueF2 ).number( true, 2 ).append(' ml');
  $('#buprDoseF1').text((wtvalue6 * bupo)/ concvalueF1 ).number( true, 2 ).append(' ml');
   $('#buprDoseSR').text((wtvalue6 * 0.12)/ concvalueBSR ).number( true, 3 ).append(' ml');
$('#atroDose3').text((wtvalue6 * 0.02)/0.52).number( true, 2 ).append(' ml');
$('#glycoDose3').text((wtvalue6 * 0.01)/0.2 ).number( true, 2 ).append(' ml');
$('#epiDose3').text((wtvalue6 * 0.02)/1 ).number( true, 2 ).append(' ml');
$('#lidoDose3').text((wtvalue6 * 1)/20).number( true, 2 ).append(' ml');
$('#vassoDose3').text((wtvalue6 * 0.8)/20 ).number( true, 2 ).append(' ml');
$('#morphoDose').text((wtvalue6 * morpho)/15 ).number( true, 2 ).append(' ml');
$('#hydroDose').text((wtvalue6 * hydro)/2 ).number( true, 2 ).append(' ml');
$('#methadoneDose3').text((wtvalue6 * 0.05)/10 ).number( true, 2 ).append(' ml');
$('#propoDose').text((wtvalue6 * propo)/10 ).number( true, 2 ).append(' ml');
$('#carprofen').text((wtvalue6 * carpo)/50 ).number( true, 2 ).append(' ml');
$('#metacam').text((wtvalue6 * meloxi)/5 ).number( true, 2 ).append(' ml');
$('#main1Dose3').text(((wtvalue6 * 30)/24) + 70/24 ).number( true, 1 ).append(' ml/hr');
$('#main15Dose3').text((((wtvalue6 * 30)/24) + 70/24) * 1.5 ).number( true, 1 ).append(' ml/hr');
$('#main2Dose3').text((((wtvalue6 * 30)/24) + 70/24) * 2 ).number( true, 1 ).append(' ml/hr');
$('#shockDoseCats').text(wtvalue6 * 50).number( true, 1 ).append(' ml/hr');
$('#shockDoseDogs').text(wtvalue6 * 80).number( true, 1 ).append(' ml/hr');
$('#mainShockDoseDog3').text(wtvalue6 * 80 ).number( true, 1 ).append(' ml/hr');
$('#mainShockDoseCat3').text(wtvalue6 * 60 ).number( true, 1 ).append(' ml/hr');
$dose4.text(((wtvalue6 * 0.2)/10 ) + ((wtvalue6 * 5)/100 ) +(((wtvalue6 * 15)/1000)/0.5 ) ).number( true, 2 );
   $(magicDose).text(((wtvalue6 * butoF)/10  ) + ((wtvalue6 * ketoF)/100 ) +(((wtvalue6 * drugF)/1000 ))).number( true, 3 ).append(' mls');
    } else { // the input wasn't a number
$('#dexDose,#dexDoseF').text(" ");
  
 $('#aceDose').text(" ");     
$('#ketDose,#ketDoseF').text(" ");
$('#valDose').text(" ");
$('#butDose,#butDoseF').text(" ");
      
$('#dexDose').text(" ");
$('#antiDose').text(" ");
 $('#antiDoseF').text(" ");     
$('#atroDose3').text(" ");
$('#glycoDose3').text(" ");
$('#epiDose3').text(" ");
$('#lidoDose3').text(" ");
$('#vassoDose3').text(" ");
$('#morphoDose').text(" ");
 $('#hydroDose').text(" ");    
$('#buprDoseF1, #buprDoseF2').text(" ");
$('#propoDose').text(" ");
$('#main1Dose3').text(" ");
$('#main15Dose3').text(" ");
$('#carprofen').text(" ");
$('#metacam').text(" ");
$('#main2Dose3').text(" ");
$('#shockDoseCats').text(" ");
$('#shockDoseDogs').text(" ");
$('#mainShockDoseDog3').text(" ");
$('#mainShockDoseCat3').text(" ");
  magicDose.text(" ");
        //$dose5.text(" ");
    //$dose6.text(" ");  
    }
  
//});
}
$(".wtA,.wtB,#thedose,#themg").on("keyup change",function() {

var themg = parseFloat($('#themg').val());
var thevolume = parseFloat($('#thevol').val());
var thedose = parseFloat($('#thedose').val());
var theweight  = parseFloat($('.wtB').val());

if (!isNaN(theweight)) { // the input is a number       
$('#theml').text(((theweight * thedose)/(themg)) ).number( true, 2 ).append(' mls');
    } else { // the input wasn't a number
$('#theml').text(" ");

    }  
});

$("input[name='thedose']").TouchSpin({
                min: 0,
                max: 200,
   step: 0.1,
  decimals:2
            });
$("input[name='themg']").TouchSpin({
                min: 1,
                max: 200,
   step: 5,
  decimals:2
            });
 $("input[name='hydro']").TouchSpin({
                min: 0,
                max: 0.2,
                step: 0.01,
  decimals:2
            });
 $("input[name='propo']").TouchSpin({
                min: 0,
                max: 6,
                step: 0.5,
  decimals:2
            });
 $("input[name='morpho']").TouchSpin({
                min: 0,
                max: 0.6,
                step: 0.1,
  decimals:2
            });

$("input[name='dexdo'],input[name='dexdoF']").TouchSpin({
                min: 5,
                max: 25,
                step: 5,
  decimals:2
            });

$("input[name='keto'], input[name='ketoF']").TouchSpin({
                min: 5,
                max: 10,
                step: 1,
  decimals:2              
            });
$("input[name='buto'], input[name='butoF']").TouchSpin({
                min: 0.1,
                max: 0.5,
                step: 0.1,
  decimals:2
            });
$("input[name='carpo']").TouchSpin({
                min: 2.2,
                max: 4.4,
   step: 2.2,
  decimals:2
            });
$("input[name='diazo']").TouchSpin({
                min: 0.125,
                max: 0.5,
   step: 0.025,
  decimals:3
            });
$("input[name='bupo'],input[name='bupoF2']").TouchSpin({
                min: 0.01,
                max: 0.03,
   step: 0.01,
  decimals:2
            });
$("input[name='ace']").TouchSpin({
                min: 0.05,
                max: 0.20,
   step: 0.025,
  decimals:3
            });
$("input[name='meloxi']").TouchSpin({
                min: 0.1,
                max: 0.3,
   step: 0.1,
  decimals:2
            });
             </script>
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>
  <script>
    //random data
    var d1 = [
      [0, 1],
      [1, 9],
      [2, 6],
      [3, 10],
      [4, 5],
      [5, 17],
      [6, 6],
      [7, 10],
      [8, 7],
      [9, 11],
      [10, 35],
      [11, 9],
      [12, 12],
      [13, 5],
      [14, 3],
      [15, 4],
      [16, 9]
    ];

    //flot options
    var options = {
      series: {
        curvedLines: {
          apply: true,
          active: true,
          monotonicFit: true
        }
      },
      colors: ["#26B99A"],
      grid: {
        borderWidth: {
          top: 0,
          right: 0,
          bottom: 1,
          left: 1
        },
        borderColor: {
          bottom: "#7F8790",
          left: "#7F8790"
        }
      }
    };
    var plot = $.plot($("#placeholder3xx3"), [{
      label: "Registrations",
      data: d1,
      lines: {
        fillColor: "rgba(150, 202, 89, 0.12)"
      }, //#96CA59 rgba(150, 202, 89, 0.42)
      points: {
        fillColor: "#fff"
      }
    }], options);
  </script>
  <!-- /flot -->
  <!--  -->
  <script>
    $('document').ready(function() {
      $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
        type: 'bar',
        height: '40',
        barWidth: 9,
        colorMap: {
          '7': '#a1a1a1'
        },
        barSpacing: 2,
        barColor: '#26B99A'
      });

      $(".sparkline_two").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
        type: 'line',
        width: '200',
        height: '40',
        lineColor: '#26B99A',
        fillColor: 'rgba(223, 223, 223, 0.57)',
        lineWidth: 2,
        spotColor: '#26B99A',
        minSpotColor: '#26B99A'
      });

      Chart.defaults.global.legend = {
        enabled: false
      };

      var data = {
        labels: [
          "Symbian",
          "Blackberry",
          "Other",
          "Android",
          "IOS"
        ],
        datasets: [{
          data: [15, 20, 30, 10, 30],
          backgroundColor: [
            "#BDC3C7",
            "#9B59B6",
            "#455C73",
            "#26B99A",
            "#3498DB"
          ],
          hoverBackgroundColor: [
            "#CFD4D8",
            "#B370CF",
            "#34495E",
            "#36CAAB",
            "#49A9EA"
          ]

        }]
      };

      var canvasDoughnut = new Chart(document.getElementById("canvas1"), {
        type: 'doughnut',
        tooltipFillColor: "rgba(51, 51, 51, 0.55)",
        data: data
      });
    });
  </script>
  <!-- -->
  <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <!-- /datepicker -->

  <!-- moris js -->
  <script src="{{ url('js/moris/raphael-min.js') }}"></script>
  <script src="{{ url('js/moris/morris.min.js') }}"></script>
  <script>
    $(function() {
      var day_data = [{
        "period": "Jan",
        "Hours worked": 80
      }, {
        "period": "Feb",
        "Hours worked": 125
      }, {
        "period": "Mar",
        "Hours worked": 176
      }, {
        "period": "Apr",
        "Hours worked": 224
      }, {
        "period": "May",
        "Hours worked": 265
      }, {
        "period": "Jun",
        "Hours worked": 314
      }];
      Morris.Bar({
        element: 'graph_bar',
        data: day_data,
        hideHover: 'always',
        xkey: 'period',
        barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
        ykeys: ['Hours worked', 'sorned'],
        labels: ['Hours worked', 'SORN'],
        xLabelAngle: 60
      });
    });
  </script>
  <!-- skycons -->
  <script>
    var icons = new Skycons({
        "color": "#73879C"
      }),
      list = [
        "clear-day", "clear-night", "partly-cloudy-day",
        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
        "fog"
      ],
      i;

    for (i = list.length; i--;)
      icons.set(list[i], list[i]);

    icons.play();
  </script>
  <script>
    var opts = {
      lines: 12, // The number of lines to draw
      angle: 0, // The length of each line
      lineWidth: 0.4, // The line thickness
      pointer: {
        length: 0.75, // The radius of the inner circle
        strokeWidth: 0.042, // The rotation offset
        color: '#1D212A' // Fill color
      },
      limitMax: 'false', // If true, the pointer will not go past the end of the gauge
      colorStart: '#1ABC9C', // Colors
      colorStop: '#1ABC9C', // just experiment with them
      strokeColor: '#F0F3F3', // to see which ones work best for you
      generateGradient: true
    };
    var target = document.getElementById('foo2'); // your canvas element
    var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
    gauge.maxValue = 5000; // set max gauge value
    gauge.animationSpeed = 32; // set animation speed (32 is default value)
    gauge.set(3200); // set actual value
    gauge.setTextField(document.getElementById("gauge-text2"));
  </script>
  <script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
      .on('blur', 'input[required], input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
      .on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    $('form').submit(function(e) {
      e.preventDefault();
      var submit = true;
      // evaluate the form using generic validaing
      if (!validator.checkAll($(this))) {
        submit = false;
      }

      if (submit)
        this.submit();
      return false;
    });

    /* FOR DEMO ONLY */
    $('#vfields').change(function() {
      $('form').toggleClass('mode2');
    }).prop('checked', false);

    $('#alerts').change(function() {
      validator.defaults.alerts = (this.checked) ? false : true;
      if (this.checked)
        $('form .alert').remove();
    }).prop('checked', false);
  </script>


</body>

</html>
