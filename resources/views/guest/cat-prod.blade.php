
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.halothemes.com/html/ella-html-demo/collections-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 22:22:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prod by cat</title>
    <meta name="keywords" content="HTML5/CSS3 Template">
    <meta name="description" content="Ella - Bootstrap eCommerce Template">
    <meta name="author" content="halothemes">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('mainassets/assets/images/icons/favicon.png')}}">
    <!-- Plugins bootstrap CSS File -->
    <link rel="stylesheet" href="{{asset('mainassets/lib/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('mainassets/lib/bootstrap/bootstrap-grid.min.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('mainassets/assets/sass/style.css')}}">
    <link rel="stylesheet" href="{{asset('mainassets/assets/sass/collections/component-collection-list.css')}}">
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
    <link rel="stylesheet" href="{{asset('mainassets/assets/sass/base/header/header-6/header-6.css')}}">
</head>

<body class="template-collections-list skin-1">
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
            <div class="page collections-list">
                <div class="container container-1170">
                    <div class="halo-collection-content halo-grid-content">
                        <div class="page-header">
                            <nav class="breadcrumb text-left ">
                                <a class="link-underline" href="#">
                                    <span class="text">Home</span>
                                </a>
                                <span class="separate" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg>
                                </span>
                                <span class="bread-text">Collections</span>
                            </nav>
                            <h3 class="page-title text-left uppercase">
                                Collections
                            </h3>
                        </div>
                        <div class="list-categories list-categories-default">
                            <div class="row">

                                @foreach ($produits as $prod )
                               
                                    <div class="img-box animate-overlay">
                                        <a href="/produit/detaille/{{$prod->id}}" class="image image-adapt" style="padding-top: 50%" width="150">
                                            <img src="{{asset('uploads')}}/{{$prod->image}}" alt="Spotlight 1">
                
                                        </a>
                                         <div class="halo-row-item collection-list-item col-12 col-md-6 col-lg-4 "><div class="view-abs">
                                            <a href="#" class="view"></a>
                                        </div>
                                    </div>
                                    <div class="collections-wrapper text-center">
                                        <h3 class="collection-title">
                                            <a href="#" class="uppercase" title="Cosmopolis">
                                                
                                            </a>
                                        </h3>
                                        <span class="count uppercase">{{$prod->name}}</span>
                                        <span class="count uppercase">{{$prod->prix}}</span>
                                        <div class="desc">
                                            {{$prod->description}}
                                        </div>
                                        
                                    </div>
                                </div>  
                                @endforeach
                                
                               
                               
                            </div>
                            <div class="collection-infinite-scroll text-center">
                                <a class="button button-2" href="/produit/detaille/{{$prod->id}}">
                                    show more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- END: main -->

       
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

        @include('incl.guest.login') 

         
        <!-- END: Card Sidebar -->

       

      
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
                                        <label class="form-label hiddenLabel" for="upsell-update-395049013412746"></label>
                                        <a href="#" data-minus-quantity-cart="" class="minus btn-quantity"></a>
                                        <input class="form-input quantity" name="quantity" id="upsell-update-395049013412746" data-qtt-id1="quantity39504901341274" value="1" type="number" data-inventory-quantity="4" data-cart-quantity="" data-cart-quantity-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1">
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

        <div class="halo-popup halo-newsletter-popup customPopup-larger" data-newsletter-popup="" data-delay="6000" data-expire="1" id="halo-newsletter-popup">
            <div class="halo-popup-wrapper">
                <div class="halo-popup-header customPopup-header">
                    <a href="javascript:void(0)" class="halo-popup-close customPopup-close clearfix" data-close-newsletter-popup role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" aria-hidden="true" focusable="false" role="presentation">
                        <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                    </a>
                </div>
                <div class="wrapper-content">
                    <div class="halo-popup-banner">
                        <img src="{{asset('mainassets/assets/images/popup/newsletter-banner.png')}}" alt="Halo Newsletter">
                    </div>
                    <div class="halo-popup-content custom-scrollbar">
                        <div class="header-content">
                            <h3 class="newsletter-popup-title text-center uppercase">
                                Join Our Mailing List
                            </h3>
                            <p class="desc text-center">
                                Sign Up for exclusive updates, new arrivals & insider only discounts
                            </p>
                        </div>
                        <div class="footer-content text-center">
                            <div class="newsletter">
                                <form method="post" action="http://themes.halothemes.com/cart/add" id="ContactPopup" accept-charset="UTF-8" class="newsletter-form">
                                    <input type="hidden" name="form_type" value="customer">
                                    <input type="hidden" name="utf8" value="✓"><input type="hidden" name="contact[tags]" value="newsletter">
                                    <div class="newsletter-form__field-wrapper">
                                        <div class="form-field field">
                                            <input id="NewsletterForm--Popup" type="email" name="contact[email]" class="field__input form-input-placeholder" value="" aria-required="true"   autocapitalize="off" autocomplete="email" placeholder="enter your email address">
                                            <label class="field__label hiddenLabel" for="NewsletterForm--Popup">
                                            Your email
                                            </label>
                                        </div>
                                        <button type="submit" class="button button-1" name="commit" >
                                            Subscribe
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <ul class="list-unstyled list-social clearfix" >
                                <li class="list-social__item">
                                    <a href="#" class="link link--text list-social__link">
                                        <svg aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="icon icon-facebook"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
                                        <span class="visually-hidden">Facebook</span>
                                    </a>
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
                                </li>
                                <li class="list-social__item">
                                    <a href="#" class="link link--text list-social__link">
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-pinterest" viewBox="0 0 17 18">
                                            <path d="M8.48.58a8.42 8.42 0 015.9 2.45 8.42 8.42 0 011.33 10.08 8.28 8.28 0 01-7.23 4.16 8.5 8.5 0 01-2.37-.32c.42-.68.7-1.29.85-1.8l.59-2.29c.14.28.41.52.8.73.4.2.8.31 1.24.31.87 0 1.65-.25 2.34-.75a4.87 4.87 0 001.6-2.05 7.3 7.3 0 00.56-2.93c0-1.3-.5-2.41-1.49-3.36a5.27 5.27 0 00-3.8-1.43c-.93 0-1.8.16-2.58.48A5.23 5.23 0 002.85 8.6c0 .75.14 1.41.43 1.98.28.56.7.96 1.27 1.2.1.04.19.04.26 0 .07-.03.12-.1.15-.2l.18-.68c.05-.15.02-.3-.11-.45a2.35 2.35 0 01-.57-1.63A3.96 3.96 0 018.6 4.8c1.09 0 1.94.3 2.54.89.61.6.92 1.37.92 2.32 0 .8-.11 1.54-.33 2.21a3.97 3.97 0 01-.93 1.62c-.4.4-.87.6-1.4.6-.43 0-.78-.15-1.06-.47-.27-.32-.36-.7-.26-1.13a111.14 111.14 0 01.47-1.6l.18-.73c.06-.26.09-.47.09-.65 0-.36-.1-.66-.28-.89-.2-.23-.47-.35-.83-.35-.45 0-.83.2-1.13.62-.3.41-.46.93-.46 1.56a4.1 4.1 0 00.18 1.15l.06.15c-.6 2.58-.95 4.1-1.08 4.54-.12.55-.16 1.2-.13 1.94a8.4 8.4 0 01-5-7.65c0-2.3.81-4.28 2.44-5.9A8.04 8.04 0 018.48.57z">
                                            </path>
                                        </svg>
                                        <span class="visually-hidden">Pinterest</span>
                                    </a>
                                </li>
                                <li class="list-social__item">
                                    <a href="#" class="link link--text list-social__link">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-hidden="true" focusable="false" class="icon icon-tiktok">
                                            <path d="m475.074 0h-438.148c-20.395 0-36.926 16.531-36.926 36.926v438.148c0 20.395 16.531 36.926 36.926 36.926h438.148c20.395 0 36.926-16.531 36.926-36.926v-438.148c0-20.395-16.531-36.926-36.926-36.926zm-90.827 195.959v34.613c-16.322.006-32.181-3.192-47.137-9.503-9.617-4.06-18.577-9.292-26.772-15.613l.246 106.542c-.103 23.991-9.594 46.532-26.772 63.51-13.98 13.82-31.695 22.609-50.895 25.453-4.512.668-9.103 1.011-13.746 1.011-20.553 0-40.067-6.659-56.029-18.943-3.004-2.313-5.876-4.82-8.612-7.521-18.617-18.4-28.217-43.34-26.601-69.575 1.234-19.971 9.229-39.017 22.558-53.945 17.635-19.754 42.306-30.719 68.684-30.719 4.643 0 9.234.348 13.746 1.017v12.798 35.601c-4.277-1.411-8.846-2.187-13.603-2.187-24.1 0-43.597 19.662-43.237 43.779.228 15.431 8.658 28.92 21.09 36.355 5.842 3.495 12.564 5.659 19.737 6.053 5.62.308 11.016-.474 16.013-2.124 17.218-5.688 29.639-21.861 29.639-40.935l.057-71.346v-130.252h47.668c.046 4.723.525 9.332 1.416 13.797 3.598 18.075 13.786 33.757 27.966 44.448 12.364 9.326 27.76 14.854 44.448 14.854.011 0 .148 0 .137-.011v12.843z"></path>
                                        </svg>
                                        <span class="visually-hidden">TikTok</span>
                                    </a>
                                </li>
                                <li class="list-social__item">
                                    <a href="#" class="link link--text list-social__link">
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-youtube" viewBox="0 0 100 70">
                                            <path d="M98 11c2 7.7 2 24 2 24s0 16.3-2 24a12.5 12.5 0 01-9 9c-7.7 2-39 2-39 2s-31.3 0-39-2a12.5 12.5 0 01-9-9c-2-7.7-2-24-2-24s0-16.3 2-24c1.2-4.4 4.6-7.8 9-9 7.7-2 39-2 39-2s31.3 0 39 2c4.4 1.2 7.8 4.6 9 9zM40 50l26-15-26-15v30z">
                                            </path>
                                        </svg>
                                        <span class="visually-hidden">YouTube</span>
                                    </a>
                                </li>
                                <li class="list-social__item">
                                    <a href="#" class="link link--text list-social__link">
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter" viewBox="0 0 18 15">
                                            <path d="M17.64 2.6a7.33 7.33 0 01-1.75 1.82c0 .05 0 .13.02.23l.02.23a9.97 9.97 0 01-1.69 5.54c-.57.85-1.24 1.62-2.02 2.28a9.09 9.09 0 01-2.82 1.6 10.23 10.23 0 01-8.9-.98c.34.02.61.04.83.04 1.64 0 3.1-.5 4.38-1.5a3.6 3.6 0 01-3.3-2.45A2.91 2.91 0 004 9.35a3.47 3.47 0 01-2.02-1.21 3.37 3.37 0 01-.8-2.22v-.03c.46.24.98.37 1.58.4a3.45 3.45 0 01-1.54-2.9c0-.61.14-1.2.45-1.79a9.68 9.68 0 003.2 2.6 10 10 0 004.08 1.07 3 3 0 01-.13-.8c0-.97.34-1.8 1.03-2.48A3.45 3.45 0 0112.4.96a3.49 3.49 0 012.54 1.1c.8-.15 1.54-.44 2.23-.85a3.4 3.4 0 01-1.54 1.94c.74-.1 1.4-.28 2.01-.54z">
                                            </path>
                                        </svg>
                                        <span class="visually-hidden">Twitter</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="newsletter--checked text-center">
                                <input id="dismiss" type="checkbox" name="dismiss">
                                <label for="dismiss" class="form-label--checkbox text-underline">
                                    <span class="text">No, thanks</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: Newsletter Popup -->

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
    
    <!-- Plugins Jquery JS File -->
    <script src="{{asset('mainassets/lib/jquery/jquery.min.js')}}"></script>
    <!-- Plugins bootstrap JS File -->
    <script src="{{asset('mainassets/lib/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('mainassets/lib/bootstrap/popper.min.js')}}"></script>
    <!-- Plugins Slick Carouse JS File -->
    <script src="{{asset('mainassets/lib/slick-carouse/slick.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('mainassets/assets/js/theme.min.js')}}"></script>
</body>


<!-- Mirrored from themes.halothemes.com/html/ella-html-demo/collections-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 22:23:05 GMT -->
</html>