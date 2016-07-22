<?php
	require_once 'settings.php';
	require_once 'apiaccess.php';
	$apiaccessfunction = new apiaccessfunction();
	$apiaccessfunction->access_url = API_URL.'events/'.$_GET['event_id'].OAUTH_TOKEN_VARIABLE;
    $eventdetails_data = $apiaccessfunction->apidategetfunction();
	//echo API_URL.'events/'.$_GET['event_id'].OAUTH_TOKEN_VARIABLE;

    // $apiaccessfunction->access_url = API_URL.'venues/'.$_GET['venues_id'].OAUTH_TOKEN_VARIABLE;
    // $venues_data = $apiaccessfunction->apidategetfunction();
   $event_id = $eventdetails_data['id'];
   $logo_id = $eventdetails_data['logo_id'];

   // if($eventdetails_data['is_series']!=null) {
   //      echo "test";
   // }
   // else {
   //      echo "false";
   //  }



        
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
                        <?php
                        $venue_id = $eventdetails_data['venue_id'];
                         $apiaccessfunction->access_url = API_URL.'venues/'.$venue_id.OAUTH_TOKEN_VARIABLE;
                         // echo API_URL.'venues/'.$venue_id.OAUTH_TOKEN_VARIABLE;
                       $venues_data = $apiaccessfunction->apidategetfunction();
                        ?> 
                        <li><a href="#"><i class="icon fa fa-home"></i></a><?php echo $venues_data['address']['city'] ; ?></li>
                        <li><a href="#"><i class="icon fa fa-map-marker"></i></a><?php echo $venues_data['address']['region'] ;?></li>
                        <li><a href="#"><i class="icon fa fa-map-marker"></i></a><?php echo $venues_data['address']['postal_code'] ;?></li>
                        <li><a href="#"><i class="icon fa fa-map-marker"></i></a><?php echo $venues_data['address']['country'] ;?></li>
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
                <section class="venue_details">
                    <?php
                        $venue_id = $eventdetails_data['venue_id'];
                        $apiaccessfunction->access_url = API_URL.'venues/'.$venue_id.OAUTH_TOKEN_VARIABLE;
                        $venuedetails_data = $apiaccessfunction->apidategetfunction();
                     ?>
                    <h1> Venue Details </h1>
                   <span class="venue_block"> Address 1 : <?php echo $venuedetails_data['address']['address_1']; ?> </span>
                    <span class="venue_block"> Address 2 : <?php echo $venuedetails_data['address']['address_2']; ?> </span>
                    <span class="venue_block"> City : <?php echo $venuedetails_data['address']['city']; ?> </span>
                    <span class="venue_block"> Region : <?php echo $venuedetails_data['address']['region']; ?> </span>
                    <span class="venue_block"> Postal_code : <?php echo $venuedetails_data['address']['postal_code']; ?> </span>
                    <span class="venue_block"> Country : <?php echo $venuedetails_data['address']['country']; ?> </span>
                    <span class="venue_block"> Latitude : <?php echo $venuedetails_data['address']['latitude']; ?> </span>
                    <span class="venue_block"> Longitude : <?php echo $venuedetails_data['address']['longitude']; ?> </span>
                </section>


                <section class="venue_id_events_details">
                        <?php
                            $apiaccessfunction->access_url = API_URL.'venues/'.$venue_id.'/events'.OAUTH_TOKEN_VARIABLE;
                            $venue_events_details_data = $apiaccessfunction->apidategetfunction();
                        ?>
                    <h1> Venue_ID_Events Details </h1>
                    <?php   
                      foreach ($venue_events_details_data['events'] as $key => $value) {    ?>  
                        <span class="venue_block"> Name_text : <?php echo $value['name']['text']; ?> </span>
                        <span class="venue_block"> Description_text : <?php echo $value['description']['text']; ?> </span>
                        <span class="venue_block"> Start_timezone : <?php echo $value['start']['timezone']; ?> </span>
                        <span class="venue_block"> Start_local : <?php echo $value['start']['local']; ?> </span>
                        <span class="venue_block"> Start_utc : <?php echo $value['start']['utc']; ?> </span>
                        <span class="venue_block"> End_timezone : <?php echo $value['end']['timezone']; ?> </span>
                        <span class="venue_block"> End_local : <?php echo $value['end']['local']; ?> </span>
                       <span class="venue_block"> End_utc : <?php echo $value['end']['utc']; ?> </span>
                        <span class="venue_block"> capacity : <?php echo $value['capacity']; ?> </span>
                        <span class="venue_block"> status : <?php echo $value['status']; ?> </span>
                        <span class="venue_block"> currency : <?php echo $value['currency']; ?> </span>
                        <?php
                            if($value['logo'] != null){
                        ?>  
                                <img src="<?php echo $value['logo']['url'] ; ?>" alt="">
                                <?php
                            }       else{
                                ?>
                                        <img src="img/515x390.gif" alt="">
                                <?php   
                                    }
                                ?>
                        <?php
                            }
                        ?>

                    </section>

                      <section class="events_ticket_details">
                        <?php
                            $apiaccessfunction->access_url = API_URL.'events/'.$event_id.'/ticket_classes'.OAUTH_TOKEN_VARIABLE;
                            $ticket_details_data = $apiaccessfunction->apidategetfunction();
                        ?>
                    <h1> Events_Tickets Details </h1>
                    <?php
                    foreach ($ticket_details_data['ticket_classes'] as $key => $value) {  ?> 
                        <span class="venue_block"> Cost_display : <?php echo $value['cost']['display']; ?> </span>
                        <span class="venue_block"> Cost_currency : <?php echo $value['cost']['currency']; ?> </span>
                        <span class="venue_block"> Cost_value : <?php echo $value['cost']['value']; ?> </span>
                        <span class="venue_block"> Cost_major_value : <?php echo $value['cost']['major_value']; ?> </span>



                               

                         <span class="venue_block"> Fee_display : <?php echo $value['fee']['display']; ?> </span>
                        <span class="venue_block"> Fee_currency : <?php echo $value['fee']['currency']; ?> </span>
                        <span class="venue_block"> Fee_value : <?php echo $value['fee']['value']; ?> </span>
                        <span class="venue_block"> Fee_major_value : <?php echo $value['fee']['major_value']; ?> </span>


                         <span class="venue_block"> Tax_display : <?php echo $value['tax']['display']; ?> </span>
                        <span class="venue_block"> Tax_currency : <?php echo $value['tax']['currency']; ?> </span>
                        <span class="venue_block"> Tax_value : <?php echo $value['tax']['value']; ?> </span>
                        <span class="venue_block"> Tax_major_value : <?php echo $value['tax']['major_value']; ?> </span>

                           <span class="venue_block"> Name : <?php echo $value['name']; ?> </span>
                        <span class="venue_block"> Minimum_quantity : <?php echo $value['minimum_quantity']; ?> </span>
                        <?php if($value['maximum_quantity']!=null) { ?>
                        <span class="venue_block"> Maximum_quantity : <?php echo $value['maximum_quantity']; ?> </span>
                        <?php } ?>
                        
                        <span class="venue_block"> Maximum_quantity_per_order : <?php echo $value['maximum_quantity_per_order']; ?> </span>
                         <span class="venue_block"> On_sale_status : <?php echo $value['on_sale_status']; ?> </span>
                         <span class="venue_block"> Id : <?php echo $value['id']; ?> </span>


                        <?php 
                        echo "<br>";
                            }
                        ?>
                    </section>

                      <section class="events_ticket_details">
                    <h1> Events_Tickets_id Details </h1>
                     <?php
                    foreach ($ticket_details_data['ticket_classes'] as $key => $value) {  
                        $ticket_id = $value['id'];
                        $apiaccessfunction->access_url = API_URL.'events/'.$event_id.'/ticket_classes'.'/ticket_id'.OAUTH_TOKEN_VARIABLE;
                            $ticket_id_details_data = $apiaccessfunction->apidategetfunction();
                        ?> 

                          <span class="venue_block"> Id_Cost_display : <?php echo $value['cost']['display']; ?> </span>
                        <span class="venue_block"> Id_Cost_currency : <?php echo $value['cost']['currency']; ?> </span>
                        <span class="venue_block"> Id_Cost_value : <?php echo $value['cost']['value']; ?> </span>
                        <span class="venue_block"> Id_Cost_major_value : <?php echo $value['cost']['major_value']; ?> </span>

                         <span class="venue_block"> Id_Fee_display : <?php echo $value['fee']['display']; ?> </span>
                        <span class="venue_block"> Id_Fee_currency : <?php echo $value['fee']['currency']; ?> </span>
                        <span class="venue_block"> Id_Fee_value : <?php echo $value['fee']['value']; ?> </span>
                        <span class="venue_block"> Id_Fee_major_value : <?php echo $value['fee']['major_value']; ?> </span>


                         <span class="venue_block"> Id_Tax_display : <?php echo $value['tax']['display']; ?> </span>
                        <span class="venue_block"> Id_Tax_currency : <?php echo $value['tax']['currency']; ?> </span>
                        <span class="venue_block"> Id_Tax_value : <?php echo $value['tax']['value']; ?> </span>
                        <span class="venue_block"> Id_Tax_major_value : <?php echo $value['tax']['major_value']; ?> </span>

                          <span class="venue_block"> Name : <?php echo $value['name']; ?> </span>
                        <span class="venue_block"> Minimum_quantity : <?php echo $value['minimum_quantity']; ?> </span>
                        <?php if($value['maximum_quantity']!=null) { ?>
                        <span class="venue_block"> Maximum_quantity : <?php echo $value['maximum_quantity']; ?> </span>
                        <?php } ?>
                        
                        <span class="venue_block"> Maximum_quantity_per_order : <?php echo $value['maximum_quantity_per_order']; ?> </span>
                         <span class="venue_block"> On_sale_status : <?php echo $value['on_sale_status']; ?> </span>
                         <span class="venue_block"> Id : <?php echo $value['id']; ?> </span>


                    <?php
                        echo "<br>"; 
                        }
                    ?>
                    </section>


  
                    <section class="media_details">
                    <h1> Media Details </h1>
                     <?php
                        $apiaccessfunction->access_url = API_URL.'media/'.$logo_id.OAUTH_TOKEN_VARIABLE;
                            $media_details_data = $apiaccessfunction->apidategetfunction();
                        ?> 

                          <span class="venue_block"> Id : <?php echo $media_details_data['id']; ?> </span>
                           <span class="venue_block"> Url : <?php echo $media_details_data['url']; ?> </span>
                         <?php if($media_details_data['url']!=null) { ?>
                            <img src="<?php echo $media_details_data['url'] ; ?>" alt="">
                            <?php
                                }   else{
                            ?>         <img src="img/515x390.gif" alt="">
                                <?php   
                                    }
                                ?>
                        <span class="venue_block"> Aspect_ratio : <?php echo $media_details_data['aspect_ratio']; ?> </span>
                        <span class="venue_block"> Id_Cost_major_value : <?php echo $media_details_data['edge_color']; ?> </span>
                          <span class="venue_block"> Id_Cost_major_value : <?php echo $media_details_data['edge_color_set']; ?> </span>

                    </section>

                     <section class="series_details">
                    <h1> Series Details </h1>
                    

                    </section>
                <section classs="organizers_Id_details">

                <ul>
                   <?php
                        $organizers_id = $eventdetails_data['organizer_id'];
                         $apiaccessfunction->access_url = API_URL.'organizers/'.$organizers_id.OAUTH_TOKEN_VARIABLE;
                         
                      $organizers_data = $apiaccessfunction->apidategetfunction();
                        ?> 
                        <?php echo "<H3> organizers_Id: </H3>";?>
                        <li><?php echo "<H4>description : </H>";?>
                        <?php echo "<span> text: </span>";  echo $organizers_data['description']['text'] ; ?></li><br>
                        <li> <?php echo "<H4>long_description : </H4>";?>
                        <?php echo "<span> text: </span>"; echo $organizers_data['long_description']['text'] ;?></li>
                        <br>
                        <?php
                                    if($organizers_data['logo'] != null){
                                    ?>  
                                        <img src="<?php echo $organizers_data['logo']['url'] ; ?>" alt="">
                                    <?php
                                    }else{
                                    ?>
                                        <img src="img/515x390.gif" alt="">
                                    <?php   
                                    }
                                    ?><br>                                  
                       <li> <?php echo "<span> Name: </span>";  echo $organizers_data['name']; ?><br></li>
                        <li> <?php echo "<span> Twitter: </span>"; echo $organizers_data['twitter'];?><br></li>
                        <li> <?php echo "<span> Facebook: </span>"; echo $organizers_data['facebook'];?><br><li>
                    </ul> 


                   </section>
                   <section classs="organizers_id_Events details"> 
                    <!-- event-detail-img -->
                       <?php
                    $organizers_id = $eventdetails_data['organizer_id'];
                         $apiaccessfunction->access_url = API_URL.'organizers/'.$organizers_id.'/events'.OAUTH_TOKEN_VARIABLE
                         ;
                       
                          $events_data = $apiaccessfunction->apidategetfunction();
                         ?>
                         <?php echo "<H3> organizers_id_Events details: </H3>";?>
                         <ul>
                          <?php echo "<H4>pagination: </H4>";?> 
                         <li><?php echo "<span> object_count : </span>"; echo $events_data['pagination']['object_count'] ; ?></li><br>
                        <li><?php echo "<span>page_number: </span>"; echo $events_data['pagination']['page_number'] ; ?></li><br>
                        <li><?php echo "<span> page_size: </span>"; echo $events_data['pagination']['page_size'] ; ?></li><br>
                        <li><?php echo "<span> page_count: </span>"; echo $events_data['pagination']['page_count'] ; ?></li><br>
                        </ul>
                          <?php echo "<H4> events: </H4>";?>

                        <?php
                        foreach ($events_data['events'] as $key => $value) {
                          echo "<span> name : </span>"; echo $value['name']['text'];echo "<br>";
                            echo "<span> description : </span>";echo $value['description']['text'];echo "<br>";
                            echo "<span> timezone : </span>";echo $value['start']['timezone'];echo "<br>";
                            echo "<span> local : </span>";echo $value['start']['local'];echo "<br>";
                            echo "<span> utc : </span>";echo $value['start']['utc'];echo "<br>";
                            echo "<span> timezone : </span>";echo $value['end']['timezone'];echo "<br>";
                            echo "<span> local : </span>";echo $value['end']['local'];echo "<br>";
                            echo "<span> utc : </span>";echo $value['end']['utc'];echo "<br>";
                            echo "<span> created : </span>";echo $value['created'];echo "<br>";
                            echo "<span> changed : </span>";echo $value['changed'];echo "<br>";
                            echo "<span> capacity : </span>";echo $value['capacity'];echo "<br>";
                           echo "<span> status : </span>"; echo $value['status'];echo "<br>";
                            echo "<span>currency : </span>";echo $value['currency'];echo "<br>";
                            echo "<span> listed : </span>";echo $value['listed'];echo "<br>";
                            echo "<span> shareable: </span>";echo $value['shareable'];echo "<br>";
                            echo "<span> online_event : </span>";echo $value['online_event'];echo "<br>";
                             echo "<span> tx_time_limit : </span>";echo $value['tx_time_limit'];echo "<br>";
                             echo "<span> hide_start_date : </span>";echo $value['hide_start_date'];echo "<br>";
                             echo "<span> hide_end_date: </span>";echo $value['hide_end_date'];echo "<br>";
                             echo "<span> locale : </span>";echo $value['locale'];echo "<br>";
                            echo "<span> is_locked : </span>"; echo $value['is_locked'];echo "<br>";
                             echo "<span> privacy_setting : </span>";echo $value['privacy_setting'];echo "<br>";
                             echo "<span> is_series : </span>";echo $value['is_series'];echo "<br>";
                             echo "<span> is_series_parent : </span>";echo $value['is_series_parent'];echo "<br>";
                             echo "<span> is_reserved_seating: </span>";echo $value['is_reserved_seating'];echo "<br>";
                             echo "<span>logo_id: </span>";echo $value['logo_id'];echo "<br>";
                             echo "<span>organizer_id: </span>";echo $value['organizer_id'];echo "<br>";
                             echo "<span>venue_id: </span>";echo $value['venue_id'];echo "<br>";
                             echo "<span>category_id : </span>";echo $value['category_id'];echo "<br>";
                             echo "<span> subcategory_id: </span>";echo $value['subcategory_id'];echo "<br>";
                             echo "<span> format_id: </span>";echo $value['format_id'];echo "<br>";
                                                   if($value['logo'] != null){ ?>
                                      
                                        <img src="<?php echo $value['logo']['url'] ; ?>" alt="">
                                     
                                    
                                   <?php  }else{ ?>
                            
                                        <img src="img/515x390.gif" alt="">
                                    <?php   
                                    }
                                
                                                   } ?> 
                    
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
