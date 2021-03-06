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
                            <li class="active">Lihat Hasil Report dari Rekan Kerja</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-pimpinan")
 
<div class="col-md-12">
    <div class="white-box printableArea">
        <h3><b>Laporan Penilaian Kinerja</b> <span class="pull-right">#dari-rekan-kerja</span></h3>
        <hr>
        <div class="row">

            <div class="col-md-12">
                <div class="pull-left"> 
                    <address>
                        <h3> &nbsp;<b class="text-danger">{{$lihat_user -> nama}}</b></h3>
                        <p class="text-muted m-l-5">{{$lihat_user -> nik}},
                        <br/> {{$lihat_user -> email}},
                        <br/> {{$lihat_user -> no_hp}},
                        <br/> {{$lihat_user -> bagian}},
                        <br/> {{$lihat_user -> jabatan}}
                        </p>
                    </address> 
                </div>
                <div class="pull-right text-right"> 
                    <img src="{{env('APP_URL')}}/storage/foto/{{Session::get('img_url')}}" style="max-width:200px;max-height:200px"/>
                    
                    <p class="m-t-30"><b>Di print pada tanggal:</b> <i class="fa fa-calendar"></i>&nbsp{{$tanggal_print}}</p>
                </div>
            </div>
            

            @foreach($lihat_nilai as $LihatNilai)
            <div class="col-md-12">
                <h4 class="page-title">Nilai dari : {{$LihatNilai -> nama}}/{{$LihatNilai -> nik}}/{{$LihatNilai -> bagian}}/{{$LihatNilai -> jabatan}}</h4><span> <i>dinilai pada tanggal:</i> <i class="fa fa-calendar"></i>&nbsp{{$LihatNilai -> tanggal_penilaian}} </span>
                <div class="table-responsive m-t-40" style="clear: both;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama Kompetensi</th>
                                <th class="text-right">Nilai</th>
                                <th class="text-right">Alasan</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                
                                <td>Kehadiran dan aktifitas selama jam kerja</td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_4}} </td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_4_alasan}}</td>
                                
                            </tr>
                            
                            <tr>
                                
                                <td>Disiplin dalam mematuhi peraturan perusahaan</td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_6}} </td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_6_alasan}}</td>
                                
                            </tr>
                            <tr>
                                
                                <td>Kemampuan dalam bekerjasama</td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_7}} </td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_7_alasan}}</td>
                                
                            </tr>
                            <tr>
                                
                                <td>Kesesuaian ketrampilan/keahlian dengan pekerjaan/jabatan</td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_8}} </td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_8_alasan}}</td>
                                
                            </tr>
                            
                            <tr>
                                
                                <td>Inisiatif dan kreatifitas yang dilaksanakan</td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_10}} </td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_10_alasan}}</td>
                                
                            </tr>
                            <tr>
                                
                                <td>Pengetahuan tentang pekerjaan dan tugas sekarang</td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_11}} </td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_11_alasan}}</td>
                                
                            </tr>
                           
                            <tr>
                                
                                <td>Keterampilan menyusun dan melaksanakan perencanaan</td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_13}} </td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_13_alasan}}</td>
                                
                            </tr>
                            
                            
                            <tr>
                                
                                <td>Kemampuan memperbaiki kesalahan dalam bekerja</td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_17}} </td>
                                <td class="text-right">{{$LihatNilai -> kompetensi_17_alasan}}</td>
                                
                            </tr>
                            <tr>
                                
                                <td><b>Jumlah:</b></td>
                                <td class="text-right"></td>
                                <td class="text-right"><b>{{$LihatNilai -> jumlah}}</b></td>
                                
                            </tr>
                            <tr>
                                
                                <td><b>Rata-rata:</b></td>
                                <td class="text-right"></td>
                                <td class="text-right"><b>{{$LihatNilai -> rata_rata}}</b></td>
                                
                            </tr>
                            <tr>
                                
                                <td><b>Sebutan:</b></td>
                                <td class="text-right"></td>
                                <td class="text-right"><b>{{$LihatNilai -> sebutan}}</b></td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @endforeach

            <br>
            <br>
            <br>

           
        </div>
                                
    </div>
    <div class="text-right">
                    <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span></button>
    </div>
</div>

@endsection