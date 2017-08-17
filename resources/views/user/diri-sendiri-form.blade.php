@extends('layout.master')

@section ('sidebar-dashboard-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="{{env('APP_URL')}}/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-star p-r-10"></i> <span class="hide-menu waves-effect active">Form Penilaian<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li class="waves-effect active"> <a href="/nilai-diri-sendiri">Diri Sendiri</a> </li>
                            <li> <a href="/nilai-rekan-kerja">Rekan Kerja</a> </li>
                        </ul>
                    </li>
                     <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa  fa-bolt p-r-10"></i> <span class="hide-menu waves-effect active">Lihat Hasil Penilaian<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li class="waves-effect"> <a href="#">Diri Sendiri</a> </li>
                            <li> <a href="#">Rekan Kerja</a> </li>
                            <li class="waves-effect"> <a href="#">Ketua Tim</a> </li>
                            <li class="waves-effect"> <a href="#">Pimpinan</a> </li>
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
<div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"> Data Diri:</div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="{{url('nilai-diri-sendiri-proses')}}" method="post" class="form-horizontal form-bordered">
                                    {{csrf_field()}}
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="nama" value="{{$lihat_user -> nama}}"> <span class="help-block"> masukan nama </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">NIK</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="nik" value="{{$lihat_user -> nik}}"> <span class="help-block"> masukan nik </span> </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3">E-mail</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="email" value="{{$lihat_user -> email}}">
                                                    <span class="help-block"> masukan e-mail </span> </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">No HP</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="no_hp" value="{{$lihat_user -> no_hp}}">
                                                    <span class="help-block"> masukan nomor handphone </span> </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Bagian</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="bagian" value="{{$lihat_user -> bagian}}">
                                                    <span class="help-block">Bagian </span> </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Jabatan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="jabatan" value="{{$lihat_user -> jabatan}}">
                                                    <span class="help-block">Jabatan </span> 
                                                </div>
                                            </div>




                                            </br>
                                            </br>
                                            <hr>
                                            <hr>
                                            <div class="panel-heading"> Nilai Kompentensi:</div>
                                            </br>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Tanggung jawab dalam melaksanakan kerja</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_4" value="">
                                                    <span class="help-block">masukan nilai (1-5)</span> 
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Alasan penilaian</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_4_alasan" value="">
                                                    <span class="help-block">alasan penilaian anda (jika ada): </span> 
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Sikap terhadap pekerjaan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_6" value="">
                                                    <span class="help-block">masukan nilai (1-5)</span> 
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Alasan penilaian</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_6_alasan" value="">
                                                    <span class="help-block">alasan penilaian anda (jika ada): </span> 
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Disiplin dalam mematuhi aturan perusahaan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_7" value="">
                                                    <span class="help-block">masukan nilai (1-5)</span> 
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Alasan penilaian</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_7_alasan" value="">
                                                    <span class="help-block">alasan penilaian anda (jika ada): </span> 
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Kemampuan dalam kerjasama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_8" value="">
                                                    <span class="help-block">masukan nilai (1-5)</span> 
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Alasan penilaian</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_8_alasan" value="">
                                                    <span class="help-block">alasan penilaian anda (jika ada): </span> 
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Kemampuan mengatasi stress dan konflik kerja</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_10" value="">
                                                    <span class="help-block">masukan nilai (1-5)</span> 
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Alasan penilaian</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_10_alasan" value="">
                                                    <span class="help-block">alasan penilaian anda (jika ada): </span> 
                                                </div>
                                            </div>
                                            
                                            <hr>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Inisiatif dan kreatifitas yang dilaksanakan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_11" value="">
                                                    <span class="help-block">masukan nilai (1-5)</span> 
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Alasan penilaian</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_11_alasan" value="">
                                                    <span class="help-block">alasan penilaian anda (jika ada): </span> 
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Pengetahuan tentang pekerjaan dan tugas sekarang</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_13" value="">
                                                    <span class="help-block">masukan nilai (1-5)</span> 
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Alasan penilaian</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_13_alasan" value="">
                                                    <span class="help-block">alasan penilaian anda (jika ada): </span> 
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Partisipasi dalam kegiatan organisasi</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_17" value="">
                                                    <span class="help-block">masukan nilai (1-5)</span> 
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Alasan penilaian</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_17_alasan" value="">
                                                    <span class="help-block">alasan penilaian anda (jika ada): </span> 
                                                </div>
                                            </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
                                                            <button type="button" class="btn btn-default">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                 
<a href="#"><button class="sm-12 btn btn-warning"> Liat penilaian dari anda </button></a>
</div>
@endsection