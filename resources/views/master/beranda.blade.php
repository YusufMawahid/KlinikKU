@extends('master.dashboard')
@section('content')
<div class="col-md-3 col-xs-12 widget widget_tally_box">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Obat</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          <div style="text-align: center; margin-bottom: 17px">
                            <span class="chart" data-percent="{{ $obat }}">
                                                <span class="percent"></span>
                            </span>
                          </div>

                          <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
                            <canvas id="canvas_doughnut" height="130"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>



                    <div class="col-md-3 col-xs-12 widget widget_tally_box">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Tarif</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          <div style="text-align: center; margin-bottom: 17px">
                            <span class="chart" data-percent="{{ $tarif }}">
                                                <span class="percent"></span>
                            </span>
                          </div>

                          <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
                            <canvas id="canvas_doughnut2" height="130"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="col-md-3 col-xs-12 widget widget_tally_box">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Master</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          <div style="text-align: center; margin-bottom: 17px">
                            <span class="chart" data-percent="{{ $master }}">
                                                <span class="percent"></span>
                            </span>
                          </div>

                          <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
                            <canvas id="canvas_doughnut3" height="130"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 col-xs-12 widget widget_tally_box">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Dokter</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          <div style="text-align: center; margin-bottom: 17px">
                            <span class="chart" data-percent="{{ $dokter }}">
                                                <span class="percent"></span>
                            </span>
                          </div>

                          <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
                            <canvas id="canvas_doughnut4" height="130"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>

<div class="col-md-6 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Kasir</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          <div style="text-align: center; margin-bottom: 17px">
                            <span class="chart" data-percent="{{ $kasir }}">
                                                <span class="percent"></span>
                            </span>
                          </div>

                          <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
                            <canvas id="canvas_doughnut4" height="130"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>  

                    <div class="col-md-6 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Pasien</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          <div style="text-align: center; margin-bottom: 17px">
                            <span class="chart" data-percent="{{ $pasien }}">
                                                <span class="percent"></span>
                            </span>
                          </div>

                          <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
                            <canvas id="canvas_doughnut4" height="130"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
@endsection