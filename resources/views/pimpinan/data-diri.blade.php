@extends('layout.master-pimpinan')

@section ('sidebar-dashboard-pimpinan')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="{{env('APP_URL')}}/pimpinan/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-star p-r-10"></i> <span class="hide-menu waves-effect">Penilaian<span class="fa arrow"></span></span></a>
                         <ul class="nav nav-second-level">
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/pimpinan/nilai-diri-sendiri">Penilaian untuk Diri Sendiri</a> </li>
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/pimpinan/nilai-rekan-kerja">Penilaian untuk Rekan Kerja</a> </li>
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/pimpinan/nilai-karyawan">Penilaian untuk Karyawan</a> </li>
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/pimpinan/nilai-ketua-tim">Penilaian untuk Ketua Tim</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa  fa-bolt p-r-10"></i> <span class="hide-menu waves-effect active">Lihat Hasil Penilaian<span class="fa arrow"></span></span></a>
                         <ul class="nav nav-second-level">
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/pimpinan/report-nilai-diri-sendiri">Dari Diri Sendiri</a> </li>
                            <li> <a href="{{env('APP_URL')}}/pimpinan/report-nilai-dari-rekan-kerja">Dari Rekan Kerja</a> </li>
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/pimpinan/report-nilai-dari-karyawan">Dari Karyawan</a> </li>
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/pimpinan/report-nilai-dari-ketua-tim">Dari Ketua Tim</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="fa fa-warning p-r-10"></i> <span class="hide-menu">Komplain Nilai</span></a> </li>
                    <li> <a href="#" class="waves-effect"><i class="fa fa-question-circle p-r-10"></i> <span class="hide-menu">Tips Penggunaan</span></a> </li>
@endsection


                
@section ('breadcrumb-dashboard-pimpinan')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Penilaian Terpadu</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">System</a></li>
                            <li class="active">Data Diri</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-pimpinan")
 <!-- .row -->
<div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="{{env('APP_URL')}}/storage/foto/{{$data_diri->img_url}}"> 
                            </div>
                            <div class="user-btm-box">
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12 b-r"><strong>Nama</strong>
                                        <p>{{$data_diri->nama}}</p>
                                    </div> 
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12 b-r"><strong>NIK</strong>
                                        <p>{{$data_diri->nik}}</p>
                                    </div>
                                </div>
                                <hr>
                                <!-- .row-->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12 b-r"><strong>E-mail</strong>
                                        <p>{{$data_diri->email}}</p>
                                    </div>     
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12"><strong>No HP</strong>
                                        <p>{{$data_diri->no_hp}}</p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12"><strong>Bagian</strong>
                                        <p>{{$data_diri->bagian}}</p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12"><strong>Jabatan</strong>
                                        <p>{{$data_diri->jabatan}}</p>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>





<div class="col-md-8 col-xs-12">
<div class="white-box">
<div class="tab-content">
<div class="tab-pane active" id="update">

                                    <form class="form-material form-horizontal" action="{{url('/pimpinan/edit-data-diri-proses')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                        <h3> Edit data diri: </h3>
                                        <hr>
                                        <hr>

                                        <div class="form-group">
                                            <label class="col-sm-12">Foto Profil</label>
                                            <div class="col-sm-12"> <img class="img-responsive" src="{{env('APP_URL')}}/storage/foto/{{$data_diri->img_url}}" alt="" style="max-width:120px;"> </div>
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                    <input type="file" data-max-file-size="2M" data-allowed-file-extensions="pdf" name="img" data-default-file="{{$data_diri->img_url}}" value="" required=""> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text">Nama</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="nama" class="form-control" placeholder="enter your name" value="{{$data_diri->nama}}"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text">NIK</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="nik" class="form-control" placeholder="enter your name" value="{{$data_diri->nik}}"> </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text">E-mail</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="email" class="form-control" placeholder="enter your name" value="{{$data_diri->email}}"> </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text">No HP</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="no_hp" class="form-control" placeholder="enter your name" value="{{$data_diri->no_hp}}"> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text">Bagian</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="bagian" class="form-control" placeholder="enter your name" value="{{$data_diri->bagian}}"> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text">Jabatan</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="jabatan" class="form-control" placeholder="enter your name" value="{{$data_diri->jabatan}}"> </div>
                                        </div>

                                        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Ganti</button>
                                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Batal</button>
                                    </form>
                                </div>
</div>
</div>
</div>
</div>          
                    
                    
                

@endsection