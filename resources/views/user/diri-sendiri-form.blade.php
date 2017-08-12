@extends('layout.master')

@section ('sidebar-dashboard-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="{{env('APP_URL')}}/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-star p-r-10"></i> <span class="hide-menu waves-effect active">Penilaian<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li class="waves-effect active"> <a href="/nilai-diri-sendiri">Diri Sendiri</a> </li>
                            <li> <a href="/nilai-rekan-kerja">Rekan Kerja</a> </li>
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
                            <li class="active">Penilaian Diri Sendiri</li>

                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-user")
 <!-- .row -->
<div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-heading"> Form Penilaian Untuk Diri Sendiri</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">
                    <form action="#" class="form-horizontal">
                        <div class="form-body">
                            <h3 class="box-title">Data Diri</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Nama</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="John doe"> <span class="help-block"> Nama anda </span> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Jenis Kelamin</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="12n"> <span class="help-block"> Pria/Wanita </span>
                                        </div>
                                    </div>
                                </div>
                                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">NIK</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="12n"> <span class="help-block"> NIK anda </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Pangkat,Golongan ruang</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="12n"> <span class="help-block"> Pangkat dan golongan ruang anda </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Bagian</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="12n"> <span class="help-block"> Bagian dimana anda bekerja </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Jabatan</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="12n"> <span class="help-block"> Jabatan anda </span>
                                        </div>
                                    </div>
                                </div>
                                                <!--/span-->
                            </div>





                            <h3 class="box-title">Form Penilaian</h3>
                            <hr class="m-t-0 m-b-40">
                                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Kesetiaan</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder=""> <span class="help-block"> 0-100 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Prestasi Kerja</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder=""> <span class="help-block"> 0-100 </span>
                                        </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Tanggung Jawab</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder=""> <span class="help-block"> 0-100 </span>
                                        </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Ketaatan</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder=""> <span class="help-block"> 0-100 </span>
                                        </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Kejujuran</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder=""> <span class="help-block"> 0-100 </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Kerjasama</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder=""> <span class="help-block"> 0-100 </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Prakarsa</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder=""> <span class="help-block"> 0-100 </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Kepemimpinan</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder=""> <span class="help-block"> 0-100 </span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-success">Submit
                                            </button>
                                            <button type="button" class="btn btn-default">Cancel
                                            </button>
                                        </div>
                                    </div>
</br>
                                   <!-- <div class="row">
                                       
                                    </div> -->
                                </div>
                                        
                            </div>
                        </div>
                    </form>
                     <div class="col-sm-12">
                                            <a href="/report-nilai-diri-sendiri">
                                            <div  class="btn btn-block btn-warning" >Lihat hasil nilai yang anda buat sendiri
                                            </div>
                                            </a>
                                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection