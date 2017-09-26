<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
  <!--<![endif]-->
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <title>Placement Stats</title>
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
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
      <section class="wrapper">
        <section class="page_head">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <h2>Placement Stats</h2>
                <nav id="breadcrumbs">
                  <ul>
                    <li>You are here:</li>
                    <li><a href="index.php">Home</a></li>
                    <li><a>For Recruiters</a></li>
                    <li>Placement Stats</li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="container">
            <div class = "row">
             <div class = "col-lg-12 col-md-12 scol-m-12 col-xs-12">
            <p> With many first of its credit and an impeccable
              record to boast of, the T&amp;P department works round the clock
              to ensure that students of the institute get placed in reputed
              companies on lucrative terms. The training and placement
              department works relentlessly towards the ultimate goal of
              students’ employment across various industries, or to help them
              begin a business venture in which they can achieve phenomenal
              success.The department is operated with a twin-fold focus, i.e.
              augmenting internal competencies by contemporary grooming of
              students and by enabling the industry to identify and absorb
              intellectuals with requisite technical, managed skills.</p>
          </div>
       </div>
         <div class = "row"  >
           <div class = "col-lg-12" style = "padding:0px;">
              <div class="dividerHeading">
                <h4><span>Placement&nbsp;Statistics:</span></h4>
               </div>
          <h2></h2>
         <div class = "col-lg-1 col-md-1">
           </div>
          <div class = "col-lg-5 col-md-5 col-xs-7 col-sm-6" >
            <div id="deptpiechart" style = "display:inline block;"></div>
            </div>
          
        </div>
</div>
        </section>
      </section>
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
      <script type="text/javascript" src="js/coursegraph.js"></script>
      <script type="text/javascript" src="js/deptgraph.js"></script>
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
