@extends('layout.master')

@section ('sidebar-dashboard-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                     <li> <a href="{{env('APP_URL')}}/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-star p-r-10"></i> <span class="hide-menu waves-effect active">Penilaian<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li class="waves-effect active"> <a href="/nilai-diri-sendiri">Diri Sendiri</a> </li>
                            <li class="wavers-effect"> <a href="/nilai-rekan-kerja">Rekan Kerja</a> </li>
                        </ul>
                    </li>
                    <li> <a href="{{env('APP_URL')}}/komplain-nilai" class="waves-effect"><i class="fa fa-warning p-r-10"></i> <span class="hide-menu">Komplain Nilai</span></a> </li>
                    <li> <a href="{{env('APP_URL')}}/tips-penggunaan" class="waves-effect"><i class="fa fa-question-circle p-r-10"></i> <span class="hide-menu">Tips Penggunaan</span></a> </li>
@endsection


                
@section ('breadcrumb-dashboard-user')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Penilaian Terpadu</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">System</a></li>
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li class="active">Report Penilaian Diri Sendiri</li>

                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-user")
 <!-- .row -->
<div class="col-md-12">
                        <div class="white-box printableArea">
                            <h3><b>Laporan Penilaian Kinerja</b> <span class="pull-right">#diri-sendiri</span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left"> <address>
                                            <h3> &nbsp;<b class="text-danger">{{$lihat_user->nama}}</b></h3>
                                            <p class="text-muted m-l-5">{{$lihat_user->nik}},
                                                <br/> {{$lihat_user->pangkat_golongan_ruang}},
                                                <br/> {{$lihat_user->bagian}},
                                                <br/> {{$lihat_user->jabatan}},
                                                <br/> {{$lihat_user->email}}</p>
                                        </address> </div>
                                    <div class="pull-right text-right">
                                        <a href=""><img src="{{env('APP_URL')}}/storage/foto/{{$lihat_user->img_url}}" style="max-width:200px; max-height:150px"/>
                                        </a>
                                        <br>
                                         <address>
                                            <p class="m-t-30"><b>Diakses pada :</b> <i class="fa fa-calendar"></i> {{$date}}</p>
                                           
                                        </address> </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="panel panel-info">
                                        <div class="panel-heading"> Nilai dari anda sendiri :</div>
                                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                            <div class="panel-body">
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-body">
                                                        <h3 class="box-title">Nilai yang didapatkan</h3>
                                                        <hr class="m-t-0 m-b-40">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Kesetiaan:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static">{{$lihat_table_nilai_diri_sendiri->nilai_kesetiaan}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Prestasi Kerja:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static">{{$lihat_table_nilai_diri_sendiri->nilai_prestasi_kerja}} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Tanggung Jawab:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static">{{$lihat_table_nilai_diri_sendiri->nilai_tanggung_jawab}} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Ketaatan:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static">{{$lihat_table_nilai_diri_sendiri->nilai_ketaatan}} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Kejujuran:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static">{{$lihat_table_nilai_diri_sendiri->nilai_kejujuran}} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Kerjasama:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static">{{$lihat_table_nilai_diri_sendiri->nilai_kerjasama}} </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Prakarsa:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static">{{$lihat_table_nilai_diri_sendiri->nilai_prakarsa}} </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Kepemimpinan:</label>
                                                        <div class="col-md-9">
                                                            <p class="form-control-static">{{$lihat_table_nilai_diri_sendiri->nilai_kepemimpinan}} </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    
                                                        <div class="col-md-9">
                                                            <p class="form-control-static"><b>*catatan:</b>&nbsp nilai maksimal per poin = 5</p>
                                                        </div>
                                
                                                </div>

                                                
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Total Nilai:{{$lihat_table_nilai_diri_sendiri->nilai_jumlah}}</p>
                                        <hr>
                                        <h3><b>Rata-Rata :</b>{{$lihat_table_nilai_diri_sendiri->nilai_rata_rata}}</h3>
                                        <h3><b>Sebutan :</b>{{$lihat_table_nilai_diri_sendiri->sebutan}}</h3> </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                                       
                                        <button id="print" class="btn btn-success btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                    </div>
                        </div>
                    </div>



@endsection