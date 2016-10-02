<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">	
<title>HiRise Realty Co.</title>
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/reset.css')}}">
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/style.css')}}">
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/grid_12.css')}}">
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slider-2.css')}}">
<link rel='stylesheet' type='text/css' media='all' href="{{asset('css/slider-nivo.css')}}">
<!-- JavaScripts -->
        <script type="text/javascript">
            var yiw_prettyphoto_style = 'pp_default';
        </script>
        <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.tipsy.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.nivo.slider.pack.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/superfish.js')}}"></script><!-- menu -->
        <script type='text/javascript' src="{{asset('js/jquery.quicksand.js')}}"></script>
<!--[if lt IE 9]>
<script src="{{asset('js/html5.js')}}"></script>
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/ie.css')}}">
<![endif]-->
</head>
<body>
<div class="main">
  <!--==============================header=================================-->
  <header>
    <div>
      <h1><a href="index.html"><img src="{{asset('images/logo.jpg')}}" alt="" class="sitelogo"></a></h1>
      <div class="b_links">
           <ul>
           		<li><a href="{{Auth::check() ? url('/hr-home') : url('/')}}">{{Auth::check() ? Auth::user()->first_name : 'Account'}}</a></li>
           		<li>|</li>
           		<li><a href="{{Auth::check() ? url('/hr-home') : url('/')}}">{{Auth::check() ? 'In Command [ '.Session::get('admin_name').' ]' : 'Main'}}</a></li>
           		<li>|</li>
           		<li><a href="{{Auth::check() ? url('auth/logout') : url('auth/login')}}">{{Auth::check() ? 'Logout' : 'Login'}}</a></li>
           </ul>
      </div>
      <div id="slide">
      	  @if ($pagekey == 'home')
          		@include('shared.slider1')
          @else
          		@include('shared.slider2')
          @endif
      </div>  		
      <nav>
        <ul class="menu">
          <li <?php if($pagekey=='home') echo 'class="current"'; ?> ><a href="{{url('/')}}">Home</a></li>
          <li <?php if($pagekey=='about') echo 'class="current"'; ?> ><a href="{{url('/about')}}">About Us</a></li>
          <li <?php if($pagekey=='partners') echo 'class="current"'; ?> ><a href="{{url('/developer_partners')}}">Our Developer Partners</a></li>
          <li <?php if($pagekey=='gallery') echo 'class="current"'; ?> ><a href="{{url('/gallery')}}">Gallery</a></li>
          <li <?php if($pagekey=='contact') echo 'class="current"'; ?> ><a href="{{url('/contact')}}">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!--==============================content================================-->
  @yield('content')
  </div>				
	<script type="text/javascript">      
		        var     yiw_slider_type = 'nivo',
		                yiw_slider_nivo_fx = 'random',
		                yiw_slider_nivo_speed = 500,
		                yiw_slider_nivo_timeout = 5000,
		                yiw_slider_nivo_directionNav = true,
		                yiw_slider_nivo_directionNavHide = false,
		                yiw_slider_nivo_controlNav = false;
		    </script>
            <script type="text/javascript" src="{{asset('js/jquery.quicksand.js')}}"></script>
<!--==============================footer=================================-->
<footer>
  <div class="social-links">
      <a href="index.html"><div class="icon-facebook"></div></a>
      <a href="index.html"><div class="icon-twitter"></div></a>
      <a href="index.html"><div class="icon-youtube"></div></a>
      <a href="index.html"><div class="icon-googleplus"></div></a>
  </div>
  <p>© 2012 Real Estate Company</p>
  <p>A Website Template by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a></p>
  
</footer>
<script type="text/javascript" src="{{asset('js/jquery.custom.js')}}"></script>
</body>
</html>
