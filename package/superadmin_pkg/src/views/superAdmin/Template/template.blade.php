<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Team Bravo</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('superadmin_pkg/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('superadmin_pkg/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="{{asset('superadmin_pkg/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{asset('superadmin_pkg/css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Binary admin</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="{{asset('superadmin_pkg/img/find_user.png')}}" class="user-image img-responsive"/>
                </li>
                <li>
                    <a class="active-menu"  href="{{route('dashboard')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                </li>
                <li>
                    <a  href="{{route('user.create')}}"><i class="fa fa-desktop fa-3x"></i>Create Users</a>
                </li>
                <li>
                    <a  href="{{route('user.userList')}}"><i class="fa fa-qrcode fa-3x"></i>User List & Operations </a>
                </li>
                <li  >
                    <a   href="{{route('user.attendenceView')}}"><i class="fa fa-bar-chart-o fa-3x"></i>Attendence</a>
                </li>
                <li  >
                    <a  href="{{route('info.document')}}"><i class="fa fa-table fa-3x"></i> Documents</a>
                </li>
                <li >
                    <a  href="{{route('expence.index')}}"><i class="fa fa-edit fa-3x"></i> Expences </a>
                </li>

                
                <li  >
                    <a  href="{{route('project.index')}}"><i class="fa fa-square-o fa-3x"></i> Projects</a>
                </li>
                <li  >
                    <a  href="{{route('projectEng.index')}}"><i class="fa fa-table fa-3x"></i> Project & Engineer</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        @yield('content')
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->

<script src="{{asset('superadmin_pkg/js/jquery-1.10.2.js')}}"></script>
<!-- BOOTSTRAP SCRIPTS -->

<script src="{{asset('superadmin_pkg/js/bootstrap.min.js')}}"></script>
<!-- METISMENU SCRIPTS -->

<script src="{{asset('superadmin_pkg/js/jquery.metisMenu.js')}}"></script>
<!-- MORRIS CHART SCRIPTS -->

<script src="{{asset('superadmin_pkg/js/morris/raphael-2.1.0.min.js')}}"></script>

<script src="{{asset('superadmin_pkg/js/morris/morris.js')}}"></script>
<!-- CUSTOM SCRIPTS -->

<script src="{{asset('superadmin_pkg/js/custom.js')}}"></script>



</body>
</html>
