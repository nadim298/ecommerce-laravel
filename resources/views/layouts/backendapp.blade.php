<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xpanthersolutions.com/admin-templates/theta/html/dark-vertical/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2019 09:22:46 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Theta is a premium responsive admin dashboard template with great features.">
    <meta name="keywords" content="responsive, admin template, dashboard template, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Theta - Responsive Admin Dashboard Template</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset('backend_assets/images/favicon.ico')}}">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="{{asset('backend_assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet">
    <!-- Select2 css -->
    <link href="{{asset('backend_assets/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Tagsinput css -->
    <link href="{{asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css')}}" rel="stylesheet" type="text/css">
<!-- Select2 css -->
    <!-- DataTables css -->
    <link href="{{asset('backend_assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend_assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Dropzone css -->
    <link href="{{asset('backend_assets/plugins/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css">
    <!-- C3 Charts css -->
    <link href="{{asset('backend_assets/plugins/c3/c3.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Datepicker css -->
    <link href="{{asset('backend_assets/plugins/datepicker/datepicker.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend_assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend_assets/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend_assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- End css -->



</head>
<body class="vertical-layout">
    <!-- Start Infobar Notifications Sidebar -->
    <div id="infobar-notifications-sidebar" class="infobar-notifications-sidebar">
        <div class="infobar-notifications-sidebar-head d-flex w-100 justify-content-between">
            <h4>Notifications</h4><a href="javascript:void(0)" id="infobar-notifications-close" class="infobar-notifications-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
        </div>
        <div class="infobar-notifications-sidebar-body">
            <ul class="nav nav-pills nav-justified" id="infobar-pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-messages-tab" data-toggle="pill" href="#pills-messages" role="tab" aria-controls="pills-messages" aria-selected="true">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-emails-tab" data-toggle="pill" href="#pills-emails" role="tab" aria-controls="pills-emails" aria-selected="false">Emails</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-actions-tab" data-toggle="pill" href="#pills-actions" role="tab" aria-controls="pills-actions" aria-selected="false">Actions</a>
                </li>
            </ul>
            <div class="tab-content" id="infobar-pills-tabContent">
                <div class="tab-pane fade show active" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
                    <ul class="list-unstyled">
                        <li class="media">
                            <img class="mr-3 align-self-center rounded-circle" src="assets/images/users/girl.svg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5>Amy Adams<span class="badge badge-success">1</span><span class="timing">Jan 22</span></h5>
                                <p>Hey!! What are you doing tonight ?</p>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-emails" role="tabpanel" aria-labelledby="pills-emails-tab">
                    <ul class="list-unstyled">
                        <li class="media">
                            <span class="mr-3 align-self-center img-icon">N</span>
                            <div class="media-body">
                                <h5>Nelson Smith<span class="timing">Jan 22</span></h5>
                                <p><span class="badge badge-danger-inverse">WORK</span>Salary has been processed.</p>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-actions" role="tabpanel" aria-labelledby="pills-actions-tab">
                    <ul class="list-unstyled">
                        <li class="media">
                            <span class="mr-3 action-icon badge badge-success-inverse"><i class="feather icon-check"></i></span>
                            <div class="media-body">
                                <h5 class="action-title">Payment Success !!!</h5>
                                <p class="my-3">We have received your payment toward ad Account : 9876543210. Your Ad is Running.</p>
                                <p><span class="badge badge-danger-inverse">INFO</span><span class="badge badge-info-inverse">STATUS</span><span class="timing">Today, 09:39 PM</span></p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="infobar-notifications-sidebar-overlay"></div>
    <!-- End Infobar Notifications Sidebar -->
    <!-- Start Infobar Setting Sidebar -->
    <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
        <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
            <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img src="{{asset('backend_assets/images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close"></a>
        </div>
        <div class="infobar-settings-sidebar-body">
            <div class="custom-color-setting">
                <div class="row align-items-center">
                    <div class="col-12">
                        <a href="{{url('admin/change_password')}}"><i class="mdi mdi-key-minus"></i><h6 style="display:inline; margin-left:8px;" class="mb-3">Change Password</h6></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                    <a href="index.html" class="logo logo-large"><img src="{{asset('backend_assets/images/logo.svg')}}" class="img-fluid" alt="logo"></a>

                </div>
                <!-- End Logobar -->
                <!-- Start Profilebar -->
                <div class="profilebar text-center">
                    <img src="{{asset('backend_assets/images/users/profile.svg')}}" class="img-fluid" alt="profile">
                    <div class="profilename">
                      <h5 class="text-white">Admin</h5>
                    </div>
                    <div class="userbox">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#" class="profile-icon"><img src="{{asset('backend_assets/images/svg-icon/user.svg')}}" class="img-fluid" alt="user"></a></li>
                            <li class="list-inline-item"><a href="#" class="profile-icon"><img src="{{asset('backend_assets/images/svg-icon/email.svg')}}" class="img-fluid" alt="email"></a></li>
                            <li class="list-inline-item"><a href="{{url('admin/logout')}}" class="profile-icon"><img src="{{asset('backend_assets/images/svg-icon/logout.svg')}}" class="img-fluid" alt="logout" title="Logout"></a></li>
                        </ul>
                      </div>
                </div>
                <!-- End Profilebar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar">
                    <ul class="vertical-menu">
                        <li class="vertical-header">Main</li>
                        <li>
                            <a href="{{url('admin/dashboard')}}">
                              <img src="{{asset('backend_assets/images/svg-icon/dashboard.svg')}}" class="img-fluid" alt="dashboard"><span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <img src="{{asset('backend_assets/images/svg-icon/basic.svg')}}" class="img-fluid" alt="basic"><span>Categories</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="{{url('admin/add/category')}}"><i class="mdi mdi-circle"></i>Add Category</a></li>
                                <li><a href="{{url('admin/view/category')}}"><i class="mdi mdi-circle"></i>Manage Categories</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <img src="{{asset('backend_assets/images/svg-icon/ecommerce.svg')}}" class="img-fluid" alt="basic"><span>Products</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="{{url('admin/add/product')}}"><i class="mdi mdi-circle"></i>Add Product</a></li>
                                <li><a href="{{url('admin/view/product')}}"><i class="mdi mdi-circle"></i>Manage Products</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index.html" class="mobile-logo"><img src="{{asset('backend_assets/images/logo.svg')}}" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="{{asset('backend_assets/images/svg-icon/horizontal.svg')}}" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                           <img src="{{asset('backend_assets/images/svg-icon/verticle.svg')}}" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                           <img src="{{asset('backend_assets/images/svg-icon/collapse.svg')}}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                           <img src="{{asset('backend_assets/images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                           <img src="{{asset('backend_assets//images/svg-icon/collapse.svg')}}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                           <img src="{{asset('backend_assets//images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar">
                                        <form>
                                            <div class="input-group">
                                              <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                              <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon2"><img src="{{asset('backend_assets//images/svg-icon/search.svg')}}" class="img-fluid" alt="search"></button>
                                              </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="notifybar">
                                        <a href="javascript:void(0)" id="infobar-notifications-open" class="infobar-icon">
                                            <img src="{{asset('backend_assets//images/svg-icon/notifications.svg')}}" class="img-fluid" alt="notifications">
                                            <span class="live-icon"></span>
                                        </a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="settingbar">
                                        <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                                            <img src="{{asset('backend_assets//images/svg-icon/settings.svg')}}" class="img-fluid" alt="settings">
                                        </a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Ecommerce</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ecommerce</li>
                            </ol>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->
            @yield('backend_content')
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2019 Theta - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->
    <script src="{{asset('backend_assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/detect.js')}}"></script>
    <script src="{{asset('backend_assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('backend_assets/js/vertical-menu.js')}}"></script>
    <!-- Switchery js -->
    <script src="{{asset('backend_assets/plugins/switchery/switchery.min.js')}}"></script>
    <!-- Chartjs js -->
    <script src="{{asset('backend_assets/plugins/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/chart.js/chart-bundle.min.js')}}"></script>
    <!-- Piety Chart js -->
    <script src="{{asset('backend_assets/plugins/peity/jquery.peity.min.js')}}"></script>
    <!-- Dropzone JS -->
    <script src="{{asset('backend_assets/plugins/dropzone/dist/dropzone.js')}}"></script>
    <!-- Required Datatable js -->
    <script src="{{asset('backend_assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Datatable js -->
    <script src="{{asset('backend_assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
    <!-- Responsive Examples -->
    <script src="{{asset('backend_assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <!-- C3 Chart js -->
    <script src="{{asset('backend_assets/plugins/d3/d3.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/c3/c3.min.js')}}"></script>
    <!-- Dashboard js -->
    <script src="{{asset('backend_assets/js/custom/custom-dashboard-ecommerce.js')}}"></script>
    <!-- Core js -->
    <script src="{{asset('backend_assets/js/core.js')}}"></script>
    <script src="{{asset('backend_assets/js/custom/custom-validate.js')}}"></script>
    <script src="{{asset('backend_assets/js/custom/custom-form-validation.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/validatejs/validate.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend_assets/js/custom/custom-table-datatable.js')}}"></script>

    <!-- Select2 js -->
    <script src="{{asset('backend_assets/plugins/select2/select2.min.js')}}"></script>
    <!-- Tagsinput js -->
    <script src="{{asset('backend_assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/bootstrap-tagsinput/typeahead.bundle.js')}}"></script>
    <script src="{{asset('backend_assets/js/custom/custom-form-select.js')}}"></script>

    <!-- Tabledit js -->
    <script src="{{asset('backend_assets/plugins/tabledit/jquery.tabledit.js')}}"></script>     
    <script src="{{asset('backend_assets/js/custom/custom-table-editable.js')}}"></script>    
    <!-- End js -->
</body>

<!-- Mirrored from xpanthersolutions.com/admin-templates/theta/html/dark-vertical/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Sep 2019 09:23:41 GMT -->
</html>
