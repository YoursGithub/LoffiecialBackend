<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Laravel Bootstrap Responsive Admin Web Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="dashboard bootstrap, laravel template, admin panel in laravel, php admin panel, admin panel for laravel, admin template bootstrap 5, laravel admin panel, admin dashboard template, hrm dashboard, vite laravel, admin dashboard, ecommerce admin dashboard, dashboard laravel, analytics dashboard, template dashboard, admin panel template, bootstrap admin panel template">

    <!-- TITLE -->
    <title> Manage Savings </title>

    <!-- FAVICON -->
    <link rel="icon" href="/admin/build/assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="/admin/build/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- ICONS CSS -->
    <link href="/admin/build/assets/icon-fonts/icons.css" rel="stylesheet">

    <!-- APP SCSS -->
    <link rel="preload" as="style" href="/admin/build/assets/app-fce3f544.css" />
    <link rel="stylesheet" href="/admin/build/assets/app-fce3f544.css" />

    <!-- NODE WAVES CSS -->
    <link href="/admin/build/assets/libs/node-waves/waves.min.css" rel="stylesheet">

    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="/admin/build/assets/libs/simplebar/simplebar.min.css">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet" href="/admin/build/assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="/admin/build/assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- CHOICES CSS -->
    <link rel="stylesheet" href="/admin/build/assets/libs/choices.js/public/assets/styles/choices.min.css">

    <!-- CHOICES JS -->
    <script src="/admin/build/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- MAIN JS -->
    <script src="/admin/build/assets/main.js"></script>


    <!-- PRISM CSS -->
    <link rel="stylesheet" href="/admin/build/assets/libs/prismjs/themes/prism-coy.min.css">


    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 400px;
            color: black;

        }
    </style>
</head>

