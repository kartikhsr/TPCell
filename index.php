


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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>    <![endif]-->
    <!-- time -->

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
 </section>

    
  </body>
</html>
