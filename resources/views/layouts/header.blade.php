<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Ceflix  Administrator Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{url('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


   {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    --}}

</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index2.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="/images/logo.svg'" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="/assets/images/logo-dark.png'" alt="" height="17">
                                </span>
                    </a>

                    <a href="index2.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="/assets/images/logo-light.svg'" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="/assets/images/logo-light.png'" alt="" height="19">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
               <!-- <form class="app-search d-none d-lg-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="bx bx-search-alt"></span>
                    </div>
                </form> -->

                <!--<div class="dropdown dropdown-mega d-none d-lg-block ml-2">
                    <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        Mega Menu
                        <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-megamenu">
                        <div class="row">
                            <div class="col-sm-8">

                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0">UI Components</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);">Lightbox</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Range Slider</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Sweet Alert</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Rating</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Forms</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Tables</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Charts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0">Applications</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);">Ecommerce</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Calendar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Email</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Projects</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Tasks</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Contacts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0">Extra Pages</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);">Light Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Compact Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Horizontal layout</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Maintenance</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Coming Soon</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Timeline</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">FAQs</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="font-size-14 mt-0">UI Components</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);">Lightbox</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Range Slider</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Sweet Alert</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Rating</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Forms</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Tables</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Charts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-5">
                                        <div>
                                            <img src="assets/images/megamenu-img.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>-->
            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ml-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                         aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- <img class="" src="assets/images/flags/us.jpg" alt="Header Language" height="16">-->
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">

                        <!-- item-->
                        <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                             <img src="assets/images/flags/spain.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                         </a>

                         <!-- item-->
                        <!--  <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <img src="assets/images/flags/germany.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                          </a>

                          <!-- item-->
                        <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                             <img src="assets/images/flags/italy.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                         </a>

                         <!-- item-->
                        <!--  <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <img src="assets/images/flags/russia.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                          </a> -->
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ml-1">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!--<i class="bx bx-customize"></i> -->
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="px-lg-2">
                            <div class="row no-gutters">
                                <!--<div class="col">
                                    <a class="dropdown-icon-item" href="index2.html#">
                                        <img src="assets/images/brands/github.png" alt="Github">
                                        <span>GitHub</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="index2.html#">
                                        <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                        <span>Bitbucket</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="index2.html#">
                                        <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row no-gutters">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="index2.html#">
                                        <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                        <span>Dropbox</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="index2.html#">
                                        <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                        <span>Mail Chimp</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="index2.html#">
                                        <img src="assets/images/brands/slack.png" alt="slack">
                                        <span>Slack</span>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ml-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- <i class="bx bx-bell bx-tada"></i>
                         <span class="badge badge-danger badge-pill">3</span>
                     </button>
                     <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                          aria-labelledby="page-header-notifications-dropdown">
                         <div class="p-3">
                             <div class="row align-items-center">
                                 <div class="col">
                                     <h6 class="m-0"> Notifications </h6>
                                 </div>
                                 <div class="col-auto">
                                     <a href="index2.html#!" class="small"> View All</a>
                                 </div>
                             </div>
                         </div>
                         <div data-simplebar style="max-height: 230px;">
                             <a href="" class="text-reset notification-item">
                                 <div class="media">
                                     <div class="avatar-xs mr-3">
                                                 <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                     <i class="bx bx-cart"></i>
                                                 </span>
                                     </div>
                                     <div class="media-body">
                                         <h6 class="mt-0 mb-1">Your order is placed</h6>
                                         <div class="font-size-12 text-muted">
                                             <p class="mb-1">If several languages coalesce the grammar</p>
                                             <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                         </div>
                                     </div>
                                 </div>
                             </a>
                             <a href="" class="text-reset notification-item">
                                 <div class="media">
                                     <img src="assets/images/users/avatar-3.jpg"
                                          class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                     <div class="media-body">
                                         <h6 class="mt-0 mb-1">James Lemire</h6>
                                         <div class="font-size-12 text-muted">
                                             <p class="mb-1">It will seem like simplified English.</p>
                                             <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                         </div>
                                     </div>
                                 </div>
                             </a>
                             <a href="" class="text-reset notification-item">
                                 <div class="media">
                                     <div class="avatar-xs mr-3">
                                                 <span class="avatar-title bg-success rounded-circle font-size-16">
                                                     <i class="bx bx-badge-check"></i>
                                                 </span>
                                     </div>
                                     <div class="media-body">
                                         <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                         <div class="font-size-12 text-muted">
                                             <p class="mb-1">If several languages coalesce the grammar</p>
                                             <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                         </div>
                                     </div>
                                 </div>
                             </a>

                             <a href="" class="text-reset notification-item">
                                 <div class="media">
                                     <img src="assets/images/users/avatar-4.jpg"
                                          class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                     <div class="media-body">
                                         <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                         <div class="font-size-12 text-muted">
                                             <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                             <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                         </div>
                                     </div>
                                 </div>
                             </a>
                         </div>
                         <div class="p-2 border-top">
                             <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                 <i class="mdi mdi-arrow-right-circle mr-1"></i> View More..
                             </a>
                         </div>
                     </div> -->
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="/assets/images/users/avatar-1.jpg"
                             alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ml-1"></span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item" href="index2.html#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                        <!-- <a class="dropdown-item" href="index2.html#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> My Wallet</a>-->
                        <a class="dropdown-item d-block" href="index2.html#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> Settings</a>
                        <!-- <a class="dropdown-item" href="index2.html#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> Lock screen</a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="index2.html#"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                    </div>
                </div>

                <!--  <div class="dropdown d-inline-block">
                      <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                          <i class="bx bx-cog bx-spin"></i>
                      </button>
                  </div> -->

            </div>
        </div>
    </header> <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="index2.html" class="waves-effect">
                            <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">3</span>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="/category" class="has-arrow waves-effect">

                            <i class="bx bx-layout"></i>
                            <span>Category</span>
                        </a>
                        <!-- <ul class="sub-menu" aria-expanded="false">
                             <li><a href="layouts-horizontal.html">Horizontal</a></li>
                             <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                             <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                             <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                             <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                             <li><a href="layouts-preloader.html">Preloader</a></li>
                             <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                         </ul> -->
                    </li>

                    <!--  <li class="menu-title">Apps</li> -->

                    <li>
                        <a href="/video" class=" waves-effect">
                            <i class="bx bx-calendar"></i>
                            <span>Upload Videos</span>
                        </a>
                    </li>

                    <li>
                        <a href="/channel" class="has-arrow waves-effect">
                            <i class="bx bx-store"></i>
                            <span>Channels</span>
                        </a>
                        <!--- <ul class="sub-menu" aria-expanded="false">
                             <li><a href="ecommerce-products.html">Products</a></li>
                             <li><a href="ecommerce-product-detail.html">Product Detail</a></li>
                             <li><a href="ecommerce-orders.html">Orders</a></li>
                             <li><a href="ecommerce-customers.html">Customers</a></li>
                             <li><a href="ecommerce-cart.html">Cart</a></li>
                             <li><a href="ecommerce-checkout.html">Checkout</a></li>
                             <li><a href="ecommerce-shops.html">Shops</a></li>
                             <li><a href="ecommerce-add-product.html">Add Product</a></li>
                         </ul> -->
                    </li>

                    <li>
                        <a href="/user" class="has-arrow waves-effect">
                            <i class="bx bx-envelope"></i>
                            <span>Manage Users</span>
                        </a>
                        <!-- <ul class="sub-menu" aria-expanded="false">
                             <li><a href="email-inbox.html">Inbox</a></li>
                             <li><a href="email-read.html">Read Email</a></li>
                         </ul> -->
                    </li>
                    <li>
                        <a href="/banner" class="has-arrow waves-effect">
                            <i class="bx bx-envelope"></i>
                            <span>Banners</span>
                        </a>
                        <!-- <ul class="sub-menu" aria-expanded="false">
                             <li><a href="email-inbox.html">Inbox</a></li>
                             <li><a href="email-read.html">Read Email</a></li>
                         </ul> -->
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-receipt"></i>
                            <span>Ceflix 2.0</span>
                        </a>
                        <!-- <ul class="sub-menu" aria-expanded="false">
                             <li><a href="invoices-list.html">Invoice List</a></li>
                             <li><a href="invoices-detail.html">Invoice Detail</a></li>
                         </ul> -->
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-briefcase-alt-2"></i>
                            <span>User Videos</span>
                        </a>
                        <!-- <ul class="sub-menu" aria-expanded="false">
                             <li><a href="projects-grid.html">Projects Grid</a></li>
                             <li><a href="projects-list.html">Projects List</a></li>
                             <li><a href="projects-overview.html">Project Overview</a></li>
                             <li><a href="projects-create.html">Create New</a></li>
                         </ul> -->
                    </li>

                    <li>
                        <a href="/watchlive" class="has-arrow waves-effect">
                            <i class="bx bx-task"></i>
                            <span>Watch Live</span>
                        </a>

                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bxs-user-detail"></i>
                            <span>Contacts</span>
                        </a>

                    </li>

                    <!-- <li class="menu-title">Pages</li>-->

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-user-circle"></i>
                            <span>Admin Accounts</span>
                        </a>
                        <!-- <ul class="sub-menu" aria-expanded="false">
                             <li><a href="auth-login.html">Login</a></li>
                             <li><a href="auth-register.html">Register</a></li>
                             <li><a href="auth-recoverpw.html">Recover Password</a></li>
                             <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                         </ul> -->
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-file"></i>
                            <span>Ceflix Tunes</span>
                        </a>

                    </li>

                    <!--<li class="menu-title">Components</li> -->

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-tone"></i>
                            <span>Ceflix Connect</span>
                        </a>

                    </li>


            </div>
        </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->
