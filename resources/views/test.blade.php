<!DOCTYPE html>
<html>
<head>
	
	<title>@yield('title')</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
<!--for messages-->
<link rel="stylesheet" href="{{asset('assets/css/main_msg.css')}}">

<link href="{{ asset('/fontsawsome/css/font-awesome_min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('/morphing/css/morphbutton.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('/morphing/css/demo.css')}}" rel="stylesheet" type="text/css">
<!-- JQuery morph button -->
    <script src="{{ asset('/morphing/js/jquery.morphbutton.js')}}" type="text/javascript"></script>
    <script src="{{ asset('/morphing/js/jquery.js')}}" type="text/javascript"></script>
  
<link rel="stylesheet" href="css/sweetalert.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">

<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container  col-md-12 col-sm-12">
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        
                        <a href="admin" >
                            <i class="fa fa-home" style="color:white"></i>
                            Home
                        </a>
                       
                        <a href="home" >
                            <i class="fa fa-home" style="color:white"></i>
                            Home
                        </a>
                       
                    </li>
                  
                    <li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="user_profile" >Profile</a></li>
                                
                                <li class="divider"></li>
                                
                                <li><a href="logout" >
                                    <i class="fa fa-sign-out" style="color:red"></i>
                                        Logout
                                </a></li>
                            </ul>
                        </li>
                    </li>
                </ul>
            </div><!-- /.navbar-custom-menu -->
        </div><!-- /.container-fluid -->
    </nav>
</header>

<div class="wrapper">
    <div class="content-wrapper col-md-offset-4">
            <!-- Navigation Bar -->
        <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-11"> <!-- this changes the size of the panel -->
                <div class="panel panel-info col-xs-offset-0">
                    
                    <div class="panel-heading" >
                        <h4>@yield('heading')</h4>
                    </div>

                    <style type="text/css">
                        form {
                            background-color: #cec8ca;
                        }
                    </style>

                   

                    <div class = "col-md-12">
                        <div class="col-md-8">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">
                                        @yield('lable')
                                    </label>
                                    <div class="col-md-6">
                                        @yield('input')
                                    </div>
                                    <div class="col-md-2">
                                        @yield('button')
                                    </div> 
                                </div>
                            </form>
                        </div>

                         <div class="col-md-2" id="csv"> <!--this is used only in csv uploading page-->
                         
                            @yield('import_csv')

                        </div>
                    </div>

                    <style type="text/css">
                        .innerpanle{
                            background-color: #fae6ea;
                          }
                    </style>

                    <style type="text/css">
                        tr
                            td {
                                padding:0px;
                                height: 0px;
                                width: 0px;
                                background-color: #fae6ea;
                            }
                        th {
                            background-color: #d7dbb0;
                        }
                    </style>

                    <div class="panel-body">
                        <br><br>

                        <div class="panel panel-danger">
                            <!--<div class="panel-heading">Panel Heading</div> -->
                            <div class="panel-body" id="innerpanel">
                                @yield('panel_sec')
                                <div style="height:350px;overflow-y:scroll;;">
                                    @yield('table')
                                </div>
                            </div>

                            <div>
                              @yield('panel_sec_footer')
                            </div>
                        </div>
                    </div> <!-- sec panel -->

                      @yield('panel_main')

                    <div class="col-md-1">
                        @yield('panel_footer')
                    </div>

                </div>
            </div> <!-- main panel -->
        </div>
    </div>

<div class="sidebar-wrapper">
    <aside class="main-sidebar">
    @yield('aside')

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                  <!-- Sidebar user panel -->
                  <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>

                        <li class="treeview">
                            <a href="#">
                                <span><b>Organization</b></span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>

                            <ul class="treeview-menu">
                                <li><a href="organization"><i class="fa fa-circle-o"></i> Organization</a></li>
                                <li><a href="organization_hr_value"><i class="fa fa-circle-o"></i>Organization HR value</a></li>
                                <li><a href="organization_physical_value"><i class="fa fa-circle-o"></i> Organization Physical values</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                          <a href="#">
                          <!-- for puting a figure-->
                              <span><b>Course</b></span>
                              <i class="fa fa-angle-left pull-right"></i>
                          </a>

                          <ul class="treeview-menu">
                            <li><a href="item_category"><i class="fa fa-circle-o"></i> Course Category</a></li>
                            <li><a href="item_level"><i class="fa fa-circle-o"></i> Course Level</a></li>
                            <li><a href="item"><i class="fa fa-circle-o"></i>Course</a></li>
                            <li><a href="item_owner"><i class="fa fa-circle-o"></i> Course Coordinators</a></li>
                          </ul>
                        </li>

                        <li class="treeview">
                          <a href="#">
                          <!-- for puting a figure-->

                            <span><b>Activities</b></span>
                            <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="activity_type"><i class="fa fa-circle-o"></i>Activity Type</a></li>
                             <li><a href="activity_group"><i class="fa fa-circle-o"></i>Activity groups</a></li>
                            <li><a href="activity"><i class="fa fa-circle-o"></i>Activity Details</a></li>
                            <li><a href="activityitem"><i class="fa fa-circle-o"></i>Courses & Activity</a></li>
                            <li><a href="item_activity"><i class="fa fa-circle-o"></i> Activity Assign</a></li>
                             <li><a href="itemben"><i class="fa fa-circle-o"></i> Course Beneficiary</a></li>

                            <li><a href="smsbox"><i class="fa fa-circle-o"></i> Outbox</a></li>
                          </ul>
                        </li>

                        <li class="treeview">
                          <a href="#">
                          <span><b>Activity Diary</b></span>
                            <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">

                            <li><a href="activity_diary_schedule"><i class="fa fa-circle-o"></i>Activity Diary</a></li>

                          </ul>
                        </li>

                         <li class="treeview">
                          <a href="#">
                          <span><b>Users</b></span>
                            <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="treeview-menu">
                          
                            <li><a href="users"><i class="fa fa-circle-o"></i>Coordinators</a></li>
                           
                            
                            <li><a href="stakeholder"><i class="fa fa-circle-o"></i>Student Details</a></li>
                          </ul>
                        </li>
                       
                  </ul>
            </section>
            <!-- /.sidebar -->
          </aside>
</div> <!--aside div-->    
</div>


@yield('scripts')
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>
</html>