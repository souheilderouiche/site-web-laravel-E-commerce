
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.halothemes.com/html/ella-html-demo/category-mansory.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 22:26:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produit détaille</title>
    <meta name="keywords" content="HTML5/CSS3 Template">
    <meta name="description" content="Ella - Bootstrap eCommerce Template">
    <meta name="author" content="halothemes">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="{{asset('mainassets/assets/images/icons/favicon.png')}}">
    <!-- Plugins bootstrap CSS File -->
    <link rel="stylesheet" href="{{asset('mainassets/lib/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('mainassets/lib/bootstrap/bootstrap-grid.min.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('mainassets/assets/sass/style.css')}}">
    <link rel="stylesheet" href="{{asset('mainassets/assets/sass/skins/skin-6/skin-6.css')}}">
    <link rel="stylesheet" href="{{asset('mainassets/assets/sass/demos/demo-6/demo-6.css')}}">
    <link rel="stylesheet" href="{{asset('mainassets/assets/sass/base/header/header-6/header-6.css')}}">
    <link rel="stylesheet" href="{{asset('mainassets/assets/sass/base/footer/footer-6/footer-6.css')}}">
    <!-- Plugins Slick CSS File -->
    <link rel="stylesheet" href="{{asset('mainassets/lib/slick-carouse/slick.min.css')}}">
    <!-- Plugins Animation CSS File -->
    <link rel="stylesheet" href="{{asset('mainassets/assets/sass/base/animation/animation.css')}}">
    <!-- Plugins Product CSS File -->
    <link rel="stylesheet" href="{{asset('mainassets/assets/sass/base/product/component-product.css')}}">
    <!-- Plugins Popup CSS File -->
    <link rel="stylesheet" href="{{asset('mainassets/assets/sass/popup/popup.css')}}">
    <!-- Plugins Sidebar CSS File -->
    <link rel="stylesheet" href="{{asset('mainassets/assets/sass/sidebar/sidebar.css')}}">
    <!-- Plugins Fancybox CSS File -->
    <link rel="stylesheet" href="{{asset('mainassets/lib/fancybox/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('mainassets/assets/sass/category/component-category.css')}}">
    <!-- Plugins Slick CSS File -->
    <link rel="stylesheet" href="{{asset('mainassets/lib/slick-carouse/slick.min.css')}}">
    <!-- Plugins Animation CSS File -->
   
</head>

