<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>TPC</title>
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
          <?php include 'menu.php';?>
          <!--/.container --> </div>
      </header>
      <!--End Header-->
      <section class="wrapper">
        <section class="page_head">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <h2>Training &amp; Placement Coordinator</h2>
                <nav id="breadcrumbs">
                  <ul>
                    <li>You are here:</li>
                    <li><a href="index.php">Home</a></li>
                    <li><a>Contact</a></li>
                    <li>TPC</li>
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
 <center> <img src="images/tpc/Sh. Sunil Kumar.jpg"  alt="Avatar" style="width:40%" ></center>
  <div class="cont" >
    <h4><b>Sh. Sunil Verma</b></h4> 
    <p>Asst. professor(C.S.E)</p>
    <p>skvermacse@gmail.com</p>
  </div>
 
  </div>

<div class="card" style="border:1px solid #000">
 <center> <img src="images/tpc/Sh. Narender .jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4><b>Sh. Narender kumar</b></h4> 
    <p>Asst. professor(I.T)</p>
     <p>narenderster@gmail.com</p>
  </div>
  
</div>
<div class="card" style="border:1px solid #000"   >
  <center><img src="images/tpc/Sh. Ajay Kumar2.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 align="center"><b>Sh. Ajay Kumar</b></h4> 
    <p align="center">Asst. professor(E.C.E)</p>
    <p align="center">ajaypunia50@gmail.com</p>
  </div>
  
</div>

<div class="card" style="border:1px solid #000"   >
  <center><img src="images/tpc/Sh. Sanjeev Kumar2.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 ><b>Sh. Sanjeev Mathur</b></h4> 
    <p>Asst. professor(PTG)</p>
    <p>sanjeevmathur@gmail.com</p>
  </div>
</div>



<div class="card" style="border:1px solid #000"   >
  <center><img src="images/tpc/Sh. MunishGupta2.jpg " alt="Avatar" style="width:40%" class="img"></center>
  <div class="cont">
    <h4 ><b>Dr. Munish Gupta</b></h4> 
    <p>Asst. professor(M.E)</p>
    <p>mcheeka@rediffmail.com</p>
  </div>
</div>

<div class="card" style="border:1px solid #000"   >
 <center> <img src="images/tpc/Sh. Ravish Garg2.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 ><b>Dr. Ravish Garg</b></h4> 
    <p>professor(B.M.E)</p>
    <p>ravishgarg2003@gmail.com</p>
  </div>
</div>

<div class="card" style="border:1px solid #000"   >
 <center> <img src="images/tpc/Sh. JaswinderSingh2.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 ><b>Dr. Jaswinder Singh</b></h4> 
    <p>Asst. professor(M.C.A)</p>
    <p>jaswinder_singh_2k@rediffmail.com</p>
  </div>
</div>

<div class="card" style="border:1px solid #000"   >
 <center> <img src="images/tpc/Dr. AnilKumar2.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 ><b>Dr. Anil Kumar</b></h4> 
    <p>Asst. professor(Bio-nano)</p>
    <p>bhankhar@gmail.com</p>
  </div>
</div>


<div class="card" style="border:1px solid #000"   >
 <center> <img src="images/tpc/Dr. MunishAhuja2.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 ><b>Dr. Munish Ahuja</b></h4> 
    <p>Asst. professor(B.Pharma)</p>
    <p>munishahuja17@yahoo.co.in</p>
  </div>
</div>

<div class="card" style="border:1px solid #000"   >
 <center> <img src="images/tpc/Dr. Mrs. JaiDevi2.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 ><b>Dr. Jai Devi</b></h4> 
    <p>Asst. professor(che)</p>
    <p>jaidevi_gju@yahoo.com</p>
  </div>
</div>

<div class="card" style="border:1px solid #000"   >
 <center> <img src="images/tpc/Er. JitenderPal2.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 ><b>Dr. Jitender Pal</b></h4> 
    <p>Asst.professor(E.V.S)</p>
    <p>j_pal2k1@yahoo.com</p>
  </div>
</div>

<div class="card" style="border:1px solid #000"   >
 <center> <img src="images/tpc/Sh. Manoj Malik2.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 ><b>Sh. Manoj Malik</b></h4> 
    <p>Asst. professor(Physiotherapy)</p>
    <p>malik_manoj@yahoo.com</p>
  </div>
</div>


<div class="card" style="border:1px solid #000"   >
 <center> <img src="images/tpc/Dr. Pankaj Kumar2.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 ><b>Sh. Pankaj kumar</b></h4> 
    <p>Asst. professor(MATH)</p>
    <p>joshipankajkumar@gmail.com</p>
  </div>
</div>

<div class="card" style="border:1px solid #000"   >
 <center> <img src="images/tpc/Sanjay.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 ><b>Dr. Sanjay Kumar</b></h4> 
    <p>Asst. professor(Psychology)</p>
    <p>joshipankajkumar@gmail.com</p>
  </div>
  
  
</div>
<div class="card" style="border:1px solid #000"   >
 <center> <img src="images/tpc/ranjeet.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 ><b>Dr. Ranjeet</b></h4> 
    <p>Asst.Professor(Physics)</p>
    <p>ranjeetdalal@gmail.com</p>
  </div>
  </div>
  
  <div class="card" style="border:1px solid #000"   >
 <center> <img src="images/tpc/manish.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 ><b>Sh. Manish Kumar</b></h4> 
    <p>Asst.Professor(Food.Tech)</p>
    <p>gjumanish@gmail.com</p>
  </div>
  </div>
  
   
  <div class="card" style="border:1px solid #000"   >
 <center> <img src="images/tpc/mrpatra.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 ><b>Sh.M.R.Patra</b></h4> 
    <p>Asst.Professor(C.M.T)</p>
    <p>patramranjan@gmail.com</p>
  </div>
  </div>
  
  <div class="card" style="border:1px solid #000"   >
 <center> <img src="images/tpc/mohit.jpg" alt="Avatar" style="width:40%"></center>
  <div class="cont">
    <h4 ><b>Mohit Verma</b></h4> 
    <p>Asst. professor(Printing  Tech.)</p>
    <p>mohitanand1008@gmail.com</p>
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
