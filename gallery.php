<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Rollerjam, roller, jam, skate, skating, rink, skate-rink, limerick">
    <meta name="description" content="RollerJam skate rink limerick">
    <meta name="author" content="RollerJam">
    <link rel="icon" href="favicon10.ico">
    <title>RollerJam</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">
    
    <link href="lightbox/css/lightbox.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
    

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-custom-gallery navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                
                
                <a id="rollerLogo" href="indexR.html" class="navbar-brand page-scroll"><img style="max-width:220px" src="img/logo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="indexR.html#prices">Prices & Times</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="indexR.html#kidsparties">Kids Parties</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="indexR.html#henparties">Hen Parties</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="indexR.html#events">Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="gallery.php">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="indexR.html#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="indexR.html#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->

    
    <section class="bg-light-gray">
        <div class='container'>
 <div class="gallery">
 <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Gallery</h2>
                </div>
            </div>
     <ul class="nav nav-tabs nav-justified">
        <li class="active"><a data-toggle="tab" href="#main">Main</a></li>
        <li><a data-toggle="tab" href="#80s">80s Night</a></li>
        <li><a data-toggle="tab" href="#xmas">Christmas</a></li>
        <li><a data-toggle="tab" href="#hen">Hen Party</a></li>
        <li><a data-toggle="tab" href="#launch">Launch Night</a></li>
        <li><a data-toggle="tab" href="#fit">Skate Fitness</a></li>
    </ul>

  <div class="tab-content">
    <div id="main" class="tab-pane fade in active">
      
        
        <div class="row text-center">
                
  <?php 
  // Image extensions
  $image_extensions = array("png","jpg","jpeg","gif");

  // Target directory
  $dir = 'img/gallery/Main_Gallery/';
  if (is_dir($dir)){
 
   if ($dh = opendir($dir)){
    $count = 1;

    // Read files
    while (($file = readdir($dh)) !== false){

     if($file != '' && $file != '.' && $file != '..'){
 
      

      // Image path
      $image_path = "img/gallery/Main_Gallery/".$file;
      $image_t_path = "img/gallery/Main_Gallery_thumb/".$file;
 
      
      $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

      // Check its not folder and it is image file
      if(!is_dir($image_path) &&  
         in_array($image_ext,$image_extensions)){
   ?>

       <!-- Image -->
         <div class="col-md-2 col-xs-4">
       <a href="<?php echo $image_path; ?>" data-lightbox="rollerjam">
        <img src="<?php echo $image_t_path; ?>" alt="" title="" class="img-responsive"/>
       </a>
         </div>
       <!-- --- -->
       <?php

       // Break
       if( $count%6 == 0){
       ?>
     </div>
     <div class="row text-center">
       <?php 
       }
       $count++;
      }
     }
 
    }
    closedir($dh);
   }
  }
     
 ?>
     </div>
      
    </div>
    <div id="80s" class="tab-pane fade">
      
      
        <div class="row text-center">
                
  <?php 
  // Image extensions
  $image_extensions = array("png","jpg","jpeg","gif");

  // Target directory
  $dir = 'img/gallery/80s_night/';
  if (is_dir($dir)){
 
   if ($dh = opendir($dir)){
    $count = 1;

    // Read files
    while (($file = readdir($dh)) !== false){

     if($file != '' && $file != '.' && $file != '..'){
 
      

      // Image path
      $image_path = "img/gallery/80s_night/".$file;
      $image_t_path = "img/gallery/80s_night_thumb/".$file;
      
      $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

      // Check its not folder and it is image file
      if(!is_dir($image_path) &&  
         in_array($image_ext,$image_extensions)){
   ?>

       <!-- Image -->
         <div class="col-md-2 col-xs-4">
       <a href="<?php echo $image_path; ?>" data-lightbox="rollerjam">
        <img src="<?php echo $image_t_path; ?>" alt="" title="" class="img-responsive"/>
       </a>
         </div>
       <!-- --- -->
       <?php

       // Break
       if( $count%6 == 0){
       ?>
     </div>
     <div class="row text-center">
       <?php 
       }
       $count++;
      }
     }
 
    }
    closedir($dh);
   }
  }
     
 ?>
     </div>
        
    </div>
    <div id="xmas" class="tab-pane fade">
     
        
        <div class="row text-center">
                
  <?php 
  // Image extensions
  $image_extensions = array("png","jpg","jpeg","gif");

  // Target directory
  $dir = 'img/gallery/Christmas/';
  if (is_dir($dir)){
 
   if ($dh = opendir($dir)){
    $count = 1;

    // Read files
    while (($file = readdir($dh)) !== false){

     if($file != '' && $file != '.' && $file != '..'){
 
      

      // Image path
      $image_path = "img/gallery/Christmas/".$file;
      $image_t_path = "img/gallery/Christmas_thumb/".$file;
 
      
      $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

      // Check its not folder and it is image file
      if(!is_dir($image_path) &&  
         in_array($image_ext,$image_extensions)){
   ?>

       <!-- Image -->
         <div class="col-md-2 col-xs-4">
       <a href="<?php echo $image_path; ?>" data-lightbox="rollerjam">
        <img src="<?php echo $image_t_path; ?>" alt="" title="" class="img-responsive"/>
       </a>
         </div>
       <!-- --- -->
       <?php

       // Break
       if( $count%6 == 0){
       ?>
     </div>
     <div class="row text-center">
       <?php 
       }
       $count++;
      }
     }
 
    }
    closedir($dh);
   }
  }
     
 ?>
     </div>
      
    </div>
    <div id="hen" class="tab-pane fade">
      
        
        <div class="row text-center">
                
  <?php 
  // Image extensions
  $image_extensions = array("png","jpg","jpeg","gif");

  // Target directory
  $dir = 'img/gallery/Hen_party/';
  if (is_dir($dir)){
 
   if ($dh = opendir($dir)){
    $count = 1;

    // Read files
    while (($file = readdir($dh)) !== false){

     if($file != '' && $file != '.' && $file != '..'){
 
      

      // Image path
      $image_path = "img/gallery/Hen_party/".$file;
      $image_t_path = "img/gallery/Hen_party_thumb/".$file;
 
      
      $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

      // Check its not folder and it is image file
      if(!is_dir($image_path) &&  
         in_array($image_ext,$image_extensions)){
   ?>

       <!-- Image -->
         <div class="col-md-2 col-xs-4">
       <a href="<?php echo $image_path; ?>" data-lightbox="rollerjam">
        <img src="<?php echo $image_t_path; ?>" alt="" title="" class="img-responsive"/>
       </a>
         </div>
       <!-- --- -->
       <?php

       // Break
       if( $count%6 == 0){
       ?>
     </div>
     <div class="row text-center">
       <?php 
       }
       $count++;
      }
     }
 
    }
    closedir($dh);
   }
  }
     
 ?>
     </div>
      
    </div>
    <div id="launch" class="tab-pane fade">
     
        
        <div class="row text-center">
                
  <?php 
  // Image extensions
  $image_extensions = array("png","jpg","jpeg","gif");

  // Target directory
  $dir = 'img/gallery/Launch_Night/';
  if (is_dir($dir)){
 
   if ($dh = opendir($dir)){
    $count = 1;

    // Read files
    while (($file = readdir($dh)) !== false){

     if($file != '' && $file != '.' && $file != '..'){
 
      

      // Image path
      $image_path = "img/gallery/Launch_Night/".$file;
      $image_t_path = "img/gallery/Launch_Night_thumb/".$file;
 
      
      $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

      // Check its not folder and it is image file
      if(!is_dir($image_path) &&  
         in_array($image_ext,$image_extensions)){
   ?>

       <!-- Image -->
         <div class="col-md-2 col-xs-4">
       <a href="<?php echo $image_path; ?>" data-lightbox="rollerjam">
        <img src="<?php echo $image_t_path; ?>" alt="" title="" class="img-responsive"/>
       </a>
         </div>
       <!-- --- -->
       <?php

       // Break
       if( $count%6 == 0){
       ?>
     </div>
     <div class="row text-center">
       <?php 
       }
       $count++;
      }
     }
 
    }
    closedir($dh);
   }
  }
     
 ?>
     </div>
      
    </div>
    <div id="fit" class="tab-pane fade">
     
        
        <div class="row text-center">
                
  <?php 
  // Image extensions
  $image_extensions = array("png","jpg","jpeg","gif");

  // Target directory
  $dir = 'img/gallery/Skate_fit_classes/';
  if (is_dir($dir)){
 
   if ($dh = opendir($dir)){
    $count = 1;

    // Read files
    while (($file = readdir($dh)) !== false){

     if($file != '' && $file != '.' && $file != '..'){
 
      

      // Image path
      $image_path = "img/gallery/Skate_fit_classes/".$file;
      $image_t_path = "img/gallery/Skate_fit_classes_thumb/".$file;
 
      
      $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

      // Check its not folder and it is image file
      if(!is_dir($image_path) &&  
         in_array($image_ext,$image_extensions)){
   ?>

       <!-- Image -->
         <div class="col-md-2 col-xs-4">
       <a href="<?php echo $image_path; ?>" data-lightbox="rollerjam">
        <img src="<?php echo $image_t_path; ?>" alt="" title="" class="img-responsive"/>
       </a>
         </div>
       <!-- --- -->
       <?php

       // Break
       if( $count%6 == 0){
       ?>
     </div>
     <div class="row text-center">
       <?php 
       }
       $count++;
      }
     }
 
    }
    closedir($dh);
   }
  }
     
 ?>
     </div>
      
    </div>
  </div>
     
     
     
     
     
     
     
     
     
     
     
     
     
            
     
     
     
    
     
     
     
    
     
     
     
     
 </div>
