@extends('layout.master-ketua-tim')

@section ('sidebar-dashboard-ketua-tim')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="{{env('APP_URL')}}/ketua-tim/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-star p-r-10"></i> <span class="hide-menu waves-effect active">Penilaian<span class="fa arrow"></span></span></a>
                         <ul class="nav nav-second-level">
                            <li class="waves-effect active"> <a href="{{env('APP_URL')}}/ketua-tim/nilai-diri-sendiri">Penilaian untuk Diri Sendiri</a> </li>
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
                            <li class="active">Riwayat Penilaian Diri Sendiri</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

                


@section("isi-dashboard-ketua-tim")
 <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Riwayat penilaian untuk diri sendiri</h3>
                            <p class="text-muted">Untuk mengubah/mengedit silahkan untuk mengisi kembali form penilaian diri sendiri yang berada di menu Form Penilaian
                            </p>
                            
                            </br>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            
                                            <th>Nilai Kompetensi 4</th>
                                            <th>Alasan</th>
                                            
                                            <th>Nilai Kompetensi 6</th>
                                            <th>Alasan</th>
                                            <th>Nilai Kompetensi 7</th>
                                            <th>Alasan</th>
                                            <th>Nilai Kompetensi 8</th>
                                            <th>Alasan</th>
                                           
                                            <th>Nilai Kompetensi 10</th>
                                            <th>Alasan</th>
                                            <th>Nilai Kompetensi 11</th>
                                            <th>Alasan</th>
                                            
                                            <th>Nilai Kompetensi 13</th>
                                            <th>Alasan</th>
                                            
                                            <th>Nilai Kompetensi 17</th>
                                            <th>Alasan</th>
                                            
                                            <th>Total Nilai</th>
                                            <th>Rata-rata Nilai</th>
                                            <th>Sebutan</th>
                                            <th>Tanggal Penilaian</th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                            <tr>
                                                <td>{{$lihat_riwayat->nama}}</td>
                                                <td>{{$lihat_riwayat->nik}}</td>
                                               
                                                <td>{{$lihat_riwayat->kompetensi_4}}</td>
                                                <td>{{$lihat_riwayat->kompetensi_4_alasan}}</td>
                                                
                                                <td>{{$lihat_riwayat->kompetensi_6}}</td>
                                                <td>{{$lihat_riwayat->kompetensi_6_alasan}}</td>
                                                <td>{{$lihat_riwayat->kompetensi_7}}</td>
                                                <td>{{$lihat_riwayat->kompetensi_7_alasan}}</td>
                                                <td>{{$lihat_riwayat->kompetensi_8}}</td>
                                                <td>{{$lihat_riwayat->kompetensi_8_alasan}}</td>
                                                
                                                <td>{{$lihat_riwayat->kompetensi_10}}</td>
                                                <td>{{$lihat_riwayat->kompetensi_10_alasan}}</td>
                                                <td>{{$lihat_riwayat->kompetensi_11}}</td>
                                                <td>{{$lihat_riwayat->kompetensi_11_alasan}}</td>
                                                
                                                <td>{{$lihat_riwayat->kompetensi_13}}</td>
                                                <td>{{$lihat_riwayat->kompetensi_13_alasan}}</td>
                                                
                                                <td>{{$lihat_riwayat->kompetensi_17}}</td>
                                                <td>{{$lihat_riwayat->kompetensi_17_alasan}}</td>
                                              
                                                <td>{{$lihat_riwayat->jumlah}}</td>
                                                <td>{{$lihat_riwayat->rata_rata}}</td>
                                                <td>{{$lihat_riwayat->sebutan}}</td>
                                                <td>{{$lihat_riwayat->tanggal_penilaian}}


                                               
                                                
                                            </tr>
                                        
                                       
                                        
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            
                                            <th>Nilai Kompetensi 4</th>
                                            <th>Alasan</th>
                                            
                                            <th>Nilai Kompetensi 6</th>
                                            <th>Alasan</th>
                                            <th>Nilai Kompetensi 7</th>
                                            <th>Alasan</th>
                                            <th>Nilai Kompetensi 8</th>
                                            <th>Alasan</th>
                                           
                                            <th>Nilai Kompetensi 10</th>
                                            <th>Alasan</th>
                                            <th>Nilai Kompetensi 11</th>
                                            <th>Alasan</th>
                                            
                                            <th>Nilai Kompetensi 13</th>
                                            <th>Alasan</th>
                                            
                                            <th>Nilai Kompetensi 17</th>
                                            <th>Alasan</th>
                                            
                                            <th>Total Nilai</th>
                                            <th>Rata-rata Nilai</th>
                                            <th>Sebutan</th>
                                            <th>Tanggal Penilaian</th>
                                    
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            </br>
                            <p class="text-muted">Keterangan Nilai:<br>
                            Nilai Kompetensi 1 =    Kemampuan melaksanakan tugas/kerja tanpa perintah   <br>
                            Nilai Kompetensi 2 =    Ketetapan cara mengerjakan pekerjaan/perintah    <br>
                            Nilai Kompetensi 3 =    Kemampuan menggunakan teknologi/peralatan<br>
                            Nilai Kompetensi 4 =    Tanggung jawab dalam melaksanakan tugas<br>
                            Nilai Kompetensi 5 =    Kehadiran dan aktifitas selama jam kerja<br>
                            Nilai Kompetensi 6 =    Sikap terhadap pekerjaan<br>
                            Nilai Kompetensi 7 =    Disiplin dalam mematuhi peraturan perusahaan<br>
                            Nilai Kompetensi 8 =    Kemampuan dalam bekerjasama<br>
                            Nilai Kompetensi 9 =    Kesesuaian ketrampilan/keahlian dengan pekerjaan/jabatan<br>
                            Nilai Kompetensi 10 =   Kemampuan mengatasi stress dan konflik kerja <br>
                            Nilai Kompetensi 11 =   Inisiatif dan kreatifitas yang dilaksanakan <br>
                            Nilai Kompetensi 12 =   Pengetahuan tentang pekerjaan dan tugas sekarang<br>
                            Nilai Kompetensi 13 =   Kemampuan memimpin unit, kelompok/tim-kerja <br>
                            Nilai Kompetensi 14 =   Keterampilan menyusun dan melaksanakan perencanaan<br>
                            Nilai Kompetensi 15 =   Kemampuan membagi/memberikan koordinasi tugas <br>
                            Nilai Kompetensi 16 =   Kemampuan mempertahankan kualitas <br>
                            Nilai Kompetensi 17 =   Partisipasi dalam kegiatan organisasi <br>
                            Nilai Kompetensi 18 =   Kemampuan memperbaiki kesalahan dalam bekerja <br>

                            </p>
                        </div>
                    </div>

</div>
                    
                    
                

@endsection