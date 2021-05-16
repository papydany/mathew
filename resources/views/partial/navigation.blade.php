<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >

            
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{url('/home')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('createAboutUs')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span>
                        <span class="pcoded-mtext">About Us</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('mission')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span>
                        <span class="pcoded-mtext">Mission</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{url('vission')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span>
                        <span class="pcoded-mtext">Vision</span></a>
                </li>               
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{url('createContact')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span>
                        <span class="pcoded-mtext">Contact</span></a>
                    </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Testimonial</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{url('testimonial')}}">Testimonial</a></li>
                        <li><a href="{{url('/viewTestimonial')}}">View Testimonials</a></li>
                      
                      
                      
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();
                    ">
                        <span class="pcoded-micon"><i class="feather icon-log-out m-r-5"></i></span>
                        <span class="pcoded-mtext">Logout</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </li>
            </ul>
                </div>
            </div>
            
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
    
        
            <div class="m-header">
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
                <a href="#!" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                   
                    <img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
                </a>
                <a href="#!" class="mob-toggler">
                    <i class="feather icon-more-vertical"></i>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                        <div class="search-bar">
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </li>
                </ul>
                

                                                                            
                
                
                
                
            </div>
                        
</header>
<!-- [ Header ] end -->