</div>
    </section>
    
    

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; RollerJam 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/rollerjamlk?lang=en" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/rollerjam.limerick/" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#modal9" class="portfolio-link" data-toggle="modal">
                        Privacy Policy</a>
                        </li>
                        <li><a href="#modal10" class="portfolio-link" data-toggle="modal">
                        Terms of use</a>
                        </li>
                        <li><a href="#modal11" class="portfolio-link" data-toggle="modal">
                        F.A.Q</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    
    <!-- Modal 9 -->
    <div class="roller-modal modal fade" id="modal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Privacy Policy</h2>
                                <p class="item-intro text-muted">Your Privacy</p>
                                <p>Your privacy is important to us. To better protect your privacy we provide this notice explaining our online information practices and the choices you can make about the way your information is collected and used. To make this notice easy to find, we make it available on our homepage and at every point where personally identifiable information may be requested.</p>
                                <p>Google Adsense and the DoubleClick DART Cookie</p>
                                <p>Google, as a third party advertisement vendor, uses cookies to serve ads on this site. The use of DART cookies by Google enables them to serve adverts to visitors that are based on their visits to this website as well as other sites on the internet.</p>
                                <p>To opt out of the DART cookies you may visit the Google ad and content network privacy policy at the following url http://www.google.com/privacy_ads.html Tracking of users through the DART cookie mechanisms are subject to Google’s own privacy policies.</p>
                                <p>Other Third Party ad servers or ad networks may also use cookies to track users activities on this website to measure advertisement effectiveness and other reasons that will be provided in their own privacy policies, RollerJam has no access or control over these cookies that may be used by third party advertisers.</p>
                                <p class="item-intro text-muted">Collection of Personal Information</p>
                                <p>When visiting RollerJam, the IP address used to access the site will be logged along with the dates and times of access. This information is purely used to analyze trends, administer the site, track users movement and gather broad demographic information for internal use. Most importantly, any recorded IP addresses are not linked to personally identifiable information.</p>
                                <p class="item-intro text-muted">Links to third party Websites</p>
                                <p>We have included links on this site for your use and reference. We are not responsible for the privacy policies on these websites. You should be aware that the privacy policies of these sites may differ from our own.</p>
                                <p class="item-intro text-muted">Changes to this Privacy Statement</p>
                                <p>The contents of this statement may be altered at any time, at our discretion.</p>
                                <p>If you have any questions regarding the privacy policy of RollerJam then you may contact us through the contact page.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Modal 10 -->
    <div class="roller-modal modal fade" id="modal10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Terms of Use</h2>
                                <ol class="tou">
                                    <li>Please ensure that you heed all signs</li>
                                    <li>Socks must be worn when wearing hire skates.</li>
                                    <li>Skate within your own ability</li>
                                    <li>NO FOOD or DRINKS to be taken on to the skating rink.</li>
                                    <li>No cameras, phones or photography on the rink</li>
                                    <li>Please also note, We are not responsible for lost or stolen articles.</li>
                                    <li>No spectators are allowed on the skating rink. Please use the viewing areas provided</li>
                                    <li>Please skate in an anti-clockwise direction, unless otherwise instructed by the skate marshals</li>
                                    <li>Alcoholic beverages, illegal substances, or anyone under the influence, will not be permitted on the premises.</li>
                                    <li>Please listen to the skate marshals, they are there for your safety!</li>
                                    <li>All patrons must report any injuries to the management, regardless of the severity.</li>
                                    <li>If you are pregnant or have a serious medical condition or injury that may be aggravated by exercise, please do not skate.</li>
                                    <li>While skating; no pushing, fast skating, playing tag, or suddenly stopping at any time on the skate floor is permitted, as these actions will jeopardize the safety of other skaters.</li>
                                    <li>NO horseplay or disruptive behaviour</li>
                                    <li>No profanity. Repetitive profanity and foul or abusive language will lead to suspension from the building.</li>
                                    <li>No in-and-out privileges or loitering on the property.</li>
                                    <li>No one is allowed behind the skate desk or in the DJ area.</li>
                                    <li>No skates are to be worn in the toilets. Get your shoes from the skate desk and put them back on. You may retrieve your skates afterwards.</li>
                                    <li>No standing still on the skating floor. Do not climb over the wall or chairs. No sitting on tables.</li>
                                    <li>No chewing gum allowed</li>
                                    <li>No smoking in the building.</li>
                                    <li>No skates/rollerblades to be worn entering or leaving the building.</li>
                                    <li>No carrying of children whilst on skates at any time!!</li>
                                </ol>
                                <p>Management reserves the right to ask anyone to leave at any time. If you are asked to leave, no refunds will be given</p>
                                <p>RollerJam highly recommends the use of personal protective equipment during skating activity. Wristguards and helmets are available to hire free of charge at the skate hire desk. Wearing protective equipment will greatly reduce the chance of injury due to a fall / collision. RollerJam accepts no responsibility for injury caused by a fall / collision which would have otherwise not occurred if protective equipment had been worn.</p>
                                <p>Persons using their own skates and equipment are responsible for the maintenance and upkeep of such, and RollerJam cannot be held responsible for any accidents, damage or injury caused by such skates and equipment to yourself or a third party. RollerJam reserve the right of admission and to remove persons from the venue for any reason including behaviour likely to cause damage, injury, nuisance or annoyance, or for failure to comply with the reasonable requests of RollerJam representatives staffing the Event.</p>
                                <p>People skating at this venue do so entirely at their own risk and RollerJam can not be held responsible for any accidents caused by in house structures, objects, or by the actions of other skaters. RollerJam are not responsible for any loss, injury or damage, howsoever caused, to yourself or third party, your property or clothing.</p>
                                <p class="item-intro text-muted">Pre-Existing Medical Conditions</p>
                                <p>We highly recommend that you do not take part in skating activity if you suffer from high blood pressure, heart, back or neck problems, brittle bones, joint injuries or any other condition that could be aggravated by this activity.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Modal 11 -->
    <div class="roller-modal modal fade" id="modal11" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Frequently Asked Questions</h2>
                                <p class="item-intro text-muted"><b>What time should I arrive</b></p>
                                <p>It is a good idea to arrive 10-15mins before the start of party. You will be given a registration form and should read over it carefully before you sign your details. You will then write down the names of all the children you are expecting at the party including the birthday child. Our staff will give you tickets for each child to swap for their skates and will let you know when your party is scheduled for food in the private party room.</p>
                                <p class="item-intro text-muted"><b>How do I book my party?</b></p>
                                <p>You can call RollerJam at 061 422500 or email us at info@rollerjam.ie. 
