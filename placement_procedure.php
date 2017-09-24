<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
  <!--<![endif]-->
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <title>Placement Procedure</title>
      <meta name="description" content="">
      <!-- CSS FILES -->
      <link rel="stylesheet" type="text/css" href="css/style1.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"
        data-name="skins">
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
    <section class="wrapper">
      <!--Start Header-->
      <header id="header" class="clearfix">
        <?php include'header.php';?>
        <!-- Navigation
================================================== -->
        <div class="navbar navbar-default navbar-static-top" role="navigation">
          <?php include 'menu.php';?>
          <!--/.container --> </div>
      </header>
      <!--End Header-->
      <!--start wrapper-->
      <section class="page_head">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <h2>Placement Procedure</h2>
              <nav id="breadcrumbs">
                <ul>
                  <li>You are here:</li>
                  <li><a href="index.php">Home</a></li>
                  <li><a>For Recruiters</a></li>
                  <li>Placement Procedure</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section style="background-image:url(images/bck1.jpg)">
        <section class="container">
          <ul class="do">
            <li>
              <p class="fr-content"> Companies
                interested in taking part in the Placement Process
                should&nbsp;register online.</p>
            </li>
            <li>
              <p class="fr-content">The Placement
                Cell and the Company confer and finalize the date for
                pre-placement talks followed by tests, group discussion and
                interviews sessions, in accordance with their respective
                recruitment process.</p>
            </li>
            <li>
              <p class="fr-content">The date of the
                interview and other sessions should be in compliance with the
                mutually confirmed schedule.</p>
            </li>
            <li>
              <p class="fr-content" style="text-align:justify"> For online test
                (if any) the companies&nbsp;should inform in advance the
                hardware and software requirements, so as to avoid last moment
                hustle.<br>
              </p>
            </li>
            <li>
              <p class="fr-content">If any
                on-the-spot written test is to be conducted, the companies
                should tell in prior for any kind of support required from the
                cell.</p>
            </li>
            <li>
              <p class="fr-content">The companies are
                required to prepare and upload the list of students who are
                selected after the interview process, on the day of the
                interview itself.</p>
            </li>
            <li>
              <p class="fr-content" style="text-align:justify">If in any case,
                the company delays the result the students would be allowed to
                appear for subsequent on-campus or off-campus
                placement drive(s).</p>
            </li>
            <li>
              <p class="fr-content" style="text-align:justify">The recruiter is
                required to upload/email a copy of the offer letter of the
                selected candidates.</p>
            </li>
          </ul>
        </section>
        <!--./div--> </section>
      <!--end wrapper-->
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
