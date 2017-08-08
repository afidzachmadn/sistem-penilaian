<!DOCTYPE html>

<html lang="en">

<head>

<!--#######################################################################################################
 * @application		<Sistem_Sertifikasi_Terpadu_BISQA_SYSTEMS>
 * @author         Afidz Achmad Novendi <afidzachmadn@gmail.com>
 * @version         1.0
 * @copyright        Copyright © 2017 Afidz Achmad Novendi <afidzachmadn@gmail.com>
############################################################################################################-->
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{env('APP_URL')}}/images/bisqa.png">

    <title>Sistem Penilaian Terpadu - Kementrian Perindustrian Republik Indonesia</title>
      <!-- Bootstrap Core CSS -->
    <link href="{{env('APP_URL')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{env('APP_URL')}}/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{env('APP_URL')}}/css/animate.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

    <!--My admin Custom CSS -->
    <link href="{{env('APP_URL')}}/plugins/bower_components/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="{{env('APP_URL')}}/plugins/bower_components/owl.carousel/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <!-- animation CSS -->
    <link href="{{env('APP_URL')}}/css/animate.css" rel="stylesheet">
    <!-- dropify -->
    <link rel="stylesheet" href="{{env('APP_URL')}}/plugins/bower_components/dropify/dist/css/dropify.min.css">
    <!-- Custom CSS -->
    <link href="{{env('APP_URL')}}/css/style.min.css" rel="stylesheet">
                              
    <!-- color CSS -->
    <link href="{{env('APP_URL')}}/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- Toggle icon for mobile view --><a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="/user/dashboard"><b><img src="{{env('APP_URL')}}/plugins/images/eliteadmin-logo.png" alt="home" /></b><span class="hidden-xs"><strong>Performs</strong>&nbspsystems</span></a></div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-right hidden-xs">
                    <li style="visibility:hidden"><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="fa fa-toggle-left ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
               
                
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="{{env('APP_URL')}}/storage/img/{{Session::get('img_url')}}" alt="user-img" class="img-circle"> <span class="hide-menu">{{Session::get('name')}}<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{env('APP_URL')}}/user/profile"><i class="fa fa-user"></i>Profile</a></li>
                             <li><a href="{{env('APP_URL')}}/user/edit-profile"><i class="fa fa-pencil-square"></i>Edit Profile</a></li>
                            <li><a href="{{env('APP_URL')}}/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- yield sidebar -->

                    @yield('sidebar-dashboard-user')
                    <!--
                    
                    @yield('sidebar-iso-user')
                    @yield('sidebar-sni-user')
                    @yield('sidebar-one-stop-service-user')
                    @yield('sidebar-profile-user') sama untuk profile-user maupun profile-edit-user
                    @yield('sidebar-tips-user') -->
                </ul>
            </div>
        </div>
        <!-- yield untuk breadcrumb -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- letakan yield -->
                @yield('breadcrumb-dashboard-user')
                <!--
                
                @yield('breadcrumb-iso-user')
                @yield('breadcrumb-sni-user')
                @yield('breadcrumb-one-stop-service-user')
                @yield('breadcrumb-profile-user')
                @yield('breadcrumb-profile-edit-user')
                @yield('breadcrumb-lihat-dokumen-iso')
                @yield('breadcrumb-lihat-dokumen-sni')
                @yield('breadcrumb-tips-user')
                @yield('breadcrumb-bukti-pembayaran-iso')
                @yield('breadcrumb-bukti-pembayaran-sni') -->
                

                <!-- contents start here -->
                    @yield('header-dashboard-user')
                    <!-- FOR THIS SECTION IS ONLY FOR DASHBOARD! -->
                


                <!-- .row -->
                <div class="row">
                     @yield('isi-dashboard-user')
                    <!--
                    
                     @yield('isi-iso-user')
                     @yield('isi-sni-user')
                     @yield('isi-one-stop-service-user')
                     @yield('isi-profile-user')
                     @yield('isi-profile-edit-user')
                     @yield('isi-lihat-dokumen-iso')
                     @yield('isi-lihat-dokumen-sni')
                     @yield('isi-tips-user')
                     @yield('isi-bukti-pembayaran-iso')
                     @yield('isi-bukti-pembayaran-sni')

                     @yield('isi-dashboard-admin')
                     @yield('isi-iso-admin') -->
                    



                </div>
                <!-- .row -->
                
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; PT. BPR DINAMIKA BANGUN ARTA </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{env('APP_URL')}}/bootstrap/dist/js/tether.min.js"></script>
    <script src="{{env('APP_URL')}}/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="{{env('APP_URL')}}/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="{{env('APP_URL')}}/js/waves.js"></script>
    <!-- Sweet-Alert  -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>

    <!--Morris JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- jQuery for carousel -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/owl.carousel/owl.custom.js"></script>

    <!-- Sparkline chart JavaScript -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <!-- jQuery peity -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/peity/jquery.peity.min.js"></script>
    <script src="{{env('APP_URL')}}/plugins/bower_components/peity/jquery.peity.init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{env('APP_URL')}}/js/custom.min.js"></script>
    <script src="{{env('APP_URL')}}/js/dashboard1.js"></script>
    <!--Style Switcher -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
     <!-- Custom Theme JavaScript -->
    <script src="{{env('APP_URL')}}/js/custom.min.js"></script>
    <script src="{{env('APP_URL')}}/js/jasny-bootstrap.js"></script>
    <!-- jQuery file upload -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();
            // Translated
            // Used events
            var drEvent = $('#input-file-events').dropify();
            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });
            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });
            drEvent.on('dropify.errors', function (event, element) {
                console.log('Has Errors');
            });
            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                }
                else {
                    drDestroy.init();
                }
            })
        });
    </script>
    <!--Style Switcher -->
    <script src="{{env('APP_URL')}}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js">
    </script>
</body>

</html>