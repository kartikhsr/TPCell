<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Contact</title>
    <meta name="description" content="">
    <!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="css/stylel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
    <link rel="stylesheet" href="css/fractionslider.css">
    <link rel="stylesheet" href="css/style-fraction.css">
    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>    <![endif]-->
    <!-- time -->
    <script type="text/javascript">
tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds();
if(nmin<=9) nmin="0"+nmin
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script><!---->
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <section class="wrapper">
      <!--Start Header-->
      <header id="header" class="clearfix">
        <?php include'header.php';?>
        <!-- Navigation
================================================== -->
        <div class="navbar navbar-default navbar-static-top" role="navigation">
         <?php include'menu.php';?>
          <!--/.container --> </div>
      </header>
      <!--End Header-->
      <section class="wrapper">
        <section class="page_head">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <h2>Contact Us</h2>
                <nav id="breadcrumbs">
                  <ul>
                    <li>You are here:</li>
                    <li><a href="index.php">Home</a></li>
                    <li><a>Contact</a></li>
                    <li>Contact Us</li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <!--start wrapper-->
        <section class="container">
          <section class="content contact">
            <div class="container">
              <div class="row sub_content" style = "display:none;">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="maps">
                    <div id="page_maps"></div>
                  </div>
                </div>
              </div>
              <div class="row sub_content">
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <div class="dividerHeading">
                    <h4><span>Get in Touch</span></h4>
                  </div>
                  <p>The University is situated at Hisar, a rapidly growing town
                    situated at about 166 Kms. from Delhi on
                    Delhi-Rohtak-Hisar-Sirsa-Fazilka National Highway (NH-10)
                    and at a distance of about 230 Kms. from Chandigarh on
                    NH-65. It is well connected by rail and road. Hisar is one
                    of the principal cities catering to the administrative and
                    commercial needs of huge rural population. It is a major
                    centre of higher education and research with two major
                    Universities of the State, a number of research
                    institutions, degree colleges, breeding farms and a growing
                    industrial environment. An Army Cantonment located in Hisar
                    enriches its cultural life..</p>
                  <div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Success!</strong> Your message has been sent to us.
                  </div>
                  <div class="alert alert-error hidden" id="contactError"> <button
                      type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Error!</strong> There was an error sending your
                    message. </div>
                  <form id="contactForm" action="" novalidate>
                    <div class="row">
                      <div class="form-group">
                        <div class="col-lg-6 "> <input id="name" name="name" class="form-control"
                            maxlength="100" data-msg-required="Please enter your name."
                            value="" placeholder="Your Name" type="text"> </div>
                        <div class="col-lg-6 "> <input id="email" name="email"
                            class="form-control" maxlength="100" data-msg-email="Please enter a valid email address."
                            data-msg-required="Please enter your email address."
                            value="" placeholder="Your E-mail" type="email"> </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group">
                        <div class="col-md-12"> <input id="subject" name="subject"
                            class="form-control" maxlength="100" data-msg-required="Please enter the subject."
                            value="" placeholder="Subject" type="text"> </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group">
                        <div class="col-md-12"> <textarea id="message" class="form-control"
name="message" rows="10" cols="50" data-msg-required="Please enter your message."
maxlength="5000" placeholder="Message"></textarea> </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12"> <input data-loading-text="Loading..."
                          class="btn btn-default btn-lg" value="Send Message" type="submit">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="sidebar">
                    <div class="widget_info">
                      <div class="dividerHeading">
                        <h4><span>Contact Info</span></h4>
                      </div>
                      <p>You may contact us at following:</p>
                      <ul class="widget_info_contact">
                        <li><i class="fa fa-map-marker"></i>
                          <p><strong>Address</strong>:NH-9, Rohtak Hissar Sirsa
                            Road, Dist-Hisar-125001, Haryana, India</p>
                        </li>
                        <li><i class="fa fa-user"></i>
                          <p><strong>Phone</strong>:(01662)-263-057</p>
                        </li>
                        <li><i class="fa fa-envelope"></i>
                          <p><strong>Email</strong>: <a href="#">gju.tpo@gmail.com</a></p>
                        </li>
                        <li><i class="fa fa-globe"></i>
                          <p><strong>Web</strong>: <a href="#" data-placement="bottom"
                              data-toggle="tooltip" title="www.gjust.ac.in">www.<span
                                style="color: #666666;">gjust.ac.in</span></a></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
    
            <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="sidebar">
                    <div class="widget_info">
                      <div class="dividerHeading">
                        <h4><span>T&amp;P Team</span></h4>
                      </div>
                        <div class = "row">
                          <div class = "col-sm-6 col-md-6 col-lg-6 col-xs-6"><i class="fa fa-user"></i>&nbsp;<strong>Pratap&nbsp;Singh&nbsp;Malik</strong>:</div><div class = "col-sm-6 col-md-6 col-lg-6 col-xs-6">(+91)98689-14103
                        </div></div>
                        <div class = "row">
                          <div class = "col-sm-6 col-md-6 col-lg-6 col-xs-6"><i class="fa fa-user"></i>&nbsp;<strong>Aditya&nbsp;Vir&nbsp;Singh</strong>:</div><div class = "col-sm-6 col-md-6 col-lg-6 col-xs-6">(+91)94169-00803
                        </div></div>
                        <div class = "row">
                          <div class = "col-sm-6 col-md-6 col-lg-6 col-xs-6"><i class="fa fa-user"></i>&nbsp;<strong>Naresh&nbsp;Dalal</strong>:</div><div class = "col-sm-6 col-md-6 col-lg-6 col-xs-6">(+91)94163-00018
                        </div></div>
                        <div class = "row">
                          <div class = "col-sm-6 col-md-6 col-lg-6 col-xs-6"><i class="fa fa-user"></i>&nbsp;<strong>Sandeep</strong>:</div><div class = "col-sm-6 col-md-6 col-lg-6 col-xs-6">(+91)80591-61148
                        </div></div>

                    </div>
              </div>
            </div>
          </section>
        </section>
        <!--end wrapper-->
        <!--start footer-->
        <footer class="footer">
          <?php include'footer.php';?>
        </footer>
        <!--end footer-->
        <section class="footer_bottom">
             <?php include'bottom_footer.php';?>
        </section>
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/retina-1.1.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script>
        <!-- jQuery cookie -->
        <script type="text/javascript" src="js/styleswitch.js"></script>
        <!-- Style Colors Switcher -->
        <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
        <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="js/swipe.js"></script>
        <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/view.contact.js"></script>
        <script type="text/javascript" src="js/jquery.gmap.js"></script>
        <script src="js/main.js"></script>
        <!-- Start Style Switcher --> </section>
    </section>
  </body>
</html>
