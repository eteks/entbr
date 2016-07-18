<?php
	require_once 'settings.php';
	require_once 'apiaccess.php';
	$apiaccessfunction = new apiaccessfunction();
	$apiaccessfunction->access_url = API_URL.'events/'.$_GET['event_id'].OAUTH_TOKEN_VARIABLE;
        $eventdetails_data = $apiaccessfunction->apidategetfunction();
	//echo API_URL.'events/'.$_GET['event_id'].OAUTH_TOKEN_VARIABLE;
    // $apiaccessfunction->access_url = API_URL.'venues/'.$_GET['venues_id'].OAUTH_TOKEN_VARIABLE;

    // $venues_data = $apiaccessfunction->apidategetfunction();

	
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
    <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
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
    <!-- Header Top -->
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
    <!-- Main Header -->
    <div class="main-header affix">
        <!-- Moblie Nav wrapper -->
        <div class="mobile-nav-wrapper">
            <div class="container">
                <!-- logo -->
               <div id="logo">
<a href="index.htm"><img src="img/logo.png" alt=""></a> 
</div>
                <!-- search -->
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Search" type="text" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"></span>
                    </form>
                </div>
                <!-- Moblie menu Icon -->
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div> 
                <!-- Main Nav -->
                <nav class="main-nav mobile-menu">

                    <ul class="clearfix">
                        <li class="parent "><a href="#">Home</a>

                            <!-- Sub Menu -->
                            <ul class="sub-menu">
                                <li class="arrow"></li>
                                <li><a href="index.html">Home-1</a></li> <li><a href="index-2.html">Home-2</a></li>
                                <li><a href="index-3.html">Home-3</a></li>
                                <li><a href="index-4.html">Home-4</a></li>
                                <li><a href="index-5.html">Home-5</a></li>
                                <li><a href="index-6.html">Home-6</a></li>
                            </ul>
                        </li>

                        <li class="parent active"><a href="#">Events</a>
                            <!-- Sub Menu -->
                            <ul class="sub-menu">
                                <li class="arrow"></li>
                                <li><a href="event.html">Event</a></li>
                                <li><a href="event-sidebar-left.html">Event-Sidebar-Left</a></li>
                                <li><a href="event-sidebar-right.html">Event-Sidebar-Right</a></li>
                                <li><a href="format.php">format</a></li>
                                <li><a href="event-detail.html">Event Detail</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Directions</a></li>
                        <li><a href="event-tv.html">Events TV</a></li>
                        <li class="parent"><a href="event-blog.html">Blog</a>
                            <!-- Sub Menu -->
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
</header>  
<!-- Sub-banner -->      
<section class="sub-banner newsection">
    <div class="container">
        <h2 class="title">Event Detail</h2>
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Events</a></li>
            <li>Event Detail</li>
        </ul>
    </div>
</section>

<!-- Events -->
<section class="events text-left newsection">
    <div class="container">
        <div class="row">
            <!-- col-md-9 -->
            <div class="col-md-9 col-sm-9">
                <!--Event Detail  -->
          
                <section class="event-detail newsection">
                    <h2 class="main-title "><a href="#"><?php echo $eventdetails_data['name']['text'] ; ?></a></h2>
                    <!-- meta -->
                    <ul class="meta clearfix">
                        <li class="date"><i class="icon fa fa-calendar"></i> <?php echo $eventdetails_data['start']['local'] ; ?></li>
                        <li><a href="#"><i class="icon fa fa-home"></i> Grand Hotel Califonria</a></li>
                        <li><a href="#"><i class="icon fa fa-map-marker"></i>Istanbul / Turkey</a></li>
                    </ul>
                    <!-- event-detail-img -->
                    <div class="event-detail-img">
                        <?php
                                	if($eventdetails_data['logo'] != null){
                                	?>	
                                		<img src="<?php echo $eventdetails_data['logo']['url'] ; ?>" alt="">
                                	<?php
                                	}else{
                                	?>
                                		<img src="img/515x390.gif" alt="">
                                	<?php	
                                	}
                                	?>
                    </div>

                    <h3 class="title">Whats About</h3>

                    <p><?php echo $eventdetails_data['description']['text'] ; ?></p>

              
                </section>

            
                <section class="speaker-event newsection">
                 
                        <div class="event">
                       
                            <div class="event-content">
                           

                            </div>
                        </div>



                        <div class="event">
                
                        </div>


                </section>
            </div>
            <!-- Col-md-3 -->
            <div class="col-md-3 col-sm-3">
                <aside id="aside" class="aside-bar-style-two clearfix">
                        
                    <div class="widget border-remove">
                               <div id="contact-map" class="map"></div>

                               <div class="clearfix">
                                <div class="main-example">
                                    <div class="countdown-container" id="upcomeing-events"></div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-black btn-full"><i class="icon fa fa-heart"> </i>Add wishlist</a>
                            <a href="#" class="btn btn-Gradient-pri btn-full"> buy tıcket</a>
                        </div>

                    </div>

                  </aside>
                </div>
            </div> 
        </div> 
</section>
<!-- Footer -->
<!-- <footer class="main-footer">
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
                        <ul class="fa-ul twitters"></ul>
                            </div>

                            <div class="widget col-md-3">
                                <h2 class="title">Flickr Photos<span class="border"></span></h2>
                                 <div class="flicker flickrwidget"></div>  
                            </div>

                        </div> 
                    </div>
                </footer>  -->

<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script type="text/template" id="upcomeing-events-template">

    <div class="time-count-container">
        <div class="time days">
          <span class="count curr top"><%= curr.days %></span>
          <span class="count next top"><%= next.days %></span>
          <span class="count curr bottom"><%= curr.days %></span>
          <span class="count next bottom"><%= next.days %></span>
          <span class="label">days</span>
      </div>
      <span class="arrow">:</span>
  </div>

  <div class="time-count-container">
    <div class="time hours">
      <span class="count curr top"> <%= curr.hours %></span>
      <span class="count next top"><%= next.hours %></span>
      <span class="count curr bottom"><%= curr.hours %></span>
      <span class="count next bottom"><%= next.hours %></span>
      <span class="label">hours</span>
  </div>
  <span class="arrow">:</span>
</div>
<div class="time-count-container">
    <div class="time minutes">
      <span class="count curr top"><%= curr.minutes %></span>
      <span class="count next top"><%= next.minutes %></span>
      <span class="count curr bottom"><%= curr.minutes %></span>
      <span class="count next bottom"><%= next.minutes %></span>
      <span class="label">min</span>
  </div>
  <span class="arrow">:</span>
</div>
<div class="time-count-container">
    <div class="time seconds">
      <span class="count curr top"><%= curr.seconds %></span>
      <span class="count next top"><%= next.seconds %></span>
      <span class="count curr bottom"><%= curr.seconds %></span>
      <span class="count next bottom"><%= next.seconds %></span>
      <span class="label">sec</span>
  </div>

</div>
</script>

        </body>
        </html>