We will ask you for a contact name and number, the birthday child’s name and how many children you are expecting approximately at the party. 
A €50 deposit is required for bookings. This can be paid in person when you collect your free invitations or over the phone.</p>
                                <p class="item-intro text-muted"><b>What is your cancellation policy?</b></p>
                                <p>There is no refund on deposits paid.</p>
                                <p class="item-intro text-muted"><b>Can I bring my own skates?</b></p>
                                <p>Yes! They must be quad skates though and the wheels must be inspected before you enter the rink by one of our staff members. 
Skates that have dirty or scratched wheels that may damage our rink floor cannot be permitted</p>
                                <p class="item-intro text-muted"><b>Non-skating kids?</b></p>
                                <p>If there is a child who does not wish to skate, there are a range of amusement games in the venue. The price for a child eating with the party but not skating is €4.99.</p>
                                <p class="item-intro text-muted"><b>Skating adults?</b></p>
                                <p>We organise so much of the party that there is plenty of time for you to have a go at skating too! All adults must sign their own registration form. 
Adults skating with the party receive a discount on admission. If you wish for certain adults to be included in your bill, please inform our front of desk staff otherwise they will be asked to pay for their own admission.</p>
                                <p class="item-intro text-muted"><b>Some of my guests cannot skate?</b></p>
                                <p>There is always great excitement at the beginning of a session as kids want to be able to start skating straight away but remember there is over 2 hours for them to practice and improve! 
