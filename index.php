<?php
	require_once 'settings.php';
	require_once 'apiaccess.php';
	$apiaccessfunction = new apiaccessfunction();
	$apiaccessfunction->access_url = API_URL.'categories'.OAUTH_TOKEN_VARIABLE;
	$categories_data = $apiaccessfunction->apidategetfunction();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Event On</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "ur-b4964695-8b2f-20dd-2ced-c9f6141de24c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    </head>
<body>
<!--[if lt IE 7]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
<!-- Header -->
	<header class="header-container">
		<div class="header-top">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6">
	                    <ul class="login-details clearfix">
	                        <li><a href="#" class="agenticon">Agent Login</a></li>
	                        <li><a href="#" class="customericon">Customer Login</a></li>
	                        <li><a href="#" class="membericon">Not a Member?</a></li>
	                        <li><a href="#" class="pri-color">Register Now</a></li>
	                    </ul>
	                </div>
	                <div class="col-md-6">
	                    <div class="social-icon pull-right">
	                        <a href="#" class="facebook fa fa-facebook"></a>
	                        <a href="#" class="twitter fa fa-twitter"></a>
	                        <a href="#" class="googleplus fa fa-google-plus"></a>
	                        <a href="#" class="dribble fa fa-dribbble"> </a>
	                    </div>
	                </div>
	            </div> 
	        </div>     
	    </div>
    	<!-- Main Header  -->
    	<div class="main-header affix">
    	<!-- Moblie Nav Wrapper  -->
        	<div class="mobile-nav-wrapper">
            	<div class="container ">
            	<!-- logo  -->
               		<div id="logo">
						<a href="index.htm"><img src="img/logo.png" alt=""></a> 
					</div>
	                <div id="sb-search" class="sb-search">
	                    <form>
	                        <input class="sb-search-input" placeholder="Search" type="text" name="search" id="search">
	                        <input class="sb-search-submit" type="submit" value="">
	                        <span class="sb-icon-search"></span>
	                    </form>
	                </div>
            		<!-- moblie-menu-icon -->
	                <div class="mobile-menu-icon">
	                    <i class="fa fa-bars"></i>
	                </div> 
                	<!-- Nav --> 
	            	<nav class="main-nav mobile-menu">
	                    <ul class="clearfix">
	                    	<li class="parent active"><a href="index.html">Home</a>
	                            <!-- Sub memu -->
	                            <ul class="sub-menu">
	                                <li class="arrow"></li>
	                                 <li><a href="index1.html">Home-1</a></li>
	                                <li><a href="index-2.html">Home-2</a></li>                                
	                                <li><a href="index-3.html">Home-3</a></li>
	                                <li><a href="index-4.html">Home-4</a></li>
	                                <li><a href="index-5.html">Home-5</a></li>
	                                <li><a href="index-6.html">Home-6</a></li>
	                            </ul>
	                        </li>
	                        <li class="parent"><a href="#">Events</a>
	                            <!-- Sub memu -->
	                            <ul class="sub-menu">
	                                <li class="arrow"></li>
	                                <li><a href="event.html">Event</a></li>
	                                <li><a href="event-sidebar-left.html">Event-Sidebar-Left</a></li>
	                                <li><a href="event-sidebar-right.html">Event-Sidebar-Right</a></li>
	                                <li><a href="event-detail.html">Event Detail</a></li>
	                            </ul>
	                        </li>
	
	                        <li><a href="#">Directions</a></li>
	                        <li><a href="event-tv.html">Events TV</a></li>
	                        <li class="parent"><a href="event-blog.html">Blog</a>
	                            <!-- Sub memu -->
	                            <ul class="sub-menu">
	                                <li class="arrow"></li>
	                                <li><a href="event-blog.html">Event Blog</a></li>
	                                <li><a href="event-single-blog.html">Event Single-Blog</a></li>
	                            </ul>
	                        </li>
	                        <li><a href="gallery.html">Gallery</a></li>
	                        <li><a href="contact.html">Contact</a></li>
	                    </ul>
	                </nav>
            	</div>
        	</div>
    	</div>
	</header> <!-- header -->  
	<!-- Banner -->
	<div class="banner">
	    <div class="container">
	        <div class="center">
	            <h1 class="title">Get Ready for The Next Event. Its Begining!</h1>
	            <p>Etiam tristique ornare massa. Suspendisse in porta mauris. Phasellus quis libero eget diam tincidunt ornare. Suspendisse et libero urna. Cras auctor cursus purus, eget fringilla tellus dictum tempus. Ut gravida laoreet tincidunt. </p>
	            <!-- Clock -->
	            <div class="clock clearfix">
	                <div class="clock-item clock-days ">
	                    <div class="wrap">
	                        <div class="inner">
	                            <div id="canvas-days" class="clock-canvas"></div>
	
	                            <div class="clock-content">
	                                <p class="val">0</p>
	                                <p class="typ type-days">DAYS</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="clock-item clock-hours ">
	                    <div class="wrap">
	                        <div class="inner">
	                            <div id="canvas-hours" class="clock-canvas"></div>
	
	                            <div class="clock-content">
	                                <p class="val">0</p>
	                                <p class="typ type-hours ">HOURS</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="clock-item clock-minutes ">
	                    <div class="wrap">
	                        <div class="inner">
	                            <div id="canvas-minutes" class="clock-canvas"></div>
	
	                            <div class="clock-content">
	                                <p class="val">0</p>
	                                <p class="typ type-minutes">MINUTES</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="clock-item clock-seconds ">
	                    <div class="wrap">
	                        <div class="inner">
	                            <div id="canvas-seconds" class="clock-canvas"></div>
	
	                            <div class="clock-content">
	                                <p class="val">0</p>
	                                <p class="typ type-seconds">SECONDS</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>     
	    </div>
	</div>
	<!-- Event Form -->
	<section class="eventform newsection">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-3">
	                <small>Find what you want</small>
	                <h2 class="title">event or conference</h2>
	            </div>
	
	            <div class="col-md-9 eventform-con">
	                <form>
	                    <div class="form-input search-location">
	                        <input type="text" value="" placeholder="Select Location">
	                        <i class="icon icon-s fa fa-search"></i>
	                        <button class="icon fa fa-globe"></button>
	                    </div>
	
	                    <div class="form-input">
	                        <input placeholder="mm/dd/yy" class="date_timepicker_start">
	                        <button type="button"  value="open" class="open icon fa fa-calendar"></button>
	                    </div>
	
	                    <div class="form-input">
	                        <div class="styled-select">
	                            <select>
	                                <option>Select Fields</option>
	                                <option>The second option</option>
	                            </select>
	                        </div>
	                    </div>
	
	                    <div class="form-input ">
	                        <button class="btn btn-pri ">fınd event</button>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</section>
	<!--  Events -->
	<section class="events newsection">
	    <div class="container">
	
	        <!-- Tabs memu -->
	        <div class="tabs">
	            <ul class="clearfix">
	                <li><a href="#tabs-1">Categories</a></li>
	            </ul>
				
	            <!--  Tabs-1 -->
	            <div id="tabs-1">
	                <div class="event-container">
	                    <div class="row">
	                    	<?php 
	                    	foreach ($categories_data['categories'] as $key => $value) {
	                    	?>
	                        <div class="col-md-3">
	                            <div class="event">
	                                <div class="eventsimg">
	                                   <a href="event.php?search=true&category_id=<?php echo $value['id'] ?>"><img src="img/515x390.gif" alt=""></a>
	                                </div>
	                                <div class="event-content">
	                                    <h3 class="title"><?php echo $value['name'] ; ?></h3>
	                                    <a href="subcategory.php?id=<?php echo $value['id'] ?>" class="btn btn-pri">Go</a>
	                                </div>
	                            </div>
	                        </div>
	                        <?php
	                        }
	                        ?>
	                    </div><!-- row -->
	                </div>
	            </div>
	        </div>
	    </div>  
	</section>
	<!-- Footer -->
	<footer class="main-footer">
    	<div class="container">
        	<div class="row">	
            	<div class="widget col-md-3">
	                <div class="about">
	                    <h2 class="title">About <span class="border"></span></h2>
	                    <p>Vivamus ante nulla, ultrices ut molestie pellentesque, posuere eu ligula. In porttitor in turpis eu porttitor. </p> 
	                </div>
                	<ul class="fa-ul">
                    	<li><i class="fa-li fa fa-map-marker"></i>1600 Pennsylvania Ave NW,
                        Washington, D.C., DC 20500, ABD</li>
                        <li> <i class="fa-li fa fa-phone fa-flip-horizontal"></i>+90 555 55 55</li>
                        <li><i class="fa-li fa fa-envelope-o "></i><a href="#">info@example.com</a></li>
                    </ul>           
                </div>
                <div class="widget col-md-3">
                    <h2 class="title">Recent Blog Posts<span class="border"></span></h2>
                    <div class="recent-blog">
                        <div class="recent-img">
                           <img src="img/70x70.gif" alt="">
                        </div>
                        <div class="recent-content">
                            <h3 class="title"><a href="#"> Lorem ipsum dolor sit amet consectetur. </a> </h3>
                            <p class="date"><i class="icon fa fa-calendar"></i>October 24th, 2013</p>
                            <p class="comment"><i class="icon fa fa-comment"></i><a href="#">23 Comments</a></p>
                        </div>
                    </div>
                    <div class="recent-blog">
                        <div class="recent-img">
                           <img src="img/70x70.gif" alt="">
                        </div>
                        <div class="recent-content">
                            <h3 class="title"><a href="#"> Lorem ipsum dolor sit amet consectetur. </a> </h3>
                            <p class="date"><i class="icon fa fa-calendar"></i>October 24th, 2013</p>
                            <p class="comment"><i class="icon fa fa-comment"></i><a href="#">23 Comments</a></p>
                        </div>
                    </div>
                    <div class="recent-blog">
                        <div class="recent-img">
                           <img src="img/70x70.gif" alt="">
                        </div>
                        <div class="recent-content">
                            <h3 class="title"><a href="#"> Lorem ipsum dolor sit amet consectetur. </a> </h3>
                            <p class="date"><i class="icon fa fa-calendar"></i>October 24th, 2013</p>
                            <p class="comment"><i class="icon fa fa-comment"></i><a href="#">23 Comments</a></p>
                        </div>
                    </div>
                </div>
                <div class="widget lastest-tweets col-md-3">
                    <h2 class="title">Lastest Tweets<span class="border"></span></h2>
                    <div class="recent-blog">
                        <div class="recent-img">
                           <img src="img/70x70.gif" alt="">
                        </div>
                        <div class="recent-content">
                            <h3 class="title"><a href="#"> Lorem ipsum dolor sit amet consectetur. </a> </h3>
                            <p class="date"><i class="icon fa fa-calendar"></i>October 24th, 2013</p>
                            <p class="comment"><i class="icon fa fa-comment"></i><a href="#">23 Comments</a></p>
                        </div>
                    </div>
                    <div class="recent-blog">
                        <div class="recent-img">
                           <img src="img/70x70.gif" alt="">
                        </div>
                        <div class="recent-content">
                            <h3 class="title"><a href="#"> Lorem ipsum dolor sit amet consectetur. </a> </h3>
                            <p class="date"><i class="icon fa fa-calendar"></i>October 24th, 2013</p>
                            <p class="comment"><i class="icon fa fa-comment"></i><a href="#">23 Comments</a></p>
                        </div>
                    </div>
                    <div class="recent-blog">
                        <div class="recent-img">
                           <img src="img/70x70.gif" alt="">
                        </div>
                        <div class="recent-content">
                            <h3 class="title"><a href="#"> Lorem ipsum dolor sit amet consectetur. </a> </h3>
                            <p class="date"><i class="icon fa fa-calendar"></i>October 24th, 2013</p>
                            <p class="comment"><i class="icon fa fa-comment"></i><a href="#">23 Comments</a></p>
                        </div>
                    </div>
                </div>
                <div class="widget col-md-3">
                    <h2 class="title">Photos<span class="border"></span></h2>
                    <div class="recent-blog">
                        <div class="recent-img">
                           <img src="img/70x70.gif" alt="">
                        </div>
                        <div class="recent-content">
                            <h3 class="title"><a href="#"> Lorem ipsum dolor sit amet consectetur. </a> </h3>
                            <p class="date"><i class="icon fa fa-calendar"></i>October 24th, 2013</p>
                            <p class="comment"><i class="icon fa fa-comment"></i><a href="#">23 Comments</a></p>
                        </div>
                    </div>
                    <div class="recent-blog">
                        <div class="recent-img">
                           <img src="img/70x70.gif" alt="">
                        </div>
                        <div class="recent-content">
                            <h3 class="title"><a href="#"> Lorem ipsum dolor sit amet consectetur. </a> </h3>
                            <p class="date"><i class="icon fa fa-calendar"></i>October 24th, 2013</p>
                            <p class="comment"><i class="icon fa fa-comment"></i><a href="#">23 Comments</a></p>
                        </div>
                    </div>
                    <div class="recent-blog">
                        <div class="recent-img">
                           <img src="img/70x70.gif" alt="">
                        </div>
                        <div class="recent-content">
                            <h3 class="title"><a href="#"> Lorem ipsum dolor sit amet consectetur. </a> </h3>
                            <p class="date"><i class="icon fa fa-calendar"></i>October 24th, 2013</p>
                            <p class="comment"><i class="icon fa fa-comment"></i><a href="#">23 Comments</a></p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </footer>     
    <script src="js/vendor/jquery-1.10.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
