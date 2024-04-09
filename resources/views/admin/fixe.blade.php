<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>
        {{ config('app.name') }} | @yield('titre')</title>
    <!--favicon-->
    <link rel="icon" href="/icone.png" type="image/png" />
    <!-- Vector CSS -->
    <link href="/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    @yield('header')
    <!-- Include Bubble Theme -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <!--sidebar-wrapper-->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div class="">
                    <img src="/icone.png" class="logo-icon-2" alt="" />
                </div>
                <div>
                    <h4 class="logo-text">
                        {{ config('app.name') }}
                    </h4>
                </div>
                <a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
                </a>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="/dashboard">
                        <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li class="menu-label">Administration</li>
                <li>
                    <a href="/admin/blog">
                        <div class="parent-icon icon-color-2"><i class="bx bx-envelope"></i>
                        </div>
                        <div class="menu-title">Blog</div>
                    </a>
                </li>
                <li>
                    <a href="/admin/projets">
                        <div class="parent-icon icon-color-4"><i class="bx bx-archive"></i>
                        </div>
                        <div class="menu-title">Produits</div>
                    </a>
                </li>
                <li>
                    <a href="/admin/services">
                        <div class="parent-icon icon-color-4"><i class="bx bx-book-open"></i>
                        </div>
                        <div class="menu-title">Services</div>
                    </a>
                </li>
                <li>
                    <a href="/admin/contacts">
                        <div class="parent-icon icon-color-5"><i class="bx bx-group"></i>
                        </div>
                        <div class="menu-title">Contatcs</div>
                    </a>
                </li>
                <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#config-modal">
                        <div class="parent-icon icon-color-8">
                            <i class="bx bx-cog"></i>
                        </div>
                        <div class="menu-title">Configuration</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar-wrapper-->
        <!--header-->
        <header class="top-header">
            <nav class="navbar navbar-expand">
                <div class="left-topbar d-flex align-items-center">
                    <a href="javascript:;" class="toggle-btn"> <i class="bx bx-menu"></i>
                    </a>
                </div>
                <div class="flex-grow-1 search-bar">
                    <div class="input-group">
                        <button class="btn btn-search-back search-arrow-back" type="button"><i
                                class="bx bx-arrow-back"></i></button>
                        <input type="text" class="form-control" placeholder="search" />
                        <button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i></button>
                    </div>
                </div>
                <div class="right-topbar ms-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item search-btn-mobile">
                            <a class="nav-link position-relative" href="javascript:;"> <i
                                    class="bx bx-search vertical-align-middle"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-lg">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                href="javascript:;" data-bs-toggle="dropdown"> <span class="msg-count">6</span>
                                <i class="bx bx-comment-detail vertical-align-middle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <h6 class="msg-header-title">6 New</h6>
                                        <p class="msg-header-subtitle">Application Messages</p>
                                    </div>
                                </a>
                                <div class="header-message-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="/assets/images/avatars/avatar-1.png" class="msg-avatar"
                                                    alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5
                                                        sec
                                                        ago</span></h6>
                                                <p class="msg-info">The standard chunk of lorem</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">View All Messages</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-lg">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                href="javascript:;" data-bs-toggle="dropdown"> <i
                                    class="bx bx-bell vertical-align-middle"></i>
                                <span class="msg-count">8</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <h6 class="msg-header-title">8 New</h6>
                                        <p class="msg-header-subtitle">Application Notifications</p>
                                    </div>
                                </a>
                                <div class="header-notifications-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-primary text-primary"><i
                                                    class="bx bx-group"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Customers<span class="msg-time float-end">14
                                                        Sec
                                                        ago</span></h6>
                                                <p class="msg-info">5 new user registered</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">View All Notifications</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-user-profile">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="d-flex user-box align-items-center">
                                    <div class="user-info">
                                        <p class="user-name mb-0">{{ Auth::user()->nom }}</p>
                                        <p class="designattion mb-0">Available</p>
                                    </div>
                                    <img src="/icone.png" class="user-img"
                                        alt="user avatar">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="javascript:;"><i
                                        class="bx bx-user"></i><span>Profile</span></a>
                                <a class="dropdown-item" href="javascript:;"><i
                                        class="bx bx-cog"></i><span>Settings</span></a>
                                <a class="dropdown-item" href="javascript:;"><i
                                        class="bx bx-tachometer"></i><span>Dashboard</span></a>
                                <a class="dropdown-item" href="javascript:;"><i
                                        class="bx bx-wallet"></i><span>Earnings</span></a>
                                <a class="dropdown-item" href="javascript:;"><i
                                        class="bx bx-cloud-download"></i><span>Downloads</span></a>
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="/logout"><i
                                        class="bx bx-power-off"></i><span>Logout</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--end header-->
        <!--page-wrapper-->
        <div class="page-wrapper">
            @yield('content')
        </div>
        <!--end page-wrapper-->
        <!--start overlay-->
        <div class="overlay toggle-btn-mobile"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--footer -->

        <!-- end footer -->
    </div>
    <!--start switcher-->
    <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
                class="bx bx-cog bx-spin"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false"
            tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <h6 class="mb-0">Theme Variation</h6>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="lightmode"
                        value="option1" checked>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darkmode"
                        value="option2">
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darksidebar"
                        value="option3">
                    <label class="form-check-label" for="darksidebar">Semi Dark</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ColorLessIcons"
                        value="option3">
                    <label class="form-check-label" for="ColorLessIcons">Color Less Icons</label>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->
    <!-- JavaScript -->
    <!-- Bootstrap JS -->



    <!-- Modal -->
    <div class="modal fade" id="config-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bx bx-cog"></i>
                        Configuration des informations
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @livewire('Configuration')
                </div>
            </div>
        </div>
    </div>



    @yield('script')
</body>

</html>