Patience and praise are key here. We would encourage first time skaters to practice as much as possible on the carpet which will help when they go onto the rink and it won’t be long before they’re flying around after their friends!</p>
                                <p class="item-intro text-muted"><b>SI am nervous about kids falling and getting hurt?</b></p>
                                <p>Skating is a fun activity but like every sport it is not without its risks. Roller-skating is actually 5 times safer than cycling, 
3 times safer than basketball and three times safer than football! RollerJam strives to provide a safe environment in which kids and adults alike can learn and develop their skills. 
Here are some top tips for staying safe at the rink</p>
                                <p>*Follow the rules of the rink- they are there for your safety and that of others</p>
                                <p>*Know your limits- it is worth taking your time until you feel more confident in your skills</p>
                                <p>*If you require it, protective gear is available to buy or rent in both kids and adult sizes. Ask our staff about discounts available with parties</p>
                                <p class="item-intro text-muted"><b>What food/drink may I bring?</b></p>
                                <p>It is RollerJam policy that no outside food or drink be brought into the premises. You may however bring along a birthday cake which our staff will be happy to serve whilst you are in the party room.</p>
                                <p class="item-intro text-muted"><b>My child doesn’t like pizza?</b></p>
                                <p>An alternative of cocktail sausages can be provided for children who do not like pizza but we must be advised of this when party is being booked. The last chance to change your food order is when you are signing in on arrival. When you are sitting in the party room is too late!</p>
                                <p class="item-intro text-muted"><b>My child doesn’t like pizza?</b></p>
                                <p>An alternative of cocktail sausages can be provided for children who do not like pizza but we must be advised of this when party is being booked. The last chance to change your food order is when you are signing in on arrival. When you are sitting in the party room is too late!</p>
                                <p>. If you would like to give away party bags, we would suggest keeping these until departure to be fair to our other patrons and in following with our outside food policy.</p>
                                <p class="item-intro text-muted"><b>Can I go back into the party room later?</b></p>
                                <p>Each party has 30mins in the party room. This is plenty of time for the children to finish their food and often they are so eager to get back skating, the time spent is much shorter. After you leave the party room, any sweets/popcorn not yet eaten can be brought out to our lounge area as well as your mi-wadi pitchers which are unlimited for the whole session.</p>
                                <p class="item-intro text-muted"><b>When do you play games?</b></p>
                                <p>We attempt to keep playing games throughout the session. If your group is in the party room whilst a particular game starts we will play it again when you are back on the rink so there is no fear of missing out!</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/contact.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
    <script src="lightbox/js/lightbox.js"></script>
</body>

</html>