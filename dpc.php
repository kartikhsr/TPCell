<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>TEMPLATE</title>
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
    <link rel="stylesheet" type="text/css" href="css/tpc.css" media="screen">
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
                <h2>Department Placement Coordinator</h2>
                <nav id="breadcrumbs">
                  <ul>
                    <li>You are here:</li>
                    <li><a href="index.php">Home</a></li>
                    <li><a>Contact</a></li>
                    <li>DPC</li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <!--start wrapper-->
        <section class="container">
        <center>
<div class="card" style="border:1px solid #000">
 <center> <img src="images/dpc/raghav.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b>Raghav Khera(DPC)</b></h4> 
    <p>14013068</p>
    <p>CSE</p>
    <p>raghavkhera7@gmail.com</p>
  </div>
 
  </div>

<div class="card" style="border:1px solid #000">
 <center> <img src="images/dpc/madhav.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b>Madhav Nagpal(DPC)</b></h4> 
    <p>14032033</p>
    <p>PTG</p>
    <p>madhavnagpal1@gmail.com</p>
  </div>
 
  </div>
  
<div class="card" style="border:1px solid #000">
 <center> <img src="images/dpc/ankita.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b>Ankita Mishra(JDPC)</b></h4> 
    <p>14013208</p>
    <p>PTG</p>
    <p>cutiemishra18@gmail.com</p>
  </div>
 
  </div>

<div class="card" style="border:1px solid #000">
 <center> <img src="images/dpc/amit.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b>Amit Chaudhary(DPC)</b></h4> 
    <p>14152004</p>
    <p>ECE</p>
    <p>aaamit.chaudhary2013@gmail.com</p>
  </div>
 
  </div>

<div class="card" style="border:1px solid #000">
 <center> <img src="images/dpc/mohit.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b>Mohit(DPC)</b></h4> 
    <p>14162013</p>
    <p>M.E</p>
    <p>mk43171@gmail.com</p>
  </div>
 
  </div>

<div class="card" style="border:1px solid #000">
 <center> <img src="images/dpc/shubham.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b>Shubham Kumar(DPC)</b></h4> 
    <p>15141901</p>
    <p>B.M.E</p>
    <p>shubham05bhagat@gmail.com</p>
  </div>
 
  </div>
<div class="card" style="border:1px solid #000">
 <center> <img src="images/dpc/shubham_saini.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b>Shubham Saini(DPC)</b></h4> 
    <p>15083004</p>
    <p>F.T</p>
    <p>sbmsaini@gmail.com</p>
  </div>
 
  </div>

<div class="card" style="border:1px solid #000">
 <center> <img src="images/dpc/palak.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b>Palak(DPC)</b></h4> 
    <p>16042006</p>
    <p>E.V.S</p>
    <p>palaksachdeva570@gmail.com</p>
  </div>
 
  </div>


<div class="card" style="border:1px solid #000">
 <center> <img src="images/dpc/ayushi.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b>Aayushi Singh(DPC)</b></h4> 
    <p>14125004</p>
    <p>Pharmacy</p>
    <p>aayushisingh6920@gmail.com</p>
  </div>
 
  </div>



<div class="card" style="border:1px solid #000">
 <center> <img src="images/dpc/babita.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b>Babita Kumari(DPC)</b></h4> 
    <p>14171005</p>
    <p>Physiotherapy</p>
    <p>babita676@gmail.com</p>
  </div>
 
  </div>
  
  
  <div class="card" style="border:1px solid #000">
 <center> <img src="images/dpc/kusum.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b>Kusum(DPC)</b></h4> 
    <p>16093014</p>
    <p> Bio and Nano Technology</p>
    <p>kusumsinghk10@gmail.com</p>
  </div>
 
  </div>
  
    <div class="card" style="border:1px solid #000">
 <center> <img src="images/dpc/deepak.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b> Deepak Pahuja(DPC)</b></h4> 
    <p>15012903</p>
    <p> MCA </p>
    <p>deepakpahuja991@gmail.com</p>
  </div>
 
  </div>
  
    <div class="card" style="border:1px solid #000">
 <center> <img src="images/dpc/prachi.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b>Prachi(DPC)</b></h4> 
    <p>16021023</p>
    <p> CMT </p>
    <p>prachigupta15.pg@gmail.com </p>
  </div>
 
  </div>
  
  <div class="card" style="border:1px solid #000">
 <center> <img src="images/dpc/shubham_it.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b>Shubham Gupta(DPC)</b></h4> 
    <p>14014050</p>
    <p> IT </p>
    <p>sg00341@gmail.com</p>
  </div>
 
  </div>
</center>

 </section>
      </section>
      <!--./row-->
      <!--.test end-->
      <!-- Test2-->
      <!--Test2 end-->
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
