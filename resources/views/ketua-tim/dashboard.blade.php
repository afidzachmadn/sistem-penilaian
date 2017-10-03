@extends('layout.master-ketua-tim')

@section ('sidebar-dashboard-ketua-tim')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="{{env('APP_URL')}}/ketua-tim/dashboard" class="waves-effect active"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-star p-r-10"></i> <span class="hide-menu waves-effect">Penilaian<span class="fa arrow"></span></span></a>
                         <ul class="nav nav-second-level">
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/ketua-tim/nilai-diri-sendiri">Penilaian untuk Diri Sendiri</a> </li>
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/ketua-tim/nilai-rekan-kerja">Penilaian untuk Rekan Kerja</a> </li>
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/ketua-tim/nilai-karyawan">Penilaian untuk Karyawan</a> </li>
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/ketua-tim/nilai-pimpinan">Penilaian untuk Pimpinan</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa  fa-bolt p-r-10"></i> <span class="hide-menu waves-effect active">Lihat Hasil Penilaian<span class="fa arrow"></span></span></a>
                         <ul class="nav nav-second-level">
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/ketua-tim/report-nilai-diri-sendiri">Dari Diri Sendiri</a> </li>
                            <li> <a href="{{env('APP_URL')}}/ketua-tim/report-nilai-dari-rekan-kerja">Dari Rekan Kerja</a> </li>
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/ketua-tim/report-nilai-dari-karyawan">Dari Karyawan</a> </li>
                            <li class="waves-effect"> <a href="{{env('APP_URL')}}/ketua-tim/report-nilai-dari-pimpinan">Dari Pimpinan</a> </li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="fa fa-warning p-r-10"></i> <span class="hide-menu">Komplain Nilai</span></a> </li>
                    <li> <a href="#" class="waves-effect"><i class="fa fa-question-circle p-r-10"></i> <span class="hide-menu">Tips Penggunaan</span></a> </li>
@endsection

@section ('header-dashboard-ketua-tim')
<div class="row">
                    <div class="col-lg-12">
                        
                        <img src="{{env('APP_URL')}}/images/office.png" class="img-responsive">
                              
                    </div>
                </div>
@endsection
                
@section ('breadcrumb-dashboard-ketua-tim')
 <div class="row bg-title">
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sistem Penilaian Terpadu</h4> </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">System</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-ketua-tim")
 <!-- .row -->
               
                    
                    
                

@endsection