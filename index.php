


<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>HOME:T&amp;P CELL,GJUS&amp;T 
   
    </title>
     <!-- favicon start -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<!-- favicon end -->
    <meta name="description" content="">
   
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
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
  </head>
  <body ng-app="myapp">
  
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
      <md-progress-circular md-mode="determinate" value="..." md-diameter="100"></md-progress-circular>
      <div ng-view></div>
      <script>
          var app = angular.module("myapp", ["ngRoute"]);
          app.config(function($routeProvider) {
              $routeProvider
              .when("/", {
                  templateUrl : "home.php"
              })
              .when("/vision", {
                  templateUrl : "vision_mission.php"
              })
              .when("/activities", {
                  templateUrl : "role_activity.php"
              })
              .when("/feedback", {
                  templateUrl : "feedback.php"
              })
              .when("/recruit_gju", {
                  templateUrl : "recruit_gju.php"
              })
              .when("/placement_procedure", {
                  templateUrl : "placement_procedure.php"
              })
              .when("/placement_data", {
                  templateUrl : "placement_data.php"
              })
              .when("/brochure", {
                  templateUrl : "brochure.php"
              })
              .when("/past_recruiters", {
                  templateUrl : "past_recruiters.php"
              })
              .when("/facility", {
                  templateUrl : "facility.php"
              })
              .when("/placement_data", {
                  templateUrl : "placement_data.php"
              })
              .when("/upcoming_drive", {
                  templateUrl : "upcoming_drive.php"
              })
              .when("/tpresult", {
                  templateUrl : "tpresult.php"
              })
              .when("/t&amp;w", {
                  templateUrl : "t&amp;w.php"
              })
              .when("/upcoming_drive", {
                  templateUrl : "upcoming_drive.php"
              })
              .when("/gd", {
                  templateUrl : "gd.php"
              })
              .when("/interview", {
                  templateUrl : "interview.php"
              })
              .when("/resume", {
                  templateUrl : "resume.php"
              })
              .when("/do_and_dont", {
                  templateUrl : "do_and_dont.php"
              })
               .when("/gallery", {
                  templateUrl : "gallery.php"
              })
                .when("/video_gallary", {
                  templateUrl : "video_gallary.php"
              })
                 .when("/gallery_news", {
                  templateUrl : "gallery_news.php"
              })
                   .when("/tpc", {
                  templateUrl : "tpc.php"
              })
                     .when("/dpc", {
                  templateUrl : "dpc.php"
              })
                       .when("/contact", {
                  templateUrl : "contact.php"
              })
              ;
              // .when("/blue", {
              //     templateUrl : "blue.htm"
              // });
          });
          </script>

      <!--End Header-->

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
      <script src="js/retina-1.1.0.min.js"></script>
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
            $('#myModal').modal('show');
        });
        
        
    </script>  </section>

    
  </body>
</html>
