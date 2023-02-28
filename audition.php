<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
    header("Location: index.php");
}

require_once 'connect.php';

    function authenticated() {
        // make sure user is authenticated
    }

    
    

if(isset($_POST['btn-submit'])) {
    if(authenticated())
        redirect( 'index.php');
    
    
    $gallery =$_FILES["gallery"]["name"];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["gallery"]["name"]);

    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $extensions_arr = array("jpg","jpeg","png","gif");


    
    $uname = strip_tags($_POST['name']);
    $ugender = strip_tags($_POST['gender']);
    $uage = strip_tags($_POST['age']);
    $uaddress = strip_tags($_POST['address']);
    $utown = strip_tags($_POST['town']);
    $ustate = strip_tags($_POST['state']);
    $uphone = strip_tags($_POST['phone']);
    $uemail = strip_tags($_POST['email']);
    $uoriginstate = strip_tags($_POST['originstate']);
    $ulga = strip_tags($_POST['lga']);
    $unationality = strip_tags($_POST['nationality']);
    $ucategory = strip_tags($_POST['category']);
    $uspotlightname = strip_tags($_POST['spotlightname']);
    $uguardianname = strip_tags($_POST['guardianname']);
    $uguardianrelationship = strip_tags($_POST['guardianrelationship']);
    $uguardianresidence = strip_tags($_POST['guardianresidence']);
    $uguardianphone = strip_tags($_POST['guardianphone']);
    $unamefortandc = strip_tags($_POST['namefortandc']);


    $uname = $DBcon->real_escape_string($uname);
    $ugender = $DBcon->real_escape_string($ugender);
    $uage = $DBcon->real_escape_string($uage);
    $uaddress = $DBcon->real_escape_string($uaddress);
    $utown = $DBcon->real_escape_string($utown);
    $ustate = $DBcon->real_escape_string($ustate);
    $uphone = $DBcon->real_escape_string($uphone);
    $uemail = $DBcon->real_escape_string($uemail);
    $uoriginstate = $DBcon->real_escape_string($uoriginstate);
    $ulga = $DBcon->real_escape_string($ulga);
    $unationality = $DBcon->real_escape_string($unationality);
    $ucategory = $DBcon->real_escape_string($ucategory);
    $uspotlightname = $DBcon->real_escape_string($uspotlightname);
    $uguardianname = $DBcon->real_escape_string($uguardianname);
    $uguardianrelationship = $DBcon->real_escape_string($uguardianrelationship);
    $uguardianresidence = $DBcon->real_escape_string($uguardianresidence);
    $uguardianphone = $DBcon->real_escape_string($uguardianphone);
    $unamefortandc = $DBcon->real_escape_string($unamefortandc);
    

    $check_email = $DBcon->query("SELECT email FROM artists WHERE email='$uemail'");
    $count=$check_email->num_rows;

    if ($count==0){
        
        $query = "INSERT INTO artists (name,gender,age,address,town,state,phone,email,originstate,lga,nationality,category,spotlightname,guardianname,guardianrelationship,guardianresidence,guardianphone,gallery,namefortandc) VALUES('$uname','$ugender','$uage','$uaddress','$utown','$ustate','$uphone','$uemail','$uoriginstate','$ulga','$unationality','$ucategory','$uspotlightname','$uguardianname','$uguardianrelationship','$uguardianresidence','$uguardianphone', '$gallery', '$unamefortandc')";

    

        move_uploaded_file($_FILES['gallery']['tmp_name'],$target_dir.$gallery);

        if ($DBcon->query($query)) {
            $msg = "<div class='alert alert-success'>
                        <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully Submitted!
                        
                    </div>";
        }else {
            $msg = "<div class='alert alert-danger'>
                        <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while adding details !
                    </div>";
        }
        
    } else {
        
        
        $msg = "<div class='alert alert-danger'>
                    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry details not valid !
                </div>";
            
    }
    
    $DBcon->close();
}

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
    <link rel="stylesheet" href="bootstrapv3/css/bootstrap.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="bootstrapv3/css/bootstrap.css" type="text/css">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
  </head>
  <body class="artist">
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!--Header Start-->
    <!--<header>
      <div class=" container-fluid">
      <div class="two-third">
        <div class="logo">
          <a href="index.php"><img src="images/logoss.png" alt="img" />
          </a>
        </div>
        <a href="#menu" class="menu-link active"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="menu">
          <ul class="level-1">
            <li><a href="index.php" class="hvr-overline-from-left active-menu"><i class="fa fa-home"></i> HOME</a></li>
             <li><a href="#" class="hvr-overline-from-left"><i class="fa fa-user"></i> ABOUT US</a></li>
           <li>
              <a href="#" class="hvr-overline-from-left has-subnav sub-menu-button"><i class="fa fa-folder-open"></i> PAGES</a>
              <ul class="wide level-2">
                <li><a href="about.html"><i class="fa fa-user"></i> ABOUT US PAGE</a></li>
                <li><a href="contact.html"><i class="fa fa-phone"></i> CONTACT US PAGE</a></li>
                <li><a href="artist-single-page.html"><i class="fa fa-headphones"></i> ARTIST SINGLE PAGE</a></li>
                <li><a href="blog-single-page.html"><i class="fa fa-edit"></i> BLOG SINGLE PAGE</a></li>
                <li><a href="shop-detail.html"><i class="fa fa-shopping-cart"></i> SHOP SINGLE PAGE</a></li>
              </ul>
            </li>
            <li><a href="artist.html" class="hvr-overline-from-left"><i class="fa fa-headphones"></i> ARTIST</a></li>
            <li><a href="price.html" class="hvr-overline-from-left"><i class="fa fa-microphone"></i> SPOTLIGHT PRICE</a></li>
            <li><a href="contact.html" class="hvr-overline-from-left"><i class="fa fa-phone"></i> CONTACT US</a></li>
            <li><a href="vlog.html" class="hvr-overline-from-left"><i class="fa fa-edit"></i> VLOG</a></li>
            <li><a href="shop.html" class="hvr-overline-from-left"><i class="fa fa-shopping-cart"></i> SHOP</a></li>
          </ul>
        </nav>
      </div>
      </div>
    </header>
    Header End-->

    <section>
      <div class="container-fluid nopadding">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
          <img src="images/audb.jpg">
        </div>
      </div>
    </section>

    <section>
      <div class="container nopadding" style="margin-top: 30px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <form class="form  inputs-underline" method="post" enctype="multipart/form-data">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php
                if (isset($msg)) {
                    echo $msg;
                }
                ?>
              <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                 <h1 class="auditionhead">AUDITION FORM</h1>
                 <div>
                  <h1 class="auditionhead2">Participants Information</h1>
                </div>
                 <div class="form-group">
                    <label for="name">Name of Participant:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required >
                </div>
                <div class="form-group">
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 nopadding">
                    <label style="padding-bottom:10px !important;" for="gender">Gender: </label>
                    <select style="border: none !important;" class="form-control selectpicker" name="gender" id="gender">
                       <option value="">gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option> 
                    </select>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 nopadding">
                    <label for="name">Age:</label>
                    <input type="text" class="form-control" name="age" id="age" placeholder="Age" required >
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding">
                      <label for="address">Residential address:</label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Address" required >
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding">
                      <label for="town">Town:</label>
                      <input type="text" class="form-control" name="town" id="town" placeholder="Town" required >
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding">
                      <label for="state">State:</label>
                      <input type="text" class="form-control" name="state" id="state" placeholder="State" required >
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Numbers:</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required >
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="hello@example.com" required >
                </div>
                 
                <div class="form-group">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding">
                    <label for="name">State of Origin:</label>
                    <input type="text" class="form-control" name="originstate" id="originstate" placeholder="State of Origin" required >
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding">
                    <label for="town">L.G.A:</label>
                    <input type="text" class="form-control" name="lga" id="lga" placeholder="L.G.A" required >
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding">
                    <label for="nationality">Nationality:</label>
                    <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Nationality" required >
                  </div>
                </div>

                <div class="form-group">
                   <label style="padding-bottom:10px !important;" for="category">Auditioning as </label>
                   <select  class="form-control selectpicker" name="category" id="category">
                       <option value="">Auditioning as</option>
                      <option value="Solo Act">Solo Act</option>
                      <option value="Group">Group</option>
                      <option value="Choir">Choir</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="gname">If solo, "Stage name" , if Group, "Group name" , if choir , "Choir name and Name of Church" :</label>
                    <input type="text" class="form-control" name="spotlightname" id="spotlightname" placeholder="" required >
                </div>
               
                <div class="container" style="padding: 10px 10px; padding-left: 0px; padding-right: 5px;">
                  <h1 class="auditionhead2">Guardian/ Parental Information</h1>
                </div>
                <div class="form-group">
                    <label for="gname">Names of Guardian/Parents:</label>
                    <input type="text" class="form-control" name="guardianname" id="guardian_name" placeholder="" required >
                </div>
                <div class="form-group">
                    <label for="grelation">Relationship with Guardian if not Parents:</label>
                    <input type="text" class="form-control" name="guardianrelationship" id="guardianrelationship" placeholder="" required >
                </div>
                <div class="form-group">
                    <label for="gresidence">Residential address of Guardian/Parents:</label>
                    <input type="text" class="form-control" name="guardianresidence" id="guardianresidence" placeholder="" required >
                </div>
                <div class="form-group">
                    <label for="gnumber">Phone Numbers of Guardian/Parents:</label>
                    <input type="text" class="form-control" name="guardianphone" id="guardianphone" placeholder="" required >
                </div>
              </div>

               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="file-upload-previews"></div>
                  <div class="file-upload">
                      <input type="file" name="gallery" id="gallery" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="1" accept="gif|jpg|png">
                      <span>Passport Photo</span>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group"> 
              <br>
                <p style="text-align:center; width: 100%;">I<input type="text" style="width: 50%; display:inline;" class="form-control" name="namefortandc" id="namefortandc" placeholder="" required >hereby acknowledge and agree to participate on the above mentioned competition as an eligible participant, as a contestant i will also be involved in all coaching and training sessions and allow the use of photographs,images and/or video for media publicity of the event.</p>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                  <button style="background-color: #cd151b; " type="submit" name="btn-submit" id="btn-submit" class="btn btnplus2 btn-primary btn-rounded">Submit Form</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    
 <footer>
      <div class="two-third">
        <div class="container">
          <div class="one-fourth">
            <div class="widget">
              <h4>About Us</h4>
              <span></span>
              <ul>
                <li><a href="#">Privacy & Policy</a>
                </li>
                <li><a href="#">About Us</a>
                </li>
                <li><a href="#">Spotlight Artists</a>
                </li>
                <!--<li><a href="#">Clients</a>
                </li>
                <li><a href="#">Podcats</a>
                </li>-->
              </ul>
            </div>
          </div>
          <div class="one-fourth">
            <div class="widget">
              <h4>Spotlight Talent</h4>
              <span></span>
              <ul>
                <li><a href="#">Search Talent</a>
                </li>
                <!--
                <li><a href="#">Post a Job</a>
                </li>
                <li><a href="#">Rates and Prices</a>
                </li>
                <li><a href="#">Services</a>
                </li>-->
              </ul>
            </div>
          </div>
          <div class="one-fourth">
            <div class="widget">
              <h4>Follow the Conversation</h4>
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

         <!-- <div class="one-fourth-last">
            <div class="widget">
              <h4>Latest Photos</h4>
              <span></span>
              <ul class="flickr">
                <li><img src="images/flickr/1.jpg" alt="img" />
                </li>
                <li><img src="images/flickr/2.jpg" alt="img" />
                </li>
                <li><img src="images/flickr/3.jpg" alt="img" />
                </li>
                <li><img src="images/flickr/4.jpg" alt="img" />
                </li>
                <li><img src="images/flickr/5.jpg" alt="img" />
                </li>
                <li><img src="images/flickr/6.jpg" alt="img" />
                </li>
              </ul>
            </div>
          </div>-->
        </div>
      </div>
      <div class="one-third-last">
        <div class="container">
          <div class="widget">
            <h4>Contact Info</h4>
            <span></span>
            <ul>
              <!--<li>
                <i class="fa fa-map-marker"></i>
                <p>24 No. Amazing Valley,
                  <br>Port Harcourt Nigeria
                </p>
              </li>-->
              <li>
                <i class="fa fa-mobile"></i>
                <p>+234 908 781 9044
                </p>
              </li>
              <li>
                <i class="fa fa-envelope"></i>
                <p>info@spotlighttalenthunt.com
                  <br> spotlighttalenthunt@gmail.com
                </p>
              </li>
            </ul>
          </div>
          
        </div>
      </div>
    </footer>
    <!--Footer End-->
    <!--Most Bottom Footer Start-->
    <div class="bottom-footer">
      <div class="two-third">
        <div class="container">
          <ul>
            <li><a href="#">HOME</a>
            </li>
            <li><a href="#">ABOUT</a>
            </li>
            <li><a href="#">ARTIST</a>
            </li>
            <li><a href="#">VOICE PRICE</a>
            </li>
            <li><a href="#">VLOG</a>
            </li>
            <li><a href="#">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="one-third-last">
        <div class="container">
          <p>Copyrights by Spotlight Talent Hunt</p>
        </div>
      </div>
    </div>
    <!--Most Bottom Footer End-->
    <div id="back-top" style="display: block;">
      <a href="#top"><span><i class="fa fa-long-arrow-up"></i></span></a>
    </div>

    <script type="text/javascript" src="bootstrapv3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/toggle-nav.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/soundmanager2.js"></script>
    <script type="text/javascript" src="js/inlineplayer.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
  </body>
</html>
