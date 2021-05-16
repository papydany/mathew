@inject('g','App\general')
<?php $c= $g->getContact(); ?>
<div class="header-wrapper">
  <div class="header-top-area bg-primary-color d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 header-top-left-part">
         <!-- <span class="address"><i class="webexflaticon flaticon-placeholder-1"></i> 121 King Street, Melbourne</span>-->
          <span class="phone"><i class="webexflaticon flaticon-send"></i>{{isset($c) ? $c->email : ''}}</span>
        </div>
        <div class="col-lg-6 header-top-right-part text-right">
          <ul class="social-links">
            <li><a href="{{isset($c) ? $c->facebook : '#'}}"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="{{isset($c) ? $c->twitter : '#'}}"><i class="fab fa-twitter"></i></a></li>
            <li><a href="{{isset($c) ? $c->lindlink : '#'}}"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="{{isset($c) ? $c->geogleplus : '#'}}"><i class="fab fa-google-plus-g"></i></a></li>
          </ul>
        
        </div>
      </div>
    </div>
  </div>
  <div class="header-middle">
    <div class="container">
      <div class="row">
        <div class="col-md-12 d-flex align-items-center justify-content-between">
          <a class="navbar-brand logo" href="{{url('/')}}">
            <img id="logo-image" class="img-center" src="images/logo.jpg" alt="">
          </a>
          <div class="topbar-info-area d-none d-sm-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center mr-3">
              <i class="webexflaticon flaticon-mail-1 text-primary-color"></i>
              <div>
                <h6>Email Us</h6>
                <a class="text-gray" href="mailto:contact@zoeconsultancy.com">{{isset($c) ? $c->email : ''}}</a>
              </div>
            </div>
            <div class="d-none d-md-flex align-items-center">
              <i class="webexflaticon flaticon-phone-1 text-primary-color"></i>
              <div>
                <h6>Call Us</h6>
                <a class="text-gray" href="tel:+2349095720967">{{isset($c) ? $c->phone : ''}}</a>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-navigation-area three-layers-header">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12">
         
          <div class="main-menu">
            <nav id="mobile-menu">
              <ul>
                <li>
                  <a href="{{url('/')}}">Home</a>
                
                </li>
                <li>
                  <a href="{{url('about')}}">About</a>
                  
                </li>
               
                <li>
                  <a href="{{url('service')}}">Services</a>
                  
                </li>
              
                <li>
                  <a href="{{url('contact')}}">Contact</a>
                  
                </li>
              </ul>
            </nav>
          </div>
        
          <div class="mobile-menu"></div>
        </div>
      </div>
    </div>
  </div>
</div>