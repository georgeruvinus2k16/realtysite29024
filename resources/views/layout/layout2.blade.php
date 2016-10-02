<?php
header("Expires: Sat, 05 Nov 2005 00:00:00 GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");		
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html>
    <!--<![endif]-->
    <head>
	    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Local</title>
        
        
        <!-- [favicon] begin -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}" />
        <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}" />
        <!-- [favicon] end -->
        
        
        <!-- CSS Main -->
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/memento-reset.css')}}" />
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/memento-style.css')}}" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 960px)" href="{{asset('css/lessthen960.css')}}" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="{{asset('css/lessthen600.css')}}" />
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/memento.css')}}"  />
        
        <!-- CSS Plugin -->
        <link rel="stylesheet" href="{{asset('css/prettyPhoto.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/tipsy.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/buttons.min.css')}}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{asset('css/wells.min.css')}}" type="text/css" media="all" />
        
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/home-default.css')}}" />
        

    
        <!-- JavaScripts -->
        <script type="text/javascript">
            var yiw_prettyphoto_style = 'pp_default';
        </script>
        <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.tipsy.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.tweetable.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/superfish.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/buttons.min.js')}}"></script>
        
    </head>
    <body class="no_js responsive boxed-layout chrome ">
        
        <!-- TOPBAR -->
        <div id="topbar">
            <div class="inner group">
                <div id="user_det">Welcome {{Auth::user()->first_name}}</div>
                <div class="topbar-left">
                   
                </div>
                
            </div>
        </div>
        <!-- END TOPBAR -->
        
        <!-- START WRAPPER -->
        <div class="wrapper group">
            <!-- START HEADER -->
            <div id="header" class="group">
                <div class="group inner">
                    
                    <!-- START LOGO -->
                    <div id="logo" class="group">
                        <h1>
                            <a class="logo-text" href="index.html" title="Mem&eacute;nto" style="font-style:italic;">Mu-X 3.0TD</a>                        
                        </h1>
                        <p></p>
                    </div>
                    <!-- END LOGO -->  
                    
                    <!-- START NAV -->
                    <div id="nav" class="group">
                        <ul id="menu-main-nav" class="level-1">
                            
                            <li>
                                <a href="{{url('/hr-home')}}"><i class="icon-home"></i>Home</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/hr-home')}}">Dashboard</a></li>
                                    <li><a href="{{url('/')}}">Home Page</a></li>
                                 </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-film"></i>The Community</a>
                                <ul class="sub-menu">
                                    <li><a href="slider-flash-slider.html">Newest List</a></li>
                                    <li><a href="slider-thumbnails-slider.html">Property Lists</a></li>
                                    <li><a href="slider-elastic-slider.html">Buyers List</a></li>
                                    <li><a href="slider-elegant-slider.html">Urgent For Sale</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-film"></i>My Profile</a>
                                <ul class="sub-menu">
                                    <li><a href="slider-flash-slider.html">Realtor Profile</a></li>
                                    <li><a href="slider-flash-slider.html">Personal Details</a></li>
                                    <li><a href="slider-thumbnails-slider.html">Career Details</a></li>
                                    <li><a href="slider-elastic-slider.html">Trainings</a></li>
                                    <li><a href="slider-elegant-slider.html">Account Options</a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="portfolio.html"><i class="icon-picture"></i> Portfolio</a>
                                <ul class="sub-menu">
                                    <li><a href="portfolio-3-columns.html">Operation</a></li>
                                    <li><a href="portfolio-3-columns.html">My Property List</a></li>
                                    <li><a href="portfolio-big-image.html">My Buyers List</a></li>
                                    <li><a href="portfolio-big-image.html">My Leads</a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="#"><i class="icon-file"></i>Archives</a>
                                <ul class="sub-menu">
                                    <li><a href="contact.html">Articles Posted</a></li>
                                    <li>
                                        <a href="#"><i class="icon-leaf"></i>Closed Transactions</a>
                                        <ul class="sub-menu">
                                            <li><a href="gallery-responsive.html">Personal</a></li>
                                            <li><a href="gallery-filterable.html">Shared</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html"><i class="icon-edit"></i>Deffered List</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('auth/logout')}}">Logout</a></li>
                            
                        </ul>
                    </div>
                    <!-- END NAV -->     
                </div>
            </div>
            <!-- END HEADER -->
        
			<div id="primary" class="layout-sidebar-right home-section">
			    <div class="inner group">
			        <!-- START CONTENT -->
			        @yield('content')
			        <!-- END CONTENT -->
			        <!-- START SIDEBAR -->
			        <div id="sidebar" class="group one-fourth last">
			             @yield('sidebar-widget1')
			             @yield('sidebar-widget2')
			             @yield('sidebar-widget3')
			            
			            
			        </div>
			        <!-- END SIDEBAR -->
			    </div>
			</div>
			<div class="clear"></div>
		</div>     
		<!-- END WRAPPER -->
        
        <div id="footer" class="sidebar-right">
            <div class="group inner footer_row_1 footer_cols_3">
               
            </div>
        </div>
        

        <!-- START FOOTER -->
        <div id="copyright" class="group">
            <div class="inner group">
                <div class="left">
                    <p>Special thanks and credit to Memento Themes!</p>
                </div>
                <div class="right">
                    
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{asset('js/jquery.custom.js')}}"></script>
        
		
    </body>
</html>