<?php
require_once 'settings.php';
require_once 'apiaccess.php';
$apiaccessfunction = new apiaccessfunction();
$apiaccessfunction->access_url = API_URL.'events/'.OAUTH_TOKEN_VARIABLE;
$events = $apiaccessfunction->apidategetfunction();
// echo "<pre>";
// print_r($events);
// echo "</pre>";
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
        <!-- moblie Nav wrapper -->
        <div class="mobile-nav-wrapper">
            <div class="container">
                <!-- logo -->
               <div id="logo">
<a href="index.htm"><img src="img/logo.png" alt=""></a> 
</div>
                <!-- Search  -->
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Search" type="text" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"></span>
                    </form>
                </div>
                <!-- Moblie Menu Icon -->
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div> 
                <!-- main Nav -->
                <nav class="main-nav mobile-menu">

                    <ul class="clearfix">
                        <li class="parent "><a href="#">Home</a>
                            <!-- sub menu -->
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
                            <!-- sub menu -->
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
                            <!-- sub menu -->
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
<!-- Sub Banner -->      
<section class="sub-banner newsection">
    <div class="container">
        <h2 class="title">Event Left Sidebar</h2>
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Events</a></li>
            <li>Event Left Sidebar</li>
        </ul>
    </div>
</section>

<!-- Events -->
<section class="events newsection">
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-sm-9 pull-right">

                <div class="eventform-con fielder-items clearfix">

                    <form>

                        <div class="form-input">
                            <div class="styled-select">
                                <select>
                                    <option>Sort by: Default Sorting</option>
                                    <option>The second option</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-input arrow-up-down">
                            <button class="btn btn-pri"><i class="fa fa-arrow-up"></i></button>
                        </div>

                        <div class="form-input">
                            <div class="styled-select">
                                <select>
                                    <option>Show: 10 items / page</option>
                                    <option>The second option</option>
                                </select>
                            </div>
                        </div>

                    </form>
                    <!-- Event Filter -->
                    <ul class="event-filter">
                        <li class="filter stylelist"><i class=" fa fa-th-list"></i></li>
                        <li class="filter stylegrid"><i class=" fa fa-th"></i></li>
                    </ul>
                </div> 
                <!-- GridList & Itemlist -->

                <div class="grid-list event-container clearfix">
                    <div class="row">
                    	<?php 
	                    	foreach ($events['events'] as $key => $value) {
                    	?>
                        <div class="event-border col-md-4">
                            <div class="event clearfix">
                                <div class="eventsimg">
                                	<?php
                                	if($value['logo'] != null){
                                	?>	
                                		<img src="<?php echo $value['logo']['url'] ; ?>" alt="">
                                	<?php
                                	}else{
                                	?>
                                		<img src="img/515x390.gif" alt="">
                                	<?php	
                                	}
                                	?>
                                   
                                </div>
                                <div class="event-content">
                                    <h3 class="title"><a href="event-detail.php?event_id=<?php echo $value['id']; ?>"><?php echo $value['name']['text']; ?></a></h3>
                                    <ul class="meta">
                                        <li class="date"><i class="icon fa fa-calendar"></i><?php echo $value['start']['local'] ; ?></li><!-- <li><a href="#"><i class="icon fa fa-home"></i> Grand Hotel Califonria</a></li><li><a href="#"><i class="icon fa fa-map-marker"></i>Istanbul / Turkey</a></li> -->
                                    </ul>
                                    <p><?php echo substr ($value['description']['text'], 0, 100); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php 
                        	}
                    	?>
                        
                    </div>
                </div>
                
                <!-- pagination -->
                <ul class="pagination clearfix">
                    <li class=""><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class=""><a href="#">1</a></li>
                    <li class=""><a href="#">2</a></li>
                    <li class=""><a href="#">3</a></li>
                    <li class=""><a href="#">4</a></li>
                    <li class=""><a href="#">5</a></li>
                    <li class=""><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>

            </div> 
            <!-- col-md-3 -->
            <div class="col-md-3 col-sm-3 ">
                <aside id="aside" class="clearfix">

                    <div class="header">
                        <small>Find what you want</small>
                        <h2 class="title">event or conference</h2>
                        <span class="arrow-down"></span>
                    </div>

                    <div class="widget clearfix">

                        <div class="eventform-con clearfix">

                            <form>
                                <div class="form-input search-location">
                                    <input type="text" value="" placeholder="Select Location">
                                    <i class="icon icon-s fa fa-search"></i>
                                    <button class="icon fa fa-globe"></button>
                                </div>

                                <div class="form-input datepicker">
                                    <input placeholder="mm/dd/yy" class="date_timepicker_start">
                                    <button type="button"  value="open" class="open icon fa fa-calendar"></button>
                                </div>


                                <div class="form-input datepicker">
                                    <input placeholder="dd/mm/yy" class="date_timepicker_end" >
                                    <button type="button" value="open" class="end icon fa fa-calendar"></button>
                                </div>

                                <div class="form-input">
                                    <div class="styled-select">
                                        <select>
                                            <option>Select Fields</option>
                                            <option>The second option</option>
                                        </select>
                                    </div>
                                </div>

                                <button class="btn btn-pri">FIND EVENT</button>

                            </form>
                        </div>
                    </div>

                    <div class="widget clearfix">
                        <h3 class="title">Filter by Price </h3>

                        <div id="slider-range"></div>
                        <div class="">  

                            <p> <label for="amount">Price :</label>
                                <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;" /> </p>
                                <a href="#" class="btn btn-disabled">FILTER</a> 
                            </div>
                        </div>

                        <div class="widget categories">

                            <h3 class="title">Filter by Categories</h3>
                            <ul>
                                <li><a href="#">Everything <span class="numbers">68</span></a></li>
                                <li><a href="#">Art<span class="numbers">10</span></a></li>
                                <li><a href="#">Classical &amp; Opera<span class="numbers">25</span></a></li
                                 <li><a href="#">Classical<span class="numbers">30</span></a></li>
                                <li><a href="#">Opera<span class="numbers">100</span></a></li>
                                <li><a href="#">Comedy<span class="numbers">5</span></a></li>
                            </ul>
                        </div>

                        <div class="widget tag">
                            <h3 class="title">Tags Widget</h3>
                            <a href="#">Event</a><a href="#">Fashion</a><a href="#">Design</a><a href="#">Hotels</a><a href="#">Up Coming</a><a href="#">Venue</a><a href="#">Speaker</a><a href="#">Conference</a>
                        </div>  

                        <div class="widget">
                            <h3 class="title">Testimonials</h3>  
                            <div class="owl-testimonial">
                                <div class="testimonials">
                                    <div class="testimonials-content">
                                        <p>Nullam facilisis metus quis nunc rhoncus fringilla. Donec nec nisl nisl, vel tincidunt urna. Donec erat erat, suscipit vitae tristique non. [...] </p>
                                        <span class="arrow-down"></span>
                                    </div>
                                    <p class="name">by isamercan</p>
                                    <small>User interface Designer</small>
                                </div>
                                <div class="testimonials">
                                    <div class="testimonials-content">
                                        <p>Nullam facilisis metus quis nunc rhoncus fringilla. Donec nec nisl nisl, vel tincidunt urna. Donec erat erat, suscipit vitae tristique non. [...] </p>
                                        <span class="arrow-down"></span>
                                    </div>
                                    <p class="name">by isamercan</p>
                                    <small>User interface Designer</small>
                                </div>
                                <div class="testimonials">
                                    <div class="testimonials-content">
                                        <p>Nullam facilisis metus quis nunc rhoncus fringilla. Donec nec nisl nisl, vel tincidunt urna. Donec erat erat, suscipit vitae tristique non. [...] </p>
                                        <span class="arrow-down"></span>
                                    </div>
                                    <p class="name">by isamercan</p>
                                    <small>User interface Designer</small>
                                </div>
                                <div class="testimonials">
                                    <div class="testimonials-content">
                                        <p>Nullam facilisis metus quis nunc rhoncus fringilla. Donec nec nisl nisl, vel tincidunt urna. Donec erat erat, suscipit vitae tristique non. [...] </p>
                                        <span class="arrow-down"></span>
                                    </div>
                                    <p class="name">by isamercan</p>
                                    <small>User interface Designer</small>
                                </div>

                            </div>
                        </div>


                        <div class="widget news">
                            <h3 class="title">Join Our Newsletter</h3>
                            <form>
                                <div class="form-group">
                                    <input type="text" placeholder="Select Location" id="">
                                    <button class="icon fa fa-envelope"></button>
                                </div>
                                <button class="btn btn-disabled">Sign Up</button>
                            </form>
                        </div>
                    </aside>
                </div> 

            </div> 
        </div> 
    </section>
    <!-- footer -->
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
                        <ul class="fa-ul twitters"></ul>
                            </div>

                            <div class="widget col-md-3">
                                <h2 class="title">Flickr Photos<span class="border"></span></h2>
                                 <div class="flicker flickrwidget"></div>  
                            </div>

                        </div> 
                    </div>
                </footer> 
                <script src="js/vendor/jquery-1.10.2.min.js"></script>
                
                <script src="js/plugins.js"></script>
                <script src="js/main.js"></script>
            </body>
            </html>

