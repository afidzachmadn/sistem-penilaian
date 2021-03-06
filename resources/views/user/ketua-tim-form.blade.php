@extends('layout.master')

@section ('sidebar-dashboard-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="{{env('APP_URL')}}/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                     <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-star p-r-10"></i> <span class="hide-menu waves-effect">Penilaian<span class="fa arrow"></span></span></a>
                         <ul class="nav nav-second-level">
                            <li class="waves-effect"> <a href="/nilai-diri-sendiri">Penilaian untuk Diri Sendiri</a> </li>
                            <li class="waves-effect"> <a href="/nilai-rekan-kerja">Penilaian untuk Rekan Kerja</a> </li>
                            <li class="waves-effect active"> <a href="/nilai-ketua-tim">Penilaian untuk Ketua Tim</a> </li>
                            <li> <a href="/nilai-pimpinan">Penilaian untuk Pimpinan</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa  fa-bolt p-r-10"></i> <span class="hide-menu waves-effect">Lihat Hasil Penilaian<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li class="waves-effect"> <a href="/report-nilai-diri-sendiri">Dari Diri Sendiri</a> </li>
                            <li> <a href="/report-nilai-dari-rekan-kerja">Dari Rekan Kerja</a> </li>
                            <li class="waves-effect"> <a href="/report-nilai-dari-ketua-tim">Dari Ketua Tim</a> </li>
                            <li class="waves-effect"> <a href="/report-nilai-dari-pimpinan">Dari Pimpinan</a> </li>
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
                            <li class="active">Penilaian Untuk Ketua Tim</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-user")
 <!-- .row -->


 <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color:#fb78a8; color:white"> Data Diri:</div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="{{url('nilai-ketua-tim-proses')}}" method="post" class="form-horizontal form-bordered">
                                    {{csrf_field()}}
                                        <div class="form-body">

                                          <div class="form-group">
                                                <label class="control-label col-md-3">Nama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="nama" value="{{$lihat_user -> nama}}" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">NIK</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="nik" value="{{$lihat_user -> nik}}" readonly="readonly"> </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3">E-mail</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="email" value="{{$lihat_user -> email}}" readonly="readonly">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">No HP</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="no_hp" value="{{$lihat_user -> no_hp}}" readonly="readonly">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Bagian</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="bagian" value="{{$lihat_user -> bagian}}" readonly="readonly">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Jabatan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="jabatan" value="{{$lihat_user -> jabatan}}" readonly="readonly">
                                                </div>
                                            </div>

                                            </br>
                                            </br>
                                            <hr>
                                            <hr>
                                            <div class="panel-heading" style="background-color:#fb78a8; color:white"> Nilai Kompentensi:</div>
                                            </br>
                                            
                                            <div class="form-group">
                                                <label class="control-label">Rekan kerja</label>
                                                    <select class="form-control" name="pilihan_nama">
                                                        <option>Nama - NIK - Jabatan</option>
                                                        @foreach($LihatUserSpesial as $pegawai)
                                                        <option value="{{$pegawai -> nama}}">{{$pegawai -> nama}} - {{$pegawai -> nik}} - {{$pegawai -> jabatan}}</option>
                                                        @endforeach
                                                    </select> <span class="help-block">Pilih rekan kerja yang anda ingin nilai</span>
                                            </div>
                                              

                                            

                                            <!-- 4 -->

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Tanggung jawab dalam melaksanakan kerja</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_4" value="" required="">
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

                                            

                                            <!-- 6 -->
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Sikap terhadap pekerjaan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_6" value="" required="">
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

                                            <!-- 7 -->
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Disiplin dalam mematuhi aturan perusahaan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_7" value="" required="">
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

                                            <!-- 8 -->
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Kemampuan dalam kerjasama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_8" value="" required="">
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

                                            

                                            <!-- 10 -->
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Kemampuan mengatasi stress dan konflik kerja</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_10" value="" required="">
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

                                            <!-- 11 -->
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Inisiatif dan kreatifitas yang dilaksanakan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_11" value="" required="">
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



                                            <!-- 13 -->
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Kemampuan memimpin unit, kelompok/tim kerja</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_13" value="" required="">
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

                                            
                                            <!-- 17 -->
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Partisipasi dalam kegiatan organisasi</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kompetensi_17" value="" required="">
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
                 
<a href="/riwayat-penilaian-untuk-ketua-tim"><button class="sm-12 btn btn-warning">Riwayat penilaian untuk karyawan </button></a>
</div>




@endsection