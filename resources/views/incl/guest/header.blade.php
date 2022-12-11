<div class="header-wrapper">
    <div class="header-left header__logo text-left clearfix">
        <h1 class="header__heading">
            <a href="index-6.html" class="header__heading-link focus-inset">
                <img src="{{asset('mainassets/assets/images/banners/home/home-6/Logo-header.png')}}" alt="Ella - HTML Template">
            </a>
        </h1>
    </div>
    <div class="header-center header__nav text-center">
        <div class="main-menu">
            <div class="container container-1170">
                <div class="header-bottom--wrapper">
                    <nav class="header__inline-menu">
                        <ul class="list-menu list-menu--inline text-left" >
                            <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown">
                                <a href="/" class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link">
                                    <span class="text header__active-menu-item">Homme</span>
                                </a>
                            </li>
                            <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown">
                                <a href="#" class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link">
                                    <span class="text header__active-menu-item">catégories</span>
                                </a>
                               

                                <ul class="header__submenu list-menu list-menu--disclosure list-menu--disclosure-1 caption-large motion-reduce">
                                    @foreach($categories as $cat)
                                      <li class="menu-lv-item menu-lv-2 text-left  ">
                                        <a href="/produit/cat/{{$cat->id}}" class="menu-lv-2__action header__menu-item list-menu__item link link link-underline">
                                            <span class="text">{{$cat->name}}</span>
                                        </a>
                                      </li>
                                    @endforeach
                                </ul>
                                
                            </li>
                            <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown">
                                <a href="/guest/qsn" class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link">
                                    <span class="text header__active-menu-item">Qui somme nous?</span>
                                </a>
                                
                            </li> 
                            <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown">
                                <a href="/guest/contact" class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link">
                                    <span class="text header__active-menu-item">Contact</span>
                                </a>
                                
                            </li>    
                    </nav>
                </div>
            </div>
        </div>
    </div>

    
    <div class="header-right header-icon text-right">
        <div class="header__iconItem header__group">
            <a class="header__icon header__search" href="javascript:void(0)" data-open-search-popup aria-label="menu">
                <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M508.875,493.792L353.089,338.005c32.358-35.927,52.245-83.296,52.245-135.339C405.333,90.917,314.417,0,202.667,0
                                S0,90.917,0,202.667s90.917,202.667,202.667,202.667c52.043,0,99.411-19.887,135.339-52.245l155.786,155.786
                                c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125C513.042,504.708,513.042,497.958,508.875,493.792z
                                M202.667,384c-99.979,0-181.333-81.344-181.333-181.333S102.688,21.333,202.667,21.333S384,102.677,384,202.667
                                S302.646,384,202.667,384z"></path>
                        </g>
                    </g>
                </svg>
            </a>

            <a class="header__icon  header__link--account link-underline" id="customer_login_link" href="javascript:void(0)" data-open-auth-sidebar="">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon icon-account" viewBox="0 0 1024 1024" width="100%" height="100%"><title>user</title><path class="path1" d="M486.4 563.2c-155.275 0-281.6-126.325-281.6-281.6s126.325-281.6 281.6-281.6 281.6 126.325 281.6 281.6-126.325 281.6-281.6 281.6zM486.4 51.2c-127.043 0-230.4 103.357-230.4 230.4s103.357 230.4 230.4 230.4c127.042 0 230.4-103.357 230.4-230.4s-103.358-230.4-230.4-230.4z"></path><path class="path2" d="M896 1024h-819.2c-42.347 0-76.8-34.451-76.8-76.8 0-3.485 0.712-86.285 62.72-168.96 36.094-48.126 85.514-86.36 146.883-113.634 74.957-33.314 168.085-50.206 276.797-50.206 108.71 0 201.838 16.893 276.797 50.206 61.37 27.275 110.789 65.507 146.883 113.634 62.008 82.675 62.72 165.475 62.72 168.96 0 42.349-34.451 76.8-76.8 76.8zM486.4 665.6c-178.52 0-310.267 48.789-381 141.093-53.011 69.174-54.195 139.904-54.2 140.61 0 14.013 11.485 25.498 25.6 25.498h819.2c14.115 0 25.6-11.485 25.6-25.6-0.006-0.603-1.189-71.333-54.198-140.507-70.734-92.304-202.483-141.093-381.002-141.093z"></path></svg>
            </a>
            
           
            
            <a href="wishlists.html" class="header__icon header__icon--wishlist link link-underline focus-inset">
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
            <a href="javascript:void(0)" class="header__icon header__icon--cart link link-underline focus-inset" id="cart-icon-bubble" data-open-cart-sidebar>
                <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                    <path class="path1" d="M409.6 1024c-56.464 0-102.4-45.936-102.4-102.4s45.936-102.4 102.4-102.4S512 865.136 512 921.6 466.064 1024 409.6 1024zm0-153.6c-28.232 0-51.2 22.968-51.2 51.2s22.968 51.2 51.2 51.2 51.2-22.968 51.2-51.2-22.968-51.2-51.2-51.2z"></path>
                    <path class="path2" d="M768 1024c-56.464 0-102.4-45.936-102.4-102.4S711.536 819.2 768 819.2s102.4 45.936 102.4 102.4S824.464 1024 768 1024zm0-153.6c-28.232 0-51.2 22.968-51.2 51.2s22.968 51.2 51.2 51.2 51.2-22.968 51.2-51.2-22.968-51.2-51.2-51.2z"></path>
                    <path class="path3" d="M898.021 228.688C885.162 213.507 865.763 204.8 844.8 204.8H217.954l-5.085-30.506C206.149 133.979 168.871 102.4 128 102.4H76.8c-14.138 0-25.6 11.462-25.6 25.6s11.462 25.6 25.6 25.6H128c15.722 0 31.781 13.603 34.366 29.112l85.566 513.395C254.65 736.421 291.929 768 332.799 768h512c14.139 0 25.6-11.461 25.6-25.6s-11.461-25.6-25.6-25.6h-512c-15.722 0-31.781-13.603-34.366-29.11l-12.63-75.784 510.206-44.366c39.69-3.451 75.907-36.938 82.458-76.234l34.366-206.194c3.448-20.677-1.952-41.243-14.813-56.424zm-35.69 48.006l-34.366 206.194c-2.699 16.186-20.043 32.221-36.39 33.645l-514.214 44.714-50.874-305.246h618.314c5.968 0 10.995 2.054 14.155 5.782 3.157 3.73 4.357 9.024 3.376 14.912z"></path>
                </svg>
                <div class="cart-count-bubble">
                    <span class="text-count" aria-hidden="true" data-cart-count="">0</span><span class="visually-hidden">0 items</span>
                </div>
            </a>
            
        </div>
    </div>
    
</div>