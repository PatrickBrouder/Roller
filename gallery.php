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

    
    <section id="prices" class="bg-light-gray">
        <div class='container'>
 <div class="gallery">
 <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Gallery</h2>
                </div>
            </div>
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
      $image_path = "img/gallery/category/".$file;
 
      
      $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

      // Check its not folder and it is image file
      if(!is_dir($image_path) &&  
         in_array($image_ext,$image_extensions)){
   ?>

       <!-- Image -->
         <div class="col-sm-3">
       <a href="<?php echo $image_path; ?>" data-lightbox="rollerjam">
        <img src="<?php echo $image_path; ?>" alt="" title=""/>
       </a>
         </div>
       <!-- --- -->
       <?php

       // Break
       if( $count%4 == 0){
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

    
    <
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