@extends('layout.master')

@section ('sidebar-dashboard-user')
<li class="nav-small-cap m-t-10">--- Pilihan Menu</li>
                    <li> <a href="{{env('APP_URL')}}/dashboard" class="waves-effect"><i class="fa fa-tachometer p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-star p-r-10"></i> <span class="hide-menu waves-effect">Penilaian<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="/nilai-diri-sendiri">Diri Sendiri</a> </li>
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
                            <li class="active">Data Diri</li>
                        </ol>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
@endsection

@section("isi-dashboard-user")
 <!-- .row -->

<div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="{{env('APP_URL')}}/images/{{$data_diri->img_url}}"> 
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
                                    <div class="col-md-12"><strong>Pangkat Golongan Ruang</strong>
                                        <p>{{$data_diri->pangkat_golongan_ruang}}</p>
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
                                    <form class="form-material form-horizontal">
                                        <h3> Edit data diri: </h3>
                                        <hr>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text">Name</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="example-text" name="example-text" class="form-control" placeholder="enter your name" value="Jonathan Doe"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12" for="bdate">Date of Birth</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="bdate" name="bdate" class="form-control mydatepicker" placeholder="enter your birth date" value="12/10/2017"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">Gender</label>
                                            <div class="col-sm-12">
                                                <select class="form-control">
                                                    <option>Select Gender</option>
                                                    <option selected="selected">Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">Profile Image</label>
                                            <div class="col-sm-12"> <img class="img-responsive" src="../plugins/images/big/d2.jpg" alt="" style="max-width:120px;"> </div>
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12" for="special">Speciality</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="special" name="special" class="form-control" placeholder="e.g. Dentist" value="Neurosurgeon"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Description</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12" for="url">Website URL</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input type="text" id="url" name="url" class="form-control" placeholder="your website" value="http://www.example-website.com"> </div>
                                        </div>
                                        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                    </form>
                                </div>
</div>
</div>
</div>
</div>

               
                    
                    
                

@endsection