
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.halothemes.com/html/ella-html-demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2022 22:30:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
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
    <link rel="stylesheet" href="{{asset('mainassets/assets/sass/pages/about-us.css')}}">
    </head>

<body class="template-page skin-1">
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

        @include('inc.client.panier')
        @include('incl.guest.footer')