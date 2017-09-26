<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Testimonials</title>
    <meta name="description" content="">
    <!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="css/style1.css">
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
  <body> <!--Start Header-->
    <section class = "wrapper">
    <header id="header" class="clearfix">
      <?php include'header.php';?>
      <!-- Navigation
================================================== -->
      <div class="navbar navbar-default navbar-static-top" role="navigation">
        <?php include 'menu.php';?>
        <!--/.container --> </div>
    </header>
    <!--End Header-->
    <section class="wrapper">
      <section class="page_head">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <h2>Testimonials</h2>
              <nav id="breadcrumbs">
                <ul>
                  <li>You are here:</li>
                  <li><a href="index.php">Home</a></li>
                  <li>Testimonials</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!--start wrapper-->
      <section class="container">
        <!--./row-->
        <div class="row sub_content">
          <div class="col-lg-6">
            <div class="dividerHeading">
              <h4><span>Testimonials</span></h4>
            </div>
            <div class="testimonial carousel slide" id="testimonial-carousel">
              <div class="carousel-inner">
                <div class="active item">
                  <div class="testimonial-item">
                    <div class="icon"><i class="fa fa-quote-right"></i></div>
                    <blockquote>
                      <p> <span style="color: rgb(68, 68, 68); font-family: &quot;PT sans&quot;; font-size: 14px; font-style: italic; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(234, 234, 234); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">GJU
                          provides good opportunities to learn in field of
                          technology. The campus is equipped with latest
                          equipment's and machines for providing practical
                          knowledge. The T&amp;P Cell has been working actively
                          with a good moral support and full dedication. I thank
                          all the faculties and related person for providing me
                          opportunity to learn and grow here, also the students
                          who are developing the placement portal.</span></p>
                    </blockquote>
                    <div class="icon-tr"></div>
                    <div class="testimonial-review"> <img alt="testimoni" src="images/testimonials/1.png">
                      <h1>Balvinder Singh,<small>Hartron.</small></h1>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="icon"><i class="fa fa-quote-right"></i></div>
                    <blockquote>
                      <p>Nunc aliquet tincidunt metus, sit amet mattis lectus
                        sodales ac. Suspendisse rhoncus dictum eros, ut egestas
                        eros luctus eget. Nam nibh sem, mattis et feugiat ut,
                        porttitor nec risus.</p>
                    </blockquote>
                    <div class="icon-tr"></div>
                    <div class="testimonial-review"> <img alt="testimoni" src="images/testimonials/2.png">
                      <h1>Tom Jobs<small>Leopard</small></h1>
                    </div>
                  </div>
                </div>
              </div>
              <div class="testimonial-buttons"><a data-slide="prev" href="#testimonial-carousel"><i
                    class="fa fa-chevron-left"></i></a> <a data-slide="next" href="#testimonial-carousel"><i
                    class="fa fa-chevron-right"></i></a></div>
            </div>
          </div>
          <!-- TESTIMONIALS END --> </div>
      </section>
      </section>
      <!--./row-->
      <!--.test end-->
      <!-- Test2-->
      <!--Test2 end-->
      <!--start footer-->
      <footer class="footer">
        <?php include 'footer.php';?>
      </footer>
      <!--end footer-->
      <section class="footer_bottom">
        <?php include 'bottom_footer.php';?>
      </section>
      <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      
      <script type="text/javascript" src="js/jquery.cookie.js"></script>
      <!-- jQuery cookie -->
      <script type="text/javascript" src="js/styleswitch.js"></script>
      <!-- Style Colors Switcher -->
      <script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
      <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
      <script type="text/javascript" src="js/jflickrfeed.js"></script>
      <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
      <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
      <script type="text/javascript" src="js/swipe.js"></script>
      <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
      <script src="js/main.js"></script>
      <!-- Start Style Switcher -->
      <div class="switcher"></div>
      <!-- End Style Switcher -->
      <script>
        $(window).load(function(){
            $('.slider').fractionSlider({
                'fullWidth': 			true,
                'controls': 			true,
                'responsive': 			true,
                'dimensions': 			"1920,450",
                'increase': 			true,
                'pauseOnHover': 		true,
                'slideEndAnimation': 	true,
                'autoChange':           true
            });
        });
    </script> </section>
  </body>
</html>