<body class="template-collection skin-1">
    <div class="page-wrapper">
        
        <header class="header header-6 animate" data-header-sticky>
            <div class="container container-1770">
                
                

                @if (Auth::user()!='')
                @include('incl.guest.header1')  
                @else
                @include('incl.guest.header')
                @endif

            </div>
            <div class="header-mobile">
                <div class="container">
                    <div class="header-mobile--wrapper">
                        <div class="header-mobile--item header-mobile--left">
                            <div class="header-mobile--icon item__mobile--hamburger">
                                <a class="mobileMenu-toggle" href="javascript:void(0)" data-mobile-menu aria-label="menu">
                                    <span class="mobileMenu-toggle__Icon"></span>
                                </a>
                            </div>
                            <div class="header-mobile--icon">
                                <a class="mobileSearch-toggle" href="javascript:void(0)" data-mobile-search aria-label="menu">
                                    <svg data-icon="search" viewBox="0 0 512 512" width="100%" height="100%">
                                        <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="header-mobile--item header-mobile--center">
                            <div class="header-mobile--icon item-mobile-logo">
                                <a href="index.html" class="header__heading-link focus-inset">
                                    <img src="{{asset('mainassets/assets/images/banners/home/home-6/Logo-header.png')}}" alt="Ella - HTML Template">
                                </a>
                            </div>
                        </div>
                        <div class="header-mobile--item header-mobile--right">
                            <div class="header-mobile--icon">
                                <a class="header__link--account link-underline" id="customer_login_link_mb" href="#" data-open-auth-sidebar="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" focusable="false" role="presentation" class="icon icon-account"><path d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 16 8 C 13.25 8 11 10.25 11 13 C 11 14.515625 11.707031 15.863281 12.78125 16.78125 C 10.53125 17.949219 9 20.300781 9 23 L 11 23 C 11 20.226563 13.226563 18 16 18 C 18.773438 18 21 20.226563 21 23 L 23 23 C 23 20.300781 21.46875 17.949219 19.21875 16.78125 C 20.292969 15.863281 21 14.515625 21 13 C 21 10.25 18.75 8 16 8 Z M 16 10 C 17.667969 10 19 11.332031 19 13 C 19 14.667969 17.667969 16 16 16 C 14.332031 16 13 14.667969 13 13 C 13 11.332031 14.332031 10 16 10 Z"></path></svg>
                                </a>
                            </div>
                            <div class="header-mobile--icon header__iconItem">
                                <a href="javascript:void(0)" class="header__icon header__icon--cart link link-underline focus-inset" id="cart-icon-bubble_mb" data-open-cart-sidebar="">
                                    <svg viewBox="0 0 30 30" class="icon icon-cart" enable-background="new 0 0 30 30"><g><g><path d="M20,6V5c0-2.761-2.239-5-5-5s-5,2.239-5,5v1H4v24h22V6H20z M12,5c0-1.657,1.343-3,3-3s3,1.343,3,3v1h-6V5z M24,28H6V8h4v3    h2V8h6v3h2V8h4V28z"></path></g></g></svg>
                                    <span class="visually-hidden">Cart</span>
                                    <div class="cart-count-bubble">
                                        <span class="text-count" aria-hidden="true" data-cart-count="">3</span><span class="visually-hidden">0 items</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- END: Header Mobile -->
        </header><!-- END: Header -->
        
        <main class="main">
            <div class="collection-template collection-template-masonry">
                <div class="container container-1170">
                    <div class="page-header">
                        <nav class="breadcrumb text-left ">
                            <a class="link-underline" href="#">
                                <span class="text">Home</span>
                            </a>
                            <span class="separate" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span>
                            <span class="bread-text">New In</span>
                        </nav>

                        <div class="collection-image">
                            <div class="halo-row-item grid-item grid-item-masonry col-6 col-md-4" data-gridItem>
                                <div class="product-card">
                                    <div class="product-card-top">
                                        <div class="product-card-media">
                                            <a href="" class="animate-scale image image-adapt" style="padding-bottom: 133.33333333333334%">
                                                <img src="{{asset('uploads')}}/{{$produit->image}}" alt="Halo Product">
                                                <img src="{{asset('uploads')}}/{{$produit->image}}" alt="Halo Product">
                                            </a>
                                            <div class="card-product__group group-right">
                                                <div class="card-product__group-item card-wishlist">
                                                    <a class="card-icon wishlist-icon" href="#" data-wishlist="" data-wishlist-handle="naminos-dementus-a-dincidunto-1" data-product-id="6617631162458" tabindex="0">
                                                        <span class="visually-hidden">Add to wishlist</span>
                                                        <span class="text">
                                                            Add to wishlist
                                                        </span>
                                                        <svg viewBox="0 0 512 512" class="icon icon-wishlist">
                                                        <g>
                                                        <g>
                                                        <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25
                                                            c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25
                                                            c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7
                                                            c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574
                                                            c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431
                                                            c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351
                                                            C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646
                                                            c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245
                                                            C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659
                                                            c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66
                                                            c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351
                                                            C482,254.358,413.255,312.939,309.193,401.614z"></path>
                                                        </g>
                                                        </g>
                                                        
                                                        </svg>
                                                    </a>
                                                </div>
                                               
                                            </div>
                                            <div class="card-action">
                                                <form action="http://themes.halothemes.com/cart/add" method="post" class="variants" data-product-id="" enctype="multipart/form-data">
                                                   
                                                    <a class="button button-ATC text-center" href="javascript:void(0)" data-quickshop-popup="">Add To Cart</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                           
                        </div>
                        <div class="collection-information">
                            <h3 class="collection-title uppercase">
                                {{$produit->name}}    {{$produit->prix}} TDN
                            </h3>
                            
                            <div class="desc text-left">
                                {{$produit->description}}
                            </div>
                        </div>


                    </div>
                    <div class="halo-collection-content sidebar--layout_vertical">
                        <div class="page-sidebar page-sidebar-left page-sidebar--vertical">
                            <div class="halo-sidebar-header text-left">
                                <span class="title">Sidebar</span>
                                <a href="javascript:void(0)" class="halo-page-sidebar-close" data-close-sidebar="" role="button">
                                    <span class="visually-hidden">Close</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" aria-hidden="true" focusable="false" role="presentation">
                                        <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                                    </svg>
                                </a>
                            </div>
                            
                        </div>
                        <div class="page-content">
                            <div class="toolbar" data-toolbar>
                                <div class="toolbar-wrapper">
                                    <div class="toolbar-item toolbar-sidebar sidebar-toogle" data-sidebar>
                                        <span class="toolbar-icon icon-filter">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 368.167 368.167" aria-hidden="true" focusable="false" role="presentation" class="icon icon-sidebar">
                                                <path d="M248.084,96.684h12c4.4,0,8-3.6,8-8c0-4.4-3.6-8-8-8h-12c-4.4,0-8,3.6-8,8C240.084,93.084,243.684,96.684,248.084,96.684     z"></path>
                                                <path d="M366.484,25.484c-2.8-5.6-8.4-8.8-14.4-8.8h-336c-6,0-11.6,3.6-14.4,8.8c-2.8,5.6-2,12,1.6,16.8l141.2,177.6v115.6     c0,6,3.2,11.2,8.4,14c2.4,1.2,4.8,2,7.6,2c3.2,0,6.4-0.8,9.2-2.8l44.4-30.8c6.4-4.8,10-12,10-19.6v-78.8l140.8-177.2     C368.484,37.484,369.284,31.084,366.484,25.484z M209.684,211.884c-0.8,1.2-1.6,2.8-1.6,4.8v81.2c0,2.8-1.2,5.2-3.2,6.8     l-44.4,30.8v-118.8c0-2.8-1.2-5.2-3.2-6.4l-90.4-113.6h145.2c4.4,0,8-3.6,8-8c0-4.4-3.6-8-8-8h-156c-0.4,0-1.2,0-1.6,0l-38.4-48     h336L209.684,211.884z"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="toolbar-col toolbar-colLeft">
                                        <label class="toolbar-label">
                                            View as
                                        </label>
                                        <div class="toolbar-item toolbar-viewAs clearfix" data-view-as>
                                            <span class="toolbar-icon icon-mode icon-mode-list" data-col="1" role="button" aria-label="List" tabindex="0"></span>
                                            <span class="toolbar-icon icon-mode icon-mode-grid grid-2" data-col="2" role="button" aria-label="Grid 2" tabindex="0"></span>
                                            <span class="toolbar-icon icon-mode icon-mode-grid grid-3 active" data-col="3" role="button" aria-label="Grid 3" tabindex="0"></span>
                                            <span class="toolbar-icon icon-mode icon-mode-grid grid-4" data-col="4" role="button" aria-label="Grid 4" tabindex="0"></span>
                                            <span class="toolbar-icon icon-mode icon-mode-grid grid-5" data-col="5" role="button" aria-label="Grid 5" tabindex="0"></span>
                                        </div>
                                    </div>
                                    <div class="toolbar-col toolbar-colRight">
                                        <div class="toolbar-item toolbar-limitView clearfix" data-limited-view>
                                            <label class="toolbar-label">
                                                Items per page
                                            </label>
                                            <div class="toolbar-dropdown limited-view" data-limited-view>
                                                <div class="label-tab" data-toggle="dropdown" aria-expanded="false" role="button" tabindex="0">
                                                    <span class="label-text">12</span>
                                                    <span class="halo-icon-dropdown icon-dropdown">
                                                        <svg xmlns="http://www.w3.org/2000/svg"  enable-background="new 0 0 551.13 551.13" height="512" viewBox="0 0 551.13 551.13" width="512"><path d="m275.565 361.679-223.897-223.896h-51.668l275.565 275.565 275.565-275.565h-51.668z"></path></svg>
                                                    </span>
                                                </div>
                                                <ul class="dropdown-menu list-unstyled">
                                                    <li class="link-underline" data-limited-view-item>
                                                        <span class="text" data-value="12">12</span>
                                                    </li>
                                                    <li class="link-underline" data-limited-view-item>
                                                        <span class="text" data-value="15">16</span>
                                                    </li>
                                                    <li class="link-underline is-active" data-limited-view-item>
                                                        <span class="text" data-value="20">20</span>
                                                    </li>
                                                    <li class="link-underline" data-limited-view-item>
                                                        <span class="text" data-value="25">25</span>
                                                    </li>
                                                    <li class="link-underline" data-limited-view-item>
                                                        <span class="text" data-value="30">30</span>
                                                    </li>
                                                    <li class="link-underline" data-limited-view-item>
                                                        <span class="text" data-value="50">50</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="toolbar-item toolbar-sort clearfix" data-sorting>
                                            <label class="toolbar-label" data-ur>
                                                Sort by
                                            </label>
                                            <div class="toolbar-dropdown filter-sortby">
                                                <div class="label-tab" data-toggle="dropdown" aria-expanded="false" role="button" tabindex="0">
                                                    <span class="label-text">Alphabetically, A-Z</span>
                                                    <span class="halo-icon-dropdown icon-dropdown">
                                                        <svg xmlns="http://www.w3.org/2000/svg"  enable-background="new 0 0 551.13 551.13" height="512" viewBox="0 0 551.13 551.13" width="512"><path d="m275.565 361.679-223.897-223.896h-51.668l275.565 275.565 275.565-275.565h-51.668z"></path></svg>
                                                    </span>
                                                </div>
                                                <ul class="dropdown-menu list-unstyled">
                                                    <li class="link-underline" data-sort-by-item>
                                                        <span class="text" data-href="manual" data-value="manual">
                                                            Featured
                                                        </span>
                                                    </li>
                                                    <li class="link-underline" data-sort-by-item>
                                                        <span class="text" data-href="best-selling" data-value="best-selling">
                                                            Best selling
                                                        </span>
                                                    </li>
                                                    <li class="link-underline is-active" data-sort-by-item>
                                                        <span class="text" data-href="title-ascending" data-value="title-ascending">
                                                            Alphabetically, A-Z
                                                        </span>
                                                    </li>
                                                    <li class="link-underline" data-sort-by-item>
                                                        <span class="text" data-href="title-descending" data-value="title-descending">
                                                            Alphabetically, Z-A
                                                        </span>
                                                    </li>
                                                    <li class="link-underline" data-sort-by-item>
                                                        <span class="text" data-href="price-ascending" data-value="price-ascending">
                                                            Price, low to high
                                                        </span>
                                                    </li><li class="link-underline" data-sort-by-item>
                                                        <span class="text" data-href="price-descending" data-value="price-descending">
                                                            Price, high to low
                                                        </span>
                                                    </li>
                                                    <li class="link-underline" data-sort-by-item>
                                                        <span class="text" data-href="created-ascending" data-value="created-ascending">
                                                            Date, old to new
                                                        </span>
                                                    </li>
                                                    <li class="link-underline" data-sort-by-item>
                                                        <span class="text" data-href="created-descending" data-value="created-descending">
                                                            Date, new to old
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collection" id="CollectionProductGrid">
                                <div class="product-collection products-grid row" data-layout="masonry" data-isotope='{ "itemSelector": "[data-gridItem]", "layoutMode": "masonry" }'>
                                    
                                    @foreach ($produit1 as $prod1)
                                        
                                    
                                    <div class="halo-row-item grid-item grid-item-masonry col-6 col-md-4" data-gridItem>
                                        <div class="product-card">
                                            <div class="product-card-top">
                                                <div class="product-card-media">
                                                    <a href="/produit/detaille/{{$prod1->id}}" class="animate-scale image image-adapt" style="padding-bottom: 133.33333333333334%">
                                                        <img src="{{asset('uploads')}}/{{$prod1->image}}" alt="Halo Product">
                                                        <img src="{{asset('uploads')}}/{{$prod1->image}}" alt="Halo Product">
                                                    </a>
                                                    <div class="card-product__group group-right">
                                                        <div class="card-product__group-item card-wishlist">
                                                            <a class="card-icon wishlist-icon" href="#" data-wishlist="" data-wishlist-handle="naminos-dementus-a-dincidunto-1" data-product-id="6617631162458" tabindex="0">
                                                                <span class="visually-hidden">Add to wishlist</span>
                                                                <span class="text">
                                                                    Add to wishlist
                                                                </span>
                                                                <svg viewBox="0 0 512 512" class="icon icon-wishlist">
                                                                <g>
                                                                <g>
                                                                <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25
                                                                    c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25
                                                                    c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7
                                                                    c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574
                                                                    c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431
                                                                    c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351
                                                                    C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646
                                                                    c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245
                                                                    C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659
                                                                    c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66
                                                                    c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351
                                                                    C482,254.358,413.255,312.939,309.193,401.614z"></path>
                                                                </g>
                                                                </g>
                                                                
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="card-product__group-item card-quickview card-quickviewIcon">
                                                            <a class="card-icon quickview-icon" href="javascript:void(0)" data-product-id="" data-open-quick-view-popup="" data-product-handle="" tabindex="0">
                                                                <span class="visually-hidden">Quick View</span>
                                                                <span class="text">Quick View</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes">
                                                                    <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                                                        c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                                                        C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                                                        c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                                                        C447.361,287.923,358.746,385.406,255.997,385.406z"></path>
                                                                    <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                                                        s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                                                        s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path>
                                                                    </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-action">
                                                        <form action="http://themes.halothemes.com/cart/add" method="post" class="variants" data-product-id="" enctype="multipart/form-data">
                                                            <a class="button button-ATC text-center" href="javascript:void(0)" data-quickshop-popup="">Add To Cart</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-card-information text-center">
                                                    <div class="card-vendor uppercase">
                                                        <a href="#" title="Anna" tabindex="0">{{$prod1->name}}</a>
                                                    </div>
                                                   
                                                    <div class="card-price">
                                                        <div class="price-item">
                                                            <span class="money">{{$prod1->prix}} TDN</span>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="pagination-wrapper text-center">
                                    
                                    <div class="infinite-scrolling">
                                        <a class="button button-2" href="produit/cat/{{$prod1->category_id}}" data-href="/collections/all?page=2">
                                        <span>Show More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- END: Colleection -->
               

                <section class="halo-block halo-product-block" data-product-carousel data-item-to-show="4" data-item-dots="false" data-item-arrows="true" data-item-dots-mb="true" data-item-arrows-mb="false">
                    <div class="container container-1170">
                        <div class="category-product-header text-left">
                            <h3 class="title">
                                <span class="text">Recently Viewed Products</span>
                            </h3>
                        </div>
                        <div class="halo-block-content product-carousel">
                            <div class="row">
                                
                               @foreach ($produits as $p)
                                   
                               
                                <div class="product-item col-6 col-md-4 col-lg-3">
                                    <div class="product-card">
                                        <div class="product-card-top">
                                            <div class="card__badge badge-left">
                                                <span class="badge sold-out-badge" aria-hidden="true">Sold out</span>
                                            </div>
                                            <div class="product-card-media">
                                                <a href="/produit/detaille/{{$p->id}}" class="animate-scale image image-adapt" style="padding-bottom: 133.33333333333334%">
                                                    <img src="{{asset('uploads')}}/{{$p->image}}" alt="Halo Product">
                                                    <img src="{{asset('uploads')}}/{{$p->image}}" alt="Halo Product">
                                                </a>
                                                <div class="card-product__group group-right">
                                                    <div class="card-product__group-item card-wishlist">
                                                        <a class="card-icon wishlist-icon" href="#" data-wishlist="" data-wishlist-handle="naminos-dementus-a-dincidunto-1" data-product-id="6617631162458" tabindex="0">
                                                            <span class="visually-hidden">Add to wishlist</span>
                                                            <span class="text">
                                                                Add to wishlist
                                                            </span>
                                                            <svg viewBox="0 0 512 512" class="icon icon-wishlist">
                                                            <g>
                                                            <g>
                                                            <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25
                                                                c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25
                                                                c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7
                                                                c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574
                                                                c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431
                                                                c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351
                                                                C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646
                                                                c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245
                                                                C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659
                                                                c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66
                                                                c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351
                                                                C482,254.358,413.255,312.939,309.193,401.614z"></path>
                                                            </g>
                                                            </g>
                                                            
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="card-product__group-item card-quickview card-quickviewIcon">
                                                        <a class="card-icon quickview-icon" href="javascript:void(0)" data-product-id="" data-open-quick-view-popup="" data-product-handle="" tabindex="0">
                                                            <span class="visually-hidden">Quick View</span>
                                                            <span class="text">Quick View</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes">
                                                                <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                                                    c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                                                    C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                                                    c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                                                    C447.361,287.923,358.746,385.406,255.997,385.406z"></path>
                                                                <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                                                    s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                                                    s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path>
                                                                </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-action">
                                                    <form action="http://themes.halothemes.com/cart/add" method="post" class="variants" data-product-id="" enctype="multipart/form-data">
                                                        <a class="button button-ATC is-notify-me text-center" href="#" data-btn-addtocart="">Notify me</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-card-information text-center">
                                                <div class="card-vendor uppercase">
                                                    <a href="#" title="Anna" tabindex="0">{{$p->name}}</a>
                                                </div>
                                               
                                                <div class="card-price">
                                                    <div class="price-item">
                                                        <span class="money">{{$p->prix}} TDN</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </section><!-- END: Block Products -->
            </div>
        </main>

        @include('incl.guest.footer')
        
        <div class="halo-toolbar-bottom-mobile" id="halo-toolbar-bottom-mobile">
            <div class="halo-toolbar-wrapper">
                <div class="halo-toolbar-item toolbar-item-link">
                    <a href="index.html" class="link">
                        <svg aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M573.48 219.91L310.6 8a35.85 35.85 0 0 0-45.19 0L2.53 219.91a6.71 6.71 0 0 0-1 9.5l14.2 17.5a6.82 6.82 0 0 0 9.6 1L64 216.72V496a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V216.82l38.8 31.29a6.83 6.83 0 0 0 9.6-1l14.19-17.5a7.14 7.14 0 0 0-1.11-9.7zM240 480V320h96v160zm240 0H368V304a16 16 0 0 0-16-16H224a16 16 0 0 0-16 16v176H96V190.92l187.71-151.4a6.63 6.63 0 0 1 8.4 0L480 191z"></path>
                        </svg>
                        <span class="label">Home</span>
                    </a>
                </div>
                <div class="halo-toolbar-item toolbar-item-action">
                    <a class="link mobileSearch-toggle" href="javascript:void(0)" data-mobile-search role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon icon-search" aria-hidden="true" focusable="false" role="presentation">
                            <path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path>
                        </svg>
                        <span class="label">Search</span>
                    </a>
                </div>
                <div class="halo-toolbar-item toolbar-item-link">
                    <a href="category-default.html" class="link">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384.97 384.97" aria-hidden="true" focusable="false" role="presentation" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                            <path d="M144.364,0H24.061C10.767,0,0,10.767,0,24.061v120.303c0,13.281,10.767,24.061,24.061,24.061h120.303    c13.293,0,24.061-10.779,24.061-24.061V24.061C168.424,10.767,157.657,0,144.364,0z M144.364,144.364H24.061V24.061h120.303    V144.364z"></path>
                            <path d="M360.909,0H240.606c-13.293,0-24.061,10.767-24.061,24.061v120.303c0,13.281,10.767,24.061,24.061,24.061h120.303    c13.281,0,24.061-10.779,24.061-24.061V24.061C384.97,10.767,374.191,0,360.909,0z M360.909,144.364H240.606V24.061h120.303    V144.364z"></path>
                            <path d="M360.909,216.545H240.606c-13.293,0-24.061,10.779-24.061,24.061v120.303c0,13.293,10.767,24.061,24.061,24.061h120.303    c13.281,0,24.061-10.767,24.061-24.061V240.606C384.97,227.313,374.191,216.545,360.909,216.545z M360.909,360.909H240.606    V240.606h120.303V360.909z"></path>
                            <path d="M144.364,216.545H24.061C10.767,216.545,0,227.325,0,240.606v120.303c0,13.293,10.767,24.061,24.061,24.061h120.303    c13.293,0,24.061-10.767,24.061-24.061V240.606C168.424,227.313,157.657,216.545,144.364,216.545z M144.364,360.909H24.061    V240.606h120.303V360.909z"></path>
                        </svg>
                    <span class="label">Collection</span></a>
                </div>
                <div class="halo-toolbar-item toolbar-item-action">
                    <a href="#" class="link" data-open-auth-sidebar role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" focusable="false" role="presentation" class="icon icon-account"><path d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 16 8 C 13.25 8 11 10.25 11 13 C 11 14.515625 11.707031 15.863281 12.78125 16.78125 C 10.53125 17.949219 9 20.300781 9 23 L 11 23 C 11 20.226563 13.226563 18 16 18 C 18.773438 18 21 20.226563 21 23 L 23 23 C 23 20.300781 21.46875 17.949219 19.21875 16.78125 C 20.292969 15.863281 21 14.515625 21 13 C 21 10.25 18.75 8 16 8 Z M 16 10 C 17.667969 10 19 11.332031 19 13 C 19 14.667969 17.667969 16 16 16 C 14.332031 16 13 14.667969 13 13 C 13 11.332031 14.332031 10 16 10 Z"></path></svg>
                        <span class="label">Account</span>                                
                    </a>
                </div>
                <div class="halo-toolbar-item toolbar-item-action">
                    <a href="javascript:void(0)" class="icon--cart link" data-open-cart-sidebar="">
                        <svg viewBox="0 0 30 30" class="icon icon-cart" enable-background="new 0 0 30 30"><g><g><path d="M20,6V5c0-2.761-2.239-5-5-5s-5,2.239-5,5v1H4v24h22V6H20z M12,5c0-1.657,1.343-3,3-3s3,1.343,3,3v1h-6V5z M24,28H6V8h4v3    h2V8h6v3h2V8h4V28z"></path></g></g></svg>
                        <span class="visually-hidden">Cart</span>
                        <span class="cart-count-bubble">
                            <span class="text-count" aria-hidden="true" data-cart-count="">3</span><span class="visually-hidden">3 items</span>
                        </span>
                        <span class="label">Cart</span> 
                    </a>
                </div>
            </div>
        </div><!-- END: Toolbar Bottm Mobile -->

        <div class="background-overlay"></div>
        <div class="background-overlay-popup"></div>

        <div class="halo-popup halo-recently-viewed-popup" id="halo-recently-viewed-popup" data-product-to-show="" data-expire-day="">
            <div class="halo-recently-viewed recently-viewed-list recently-viewed-tab" id="halo-recently-viewed-list">
                <div class="recently-viewed-content">
                    <h3 class="recently-viewed-title text-center">Recently Viewed</h3>
                    <div class="products-grid recently-viewed-product" id="recently-viewed-products-list">
                        <div class="no-products">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 455 455" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon icon-no-product" aria-hidden="true" focusable="false" role="presentation" xml:space="preserve">
                                <g>
                                    <path d="M360.967,130.599c-4.06-0.818-8.018,1.8-8.841,5.86c-0.823,4.06,1.801,8.018,5.86,8.841
                                                     c1.147,0.232,2.013,1.286,2.013,2.45v160c0,1.355-1.145,2.5-2.5,2.5H179.676c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5H357.5
                                                     c9.649,0,17.5-7.851,17.5-17.5v-160C375,139.46,369.099,132.247,360.967,130.599z"></path>
                                    <path d="M274.824,130.25H97.5c-9.649,0-17.5,7.851-17.5,17.5v160c0,8.063,5.48,15.046,13.326,16.982
                                                     c0.604,0.149,1.208,0.221,1.803,0.221c3.369,0,6.432-2.287,7.276-5.705c0.992-4.021-1.463-8.086-5.484-9.078
                                                     c-0.955-0.235-1.92-1.143-1.92-2.42v-160c0-1.355,1.145-2.5,2.5-2.5h177.324c4.142,0,7.5-3.357,7.5-7.5
                                                     S278.966,130.25,274.824,130.25z"></path>
                                    <path d="M235.363,170.798c-2.655-0.363-5.3-0.548-7.863-0.548c-31.706,0-57.5,25.794-57.5,57.5c0,2.563,0.185,5.209,0.548,7.863
                                                     c0.515,3.759,3.731,6.483,7.421,6.483c0.339,0,0.682-0.023,1.027-0.07c4.104-0.562,6.975-4.345,6.413-8.448
                                                     c-0.271-1.982-0.409-3.943-0.409-5.828c0-23.435,19.065-42.5,42.5-42.5c1.884,0,3.845,0.138,5.828,0.409
                                                     c4.108,0.564,7.886-2.309,8.448-6.413C242.338,175.143,239.467,171.359,235.363,170.798z"></path>
                                    <path d="M219.127,284.636c2.789,0.407,5.605,0.614,8.373,0.614c31.706,0,57.5-25.794,57.5-57.5c0-2.77-0.207-5.587-0.613-8.373
                                                     c-0.599-4.099-4.408-6.934-8.505-6.337c-4.099,0.599-6.936,4.406-6.337,8.505c0.303,2.071,0.456,4.158,0.456,6.205
                                                     c0,23.435-19.065,42.5-42.5,42.5c-2.044,0-4.132-0.153-6.205-0.456c-4.099-0.6-7.907,2.238-8.505,6.337
                                                     S215.028,284.037,219.127,284.636z"></path>
                                    <path d="M318.5,203.25c9.098,0,16.5-7.402,16.5-16.5c0-8.318-6.227-15.355-14.484-16.37c-2.293-0.277-4.585,0.509-6.218,2.142
                                                     l-10.027,10.027c-1.633,1.632-2.422,3.926-2.141,6.217C303.145,197.023,310.183,203.25,318.5,203.25z"></path>
                                    <path d="M117.5,114.75h30c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5h-30c-4.142,0-7.5,3.357-7.5,7.5
                                                     S113.358,114.75,117.5,114.75z"></path>
                                    <path d="M388.367,66.633C345.397,23.664,288.268,0,227.5,0S109.603,23.664,66.633,66.633C23.664,109.603,0,166.732,0,227.5
                                                     s23.664,117.897,66.633,160.867C109.603,431.336,166.732,455,227.5,455s117.897-23.664,160.867-66.633
                                                     C431.336,345.397,455,288.268,455,227.5S431.336,109.603,388.367,66.633z M15,227.5C15,110.327,110.327,15,227.5,15
                                                     c55.894,0,106.807,21.703,144.783,57.11L72.11,372.283C36.703,334.307,15,283.395,15,227.5z M227.5,440
                                                     c-55.894,0-106.807-21.703-144.783-57.11L382.89,82.717C418.297,120.693,440,171.606,440,227.5C440,344.673,344.673,440,227.5,440z
                                                     "></path>
                                </g>
                            </svg>
                            <span class="text text-center">Sorry, there are no products.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="halo-recently-viewed recently-viewed-share recently-viewed-tab" id="halo-recently-viewed-share">
                <div class="recently-viewed-content">
                    <h3 class="recently-viewed-title text-center">Social</h3>
                    <div class="media-grid recently-viewed-media text-center" id="recently-viewed-products-share">
                        <ul class="list-unstyled list-social-2 clearfix">
                            <li class="list-social__item">
                                <a href="#" class="link link--text list-social__link">
                                    <svg aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="icon icon-facebook"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
                                    <span class="visually-hidden">Facebook</span>
                                </a>
                                <div class="info list-social__info text-left">
                                    <a class="link link-underline" href="#">
                                        <span class="text">Facebook</span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-social__item">
                                <a href="#" class="link link--text list-social__link">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" aria-hidden="true" focusable="false" role="presentation" class="icon icon-instagram">
                                        <g>
                                            <path d="M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M256,152   c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M437,0H75C33.6,0,0,33.6,0,75v362   c0,41.4,33.6,75,75,75h362c41.4,0,75-33.6,75-75V75C512,33.6,478.4,0,437,0z M256,392c-74.399,0-135-60.601-135-135   c0-74.401,60.601-135,135-135s135,60.599,135,135C391,331.399,330.399,392,256,392z M421,122c-16.5,0-30-13.5-30-30s13.5-30,30-30   s30,13.5,30,30S437.5,122,421,122z M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z    M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M256,152c-57.9,0-105,47.1-105,105   s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z"></path>
                                        </g>
                                    </svg>
                                    <span class="visually-hidden">Instagram</span>
                                </a>
                                <div class="info list-social__info text-left">
                                    <a class="link link-underline" href="#">
                                        <span class="text">Instagram</span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-social__item">
                                <a href="#" class="link link--text list-social__link">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-pinterest" viewBox="0 0 17 18">
                                        <path d="M8.48.58a8.42 8.42 0 015.9 2.45 8.42 8.42 0 011.33 10.08 8.28 8.28 0 01-7.23 4.16 8.5 8.5 0 01-2.37-.32c.42-.68.7-1.29.85-1.8l.59-2.29c.14.28.41.52.8.73.4.2.8.31 1.24.31.87 0 1.65-.25 2.34-.75a4.87 4.87 0 001.6-2.05 7.3 7.3 0 00.56-2.93c0-1.3-.5-2.41-1.49-3.36a5.27 5.27 0 00-3.8-1.43c-.93 0-1.8.16-2.58.48A5.23 5.23 0 002.85 8.6c0 .75.14 1.41.43 1.98.28.56.7.96 1.27 1.2.1.04.19.04.26 0 .07-.03.12-.1.15-.2l.18-.68c.05-.15.02-.3-.11-.45a2.35 2.35 0 01-.57-1.63A3.96 3.96 0 018.6 4.8c1.09 0 1.94.3 2.54.89.61.6.92 1.37.92 2.32 0 .8-.11 1.54-.33 2.21a3.97 3.97 0 01-.93 1.62c-.4.4-.87.6-1.4.6-.43 0-.78-.15-1.06-.47-.27-.32-.36-.7-.26-1.13a111.14 111.14 0 01.47-1.6l.18-.73c.06-.26.09-.47.09-.65 0-.36-.1-.66-.28-.89-.2-.23-.47-.35-.83-.35-.45 0-.83.2-1.13.62-.3.41-.46.93-.46 1.56a4.1 4.1 0 00.18 1.15l.06.15c-.6 2.58-.95 4.1-1.08 4.54-.12.55-.16 1.2-.13 1.94a8.4 8.4 0 01-5-7.65c0-2.3.81-4.28 2.44-5.9A8.04 8.04 0 018.48.57z">
                                    </path></svg>
                                    <span class="visually-hidden">Pinterest</span>
                                </a>
                                <div class="info list-social__info text-left">
                                    <a class="link link-underline" href="#">
                                        <span class="text">Pinterest</span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-social__item">
                                <a href="#" class="link link--text list-social__link">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-hidden="true" focusable="false" class="icon icon-tiktok">
                                            <path d="m475.074 0h-438.148c-20.395 0-36.926 16.531-36.926 36.926v438.148c0 20.395 16.531 36.926 36.926 36.926h438.148c20.395 0 36.926-16.531 36.926-36.926v-438.148c0-20.395-16.531-36.926-36.926-36.926zm-90.827 195.959v34.613c-16.322.006-32.181-3.192-47.137-9.503-9.617-4.06-18.577-9.292-26.772-15.613l.246 106.542c-.103 23.991-9.594 46.532-26.772 63.51-13.98 13.82-31.695 22.609-50.895 25.453-4.512.668-9.103 1.011-13.746 1.011-20.553 0-40.067-6.659-56.029-18.943-3.004-2.313-5.876-4.82-8.612-7.521-18.617-18.4-28.217-43.34-26.601-69.575 1.234-19.971 9.229-39.017 22.558-53.945 17.635-19.754 42.306-30.719 68.684-30.719 4.643 0 9.234.348 13.746 1.017v12.798 35.601c-4.277-1.411-8.846-2.187-13.603-2.187-24.1 0-43.597 19.662-43.237 43.779.228 15.431 8.658 28.92 21.09 36.355 5.842 3.495 12.564 5.659 19.737 6.053 5.62.308 11.016-.474 16.013-2.124 17.218-5.688 29.639-21.861 29.639-40.935l.057-71.346v-130.252h47.668c.046 4.723.525 9.332 1.416 13.797 3.598 18.075 13.786 33.757 27.966 44.448 12.364 9.326 27.76 14.854 44.448 14.854.011 0 .148 0 .137-.011v12.843z"></path>
                                        </svg>
                                    <span class="visually-hidden">TikTok</span>
                                </a>
                                <div class="info list-social__info text-left">
                                    <a class="link link-underline" href="#">
                                        <span class="text">TikTok</span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-social__item">
                                <a href="#" class="link link--text list-social__link">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-youtube" viewBox="0 0 100 70">
                                            <path d="M98 11c2 7.7 2 24 2 24s0 16.3-2 24a12.5 12.5 0 01-9 9c-7.7 2-39 2-39 2s-31.3 0-39-2a12.5 12.5 0 01-9-9c-2-7.7-2-24-2-24s0-16.3 2-24c1.2-4.4 4.6-7.8 9-9 7.7-2 39-2 39-2s31.3 0 39 2c4.4 1.2 7.8 4.6 9 9zM40 50l26-15-26-15v30z">
                                        </path></svg>
                                    <span class="visually-hidden">YouTube</span>
                                </a>
                                <div class="info list-social__info text-left">
                                    <a class="link link-underline" href="#">
                                        <span class="text">YouTube</span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-social__item">
                                <a href="#" class="link link--text list-social__link">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter" viewBox="0 0 18 15">
                                            <path d="M17.64 2.6a7.33 7.33 0 01-1.75 1.82c0 .05 0 .13.02.23l.02.23a9.97 9.97 0 01-1.69 5.54c-.57.85-1.24 1.62-2.02 2.28a9.09 9.09 0 01-2.82 1.6 10.23 10.23 0 01-8.9-.98c.34.02.61.04.83.04 1.64 0 3.1-.5 4.38-1.5a3.6 3.6 0 01-3.3-2.45A2.91 2.91 0 004 9.35a3.47 3.47 0 01-2.02-1.21 3.37 3.37 0 01-.8-2.22v-.03c.46.24.98.37 1.58.4a3.45 3.45 0 01-1.54-2.9c0-.61.14-1.2.45-1.79a9.68 9.68 0 003.2 2.6 10 10 0 004.08 1.07 3 3 0 01-.13-.8c0-.97.34-1.8 1.03-2.48A3.45 3.45 0 0112.4.96a3.49 3.49 0 012.54 1.1c.8-.15 1.54-.44 2.23-.85a3.4 3.4 0 01-1.54 1.94c.74-.1 1.4-.28 2.01-.54z">
                                        </path></svg>
                                    <span class="visually-hidden">Twitter</span>
                                </a>
                                <div class="info list-social__info text-left">
                                    <a class="link link-underline" href="#">
                                        <span class="text">Twitter</span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-social__item mail-newsletter">
                                <a href="#" data-open-newsletter-popup class="link link--text list-social__link" role="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-mail">
                                            <path d="M 1 3 L 1 5 L 1 18 L 3 18 L 3 5 L 19 5 L 19 3 L 3 3 L 1 3 z M 5 7 L 5 7.1777344 L 14 12.875 L 23 7.125 L 23 7 L 5 7 z M 23 9.2832031 L 14 15 L 5 9.4160156 L 5 21 L 14 21 L 14 17 L 17 17 L 17 14 L 23 14 L 23 9.2832031 z M 19 16 L 19 19 L 16 19 L 16 21 L 19 21 L 19 24 L 21 24 L 21 21 L 24 21 L 24 19 L 21 19 L 21 16 L 19 16 z"></path>
                                        </svg>
                                    <span class="visually-hidden">Newsletter Sign-up</span>
                                </a>
                                <div class="info list-social__info text-left">
                                    <a class="link link-underline" href="#" data-open-newsletter-popup role="button">
                                        <span class="text">Newsletter Sign-up</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
         
        </div> <!-- END: Recently Viewed Popup -->

        <div class="halo-popup halo-quick-view-popup" data-quick-view-popup id="halo-quick-view-popup">
            <div class="halo-popup-wrapper">
                <div class="halo-popup-header customPopup-header">
                    <a href="javascript:void(0)" class="halo-popup-close customPopup-close clearfix" data-close-quickView-popup role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" aria-hidden="true" focusable="false" role="presentation">
                        <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                    </a>
                </div>
                <div class="halo-popup-content halo-productView custom-scrollbar productView-information">
                    <div class="halo-productView-left productView-images">
                        <div class="productView-images-wrapper">
                            <div class="card__badge badge-left">
                                <span class="badge sale-badge" aria-hidden="true">Sale</span>
                                <span class="badge custom-badge" aria-hidden="true">Must Have</span>
                            </div>
                            <div class="productView-nav" data-arrow="false">
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./assets/images/card-product/img-14.jpg" data-fancybox="gallery-qv" data-src="assets/images/card-product/img-14.jpg">
                                        <img src="assets/images/card-product/img-14.jpg" alt="Product Image">
                                    </div>
                                </div>
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./assets/images/card-product/img-13.jpg" data-fancybox="gallery-qv" data-src="assets/images/card-product/img-13.jpg">
                                        <img src="assets/images/card-product/img-13.jpg" alt="Product Image">
                                    </div>
                                </div>
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./assets/images/card-product/img-15.jpg" data-fancybox="gallery-qv" data-src="assets/images/card-product/img-15.jpg">
                                        <img src="assets/images/card-product/img-15.jpg" alt="Product Image">
                                    </div>
                                </div>
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./assets/images/card-product/img-16.jpg" data-fancybox="gallery-qv" data-src="assets/images/card-product/img-16.jpg">
                                        <img src="assets/images/card-product/img-16.jpg" alt="Product Image">
                                    </div>
                                </div>
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./assets/images/card-product/img-17.jpg" data-fancybox="gallery-qv" data-src="assets/images/card-product/img-17.jpg">
                                        <img src="assets/images/card-product/img-17.jpg" alt="Product Image">
                                    </div>
                                </div>
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./assets/images/card-product/img-18.jpg" data-fancybox="gallery-qv" data-src="assets/images/card-product/img-18.jpg">
                                        <img src="assets/images/card-product/img-18.jpg" alt="Product Image">
                                    </div>
                                </div>
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./assets/images/card-product/img-19.jpg" data-fancybox="gallery-qv" data-src="assets/images/card-product/img-19.jpg">
                                        <img src="assets/images/card-product/img-19.jpg" alt="Product Image">
                                    </div>
                                </div>
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./assets/images/card-product/img-20.jpg" data-fancybox="gallery-qv" data-src="assets/images/card-product/img-20.jpg">
                                        <img src="assets/images/card-product/img-20.jpg" alt="Product Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="productView-thumbnail-wrapper">
                            <div class="productView-for">
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="assets/images/card-product/img-14.jpg" alt="Product Image">
                                    </a>
                                </div>
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="assets/images/card-product/img-13.jpg" alt="Product Image">
                                    </a>
                                </div>
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="assets/images/card-product/img-15.jpg" alt="Product Image">
                                    </a>
                                </div>
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="assets/images/card-product/img-16.jpg" alt="Product Image">
                                    </a>
                                </div>
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="assets/images/card-product/img-17.jpg" alt="Product Image">
                                    </a>
                                </div>
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="assets/images/card-product/img-18.jpg" alt="Product Image">
                                    </a>
                                </div>
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="assets/images/card-product/img-19.jpg" alt="Product Image">
                                    </a>
                                </div>
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="assets/images/card-product/img-20.jpg" alt="Product Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="halo-productView-right productView-details">
                        <h2 class="productView-title">
                            <a href="http://themes.halothemes.com/products/loremous-saliduar-a-cosmopolito-2">
                                (Product 16) Sample - Clothing And Accessory Boutiques For Sale
                            </a>
                        </h2>
                        <div class="productView-meta">
                            <div class="productView-rating">
                                <span class="spr-badge"  data-rating="0.0">
                                    <span class="spr-starrating spr-badge-starrating">
                                        <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                        <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                        <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                        <i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i>
                                        <i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i>
                                    </span>
                                <span class="spr-badge-caption">2 reviews</span>
                                </span>
                            </div>
                            <div class="productView-soldProduct" data-sold-out-product="" data-item="3,5,6,7,8,10,12,15" data-hours="10,15,16,17,18,20,25,35">
                                <svg class="icon icon-fire-2" viewBox="0 0 384 512">
                                    <path d="M216 23.858c0-23.802-30.653-32.765-44.149-13.038C48 191.851 224 200 224 288c0 35.629-29.114 64.458-64.85 63.994C123.98 351.538 96 322.22 96 287.046v-85.51c0-21.703-26.471-32.225-41.432-16.504C27.801 213.158 0 261.332 0 320c0 105.869 86.131 192 192 192s192-86.131 192-192c0-170.29-168-193.003-168-296.142z"></path>
                                </svg>
                                <span class="text">
                                    <span data-sold-out-number="">15</span> sold in last
                                <span data-sold-out-hours="">15</span> hours
                                </span>
                            </div>
                        </div>
                        <div class="productView-info">
                            <div class="productView-info-item">
                                <span class="productView-info-name">Brand:</span>
                                <span class="productView-info-value"><a href="#" title="Dkny">DKNY</a></span>
                            </div>
                            <div class="productView-info-item" data-sku="">
                                <span class="productView-info-name">SKU:</span>
                                <span class="productView-info-value">W0690042</span>
                            </div>
                            <div class="productView-info-item" data-inventory="">
                                <span class="productView-info-name"> Availability:</span>
                                <span class="productView-info-value">100 In Stock</span>
                            </div>
                        </div>
                        <div class="productView-price card-price price__sale">
                            <div class="price-item price-item--regular">
                                <span class="money ">$86.00</span>
                            </div>
                            <div class="price-item price__last">
                                <span class="money ">$68.80</span>
                            </div>
                        </div>
                        <div class="productView-countDown" data-countdown="Dec 31, 2023 18:00:00">
                            <span class="num">226<span>Day</span></span>
                            <span class="num">3<span>Hrs</span></span>
                            <span class="num">27<span>Min</span></span>
                            <span class="num">2<span>Sec</span></span>
                        </div>
                        <div class="productView-variants halo-productOptions">
                            <div class="product-form__input product-form__swatch">
                                <label class="form__label">
                                    Color:
                                    <span data-header-option="">Pink</span>
                                </label >
                                <input class="product-form__radio" type="radio" checked id="option-661763149013840-qv-color-pink" name="option-qv-color" value="Pink">
                                <label class="product-form__label available" for="option-661763149013840-qv-color-pink">
                                    <span class="pattern" style="background-color: pink;"></span>
                                </label>
                                <input class="product-form__radio" type="radio" id="option-661763149013841-qv-color-blue" name="option-qv-color" value="Blue">
                                <label class="product-form__label available" for="option-661763149013841-qv-color-blue">
                                    <span class="pattern" style="background-color: #4b6cc0;"></span>
                                </label>
                                <input class="product-form__radio" type="radio" id="option-661763149013842-qv-color-green" name="option-qv-color" value="Green">
                                <label class="product-form__label available" for="option-661763149013842-qv-color-green">
                                    <span class="pattern" style="background-color: mediumseagreen;"></span>
                                </label>
                                <input class="product-form__radio" type="radio" id="option-661763149013843-qv-color-moccasin" name="option-qv-color" value="Moccasin">
                                <label class="product-form__label available" for="option-661763149013843-qv-color-moccasin">
                                    <span class="pattern" style="background-color: moccasin;"></span>
                                </label>
                            </div>
                            <div class="product-form__inputs">
                                <label class="form__label">
                                    Size:
                                    <span data-header-option="">XS</span>
                                </label >
                                <input class="product-form__radio" type="radio" checked id="option-66176314901232-qv-size-xs" name="option-qv-size" value="Xs" >
                                <label class="product-form__label available " for="option-66176314901232-qv-size-xs">
                                    <span class="text">XS</span>
                                </label>
                                <input class="product-form__radio" type="radio" id="option-66176314901233-qv-size-s" name="option-qv-size" value="S">
                                <label class="product-form__label soldout" for="option-66176314901233-qv-size-s">
                                    <span class="text">S</span>
                                </label>
                                <input class="product-form__radio" type="radio" id="option-66176314901234-qv-size-m" name="option-qv-size" value="M">
                                <label class="product-form__label available" for="option-66176314901234-qv-size-m">
                                    <span class="text">M</span>
                                </label>
                                <input class="product-form__radio" type="radio" id="option-66176314901235-qv-size-l" name="option-qv-size" value="L">
                                <label class="product-form__label available" for="option-66176314901235-qv-size-l">
                                    <span class="text">L</span>
                                </label>
                            </div>
                            <div class="product-form__input">
                                <label class="form__label">
                                    Material:
                                    <span data-header-option="">Option 1</span>
                                </label >
                                <input class="product-form__radio" type="radio" checked id="option-66176314901241-qv-material-option-1" name="option-qv-material" value="Option 1">
                                <label class="product-form__label available " for="option-66176314901241-qv-material-option-1">
                                    <span class="text">Option 1</span>
                                </label>
                                <input class="product-form__radio" type="radio" id="option-66176314901242-qv-material-option-2" name="option-qv-material" value="Option 2">
                                <label class="product-form__label available" for="option-66176314901242-qv-material-option-2">
                                    <span class="text">Option 2</span>
                                </label>
                                <input class="product-form__radio" type="radio" id="option-66176314901243-qv-material-option-3" name="option-qv-material" value="Option 3">
                                <label class="product-form__label available" for="option-66176314901243-qv-material-option-3">
                                    <span class="text">Option 3</span>
                                </label>
                            </div>
                        </div>
                        <div class="quantity_selector">
                            <label class="form-label quantity__label" >Quantity:</label>
                            <div class="previewCartItem-qty">
                                <label class="form-label hiddenLabel" for="upsell-update-395049013412749"></label>
                                <a href="#" data-minus-quantity-cart="" class="minus btn-quantity"></a>
                                <input class="form-input quantity" name="quantity" id="upsell-update-395049013412749" data-qtt-id1="quantity39504901341274" value="1" type="number" data-inventory-quantity="4" data-cart-quantity="" data-cart-quantity-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1">
                                <a href="#" data-plus-quantity-cart="" class="plus btn-quantity"></a>
                            </div>
                        </div>
                        <div class="productView-subtotal">
                            <span class="text">Subtotal: </span>
                            <span class="money">$286.00</span>
                        </div>
                        <div class="productView-perks ">
                            <div class="productView-sizeChart">
                                <a class="link link-underline" href="javascript:void(0)" data-open-size-chart-popup="">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="16" viewBox="0 0 25 16">
                                        <image width="25" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAQCAYAAADj5tSrAAAAWElEQVQ4jWNUVlaexsDAkMlAOzCdCdmCO3fuMFCbDTKfiYY+gINRS6hjiYqKClY2qWrwWkJNAMon/2ltyWjqGsSWMDIy0t6S//9pl8hAlkynmekgwMAwHQD5bhxCu6stFwAAAABJRU5ErkJggg=="></image>
                                    </svg>
                                    <span class="text">Size Guide</span>
                                </a>
                            </div>
                            <div class="productView-compareColor">
                                <a class="link link-underline" href="javascript:void(0)" aria-label="link" data-open-compare-color-popup="">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 18 18">
                                        <image width="18" height="18" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAD10lEQVQ4jU2UT2xUVRTGf+e+9+ZNB2aw08G2aCpVkVpIsEBU8D+IqSVEgahLNQYXxsjCrUtduSHRxBhcYNSFIhghEQiKJCImNrVUYAimaKAwbanQ6Uw7fTPvvXvMawvxJCc3uTf3y/m+c74j7xxYRzmq8VBbxM5HM5SrEfUwenFpxu9dnks9rKrtYARxS3bwfL+9WjkqGflOjWBKiqkrxOCyEEaS1B5r5X3E6avWY6wFY5J3F22ErfGNWo84vKnIUYT3EAZu/58/LI2YrWnDSd/RPlVhNlKmwxgQFIOWK1CL5n+49KrHz1i2IfMILhYyjtfVP+5+XjhLbseqkCtlQyXU8Voc/5jDGxRE7VSlh5hncU0bHshVslqRfaT1CYGiG6cCX2Xx3iZo+XowxhWlt6t+KJji3VgZvlW6qE3o36cZPuQa2+UaqE8+js1njmM3max/Y3PKTDze4k9xd9by6RlzYLRuX7grx7DqLZg5qKT+Sya0O5zruh8fpGkObEPssdkUy1t2RtbHcyZoXzR2PdcU7/7jmsM/NwV3QcG5SEAXLWRWd2uzjpFWJExoOi87Fzf+8MHFSt+dV6pPETiN/etbfv9icES5GQRsWxFAIgg+asro8WnMRQ/GZVomTJec9daaP13kbyflilNuq4YtVGc7uRR1D1wIt1CPUqRDh8NHCny0cR+PTZzEfDKK+cvDVj3I2IToGWIBB0hrwTUmgNwUpCPiap4rxa3gWag3uFyr8OXbb1Ca6OaRlR/T0XkZUwixjTRoDI6AFWiIuGTCMeqpApM5nGL7Wjt0B1oARiu8de4Qq1jGIE9zadDwZLiXgjvDChmDVNMacjG6OBlr/dfVUyv7Gcuspuwngj6vHSzrKv5SckbHmGIJVpS01mheNMmZ0v0UpmZ4IDfSptn8Vkox4imyJOo3eqH5W6Z9SAF52siwp7U0TH56BDsnwELTVFjs1fDSFnLskUywDHeB2nXnG6PNnCCvv9olkOTyoaGXmmZmDlalcG9inf/3PyP1zvHU0v39dt0rUEH8BqT0N5z4J5c8gb0hu8SxpzrOncuvLp6gKvntMe4GRzgGDCV2UjVrPCd6LufPtp+eeTAxOD1+cdLUw1047qw7N2gRF5qHR1/rHj751SzZbICPQ6OtldSryY6wKLWwg8gafAKanSqng+7plsbk68vdkfM4XmLr+R1gbHw4JPNMg8wxJaQJw9I5TytCgyBspx4VUIlISXTcs+GmGPM9Mm//2/souVAxAyi9gUY7OiXdl0bWB2irKzWJbW68Vr+nP+MOHImUgwnbZMHMBfAfct24toplOLEAAAAASUVORK5CYII="></image>
                                    </svg>
                                    <span class="text">Compare Color</span>
                                </a>
                            </div>
                            <div class="productView-askAnExpert">
                                <a class="link link-underline" href="javascript:void(0)" data-open-ask-an-expert=""><svg class="icon"  viewBox="0 0 512 512"> <path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z" class=""></path> </svg>
                                    <span class="text">Ask An Expert</span>
                                </a>
                            </div>
                        </div>
                        <div class="previewCartAction">
                            <div class="previewCartGroup">
                                <form method="post" action="http://themes.halothemes.com/cart/add" id="product-form-66176314454590138" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form">
                                    <div class="previewCartGroup-top">
                                        <div class="productView-action">
                                            <button type="submit" name="add" data-btn-addtocart="" class="button-view-cart text-centert button button-1">Add to cart</button>
                                        </div>
                                        <div class="productView-wishlist">
                                            <a data-wishlist="" href="#" data-wishlist-handle="(Product 16) Sample - Clothing And Accessory Boutiques For Sale" data-product-id="6617631490138">
                                                <span class="visually-hidden">Add to wishlist</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" focusable="false" role="presentation" class="icon icon-wishlist"><path d="M 9.5 5 C 5.363281 5 2 8.402344 2 12.5 C 2 13.929688 2.648438 15.167969 3.25 16.0625 C 3.851563 16.957031 4.46875 17.53125 4.46875 17.53125 L 15.28125 28.375 L 16 29.09375 L 16.71875 28.375 L 27.53125 17.53125 C 27.53125 17.53125 30 15.355469 30 12.5 C 30 8.402344 26.636719 5 22.5 5 C 19.066406 5 16.855469 7.066406 16 7.9375 C 15.144531 7.066406 12.933594 5 9.5 5 Z M 9.5 7 C 12.488281 7 15.25 9.90625 15.25 9.90625 L 16 10.75 L 16.75 9.90625 C 16.75 9.90625 19.511719 7 22.5 7 C 25.542969 7 28 9.496094 28 12.5 C 28 14.042969 26.125 16.125 26.125 16.125 L 16 26.25 L 5.875 16.125 C 5.875 16.125 5.390625 15.660156 4.90625 14.9375 C 4.421875 14.214844 4 13.273438 4 12.5 C 4 9.496094 6.457031 7 9.5 7 Z"></path></svg>
                                            </a>
                                        </div>
                                        <div class="productView-share">
                                            <div class="share-content">
                                                <button class="share-button button">
                                                    <svg class="icon" viewBox="0 0 227.216 227.216"> <path d="M175.897,141.476c-13.249,0-25.11,6.044-32.98,15.518l-51.194-29.066c1.592-4.48,2.467-9.297,2.467-14.317c0-5.019-0.875-9.836-2.467-14.316l51.19-29.073c7.869,9.477,19.732,15.523,32.982,15.523c23.634,0,42.862-19.235,42.862-42.879C218.759,19.229,199.531,0,175.897,0C152.26,0,133.03,19.229,133.03,42.865c0,5.02,0.874,9.838,2.467,14.319L84.304,86.258c-7.869-9.472-19.729-15.514-32.975-15.514c-23.64,0-42.873,19.229-42.873,42.866c0,23.636,19.233,42.865,42.873,42.865c13.246,0,25.105-6.042,32.974-15.513l51.194,29.067c-1.593,4.481-2.468,9.3-2.468,14.321c0,23.636,19.23,42.865,42.867,42.865c23.634,0,42.862-19.23,42.862-42.865C218.759,160.71,199.531,141.476,175.897,141.476z M175.897,15c15.363,0,27.862,12.5,27.862,27.865c0,15.373-12.499,27.879-27.862,27.879c-15.366,0-27.867-12.506-27.867-27.879C148.03,27.5,160.531,15,175.897,15z M51.33,141.476c-15.369,0-27.873-12.501-27.873-27.865c0-15.366,12.504-27.866,27.873-27.866c15.363,0,27.861,12.5,27.861,27.866C79.191,128.975,66.692,141.476,51.33,141.476z M175.897,212.216c-15.366,0-27.867-12.501-27.867-27.865c0-15.37,12.501-27.875,27.867-27.875c15.363,0,27.862,12.505,27.862,27.875C203.759,199.715,191.26,212.216,175.897,212.216z"></path> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> </svg>
                                                </button>
                                                <div class="share-button__fallback">
                                                    <a class="share-button__close" href="javascript:void(0)" title="Close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                                            <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                                                        </svg>
                                                    </a>
                                                    <label class="form-label">Copy link</label>
                                                    <div class="share-group">
                                                        <div class="form-field">
                                                            <input type="text" class="field__input" id="url" value="https://ko4dtz5389gx1c3c-8133050458.shopifypreview.com/products/naminos-dementus-a-dincidunto-6" placeholder="Link" data-url="https://ko4dtz5389gx1c3c-8133050458.shopifypreview.com/products/naminos-dementus-a-dincidunto-6">
                                                            <label class="field__label hiddenLabel" for="url">Link</label>
                                                            <label class="field__label hiddenLabel" for="url">Link</label>
                                                        </div>
                                                        <button class="button button-1 button-copy">
                                                            <svg class="icon icon-clipboard" width="11" height="13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z" fill="currentColor"></path>
                                                            </svg>
                                                            <span>Copy link</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="previewCartGroup-bottom">
                                        <div class="previewCartCheckbox global-checkbox">
                                            <input class="global-checkbox--input" type="checkbox" name="sidebar_cart_conditions_qv_2" id="sidebar_cart_conditions_qv_2" >
                                            <label class="global-checkbox--label form-label--checkbox" for="sidebar_cart_conditions_qv_2">I agree with the</label>
                                            <a href="javascript:void(0)" data-term-condition="">Terms Conditions</a>
                                        </div>
                                        <button class="button button-2 button-checkout"  disabled="disabled" >Checkout</button>
                                    </div>
                                </form>
                                <div class="productView-notifyMe halo-notifyMe" style="display: none;">
                                    <form class="notifyMe-form" method="post" action="http://themes.halothemes.com/cart/add">
                                        <input type="hidden" name="halo-notify-product-site" value="new-ella-demo">
                                        <input type="hidden" name="halo-notify-product-site-url" value>
                                        <input type="hidden" name="halo-notify-product-title" value="Loremour De Saliduar Cosmopolis">
                                        <input type="hidden" name="halo-notify-product-link" value>
                                        <input type="hidden" name="halo-notify-product-variant" value="Pink / XS / Option 1">
                                        <div class="form-field">
                                            <label class="form-label" for="halo-notify-email66176314901388">
                                                Leave your email and we will notify as soon as the product / variant is back in stock
                                            </label>
                                            <input class="form-input form-input-placeholder" type="email" name="email" required="" id="halo-notify-email66176314901388" placeholder="Insert your email">
                                            <button type="button" class="button button-1"  data-form-notify="">
                                                Subscribe
                                            </button>
                                        </div>
                                    </form>
                                    <div class="notifyMe-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="productView-more">
                            <div class="productView-ViewingProduct" data-customer-view="283, 100, 59, 11, 14, 185, 193, 165, 50, 38, 99, 112, 46, 10, 125, 200, 250, 18" data-customer-view-time="5">
                                <svg class="icon"  viewBox="0 0 511.626 511.626"> <g> <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"></path> </g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> </svg>
                                <span class="text">99 customers are viewing this product</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: Quick View Popup -->

       @include('inc.client.pop1')
       
        <!-- END: Quick Shop Popup -->

        <div class="halo-popup halo-notify-popup customPopup-small" data-notify-popup id="halo-notify-popup">
            <div class="halo-popup-wrapper">
                <div class="halo-popup-header customPopup-header">
                    <a href="javascript:void(0)" class="halo-popup-close customPopup-close clearfix" data-close-notify-popup="" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" aria-hidden="true" focusable="false" role="presentation">
                        <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                    </a>
                    <h3 class="halo-popup-title text-center">
                        Notify Me
                    </h3>
                </div>
                <div class="halo-popup-content custom-scrollbar">
                    <div class="halo-notifyMe halo-notifyMe--popup">
                        <form class="notifyMe-form" method="post" action="http://themes.halothemes.com/cart/add">
                            <input type="hidden" name="halo-notify-product-site" value="Halo - Shopify Theme">
                            <input type="hidden" name="halo-notify-product-site-url" value="">
                            <input type="hidden" name="halo-notify-product-title" value="">
                            <input type="hidden" name="halo-notify-product-link" value="">
                            <input type="hidden" name="halo-notify-product-variant" value="">
                            <div class="form-field">
                                <label class="form-label" for="halo-notify-email">Leave your email and we will notify as soon as the product / variant is back in stock</label>
                                <input class="form-input form-input-placeholder" type="email" name="email" required="" id="halo-notify-email" placeholder="Insert your email" aria-required="true">
                                <button type="button" class="button button-1" id="halo-btn-notify" data-form-notify="">Subscribe</button>
                            </div>
                        </form>
                        <div class="notifyMe-text" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div><!-- END: Notify Me Popup -->

        <div class="halo-popup halo-edit-cart-popup customPopup-large" data-edit-cart-popup="" id="halo-edit-cart-popup">
            <div class="halo-popup-wrapper">
                <div class="halo-popup-header customPopup-header">
                    <a href="javascript:void(0)" class="halo-popup-close customPopup-close clearfix" data-close-notify-popup="" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" aria-hidden="true" focusable="false" role="presentation">
                        <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                    </a>
                    <h3 class="halo-popup-title text-left">
                        Edit Option
                    </h3>
                </div>
                <div class="halo-popup-content halo-popup-scroll custom-scrollbar">
                    <div class="cart-edit" data-template-cart-edit="" data-count="1" data-cart-update-id="">
                        <div class="halo-product-block product-edit-item product-edit-itemFirst clearfix" data-cart-edit-id="" data-position="0">
                            <div class="product-edit-itemLeft">
                                <a class="product-edit-image" href="#">
                                    <img src="assets/images/card-product/img-9.jpg" alt="Halo Product">
                                </a>
                            </div>
                            <div class="product-edit-itemCenter">
                                <a href="#" class="product-edit-title link-underline">
                                    <span class="text">(Product 4) Sample - Clothing And Accessory Boutiques For Sale </span>
                                </a>
                                <span class="product-edit-title-variant" data-change-title="">Pink / Xs / Option 1</span>
                                <div class="card-price price__sale">
                                    <div class="price-item price-item--regular">
                                        <span class="money ">$86.00</span>
                                    </div>
                                    <div class="price-item price__last">
                                        <span class="money ">$68.80</span>
                                    </div>
                                </div>
                                <div class="product-quantity">
                                    <label  class="form__label">
                                        Quantity:
                                    </label>
                                    <div class="previewCartItem-qty">
                                        <label class="form-label hiddenLabel" for="upsell-update-395049013412747"></label>
                                        <a href="#" data-minus-quantity-cart="" class="minus btn-quantity"></a>
                                        <input class="form-input quantity" name="quantity" id="upsell-update-395049013412747" data-qtt-id1="quantity39504901341274" value="1" type="number" data-inventory-quantity="4" data-cart-quantity="" data-cart-quantity-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1">
                                        <a href="#" data-plus-quantity-cart="" class="plus btn-quantity"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-edit-itemRight">
                                <div class="product-edit-options halo-productOptions">
                                    <div class="productView-variants halo-productOptions">
                                        <div class="product-form__input product-form__swatch">
                                            <label class="form__label">
                                                Color:
                                                <span data-header-option="">Pink</span>
                                            </label>
                                            <input class="product-form__radio" type="radio" checked id="option-661763149013840-edit-color-pink" name="option-edit-color" value="Pink">
                                            <label class="product-form__label available" for="option-661763149013840-edit-color-pink">
                                                <span class="pattern" style="background-color: pink;"></span>
                                            </label>
                                            <input class="product-form__radio" type="radio" id="option-661763149013841-edit-color-blue" name="option-edit-color" value="Blue">
                                            <label class="product-form__label available" for="option-661763149013841-edit-color-blue">
                                                <span class="pattern" style="background-color: #4b6cc0;"></span>
                                            </label>
                                            <input class="product-form__radio" type="radio" id="option-661763149013842-edit-color-green" name="option-edit-color" value="Green">
                                            <label class="product-form__label available" for="option-661763149013842-edit-color-green">
                                                <span class="pattern" style="background-color: mediumseagreen;"></span>
                                            </label>
                                            <input class="product-form__radio" type="radio" id="option-661763149013843-edit-color-moccasin" name="option-edit-color" value="Moccasin">
                                            <label class="product-form__label available" for="option-661763149013843-edit-color-moccasin">
                                                <span class="pattern" style="background-color: moccasin;"></span>
                                            </label>
                                        </div>
                                        <div class="product-form__inputs">
                                            <label class="form__label">
                                                Size:
                                                <span data-header-option="">XS</span>
                                            </label>
                                            <input class="product-form__radio" type="radio" checked id="option-66176314901232-size-xs" name="option-size" value="Xs" >
                                            <label class="product-form__label available " for="option-66176314901232-size-xs">
                                                <span class="text">XS</span>
                                            </label>
                                            <input class="product-form__radio" type="radio" id="option-66176314901233-edit-size-s" name="option-edit-size" value="S">
                                            <label class="product-form__label" for="option-66176314901233-edit-size-s">
                                                <span class="text">S</span>
                                            </label>
                                            <input class="product-form__radio" type="radio" id="option-66176314901234-edit-size-m" name="option-edit-size" value="M">
                                            <label class="product-form__label available" for="option-66176314901234-edit-size-m">
                                                <span class="text">M</span>
                                            </label>
                                            <input class="product-form__radio" type="radio" id="option-66176314901235-edit-size-l" name="option-edit-size" value="L">
                                            <label class="product-form__label available" for="option-66176314901235-edit-size-l">
                                                <span class="text">L</span>
                                            </label>
                                        </div>
                                        <div class="product-form__input">
                                            <label class="form__label">
                                                Material:
                                                <span data-header-option="">Option 1</span>
                                            </label>
                                            <input class="product-form__radio" type="radio" checked id="option-66176314901241-edit-material-option-1" name="option-edit-material" value="Option 1">
                                            <label class="product-form__label available " for="option-66176314901241-edit-material-option-1">
                                                <span class="text">Option 1</span>
                                            </label>
                                            <input class="product-form__radio" type="radio" id="option-66176314901242-edit-material-option-2" name="option-edit-material" value="Option 2">
                                            <label class="product-form__label available" for="option-66176314901242-edit-material-option-2">
                                                <span class="text">Option 2</span>
                                            </label>
                                            <input class="product-form__radio" type="radio" id="option-66176314901243-edit-material-option-3" name="option-edit-material" value="Option 3">
                                            <label class="product-form__label available" for="option-66176314901243-edit-material-option-3">
                                                <span class="text">Option 3</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="add-more text-underline uppercase" data-edit-cart-add-more="">
                                <span class="text">Add More</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-edit-action">
                        <button data-update-cart-edit="" class="button button-1" id="add-all-to-cart">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- END: Quick Edit Card Popup -->

       
        <div class="halo-popup halo-size-chart-popup customPopup-large " data-size-chart-popup>
            <div class="halo-popup-wrapper">
                <div class="halo-popup-header customPopup-header">
                    <a href="javascript:void(0)" class="halo-popup-close customPopup-close clearfix" data-close-sizeChart-popup role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" aria-hidden="true" focusable="false" role="presentation">
                        <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                    </a>
                    <h3 class="halo-popup-title text-center">
                        Size Chart
                    </h3>
                </div>
                <div class="wrapper-content custom-scrollbar">
                    <div class="halo-size-chart text-center ">
                        <img src="assets/images/popup/size-chart.png" alt="Halo Newsletter">
                    </div>
                </div>
            </div>
        </div><!-- END: Size Chart Popup -->

        <div class="halo-popup halo-ask-an-expert-popup customPopup-large" data-ask-an-expert-popup id="halo-ask-an-expert-popup">
            <div class="halo-popup-wrapper">
                <div class="halo-popup-header customPopup-header">
                    <a href="javascript:void(0)" class="halo-popup-close customPopup-close clearfix" data-close-size-popup role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" aria-hidden="true" focusable="false" role="presentation">
                        <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                    </a>
                    <h3 class="halo-popup-title text-center">
                        Have Questions?
                    </h3>
                </div>
                <div class="wrapper-content custom-scrollbar">
                    <div class="ask-an-expert">
                        <h3 class="heading text-center">
                            Ask The Fashion Expert Anything On Ella
                        </h3>
                        <p class="text text-center">
                            We will follow up with you via email within 24-36 hours
                        </p>
                        <p class="intro text-center">
                            Please answer the following questionnaire
                        </p>
                        <form class="halo-ask-an-expert-form" method="post" action="http://themes.halothemes.com/cart/add">
                            <input type="hidden" name="halo-product-title" value="">
                            <input type="hidden" name="halo-product-image" value="">
                            <input type="hidden" name="halo-product-link" value="">
                            <div class="form-field">
                                <input class="form-input form-input-placeholder" type="text" required="" id="askAnExpertName" name="askAnExpertName" autocapitalize="words" placeholder="Your Name">
                            </div>
                            <div class="form-field">
                                <input class="form-input form-input-placeholder" type="email" name="askAnExpertMail" required="" id="askAnExpertMail"   autocapitalize="off" placeholder="Email Address">
                            </div>
                            <div class="form-field">
                                <input class="form-input form-input-placeholder" type="tel" required="" id="askAnExpertPhone" name="askAnExpertPhone" pattern="[0-9]*" placeholder="Phone Number">
                            </div>
                            <div class="form-field form-field-radio">
                                <label class="form-label">Do You Need</label>
                                <input class="form-radio" checked="" id="askAnExpertRadio1" type="radio" name="askAnExpertRadioFirst" value="Pricing">
                                <label class="form-label form-label--radio" for="askAnExpertRadio1">Pricing</label>
                                <input class="form-radio" id="askAnExpertRadio2" type="radio" name="askAnExpertRadioFirst" value="Answers">
                                <label class="form-label form-label--radio" for="askAnExpertRadio2">Answers</label>
                                <input class="form-radio" id="askAnExpertRadio3" type="radio" name="askAnExpertRadioFirst" value="Both">
                                <label class="form-label form-label--radio" for="askAnExpertRadio3">Both</label>
                            </div>
                            <div class="form-field form-field-textarea">
                                <label class="form-label" for="askAnExpertMessage">What can i help you with today?</label>
                                <textarea class="form-input form-input-placeholder" rows="6" name="askAnExpertMessag" id="askAnExpertMessage"></textarea>
                            </div>
                            <div class="form-field form-field-radio form-field-radio-2">
                                <label class="form-label">How would you like me to contact you?</label>
                                <input class="form-radio" checked="" id="askAnExpertRadio21" type="radio" name="askAnExpertRadioSecond" value="Phone">
                                <label class="form-label form-label--radio" for="askAnExpertRadio21">Phone</label>
                                <input class="form-radio" id="askAnExpertRadio22" type="radio" name="askAnExpertRadioSecond" value="Email">
                                <label class="form-label form-label--radio" for="askAnExpertRadio22">Email</label>
                                <input class="form-radio" id="askAnExpertRadio23" type="radio" name="askAnExpertRadioSecond" value="Both">
                                <label class="form-label form-label--radio" for="askAnExpertRadio23">Both</label>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="button button-1" id="halo-ask-an-expert-button">
                                    Send Question
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- END: Ask An Expert Popup -->

        <div class="halo-popup halo-compare-color-popup" data-compare-color-popup id="quickView-halo-compare-color-popup">
            <div class="halo-popup-wrapper">
                <div class="halo-popup-header customPopup-header">
                    <a href="javascript:void(0)" class="halo-popup-close customPopup-close clearfix" data-close-size-popup role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" aria-hidden="true" focusable="false" role="presentation">
                        <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                    </a>
                    <h3 class="halo-popup-title text-left">
                        Compare Color
                    </h3>
                </div>
                <div class="wrapper-content custom-scrollbar">
                    <div class="halo-compareColors">
                        <div class="halo-compareColors-swatch halo-productOptions">
                            <ul class="compareColors-list list-unstyled text-left">
                                <li class="item">
                                    <input class="swatch-compare-color-option" type="checkbox" name="quickView-swatch-compare-color-cadetblue" value="cadetblue" id="quickView-swatch-compare-color-cadetblue">
                                    <label class="swatch-compare-color-label" title="Pink" data-variant-img="./assets/images/card-product/img-14.jpg" for="quickView-swatch-compare-color-cadetblue">
                                    <span class="pattern" style="background-color: pink;"></span></label>
                                </li>
                                <li class="item">
                                    <input class="swatch-compare-color-option" type="checkbox" name="quickView-swatch-compare-color-blue" value="Blue" id="quickView-swatch-compare-color-blue">
                                    <label class="swatch-compare-color-label" title="Blue" data-variant-img="./assets/images/card-product/img-17.jpg" for="quickView-swatch-compare-color-blue">
                                    <span class="pattern" style="background-color: #4b6cc0;"></span></label>
                                </li>
                                <li class="item">
                                    <input class="swatch-compare-color-option" type="checkbox" name="quickView-swatch-compare-color-pink" value="pink" id="quickView-swatch-compare-color-pink">
                                    <label class="swatch-compare-color-label" title="Mediumseagreen" data-variant-img="./assets/images/card-product/img-19.jpg" for="quickView-swatch-compare-color-pink">
                                        <span class="pattern" style="background-color: mediumseagreen;"></span>
                                    </label>
                                </li>
                                <li class="item">
                                    <input class="swatch-compare-color-option" type="checkbox" name="quickView-swatch-compare-color-red" value="moccasin" id="quickView-swatch-compare-color-red">
                                    <label class="swatch-compare-color-label" title="Moccasin" data-variant-img="./assets/images/card-product/img-21.jpg" for="quickView-swatch-compare-color-red">
                                        <span class="pattern" style="background-color: moccasin;"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="halo-compareColors-image custom-scrollbar-x text-left clearfix" id="quickViewSortTableList">
                            <div class="row disable-scrollbar halo-row--swipe"></div>
                        </div>
                        <div class="halo-compareColors-text text-left">
                            Click On Color / Pattern To Compare, Click And Drag Images To Reorder
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: Compare Color Popup -->

        @include('incl.guest.login') 

        
        <!-- END: Card Sidebar -->

        <div class="halo-sidebar halo-sidebar-left halo-sidebar_search" data-search-sidebar id="halo-search-sidebar">
            <div class="halo-sidebar-header text-left">
                <span class="title">Search</span>
                <a href="#" class="halo-sidebar-close" data-close-search-sidebar="" title="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                </a>
            </div>
            <div class="halo-sidebar-wrapper header-search">
                <div class="header-search__form">
                    <form action="#" method="get" class="search-bar" role="search">
                        <input type="hidden" name="options[prefix]" value="last">
                        <input type="search" name="q" placeholder="Search" class="input-group-field header-search__input" aria-label="Search Site" autocomplete="off">
                        <button type="submit" class="button icon-search">
                            <svg data-icon="search" viewBox="0 0 512 512" width="100%" height="100%">
                            <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"></path>
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="quickSearchResultsWrap custom-scrollbar">
                    <div class="quickSearchResult">
                        <div class="search-block header-search__trending">
                            <h3 class="search-block-title text-left">
                                <span class="text">Trending Now</span>
                            </h3>
                            <ul class="list-item list-unstyled clearfix">
                                <li class="item">
                                    <a href="#" class="link">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path>
                                        </svg>
                                        <span class="text">dempus</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#" class="link">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path>
                                        </svg>
                                        <span class="text">sample</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#" class="link">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path>
                                        </svg>
                                        <span class="text">magnis</span>
                                    </a>
                                </li>

                                <li class="item">
                                    <a href="#" class="link">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path>
                                        </svg>
                                        <span class="text">loremous saliduar</span>
                                    </a>
                                </li>

                                <li class="item">
                                    <a href="#" class="link">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path>
                                        </svg>
                                        <span class="text">naminos</span>
                                    </a>
                                </li>

                                <li class="item">
                                    <a href="#" class="link">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path>
                                        </svg>
                                        <span class="text">dinterdum</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="search-block quickSearchProduct">
                            <h3 class="search-block-title text-left">
                                <span class="text">Popular Products</span>
                            </h3>
                            <div class="search-block-content halo-product-block">
                                <div class="row disable-scrollbar halo-row--swipe">
                                    <div class="halo-row-item product-item col-6 col-sm-4">
                                        <div class="product-card">
                                            <div class="product-card-top">
                                                <div class="product-card-media">
                                                    <a href="#" class="animate-scale image image-adapt" style="padding-bottom: 133.33333333333334%">
                                                        <img src="assets/images/card-product/img-14.jpg" alt="Halo Product">
                                                        <img src="assets/images/card-product/img-13.jpg" alt="Halo Product">
                                                    </a>
                                                    <div class="card-product__group group-right">
                                                        <div class="card-product__group-item card-wishlist">
                                                            <a class="card-icon wishlist-icon" href="#" data-wishlist="" data-wishlist-handle="naminos-dementus-a-dincidunto-1" data-product-id="6617631162458" tabindex="0">
                                                                <span class="visually-hidden">Add to wishlist</span>
                                                                <svg viewBox="0 0 512 512" class="icon icon-wishlist">
                                                                <g>
                                                                <g>
                                                                <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25
                                                                    c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25
                                                                    c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7
                                                                    c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574
                                                                    c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431
                                                                    c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351
                                                                    C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646
                                                                    c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245
                                                                    C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659
                                                                    c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66
                                                                    c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351
                                                                    C482,254.358,413.255,312.939,309.193,401.614z"></path>
                                                                </g>
                                                                </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="card-product__group-item card-quickview card-quickviewIcon">
                                                            <a class="card-icon quickview-icon" href="javascript:void(0)" data-product-id="" data-open-quick-view-popup="" data-product-handle="" tabindex="0">
                                                                <span class="visually-hidden">Quick View</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes">
                                                                    <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                                                        c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                                                        C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                                                        c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                                                        C447.361,287.923,358.746,385.406,255.997,385.406z"></path>
                                                                    <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                                                        s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                                                        s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path>
                                                                    </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-action">
                                                        <form action="http://themes.halothemes.com/cart/add" method="post" class="variants" data-product-id="" enctype="multipart/form-data">
                                                            <a class="button button-ATC text-center" href="javascript:void(0)" data-quickshop-popup="">Add To Cart</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-card-information text-center">
                                                    <div class="card-vendor uppercase">
                                                        <a href="#" title="Anna" tabindex="0">Sodling</a>
                                                    </div>
                                                    <a href="#" class="card-title link-underline card-title-ellipsis">
                                                        <span class="text">Naminos Dementus A Milance<span data-change-title> - Blue</span></span>
                                                    </a>
                                                    <div class="card-price">
                                                        <div class="price-item">
                                                            <span class="money">$86.00 - $99.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="halo-row-item product-item col-6 col-sm-4">
                                        <div class="product-card">
                                            <div class="product-card-top">
                                                <div class="product-card-media">
                                                    <a href="#" class="animate-scale image image-adapt" style="padding-bottom: 133.33333333333334%">
                                                        <img src="assets/images/card-product/img-15.jpg" alt="Halo Product">
                                                        <img src="assets/images/card-product/img-16.jpg" alt="Halo Product">
                                                    </a>
                                                    <div class="card-product__group group-right">
                                                        <div class="card-product__group-item card-wishlist">
                                                            <a class="card-icon wishlist-icon" href="#" data-wishlist="" data-wishlist-handle="naminos-dementus-a-dincidunto-1" data-product-id="6617631162458" tabindex="0">
                                                                <span class="visually-hidden">Add to wishlist</span>
                                                                <svg viewBox="0 0 512 512" class="icon icon-wishlist">
                                                                <g>
                                                                <g>
                                                                <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25
                                                                    c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25
                                                                    c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7
                                                                    c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574
                                                                    c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431
                                                                    c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351
                                                                    C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646
                                                                    c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245
                                                                    C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659
                                                                    c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66
                                                                    c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351
                                                                    C482,254.358,413.255,312.939,309.193,401.614z"></path>
                                                                </g>
                                                                </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="card-product__group-item card-quickview card-quickviewIcon">
                                                            <a class="card-icon quickview-icon" href="javascript:void(0)" data-product-id="" data-open-quick-view-popup="" data-product-handle="" tabindex="0">
                                                                <span class="visually-hidden">Quick View</span>
                                                                <span class="text">Quick View</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes">
                                                                    <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                                                        c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                                                        C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                                                        c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                                                        C447.361,287.923,358.746,385.406,255.997,385.406z"></path>
                                                                    <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                                                        s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                                                        s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path>
                                                                    </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-action">
                                                        <form action="http://themes.halothemes.com/cart/add" method="post" class="variants" data-product-id="" enctype="multipart/form-data">
                                                            <a class="button button-ATC text-center" href="javascript:void(0)" data-quickshop-popup="">Add To Cart</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-card-information text-center">
                                                    <div class="card-vendor uppercase">
                                                        <a href="#" title="Anna" tabindex="0">Tomorrow
                                                        </a>
                                                    </div>
                                                    <a href="#" class="card-title link-underline card-title-ellipsis">
                                                        <span class="text">Dinterdum Pretium Condimento<span data-change-title> - Green</span></span>
                                                    </a>
                                                    <div class="card-price price__sale">
                                                        <div class="price-item">
                                                            <span class="money">$139.00 - $189.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="halo-row-item product-item col-6 col-sm-4">
                                        <div class="product-card">
                                            <div class="product-card-top">
                                                <div class="card__badge badge-left">
                                                    <span class="badge sold-out-badge" aria-hidden="true">Sold out</span>
                                                </div>
                                                <div class="product-card-media">
                                                    <a href="#" class="animate-scale image image-adapt" style="padding-bottom: 133.33333333333334%">
                                                        <img src="assets/images/card-product/img-6.jpg" alt="Halo Product">
                                                        <img src="assets/images/card-product/img-5.jpg" alt="Halo Product">
                                                    </a>
                                                    <div class="card-product__group group-right">
                                                        <div class="card-product__group-item card-wishlist">
                                                            <a class="card-icon wishlist-icon" href="#" data-wishlist="" data-wishlist-handle="naminos-dementus-a-dincidunto-1" data-product-id="6617631162458" tabindex="0">
                                                                <span class="visually-hidden">Add to wishlist</span>
                                                                <svg viewBox="0 0 512 512" class="icon icon-wishlist">
                                                                <g>
                                                                <g>
                                                                <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25
                                                                    c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25
                                                                    c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7
                                                                    c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574
                                                                    c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431
                                                                    c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351
                                                                    C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646
                                                                    c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245
                                                                    C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659
                                                                    c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66
                                                                    c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351
                                                                    C482,254.358,413.255,312.939,309.193,401.614z"></path>
                                                                </g>
                                                                </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="card-product__group-item card-quickview card-quickviewIcon">
                                                            <a class="card-icon quickview-icon" href="javascript:void(0)" data-product-id="" data-open-quick-view-popup="" data-product-handle="" tabindex="0">
                                                                <span class="visually-hidden">Quick View</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes">
                                                                    <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                                                        c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                                                        C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                                                        c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                                                        C447.361,287.923,358.746,385.406,255.997,385.406z"></path>
                                                                    <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                                                        s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                                                        s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path>
                                                                    </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="card-action">
                                                        <form action="http://themes.halothemes.com/cart/add" method="post" class="variants" data-product-id="" enctype="multipart/form-data">
                                                            <a class="button button-ATC is-notify-me text-center" href="#" data-btn-addtocart="">Notify me</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card-bottom">
                                                <div class="product-card-information text-center">
                                                    <div class="card-vendor uppercase">
                                                        <a href="#" title="Anna" tabindex="0">Burberry</a>
                                                    </div>
                                                    <a href="#" class="card-title link-underline card-title-ellipsis">
                                                        <span class="text">Magnis Darturien Meros Laciniado<span data-change-title> - Black</span></span>
                                                    </a>
                                                    <div class="card-price">
                                                        <div class="price-item">
                                                            <span class="money">$89.00 - $139.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: Search Sidebar -->

         <div class="halo-sidebar halo-sidebar-left halo-sidebar_menu" data-menu-sidebar id="halo-menu-sidebar">
            <div class="halo-sidebar-header text-left">
                <span class="title">Menu</span>
                <a href="#" class="halo-sidebar-close" data-close-menu-sidebar="" title="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                </a>
            </div>
            <div class="halo-sidebar-wrapper custom-scrollbar">
                <div class="site-nav-mobile nav" data-navigation-mobile>
                    <ul class="list-menu list-menu--inline list-unstyled"  id="MenuMobileListSection-menu" data-heading="Menu">
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown">
                            <a href="#" class="menu-lv-1__action list-menu__item menu_mobile_link link focus-inset  menu-lv__flex">
                                <span class="custom-icon style-circle">
                                    <img src="assets/images/menu-mobile/lv-1.jpg" alt="Home">
                                </span>
                                <span class="text">Theme Demo</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret">
                                        <path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path>
                                    </svg>
                                </span>
                            </a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" >
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">Theme Demo</span>
                                        </span>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="index.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Go to Home</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="index.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Home 01 - Classic</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="index-2.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Home 02 - High Fashion</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="index-3.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Home 03 - Trendy style</span>
                                        </a>
                                    </li>    
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="index-4.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Home 04 - Health & Beauty</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="index-5.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Home 05 - Jewelry</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="index-6.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Home 06 - Shoes</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="index-7.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Home 07 - Automotive & Industrial</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="index-8.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Home 08 - Pet supplies</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="index-9.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Home 09 - Surfing</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="index-10.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Home 10 - Electronic & Computer</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown">
                            <a href="#" class="menu-lv-1__action list-menu__item menu_mobile_link link focus-inset  menu-lv__flex">
                                <span class="custom-icon style-circle">
                                    <img src="assets/images/menu-mobile/lv-1-2.jpg" alt="New In">
                                </span>
                                <span class="text">New In</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret">
                                        <path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path>
                                    </svg>
                                </span>
                            </a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" >
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">New In</span>
                                        </span>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="#" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Go to New In</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="#" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Top Rated</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="#" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Bags & Accessories</span>
                                        </a>
                                        <div class="menu-lv__dropdownmenu menu-lv__dropdownmenu-3">
                                            <ul class="menu-lv__grid grid-menu list-unstyled motion-reduce clearfix">
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-3-1.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Blazéro</span>
                                                    </a>
                                                </li>
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-3-2.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Congué</span>
                                                    </a>
                                                </li>
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-3-3.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Cosmopolis</span>
                                                    </a>
                                                </li>
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-3-4.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Scarvéro</span>
                                                    </a>
                                                </li>
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-3-5.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Glamos</span>
                                                    </a>
                                                </li>
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-3-6.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Valkyrio</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="#" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">New Brands</span>
                                        </a>
                                        <div class="menu-lv__dropdownmenu menu-lv__dropdownmenu-3">
                                            <ul class="menu-lv__grid grid-menu list-unstyled motion-reduce clearfix">
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-3-7.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Trends</span>
                                                    </a>
                                                </li>
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-3-8.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Activities</span>
                                                    </a>
                                                </li>
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-3-9.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Features</span>
                                                    </a>
                                                </li>
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-4-1.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Categories</span>
                                                    </a>
                                                </li>
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-4-2.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Types</span>
                                                    </a>
                                                </li>
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-4-3.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Vendor</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>    
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="#" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">New Collections</span>
                                        </a>
                                        <div class="menu-lv__dropdownmenu menu-lv__dropdownmenu-3">
                                            <ul class="menu-lv__grid grid-menu list-unstyled motion-reduce clearfix">
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-4-4.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Women</span>
                                                    </a>
                                                </li>
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-4-5.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Men's</span>
                                                    </a>
                                                </li>
                                                <li class="menu-lv-item menu-lv-3 text-center">
                                                    <a href="#" class="menu-lv-3__action grid-menu__item link focus-inset">
                                                        <span class="custom-image">
                                                            <img src="assets/images/menu-mobile/lv-4-6.png" alt="new-ella-demo">
                                                        </span>
                                                        <span class="text">Kids</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown">
                            <a href="#" class="menu-lv-1__action list-menu__item menu_mobile_link link focus-inset  menu-lv__flex">
                                <span class="custom-icon style-circle">
                                    <img src="assets/images/menu-mobile/lv-1-1.jpg" alt="Accessories">
                                </span>
                                <span class="text">Shop</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret">
                                        <path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path>
                                    </svg>
                                </span>
                            </a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" >
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">Shop</span>
                                        </span>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="collections-list.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Collection List Default</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="collections-list-2.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Collection List 02</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="collections-list-3.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Collection List 03</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="collections-list-fullwidth.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Collection List Full width</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="collections-list-masonry.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Collection List Masonry</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="category-default.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Category Default</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="category-full-width.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Category Full Width</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="category-mansory.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Category Masonry</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="category-right-sidebar.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Category Right Sidebar</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="category-width-banner.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Category Width Banner</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown">
                            <a href="#" class="menu-lv-1__action list-menu__item menu_mobile_link link focus-inset  menu-lv__flex">
                                <span class="custom-icon style-circle">
                                    <img src="assets/images/menu-mobile/lv-1-3.png" alt="Shop This Look">
                                </span>
                                <span class="text">Pages</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret">
                                        <path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path>
                                    </svg>
                                </span>
                            </a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" >
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">Pages</span>
                                        </span>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="wishlists.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="page-404.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">404</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="register-2.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Register</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="faqs.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Faqs</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="about-us.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">About Us 1</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="about-us-2.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">About Us 2</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="contact-us.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Contact Us 1</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="contact-us-2.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Contact Us 2</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="lookbook.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Lookbook 1</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="lookbook-2.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Lookbook 2</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="portfolio.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Portfolio 1</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left nav-all-mobile">
                                        <a href="portfolio-2.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset">
                                            <span class="text">Portfolio 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown">
                            <a href="#" class="menu-lv-1__action list-menu__item menu_mobile_link link focus-inset  menu-lv__flex">
                                <span class="custom-icon style-circle">
                                    <img src="assets/images/menu-mobile/lv-1-4.png" alt="Blog">
                                </span>
                                <span class="text">Blog</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret">
                                        <path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path>
                                    </svg>
                                </span>
                            </a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" >
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">Blog</span>
                                        </span>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="blog-default.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Blog Default Layout</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="blog-with-right-sidebar.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Blog With Right Sidebar</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="blog-layout-masonry.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Blog Masonry</span>
                                        </a>
                                    </li>    
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="blog-layout-full-width.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Blog Full-width</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="article.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Blog Post with Gallery</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="article-2.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Blog Post with Product Widget</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown">
                            <a href="#" class="menu-lv-1__action list-menu__item menu_mobile_link link focus-inset  menu-lv__flex">
                                <span class="custom-icon style-circle">
                                    <img src="assets/images/menu-mobile/lv-1-2.png" alt="Blog">
                                </span>
                                <span class="text">Products</span>
                                <span class="icon-dropdown" data-toggle-menu-mb>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret">
                                        <path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path>
                                    </svg>
                                </span>
                            </a>
                            <div class="menu-lv__dropdownmenu menu-dropdown">
                                <ul class="menu-lv__list list-menu list-unstyled motion-reduce" >
                                    <li class="menu-lv-item menu-lv-2 nav-title-mobile text-center">
                                        <span class="icon-dropdown">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="long-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-arrow-nav"><path fill="currentColor" d="M136.97 380.485l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113l83.928-83.444c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0l-116.485 116c-4.686 4.686-4.686 12.284 0 16.971l116.485 116c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg>
                                        </span>
                                        <span class="menu-lv-2__action link focus-inset">
                                            <span class="text">Products</span>
                                        </span>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="product-layout-default.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Layout 01 - Default</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="product-layout-full-width.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Layout 02 - Full Width</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="product-layout-image-gallery.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Layout 03 - Grid View</span>
                                        </a>
                                    </li>    
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="product-layout-left-vertical.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Layout 04 - Left Thumb</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="product-layout-right-vertical.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Layout 05 - Right Thumb</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="product-layout-left-sidebar.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Layout 06 - Left Sidebar</span>
                                        </a>
                                    </li>
                                    <li class="menu-lv-item menu-lv-2 text-left">
                                        <a href="product-layout-right-sidebar.html" class="menu-lv-2__action list-menu__item menu_mobile_link link focus-inset menu-lv__flex">
                                            <span class="text">Layout 07 - Right Sidebar</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu">
                            <a href="#" class="menu-lv-1__action list-menu__item menu_mobile_link link focus-inset  menu-lv__flex">
                                <span class="custom-icon style-circle">
                                    <img src="assets/images/menu-mobile/lv-1-5.png" alt="Buy Theme">
                                </span>
                                <span class="text">Buy Ella</span>
                            </a>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu">
                            <a href="wishlists.html" class="menu-lv-1__action list-menu__item menu_mobile_link link focus-inset  menu-lv__flex">
                                <span class="custom-icon style-circle">
                                    <img src="assets/images/menu-mobile/lv-1-6.png" alt="My Wish List">
                                </span>
                                <span class="text">My Wish List</span>
                            </a>
                        </li>
                        <li class="menu-lv-item menu-lv-1 text-left no-megamenu">
                            <a href="register-2.html" class="menu-lv-1__action list-menu__item menu_mobile_link link focus-inset  menu-lv__flex">
                                <span class="custom-icon style-circle">
                                    <img src="assets/images/menu-mobile/lv-1-7.png" alt="My Account">
                                </span>
                                <span class="text">My Account</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="site-nav-mobile nav-currency-language">
                    <div>
                        <form method="post" action="http://themes.halothemes.com/localization" id="HeaderLanguageForm-mb" accept-charset="UTF-8" class="div" enctype="multipart/form-data"><input type="hidden" name="form_type" value="localization"><input type="hidden" name="utf8" value="✓"><input type="hidden" name="_method" value="put"><input type="hidden" name="return_to" value="/">
                            <div class="no-js-hidden">
                            <div class="disclosure">
                                <p class="title" id="HeaderLanguageLabel">Language</p>
                                <ul id="HeaderLanguageList-mb"  class="disclosure__list list-unstyled custom-scrollbar">
                                    <li class="disclosure__item" tabindex="-1">
                                        <a class="link link--text disclosure__link  focus-inset" href="#" hreflang="de" lang="de" data-value="de">
                                            <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"  x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                                    <path style="fill:#FFDA44;" d="M15.923,345.043C52.094,442.527,145.929,512,256,512s203.906-69.473,240.077-166.957L256,322.783  L15.923,345.043z"></path>
                                    <path d="M256,0C145.929,0,52.094,69.472,15.923,166.957L256,189.217l240.077-22.261C459.906,69.472,366.071,0,256,0z"></path>
                                    <path style="fill:#D80027;" d="M15.923,166.957C5.633,194.69,0,224.686,0,256s5.633,61.31,15.923,89.043h480.155  C506.368,317.31,512,287.314,512,256s-5.632-61.31-15.923-89.043H15.923z"></path>
                                    </svg>
                                    </span>
                                            <span class="text">de</span>
                                        </a>
                                    </li>
                                    <li class="disclosure__item" tabindex="-1">
                                        <a class="link link--text disclosure__link  disclosure__link--active focus-inset" href="#" hreflang="en" lang="en" aria-current="true" data-value="en">
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"  x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                                                <circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"></circle>
                                                <g>
                                                <path style="fill:#0052B4;" d="M52.92,100.142c-20.109,26.163-35.272,56.318-44.101,89.077h133.178L52.92,100.142z"></path>
                                                <path style="fill:#0052B4;" d="M503.181,189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075,89.076H503.181z"></path>
                                                <path style="fill:#0052B4;" d="M8.819,322.784c8.83,32.758,23.993,62.913,44.101,89.075l89.074-89.075L8.819,322.784L8.819,322.784   z"></path>
                                                <path style="fill:#0052B4;" d="M411.858,52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177L411.858,52.921z"></path>
                                                <path style="fill:#0052B4;" d="M100.142,459.079c26.163,20.109,56.318,35.272,89.076,44.102V370.005L100.142,459.079z"></path>
                                                <path style="fill:#0052B4;" d="M189.217,8.819c-32.758,8.83-62.913,23.993-89.075,44.101l89.075,89.075V8.819z"></path>
                                                <path style="fill:#0052B4;" d="M322.783,503.181c32.758-8.83,62.913-23.993,89.075-44.101l-89.075-89.075V503.181z"></path>
                                                <path style="fill:#0052B4;" d="M370.005,322.784l89.075,89.076c20.108-26.162,35.272-56.318,44.101-89.076H370.005z"></path>
                                                </g>
                                                <g>
                                                <path style="fill:#D80027;" d="M509.833,222.609h-220.44h-0.001V2.167C278.461,0.744,267.317,0,256,0   c-11.319,0-22.461,0.744-33.391,2.167v220.44v0.001H2.167C0.744,233.539,0,244.683,0,256c0,11.319,0.744,22.461,2.167,33.391   h220.44h0.001v220.442C233.539,511.256,244.681,512,256,512c11.317,0,22.461-0.743,33.391-2.167v-220.44v-0.001h220.442   C511.256,278.461,512,267.319,512,256C512,244.683,511.256,233.539,509.833,222.609z"></path>
                                                <path style="fill:#D80027;" d="M322.783,322.784L322.783,322.784L437.019,437.02c5.254-5.252,10.266-10.743,15.048-16.435   l-97.802-97.802h-31.482V322.784z"></path>
                                                <path style="fill:#D80027;" d="M189.217,322.784h-0.002L74.98,437.019c5.252,5.254,10.743,10.266,16.435,15.048l97.802-97.804   V322.784z"></path>
                                                <path style="fill:#D80027;" d="M189.217,189.219v-0.002L74.981,74.98c-5.254,5.252-10.266,10.743-15.048,16.435l97.803,97.803   H189.217z"></path>
                                                <path style="fill:#D80027;" d="M322.783,189.219L322.783,189.219L437.02,74.981c-5.252-5.254-10.743-10.266-16.435-15.047   l-97.802,97.803V189.219z"></path> 
                                                </g></svg>
                                            </span>
                                            <span class="text">en</span>
                                        </a>
                                    </li>
                                </ul>
                                </div>
                                <input type="hidden" name="locale_code" value="en">
                            </div>
                        </form>
                    </div>
                    <div class="currency-menu" id="currencies-mobile">
                        <p class="title title-sidebar">Currency</p>
                        <div class="wrapper-currencies">
                            <a class="currency-item active " href="#" data-currency="USD">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"  x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                            <circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"></circle>
                            <g>
                            <path style="fill:#D80027;" d="M244.87,256H512c0-23.106-3.08-45.49-8.819-66.783H244.87V256z"></path>
                            <path style="fill:#D80027;" d="M244.87,122.435h229.556c-15.671-25.572-35.708-48.175-59.07-66.783H244.87V122.435z"></path>
                            <path style="fill:#D80027;" d="M256,512c60.249,0,115.626-20.824,159.356-55.652H96.644C140.374,491.176,195.751,512,256,512z"></path>
                            <path style="fill:#D80027;" d="M37.574,389.565h436.852c12.581-20.529,22.338-42.969,28.755-66.783H8.819   C15.236,346.596,24.993,369.036,37.574,389.565z"></path>
                            </g>
                            <path style="fill:#0052B4;" d="M118.584,39.978h23.329l-21.7,15.765l8.289,25.509l-21.699-15.765L85.104,81.252l7.16-22.037  C73.158,75.13,56.412,93.776,42.612,114.552h7.475l-13.813,10.035c-2.152,3.59-4.216,7.237-6.194,10.938l6.596,20.301l-12.306-8.941  c-3.059,6.481-5.857,13.108-8.372,19.873l7.267,22.368h26.822l-21.7,15.765l8.289,25.509l-21.699-15.765l-12.998,9.444  C0.678,234.537,0,245.189,0,256h256c0-141.384,0-158.052,0-256C205.428,0,158.285,14.67,118.584,39.978z M128.502,230.4  l-21.699-15.765L85.104,230.4l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822l-21.7,15.765L128.502,230.4z   M120.213,130.317l8.289,25.509l-21.699-15.765l-21.699,15.765l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822  L120.213,130.317z M220.328,230.4l-21.699-15.765L176.93,230.4l8.289-25.509l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822  l-21.7,15.765L220.328,230.4z M212.039,130.317l8.289,25.509l-21.699-15.765l-21.699,15.765l8.289-25.509l-21.7-15.765h26.822  l8.288-25.509l8.288,25.509h26.822L212.039,130.317z M212.039,55.743l8.289,25.509l-21.699-15.765L176.93,81.252l8.289-25.509  l-21.7-15.765h26.822l8.288-25.509l8.288,25.509h26.822L212.039,55.743z"></path>
                            </svg></span>
                                <span class="text">USD</span>
                            </a>
                            <a class="currency-item" href="#" data-currency="EUR">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"  x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                            <circle style="fill:#0052B4;" cx="256" cy="256" r="256"></circle>
                            <g>
                            <polygon style="fill:#FFDA44;" points="256.001,100.174 264.29,125.683 291.11,125.683 269.411,141.448 277.7,166.957    256.001,151.191 234.301,166.957 242.59,141.448 220.891,125.683 247.712,125.683  "></polygon>
                            <polygon style="fill:#FFDA44;" points="145.814,145.814 169.714,157.99 188.679,139.026 184.482,165.516 208.381,177.693    181.89,181.889 177.694,208.381 165.517,184.482 139.027,188.679 157.992,169.714  "></polygon>
                            <polygon style="fill:#FFDA44;" points="100.175,256 125.684,247.711 125.684,220.89 141.448,242.59 166.958,234.301 151.191,256    166.958,277.699 141.448,269.411 125.684,291.11 125.684,264.289  "></polygon>
                            <polygon style="fill:#FFDA44;" points="145.814,366.186 157.991,342.286 139.027,323.321 165.518,327.519 177.693,303.62    181.89,330.111 208.38,334.307 184.484,346.484 188.679,372.974 169.714,354.009  "></polygon>
                            <polygon style="fill:#FFDA44;" points="256.001,411.826 247.711,386.317 220.891,386.317 242.591,370.552 234.301,345.045    256.001,360.809 277.7,345.045 269.411,370.552 291.11,386.317 264.289,386.317  "></polygon>
                            <polygon style="fill:#FFDA44;" points="366.187,366.186 342.288,354.01 323.322,372.975 327.519,346.483 303.622,334.307    330.112,330.111 334.308,303.62 346.484,327.519 372.974,323.321 354.009,342.288  "></polygon>
                            <polygon style="fill:#FFDA44;" points="411.826,256 386.317,264.289 386.317,291.11 370.552,269.41 345.045,277.699 360.81,256    345.045,234.301 370.553,242.59 386.317,220.89 386.317,247.712  "></polygon>
                            <polygon style="fill:#FFDA44;" points="366.187,145.814 354.01,169.714 372.975,188.679 346.483,184.481 334.308,208.38    330.112,181.889 303.622,177.692 327.519,165.516 323.322,139.027 342.289,157.991  "></polygon>
                            </g>
                            </svg></span>
                                <span class="text">EUR</span>
                            </a>
                            <a class="currency-item" href="#" data-currency="GBP">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"  x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                            <circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"></circle>
                            <g>
                            <path style="fill:#0052B4;" d="M52.92,100.142c-20.109,26.163-35.272,56.318-44.101,89.077h133.178L52.92,100.142z"></path>
                            <path style="fill:#0052B4;" d="M503.181,189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075,89.076H503.181z"></path>
                            <path style="fill:#0052B4;" d="M8.819,322.784c8.83,32.758,23.993,62.913,44.101,89.075l89.074-89.075L8.819,322.784L8.819,322.784   z"></path>
                            <path style="fill:#0052B4;" d="M411.858,52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177L411.858,52.921z"></path>
                            <path style="fill:#0052B4;" d="M100.142,459.079c26.163,20.109,56.318,35.272,89.076,44.102V370.005L100.142,459.079z"></path>
                            <path style="fill:#0052B4;" d="M189.217,8.819c-32.758,8.83-62.913,23.993-89.075,44.101l89.075,89.075V8.819z"></path>
                            <path style="fill:#0052B4;" d="M322.783,503.181c32.758-8.83,62.913-23.993,89.075-44.101l-89.075-89.075V503.181z"></path>
                            <path style="fill:#0052B4;" d="M370.005,322.784l89.075,89.076c20.108-26.162,35.272-56.318,44.101-89.076H370.005z"></path>
                            </g>
                            <g>
                            <path style="fill:#D80027;" d="M509.833,222.609h-220.44h-0.001V2.167C278.461,0.744,267.317,0,256,0   c-11.319,0-22.461,0.744-33.391,2.167v220.44v0.001H2.167C0.744,233.539,0,244.683,0,256c0,11.319,0.744,22.461,2.167,33.391   h220.44h0.001v220.442C233.539,511.256,244.681,512,256,512c11.317,0,22.461-0.743,33.391-2.167v-220.44v-0.001h220.442   C511.256,278.461,512,267.319,512,256C512,244.683,511.256,233.539,509.833,222.609z"></path>
                            <path style="fill:#D80027;" d="M322.783,322.784L322.783,322.784L437.019,437.02c5.254-5.252,10.266-10.743,15.048-16.435   l-97.802-97.802h-31.482V322.784z"></path>
                            <path style="fill:#D80027;" d="M189.217,322.784h-0.002L74.98,437.019c5.252,5.254,10.743,10.266,16.435,15.048l97.802-97.804   V322.784z"></path>
                            <path style="fill:#D80027;" d="M189.217,189.219v-0.002L74.981,74.98c-5.254,5.252-10.266,10.743-15.048,16.435l97.803,97.803   H189.217z"></path>
                            <path style="fill:#D80027;" d="M322.783,189.219L322.783,189.219L437.02,74.981c-5.252-5.254-10.743-10.266-16.435-15.047   l-97.802,97.803V189.219z"></path> 
                            </g>
                            </svg></span>
                                <span class="text">GBP</span>
                            </a>
                            <a class="currency-item" href="#" data-currency="CHF">
                                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"  x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                            <circle style="fill:#D80027;" cx="256" cy="256" r="256"></circle>
                            <polygon style="fill:#F0F0F0;" points="389.565,211.479 300.522,211.479 300.522,122.435 211.478,122.435 211.478,211.479   122.435,211.479 122.435,300.522 211.478,300.522 211.478,389.565 300.522,389.565 300.522,300.522 389.565,300.522 "></polygon>
                            </svg></span>
                                <span class="text">CHF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: Menu Sidebar -->

        <div class="halo-sidebar halo-sidebar-right halo-leave-sidebar" id="halo-leave-sidebar" data-time="300000">
            <div class="wrapper-leave">
                <div class="header-leave">
                    <a href="#" class="img-box">
                        <img src="assets/images/ella-logo-black.png" alt="Ella Logo">
                    </a>
                    <a href="#" class="halo-sidebar-close" data-close-before-you-leave="" title="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg> 
                    </a>
                </div>
                <div class="halo-sidebar-wrapper custom-scrollbar">
                    <div class="wrapper-banner">
                        <a href="#" class="img-box">
                            <img src="assets/images/banners/sidebar/before-you_banner.png" alt="Before you leave banner">
                        </a>
                        <div class="content content-box--center content-box--absolute text-center">
                            <h3 class="title">Before you leave...</h3>
                            <p class="desc desc-1">Take 20% off your first order</p>
                            <h3 class="heading-1 uppercase">
                                <span class="text">20% off</span>
                            </h3>
                            <p class="desc desc-2">Enter the code below at checkout to get 20% off your first order</p>
                            <h3 class="heading-2 uppercase">codesale20</h3>
                            <a class="button button-2" href="#">
                                <span class="text">Continue Shopping</span>
                            </a>
                        </div>
                    </div>
                    <div class="wrapper-content">
                        <div class="content-title">
                            <h3 class="title">
                                <span class="text">
                                    Recommended
                                </span>
                                <span class="count">3</span>
                            </h3>
                        </div>
                        <div class="content-product">
                            <div class="halo-row-item product-item halo-row-item product-item-custom">
                                <div class="product-card">
                                    <div class="product-card-top">
                                        <a href="#" class="card-media img-box">
                                            <img src="assets/images/card-product/img-18.jpg" alt="Halo Product">
                                        </a>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-card-information text-left">
                                            <a href="#" class="card-title link-underline card-title-ellipsis">
                                                <span class="text">Dinterdum Pretium Condimento <span data-change-title> - Blue</span></span>
                                            </a>
                                            <div class="card-price price__sale">
                                                <div class="price-item price-item--regular">
                                                    <span class="money ">$140.00</span>
                                                </div>
                                                <div class="price-item price__last">
                                                    <span class="money ">$126.00</span>
                                                </div>
                                            </div>
                                           
                                            <a class="card-button text-underline" href="#" tabindex="0">
                                                <span class="text">Details</span>
                                            </a>
                                        </div>
                                    </div>  
                                </div>
                                <div class="product-card">
                                    <div class="product-card-top">
                                        <a href="#" class="card-media img-box">
                                            <img src="assets/images/card-product/img-10.jpg" alt="Halo Product">
                                        </a>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-card-information text-left">
                                            <a href="#" class="card-title link-underline card-title-ellipsis">
                                                <span class="text">Naminos Dementus A Milance<span data-change-title> - Green</span></span>
                                            </a>
                                            <div class="card-price price__sale">
                                                <div class="price-item price-item--regular">
                                                    <span class="money ">$189.00</span>
                                                </div>
                                                <div class="price-item price__last">
                                                    <span class="money ">$87.00</span>
                                                </div>
                                            </div>
                                            
                                            <a class="card-button text-underline" href="#" tabindex="0">
                                                <span class="text">Details</span>
                                            </a>
                                        </div>
                                    </div>  
                                </div>
                                <div class="product-card">
                                    <div class="product-card-top">
                                        <a href="#" class="card-media img-box">
                                            <img src="assets/images/card-product/img-8.jpg" alt="Halo Product">
                                        </a>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-card-information text-left">
                                            <a href="#" class="card-title link-underline card-title-ellipsis">
                                                <span class="text">Magnis Darturien Meros Laciniado<span data-change-title> - Black</span></span>
                                            </a>
                                            <div class="card-price price__sale">
                                                <div class="price-item price-item--regular">
                                                    <span class="money ">$139.00</span>
                                                </div>
                                                <div class="price-item price__last">
                                                    <span class="money ">$60.00</span>
                                                </div>
                                            </div>
                                            
                                            <a class="card-button text-underline" href="#" tabindex="0">
                                                <span class="text">Details</span>
                                            </a>
                                        </div>
                                    </div>  
                                </div>
                            </div>  
                        </div>
                        <div class="button-leave">
                            <a href="#" class="button button-1">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: Halo Leave Sidebar -->

       

       

        <div class="halo-popup halo-search-popup custom-scrollbar halo-popup-topDown">
            <div class="container container-1170">
                <div class="halo-popup-wrapper">
                    <div class="halo-popup-header">
                        <a href="javascript:void(0)" class="halo-popup-close clearfix" data-close-search-popup role="button">
                            <span class="visually-hidden">Close</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" aria-hidden="true" focusable="false" role="presentation">
                                <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="halo-popup-content header-search">
                        <div class="header-search__form">

                            <form action="/produit/search" method="POST" class="search-bar" >
                                @csrf
                                
                                <input type="search" name="mot_cle" placeholder="Search" class="input-group-field header-search__input" aria-label="Search Site" autocomplete="off">
                                <button type="submit" class="button icon-search">
                                    <svg data-icon="search" viewBox="0 0 512 512" width="100%" height="100%">
                                    <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div><!-- END: Search Popup -->

    </div><!-- End page wrapper -->
    <script src="{{asset('mainassets/lib/jquery/jquery.min.js')}}"></script>
    <!-- Plugins Jquery Cookie JS File -->
    <script src="{{asset('mainassets/lib/jquery.cookie/jquery.cookie.min.js')}}"></script>
    <!-- Plugins bootstrap JS File -->
    <script src="{{asset('mainassets/lib/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('mainassets/lib/bootstrap/popper.min.js')}}"></script>
    <!-- Plugins Slick Carouse JS File -->
    <script src="{{asset('mainassets/lib/slick-carouse/slick.min.js')}}"></script>
    <!-- Plugins fancybox JS File -->
    <script src="{{asset('mainassets/lib/fancybox/fancybox.umd.js')}}"></script>
    <!-- Plugins elevateZoom JS File -->
    <script src="{{asset('mainassets/lib/jquery.elevateZoom/jquery.elevateZoom.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('mainassets/assets/js/theme.min.js')}}"></script>
    <!-- Plugins masonry JS File -->
     <script src="{{asset('mainassets/lib/masonry/isotope-masonry.pkgd.min.js')}}"></script>
   <!-- Main JS File -->
   
  
   
</body>


<!-- Mirrored from themes.halothemes.com/html/ella-html-demo/category-mansory.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 22:27:01 GMT -->
</html>