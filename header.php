   
    <link rel="stylesheet" type="text/css" href="css/stylel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
    <link rel="stylesheet" href="css/fractionslider.css">
    <link rel="stylesheet" href="css/style-fraction.css">
    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen">
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
<div id="top-bar">
          <div class="container">
            <div class="row">
              <div class="col-sm-7 hidden-xs top-info"><span>Phone:
                  (01662)-263507</span> <span><i class="fa fa-envelope"></i>Email:
                  gju.tpo@gmail.com</span> <span style="margin-right:"><i id="clockbox"></i></span>
              </div>
              <div class="col-sm-5 top-info">
                <ul>
                  <li><a href="https://www.twitter.com/tpgjust/" class="my-tweet"><i class="fa fa-twitter"></i></a><br>
                  </li>
                  <li><a href="https://www.facebook.com/tp.gjust/" class="my-facebook"><i class="fa fa-facebook"></i></a><br>
                  </li>
                  <li><a href="https://www.youtube.com/channel/UC6ADc-mXrDlrF4iDs5ZdwjA" class="my-youtube"><i class="fa fa-youtube"></i></a><br>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- LOGO bar -->
        <div id="logo-bar" class="clearfix">
          <!-- Container -->
          <div class="container">
            <div class="row">
              <!-- Logo / Mobile Menu -->
              <div class="col-xs-12">
                <div id="logo">
                  <h1><a href="index.php"><img src="images/LOG.png" alt="LOGO"></a></h1>
                </div>
              </div>
            </div>
          </div>
          <!-- Container / End --> </div>
        <!--LOGO bar / End-->
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