<body>

    <!-- SWITCHER -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">

        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home"
                        aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-profile" type="button" role="tab"
                        aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel"
                    aria-labelledby="switcher-home-tab" tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style"
                                        id="switcher-light-theme" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style"
                                        id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction"
                                        id="switcher-ltr" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction"
                                        id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-vertical" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles"
                                        id="switcher-regular" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles"
                                        id="switcher-classic">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-modern">
                                        Modern
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles"
                                        id="switcher-modern">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width"
                                        id="switcher-full-width" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width"
                                        id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions"
                                        id="switcher-menu-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions"
                                        id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Loader:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-enable">
                                        Enable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-enable">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-disable">
                                        Disable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-disable" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel"
                    aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio"
                                        name="header-colors" id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio"
                                        name="header-colors" id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio"
                                        name="header-colors" id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Header"
                                        type="radio" name="header-colors" id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Header"
                                        type="radio" name="header-colors" id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio"
                                        name="theme-primary" id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio"
                                        name="theme-primary" id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio"
                                        name="theme-primary" id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio"
                                        name="theme-background" id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div
                                    class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio"
                                        name="theme-background" id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer flex-wrap">
                    <a href="https://themeforest.net/item/ynex-laravel-admin-panel-template/48397579"
                        class="btn btn-primary m-1" target="_blank">Buy Now</a>
                    <a href="https://themeforest.net/user/spruko/portfolio" class="btn btn-secondary m-1"
                        target="_blank">Our Portfolio</a>
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END SWITCHER -->

    <!-- LOADER -->
    <div id="loader">
        <img src="/admin/build/assets/images/media/loader.svg" alt="">
    </div>
    <!-- END LOADER -->

    <!-- PAGE -->
    <div class="page">

        <!-- HEADER -->

        @include('admin.layouts.navbar')                                                               




        @include('admin.layouts.sidebar')

        <!-- MAIN-CONTENT -->

        <div class="main-content app-content">


            <div class="container-fluid">

         
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            
                <!-- Start:: row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    @isset($post)

                                    Update Post


                                    @else

                                    Create Post
                                        
                                    @endisset
                                </div>

                            </div>
                            <form method="POST" enctype="multipart/form-data" novalidate>
                                <div class="card-body">
                                    <div class="row gy-4">
                                        <div>
                                            <p class=" "><b> Title : </b></p>

                                            <input type="text" class="form-control" id="input" name="title"
                                                required placeholder=" title for post"
                                                value="{{ isset($post) ? $post->title : old('title') }}" />

                                        </div>
                                        
                                        <div>

                                            <p class="mb-2 "><b> Category : </b></p>

                                            @isset($post)

                                            <select name="category" id="headline" class="form-control">


                                                @foreach ($allCategory as $cat)

                                                <option value="{{ $cat->id }}"  {{ $post->category_id == $cat->id ? "selected" : '' }}> {{ $cat->category }}</option>
                                                    
                                                @endforeach

                                            </select>

                                            @else
                                            
                                            <select name="category" id="headline" class="form-control">

                                                <option value="" disabled selected>Select your category</option>
                                                

                                                @foreach ($allCategory as $cat)

                                                <option value="{{ $cat->id }}" > {{ $cat->category }}</option>
                                                    
                                                @endforeach

                                            </select>

                                            @endisset

                                           
                                       
                                        </div>
                                        <div>

                                            <p class="mb-2 "><b>Want the post in trending ? </b></p>


                                            <select name="trending" id="headline" class="form-control">

                                                <option value="false" {{ isset($post) && $post->trending == 0 ? 'selected' : '' }}>No</option>
                                                <option value="true" {{ isset($post) && $post->trending == 1 ? 'selected' : '' }}>Yes</option>
                                                

                                                

                                            </select>

                                       
                                        </div>
                                        <div class="">

                                            <p class="mb-2 "><b> Description : </b></p>

                                            <input type="text" class="form-control" id="input"
                                                name="description" required placeholder=" description for post"
                                                value="{{ isset($post) ? $post->description : old('description') }}" />

                                        </div>
                                        
                                            <div class="">

                                                <p class="mb-2 "><b>Meta Keywords : </b></p>

                                                <input type="text" class="form-control" id="input"
                                                    name="keywords" required placeholder=" keyword for post"
                                                    value="{{ isset($post) ? $post->keywords : old('keywords') }}" />



                                            </div><br>
                                            <div>
                                                <p class="mb-2 "><b> Thumbnail : </b></p>

                                                <input type="file" class="form-control" id="thumbnail"
                                                    name="thumbnail" required 
                                                    accept="image/*"    name="thumbnail"/>
                                                 <br>
                                                @isset($post)

                                                <p class="mb-2 "><b> Thumbnail Preview : </b></p>
                                                <img src="{{ isset($post) ? $post->thumbnail : "" }}" alt="Image Not Found"
                                                id="preview" width="200px" >

                                                @else
                                                    
                                                <p class="mb-2 "><b> Thumbnail Preview : </b></p>
                                                <img src="{{ isset($post) ? $post->thumbnail : "" }}" alt="Image Not Found"
                                                id="preview" width="200px" style="display: none">
                                                @endisset
                                        

                                            </div>
                                            <div class="">

                                                <p class="mb-2 "><b>Image Caption : </b></p>

                                                <input type="text" class="form-control" id="input"
                                                    name="image_caption"  placeholder=" Caption for thumbnail"
                                                    value="{{ isset($post) ? $post?->image_caption : old('image_caption') }}" />



                                            </div><br>

                                            <div>

                                           
                                                <p class="mb-2 "><b>  Author  : </b></p>
    
                                                
                                                <select name="author" id="headline" class="form-control">

                                                    @empty($post)

                                                    <option value="" disabled selected>Select your author</option>

                                                    @endempty
                                                    
    
                                                    @foreach ($allAuthor as $author)
    
                                                    <option value="{{ $author->id }}" {{ isset($post) && $post->author_id == $author->id ? "selected" : '' }} > {{ $author->name }}</option>
                                                        
                                                    @endforeach
    
                                                </select>
    
                                           
                                            </div>
                                        
                                        <div>

                                            <p class="mb-2 "><b> Blog : </b></p>

                                            <textarea name="blog" id="editor" cols="30" rows="20">
                                                    {{ isset($post) ? $post->blog : old('blog') }}
                                            </textarea>
                                            <!--span class="input-group-text" id="basic-addon1" style="margin-left: 5px;">%</span-->
                                        </div>


                                        <br>
                                        <div class="col-xl-7 col-lg-6 col-md-6 col-sm-13">
                                            <input type="submit" class="form-control btn btn-primary" name="submit"
                                                id="input-button" value="Submit">
                                        </div>

                            </form>
                            <div class="card-footer d-none border-top-0">
                                <!-- Prism Code -->

                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- END PAGE-->
           
            <!-- SCRIPTS -->

            <!-- SCROLL-TO-TOP -->

            {{-- Thumbnail Preview --}}
            <script>

                document.getElementById('thumbnail').addEventListener('change', function(event) {
                    var file = event.target.files[0];
                    if (file) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            var preview = document.getElementById('preview');
                            preview.src = e.target.result;
                            preview.style.display = 'block';
                        };
                        reader.readAsDataURL(file);
                    }
                }); 
                 document.getElementById('author_image').addEventListener('change', function(event) {
                    var file = event.target.files[0];
                    if (file) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            var preview = document.getElementById('author_prev');
                            preview.src = e.target.result;
                            preview.style.display = 'block';
                        };
                        reader.readAsDataURL(file);
                    }
                });
            </script>
         

             {{-- ckeditor --}}
            <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/super-build/ckeditor.js"></script>

            {{-- ckeditor --}}
            <script>
                let existingImages = [];
                CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
                        toolbar: {
                            items: [
                                // 'findAndReplace', 
                                'selectAll', '|',
                                'heading', '|',
                                'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                                'removeFormat', '|',
                                'bulletedList', 'numberedList', 'todoList', '|',
                                'outdent', 'indent', '|',
                                'undo', 'redo',
                                '|',
                                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                                'alignment', '|',
                                 'uploadImage', 'blockQuote', 'codeBlock' ,'link'
                          
                                // 'textPartLanguage', '|',
                                // 'sourceEditing'
                            ],
                            shouldNotGroupWhenFull: true
                        },

                        list: {
                            properties: {
                                styles: true,
                                startIndex: true,
                                reversed: true
                            }
                        },
                        heading: {
                            options: [{
                                    model: 'paragraph',
                                    title: 'Paragraph',
                                    class: 'ck-heading_paragraph'
                                },
                                {
                                    model: 'heading1',
                                    view: 'h1',
                                    title: 'Heading 1',
                                    class: 'ck-heading_heading1'
                                },
                                {
                                    model: 'heading2',
                                    view: 'h2',
                                    title: 'Heading 2',
                                    class: 'ck-heading_heading2'
                                },
                                {
                                    model: 'heading3',
                                    view: 'h3',
                                    title: 'Heading 3',
                                    class: 'ck-heading_heading3'
                                },
                                {
                                    model: 'heading4',
                                    view: 'h4',
                                    title: 'Heading 4',
                                    class: 'ck-heading_heading4'
                                },
                                {
                                    model: 'heading5',
                                    view: 'h5',
                                    title: 'Heading 5',
                                    class: 'ck-heading_heading5'
                                },
                                {
                                    model: 'heading6',
                                    view: 'h6',
                                    title: 'Heading 6',
                                    class: 'ck-heading_heading6'
                                }
                            ]
                        },
                        fontFamily: {
                            options: [
                                'default',
                                'Arial, Helvetica, sans-serif',
                                'Courier New, Courier, monospace',
                                'Georgia, serif',
                                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                                'Tahoma, Geneva, sans-serif',
                                'Times New Roman, Times, serif',
                                'Trebuchet MS, Helvetica, sans-serif',
                                'Verdana, Geneva, sans-serif'
                            ],
                            supportAllValues: true
                        },
                        fontSize: {
                            options: [10, 12, 14, 'default', 18, 20, 22],
                            supportAllValues: true
                        },
                        htmlSupport: {
                            allow: [{
                                name: /.*/,
                                attributes: true,
                                classes: true,
                                styles: true
                            }]
                        },
                        htmlEmbed: {
                            showPreviews: true
                        },
                        link: {
                            decorators: {
                                addTargetToExternalLinks: true,
                                defaultProtocol: 'https://',
                                toggleDownloadable: {
                                    mode: 'manual',
                                    label: 'Downloadable',
                                    attributes: {
                                        download: 'file'
                                    }
                                }
                            }
                        },
                        mention: {
                            feeds: [{
                                marker: '@',
                                feed: [
                                    '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                                    '@chocolate', '@cookie', '@cotton', '@cream',
                                    '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                                    '@gummi', '@ice', '@jelly-o',
                                    '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                                    '@sesame', '@snaps', '@soufflé',
                                    '@sugar', '@sweet', '@topping', '@wafer'
                                ],
                                minimumCharacters: 1
                            }]
                        },

                        removePlugins: [
                            'AIAssistant',
                            'CKBox',
                            'CKFinder',
                            'EasyImage',
                            'RealTimeCollaborativeComments',
                            'RealTimeCollaborativeTrackChanges',
                            'RealTimeCollaborativeRevisionHistory',
                            'PresenceList',
                            'Comments',
                            'TrackChanges',
                            'TrackChangesData',
                            'RevisionHistory',
                            'Pagination',
                            'WProofreader',
                            'MathType',
                            'SlashCommand',
                            'Template',
                            'DocumentOutline',
                            'FormatPainter',
                            'TableOfContents',
                            'PasteFromOfficeEnhanced'
                        ],
                        ckfinder: {
                            uploadUrl: '{{ route('imageUpload') . '?_token=' . csrf_token() }}',
                        },

                    })
                    .then(editor => {
                        
                        const initialContent = editor.getData();
                        existingImages = getImageSources(initialContent);

                        editor.model.document.on('change:data', () => {
                            const newContent = editor.getData();
                            const newImages = getImageSources(newContent);
                            const removedImages = existingImages.filter(src => !newImages.includes(src));

                            if (removedImages.length > 0) {
                                removedImages.forEach(src => deleteImageFromServer(src));
                            }

                            existingImages = newImages;
                        });
                    })
                    .catch(error => {
                        console.error(error);
                    });


                    function getImageSources(content) {
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(content, 'text/html');
                        return Array.from(doc.getElementsByTagName('img')).map(img => img.src);
                    }

                    function deleteImageFromServer(imageUrl) {
                        fetch('{{ route('imageRemove') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({ url: imageUrl })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                console.log('Image deleted successfully.');
                            } else {
                                console.error('Failed to delete image:', data.message);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                    }
            </script>


            <!-- POPPER JS -->
            <script src="/admin/build/assets/libs/@popperjs/core/umd/popper.min.js"></script>

            <!-- BOOTSTRAP JS -->
            <script src="/admin/build/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- NODE WAVES JS -->
            <script src="/admin/build/assets/libs/node-waves/waves.min.js"></script>

            <!-- SIMPLEBAR JS -->
            <script src="/admin/build/assets/libs/simplebar/simplebar.min.js"></script>
            <link rel="modulepreload" href="/admin/build/assets/simplebar-635bad04.js" />
            <script type="module" src="/admin/build/assets/simplebar-635bad04.js"></script>

            <!-- COLOR PICKER JS -->
            <script src="/admin/build/assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

            <!-- PRISM JS -->
            <script src="/admin/build/assets/libs/prismjs/prism.js"></script>
            <link rel="modulepreload" href="/admin/build/assets/prism-custom-cc53504d.js" />
            <script type="module" src="/admin/build/assets/prism-custom-cc53504d.js"></script>


            <!-- STICKY JS -->
            <script src="/admin/build/assets/sticky.js"></script>

            <!-- APP JS -->
            <link rel="modulepreload" href="/admin/build/assets/app-3cade095.js" />
            <script type="module" src="/admin/build/assets/app-3cade095.js"></script>

            <!-- CUSTOM-SWITCHER JS -->
            <link rel="modulepreload" href="/admin/build/assets/custom-switcher-383b6a5b.js" />
            <script type="module" src="/admin/build/assets/custom-switcher-383b6a5b.js"></script>

            <!-- END SCRIPTS -->

</body>

</html>
