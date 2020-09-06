 <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

 <!-- header-start -->
 <header>
     <div class="header-area ">
         <div id="sticky-header" class="main-header-area white-bg">
             <div class="container-fluid p-0">
                 <div class="row align-items-center justify-content-between no-gutters">
                     <div class="col-xl-2 col-lg-2">
                         <div class="logo-img">
                             <a href="index.html">
                                 <!-- <img src="img/logo.svg" alt="" /> -->
                                 <img src="/img/logo.svg" width="140px" height="40px" />
                             </a>
                         </div>
                     </div>
                     <div class="col-xl-7 col-lg-7">
                         <div class="main-menu  d-none d-lg-block">
                             <nav>
                                 <ul id="navigation">
                                     <li><a class="active" href="/">{{ __('menu.home')}}</a></li>

                                     @foreach (\App\MenuItem::getTree(app()->getLocale()); as $item)
                                     <li>
                                         <a class="no-underline hover:underline p-3" href="{{$item->url()}}">
                                             {{ $item->name }}
                                         </a>
                                     </li>
                                     @endforeach
                                     
                                 </ul>
                             </nav>
                         </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                         <div class="get_in_tauch">
                             <a href="#" class="boxed-btn">GET IN TOUCH</a>
                         </div>
                     </div>
                     <div class="col-12">
                         <div class="mobile_menu d-block d-lg-none"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- header-end -->