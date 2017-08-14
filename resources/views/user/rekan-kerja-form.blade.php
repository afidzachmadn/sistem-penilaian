@extends('layout.master')

@section ('sidebar-dashboard-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="{{env('APP_URL')}}/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-star p-r-10"></i> <span class="hide-menu waves-effect active">Penilaian<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li class="waves-effect"> <a href="/nilai-diri-sendiri">Diri Sendiri</a> </li>
                            <li class="waves-effect active"> <a href="/nilai-rekan-kerja">Rekan Kerja</a> </li>
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
                            <li class="active">Penilaian Untuk Rekan Kerja/Pimpinan</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-user")
 <!-- .row -->
<div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-heading"> Form Penilaian Untuk Rekan Kerja/Pimpinan</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">
                    <form class="form-material form-horizontal" action="{{url('nilai-rekan-kerja-proses')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="box-title">Data Diri Anda</h3>
                            <hr class="m-t-0 m-b-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Nama</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nama" value="{{$lihat_user->nama}}"> <span class="help-block"> Nama anda </span> 
                                        </div>
                                    </div>
                                </div>
                                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">NIK</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nik" value="{{$lihat_user->nik}}"> <span class="help-block"> NIK anda </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">E-mail</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="email" value="{{$lihat_user->email}}"> <span class="help-block"> E-mail anda </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Pangkat,Golongan ruang</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="pangkat_golongan_ruang" value="{{$lihat_user->pangkat_golongan_ruang}}"> <span class="help-block"> Pangkat dan golongan ruang anda </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Bagian</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="bagian" value="{{$lihat_user->bagian}}"> <span class="help-block"> Bagian dimana anda bekerja </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Jabatan</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="jabatan" value="{{$lihat_user->jabatan}}"> <span class="help-block"> Jabatan anda </span>
                                        </div>
                                    </div>
                                </div>
                                                <!--/span-->
                            </div>





                            <h3 class="box-title">Form Penilaian Untuk Rekan Kerja I</h3>
                            <hr class="m-t-0 m-b-40">
                                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Penilaian Untuk:</label>
                                        <select class="form-control" name="nama_karyawan_1" tabindex="1">
                                        <option value="{{$lihat_table_nilai_untuk_orang_lain->nama}}">{{$lihat_table_nilai_untuk_orang_lain->nama_karyawan_1}}</option>
                                        @foreach($lihat_user_next_get as $user)
                                            <option value="{{$user->nama}}">{{$user->nik}} - {{$user->nama}} - {{$user->jabatan}}</option>
                                        @endforeach    
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Kesetiaan</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_kesetiaan_untuk_karyawan_1" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_kesetiaan_untuk_karyawan_1}}"> <span class="help-block"> 1-5 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Prestasi Kerja</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_prestasi_kerja_untuk_karyawan_1" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_prestasi_kerja_untuk_karyawan_1}}"> <span class="help-block"> 1-5 </span>
                                        </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Tanggung Jawab</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_tanggung_jawab_untuk_karyawan_1" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_tanggung_jawab_untuk_karyawan_1}}"> <span class="help-block"> 1-5 </span>
                                        </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Ketaatan</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_ketaatan_untuk_karyawan_1" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_ketaatan_untuk_karyawan_1}}"> <span class="help-block"> 1-5 </span>
                                        </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Kejujuran</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_kejujuran_untuk_karyawan_1" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_kejujuran_untuk_karyawan_1}}"> <span class="help-block"> 1-5 </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Kerjasama</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_kerjasama_untuk_karyawan_1" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_kerjasama_untuk_karyawan_1}}"> <span class="help-block"> 1-5 </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Prakarsa</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_prakarsa_untuk_karyawan_1" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_prakarsa_untuk_karyawan_1}}"> <span class="help-block"> 1-5 </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Kepemimpinan</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_kepemimpinan_untuk_karyawan_1" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_kepemimpinan_untuk_karyawan_1}}"> <span class="help-block"> 1-5 </span>
                                            </div>
                                        </div>
                                </div>
                            </div>




                            <h3 class="box-title">Form Penilaian Untuk Rekan Kerja II</h3>
                            <hr class="m-t-0 m-b-40">
                                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="control-label">Penilaian Untuk:</label>
                                        <select class="form-control" name="nama_karyawan_2" tabindex="1">
                                        <option value="{{$lihat_table_nilai_untuk_orang_lain->nama}}">{{$lihat_table_nilai_untuk_orang_lain->nama_karyawan_2}}</option>
                                        @foreach($lihat_user_next_get as $user)
                                            <option value="{{$user->nama}}">{{$user->nik}} - {{$user->nama}} - {{$user->jabatan}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Kesetiaan</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_kesetiaan_untuk_karyawan_2" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_kesetiaan_untuk_karyawan_2}}"> <span class="help-block"> 1-5 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Prestasi Kerja</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_prestasi_kerja_untuk_karyawan_2" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_prestasi_kerja_untuk_karyawan_2}}"> <span class="help-block"> 1-5 </span>
                                        </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Tanggung Jawab</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_tanggung_jawab_untuk_karyawan_2" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_tanggung_jawab_untuk_karyawan_2}}"> <span class="help-block"> 1-5 </span>
                                        </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Ketaatan</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_ketaatan_untuk_karyawan_2" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_ketaatan_untuk_karyawan_2}}"> <span class="help-block"> 1-5 </span>
                                        </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Kejujuran</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_kejujuran_untuk_karyawan_2" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_kejujuran_untuk_karyawan_2}}"> <span class="help-block"> 1-5 </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Kerjasama</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_kerjasama_untuk_karyawan_2" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_kerjasama_untuk_karyawan_2}}"> <span class="help-block"> 1-5 </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Prakarsa</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_prakarsa_untuk_karyawan_2" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_prakarsa_untuk_karyawan_2}}"> <span class="help-block"> 1-5 </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Kepemimpinan</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_kepemimpinan_untuk_karyawan_2" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_kepemimpinan_untuk_karyawan_2}}"> <span class="help-block"> 1-5 </span>
                                            </div>
                                        </div>
                                </div>
                                
                            </div>




                            <h3 class="box-title">Form Penilaian Untuk Pimpinan</h3>
                            <hr class="m-t-0 m-b-40">
                                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="control-label">Penilaian Untuk:</label>
                                        <select class="form-control" name="nama_pimpinan" tabindex="1">
                                        <option value="{{$lihat_table_nilai_untuk_orang_lain->nama}}">{{$lihat_table_nilai_untuk_orang_lain->nama_pimpinan}}</option>
                                        @foreach($lihat_user_next_get as $user)
                                            <option value="{{$user->nama}}">{{$user->nik}} - {{$user->nama}} - {{$user->jabatan}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Kesetiaan</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_kesetiaan_untuk_pimpinan" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_kesetiaan_untuk_pimpinan}}"> <span class="help-block"> 1-5 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Prestasi Kerja</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_prestasi_kerja_untuk_pimpinan" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_prestasi_kerja_untuk_pimpinan}}"> <span class="help-block"> 1-5 </span>
                                        </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Tanggung Jawab</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_tanggung_jawab_untuk_pimpinan" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_tanggung_jawab_untuk_pimpinan}}"> <span class="help-block"> 1-5 </span>
                                        </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Ketaatan</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_ketaatan_untuk_pimpinan" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_ketaatan_untuk_pimpinan}}"> <span class="help-block"> 1-5 </span>
                                        </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Kejujuran</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_kejujuran_untuk_pimpinan" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_kejujuran_untuk_pimpinan}}"> <span class="help-block"> 1-5 </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Kerjasama</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_kerjasama_untuk_pimpinan" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_kerjasama_untuk_pimpinan}}"> <span class="help-block"> 1-5 </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Prakarsa</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_prakarsa_untuk_pimpinan" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_prakarsa_untuk_pimpinan}}"> <span class="help-block"> 1-5 </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Kepemimpinan</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control" name="nilai_kepemimpinan_untuk_pimpinan" value="{{$lihat_table_nilai_untuk_orang_lain->nilai_kepemimpinan_untuk_pimpinan}}"> <span class="help-block"> 1-5 </span>
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
                                            <a href="/report-nilai-untuk-rekan-kerja-dan-atasan">
                                            <div  class="btn btn-block btn-danger" ><p>Lihat data rekan kerja dan pimpinan yang anda nilai</p>
                                            </div>
                                            </a>
                     </div>
                     <hr>
                     <div class="col-sm-12">
                                            <a href="/report-nilai-untuk-rekan-kerja-dan-atasan">
                                            <div  class="btn btn-block btn-warning" ><p>Lihat hasil nilai Anda yang dinilai oleh rekan kerja dan pimpinan</p>
                                            </div>
                                            </a>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection