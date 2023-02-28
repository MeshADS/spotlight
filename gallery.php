<?php
  include('connect.php')
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <meta name="viewport" content="width=device-width" />
    <title>SPOTLIGHT TALENT HUNT</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/layout.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/menu.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/imagehover.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/inlineplayer.css" />
    <link href="https://fonts.googleapis.com/css?family=Crete+Round%7COpen+Sans:400,600,400italic,300italic,300,600italic,700,700italic,800,800italic" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/responsive.css" />
        <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
  </head>
  <body style="background-color: #000 !important;" class="artist">
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!--Header Start-->
   <header>
      <div class="full-width">
        <div class="logo">
           <a href="index.php"><img src="images/SPOTLIGHTlogoAsset.png" style="width: 200px; height:45px;" alt="img" />
          </a>
        </div>
        <a href="#menu" class="menu-link active"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="menu">
          <ul class="level-1">
            <!--<li><a href="index.php" class="hvr-overline-from-left active-menu"><i class="fa fa-home"></i> HOME</a></li>-->
              <li><a href="about.php" class="hvr-overline-from-left "><i class="fa fa-user"></i> ABOUT US</a></li>
            <!--<li>
              <a href="#" class="hvr-overline-from-left has-subnav sub-menu-button"><i class="fa fa-folder-open"></i> PAGES</a>
              <ul class="wide level-2">
                <li><a href="about.html"><i class="fa fa-user"></i> ABOUT US PAGE</a></li>
                <li><a href="contact.html"><i class="fa fa-phone"></i> CONTACT US PAGE</a></li>
                <li><a href="artist-single-page.html"><i class="fa fa-headphones"></i> ARTIST SINGLE PAGE</a></li>
                <li><a href="blog-single-page.html"><i class="fa fa-edit"></i> BLOG SINGLE PAGE</a></li>
                <li><a href="shop-detail.html"><i class="fa fa-shopping-cart"></i> SHOP SINGLE PAGE</a></li>
              </ul>
            </li>-->
           <li><a href="artist.php" class="hvr-overline-from-left"><i class="fa fa-headphones"></i> ARTIST</a></li>
           <li><a href="gallery.php" class="hvr-overline-from-left  active-menu"><i class="fa fa-image"></i> GALLERY</a></li>
           <!-- <li><a href="audition.php" class="hvr-overline-from-left"><i class="fa fa-pencil"></i> REGISTER</a></li>-->
            <li><a href="contact.php" class="hvr-overline-from-left"><i class="fa fa-phone"></i> CONTACT US</a></li>
           <li><a href="stream.php" class="hvr-overline-from-leftt "><i class="fa fa-edit"></i> STREAM</a></li>
            <!--<li><a href="shop.html" class="hvr-overline-from-left"><i class="fa fa-shopping-cart"></i> SHOP</a></li>-->
          </ul>
        </nav>
      </div>
    </header>
    <!--Header End-->
      <div class="clear"></div>
      <!--Page Title Bar Start-->
     <section >
         <img style="width:100% !important;" src="images/gallery.jpg">
         <div id="page-title-bartext">
           <h2 style="color: #fff !important;">GALLERY</h2>
         </div>
          
      </section>
      <!--Page Title Bar End-->
      <!--Mid Container Start-->
      <section>
        <br>
         <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div id="options" class="clearfix">
                 <ul id="filter" class="option-set clearfix" data-option-key="filter">
                   <li><a href="#" data-filter="*" class="selected"><i class="fa fa-align-justify"></i> All</a></li>
                    <li><a href="#" data-filter=".audition">Auditions</a></li>
                    <li><a href="#" data-filter=".finale">Finale</a></li>
                  <!--<li><a href="#" data-filter=".choir">Finale</a></li>-->
                 </ul>
              </div>
              <div class="container-fluid">



              <ul id="isotope-container" class="clearfix">
                <li style="width: 100% !important" class=" all audition finale">
                 <iframe style="position: relative; top: 0; left: 0; width: 100%;" src="https://flickrembed.com/cms_embed.php?source=flickr&amp;layout=responsive&amp;input=www.flickr.com/photos/186218941@N02/albums/72157712398125646&amp;sort=0&amp;by=user&amp;theme=default&amp;scale=fit&amp;speed=5000&amp;limit=3ff5a0000&amp;skin=default&amp;autoplay=true" scrolling="no" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" height="700" frameborder="0"></iframe><script type="text/javascript">function showpics(){var a=$("#box").val();$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?tags="+a+"&tagmode=any&format=json&jsoncallback=?",function(a){$("#images").hide().html(a).fadeIn("fast"),$.each(a.items,function(a,e){$("<img/>").attr("src",e.media.m).appendTo("#images")})})}</script>
                </li>

              </ul>
                <!--<ul id="isotope-container" class="clearfix">
                  <?php
                 
                    $query = $db->query("SELECT * FROM finale ORDER BY id DESC");

                    if ($query->num_rows > 0) {
                      while ($row = $query->fetch_assoc()) {
                        $imageURL = 'finaleupload/' .$row["file_name"];
                  ?>


                   <li class=" all finale">
                      <div class="imghvr-zoom-in">
                         <img src="<?php echo $imageURL; ?>" alt="img" />
                         <div class="figcaption">
                            
                         </div>
                      </div>
                   </li>

                  <?php 
                      }
                    }else {
                      ?>
                      <h4>
                        
                      </h4>
                  <?php
                    }
                  ?>

                 
                  
                </ul>-->
          


             
              <!--<ul id="isotope-container" class="clearfix">
                 
                  <?php
                 

                    $query = $db->query("SELECT * FROM audition_images ORDER BY id DESC");

                    if ($query->num_rows > 0) {
                      while ($row = $query->fetch_assoc()) {
                        $imageURL = 'auditionupload/' .$row["file_name"];
                  ?>


                   <li class=" all audition">
                      <div class="imghvr-zoom-in">
                         <img src="<?php echo $imageURL; ?>" alt="img" />
                         <div class="figcaption">
                            
                         </div>
                      </div>
                   </li>


                  <?php 
                      }
                    }else {
                      ?>
                      <h4>
                        
                      </h4>
                  <?php
                    }
                  ?>
                  
                </ul>-->
              </div>
            </div>
         </div>
      </section>
      <!--Mid Container End-->
      
  
 <footer>
      <div class="container" style="padding-top: 80px !important; padding-bottom: 30px !important;">
        <div class="col-lg-12 col-md-12 col-sm-12">
          
          <div class="one-fifth">
            <div class="widget">
             <a href="index.php"><img src="images/SPOTLIGHTlogoAsset36.png"></a>
             
            </div>
          </div>

          <div class="one-fourth">
            <div class="widget">
             <h4>About Us</h4>
              <span></span>
              <ul>
                <li><a href="about.php">About Us</a>
                </li>
                <li><a href="artist.php">Spotlight Artists</a>
                </li>-->
                <!--<li><a href="#">Clients</a>
                </li>-->
                <!--<li><a href="#">Podcats</a>
                </li>-->
              </ul>
            </div>
          </div>
          
          <div class="one-fourth">
            <div class="widget">
              <h4>Socials</h4>
              <span></span>
              <ul>
                <li>
                  
                  <a href="https://www.instagram.com/spotlighttalenthunt/"><i class="fa fa-instagram" aria-hidden="true"></i> Spotlighttalenthunt</a>
                </li>
                <li><a href="https://twitter.com/spotlighttalen1"><i class="fa fa-twitter" aria-hidden="true"></i> Spotlighttalenthunt</a>
                </li>
                <li><a href="https://www.facebook.com/infospotlight/"><i class="fa fa-facebook-official" aria-hidden="true"></i> Spotlighttalenthunt</a>
                </li>
                <!--<li><a href="#">Talent Success Stories</a>
                </li>-->
              </ul>
            </div>
          </div>
          <div class="one-fourth">
            <div class="widget">
              <h4>Contact Info</h4>
              <span></span>
               <ul>
                <li>    
                  <a href="tel:2349087819044"><i class="fa fa-mobile" aria-hidden="true"></i>  +234 908 781 9044</a>
                </li>
                <li><a href="mailto:info@spotlighttalenthunt.com"><i class="fa fa-envelope" aria-hidden="true"></i>  info@spotlighttalenthunt.com</a>
                </li>
                <li><a href="mailto:spotlighttalenthunt@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>  spotlighttalenthunt@gmail.com</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="container" style="padding-bottom: 10px !important; padding-top: 20px !important; padding-left: 0px !important; padding-right: 0px !important; " >
             <p style="color: #fff !important;">Copyrights by Spotlight Talent Hunt</p>
          </div>
           
          
        </div>
      </div>
    </footer>
    <!--Footer End-->
    <!--Most Bottom Footer Start-->
    <!--Most Bottom Footer End-->
    <div id="back-top" style="display: block;">
      <a href="#top"><span><i class="fa fa-long-arrow-up"></i></span></a>
    </div>
 <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/toggle-nav.js"></script>
      <script type="text/javascript" src="js/owl.carousel.js"></script>
      <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
      <script type="text/javascript" src="js/jquery.easing.min.js"></script>
      <script type="text/javascript" src="js/custom.js"></script>
  </body>
</html>