<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Web Team</title>
    <meta name="description" content="">
    <!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/wbteam.css">
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
  <!--Start Header--> <body>
    <section class="wrapper">
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
                <h2>Web Team</h2>
                <nav id="breadcrumbs">
                  <ul>
                    <li>You are here:</li>
                    <li><a href="index.php">Home</a></li>
                    <li>Web Team</li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="container">
          <center>
            <div class="wbsddbox"> <span> <img src="./images/testimonials/1.png"
                  alt="Balwinder Singh"> </span>
              <table>
                <tbody>
                  <tr>
                    <td><strong>Name:&nbsp;</strong> </td>
                    <td>Balvinder Singh</td>
                  </tr>
                  <tr>
                    <td><strong>Roll No:&nbsp;</strong> </td>
                    <td>13014009</td>
                  </tr>
                  <tr>
                    <td><strong>Course:&nbsp;</strong> </td>
                    <td>B. Tech</td>
                  </tr>
                  <tr>
                    <td><strong>Department:&nbsp;</strong> </td>
                    <td>Information Technology </td>
                  </tr>
                  <tr>
                    <td><strong>Contact:&nbsp;</strong> </td>
                    <td>+918950517959</td>
                  </tr>
                  <tr>
                    <td><strong>E-Mail:&nbsp;</strong> </td>
                    <td>balvinder294@gmail.com</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="wbddbox"> <span> <img src="./images/Rahul.png" alt="Rahul Chanana">
              </span>
              <table>
                <tbody>
                  <tr>
                    <td><strong>Name:&nbsp;</strong> </td>
                    <td>Rahul Chanana</td>
                  </tr>
                  <tr>
                    <td><strong>Roll No:&nbsp;</strong> </td>
                    <td>15014027</td>
                  </tr>
                  <tr>
                    <td><strong>Course:&nbsp;</strong> </td>
                    <td>B. Tech</td>
                  </tr>
                  <tr>
                    <td><strong>Department:&nbsp;</strong> </td>
                    <td>Information Technology </td>
                  </tr>
                  <tr>
                    <td><strong>Contact:&nbsp;</strong></td>
                    <td>+918813853905</td>
                  </tr>
                  <tr>
                    <td><strong>WhatsApp:&nbsp;</strong></td>
                    <td>+917206739780</td>
                  </tr>
                  <tr>
                    <td><strong>E-Mail:&nbsp;</strong> </td>
                    <td>chananarahul1@gmail.com</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="wbddbox"><span><img src="./images/Gaurav.PNG" alt="Gaurav">
              </span>
              <table>
                <tbody>
                  <tr>
                    <td><strong>Name:&nbsp;</strong> </td>
                    <td>Gaurav </td>
                  </tr>
                  <tr>
                    <td><strong>Roll No:&nbsp;</strong> </td>
                    <td>15013029</td>
                  </tr>
                  <tr>
                    <td><strong>Course:&nbsp;</strong> </td>
                    <td>B. Tech </td>
                  </tr>
                  <tr>
                    <td><strong>Department:&nbsp;</strong> </td>
                    <td>Computer Sci &amp; Eng.</td>
                  </tr>
                  <tr>
                    <td><strong>Contact:&nbsp;</strong> </td>
                    <td>+919017920586 </td>
                  </tr>
                  <tr>
                    <td><strong>E-Mail:&nbsp;</strong> </td>
                    <td>iamrgaurav@gmail.com</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="wbdbox"> <span> <img src="./images/Birjesh.png" alt="Birjesh">
              </span>
              <table>
                <tbody>
                  <tr>
                    <td><strong>Name:&nbsp;</strong> </td>
                    <td>Birjesh </td>
                  </tr>
                  <tr>
                    <td><strong>Roll No:&nbsp;</strong> </td>
                    <td>15014008 </td>
                  </tr>
                  <tr>
                    <td><strong>Course:&nbsp;</strong> </td>
                    <td>B. Tech </td>
                  </tr>
                  <tr>
                    <td><strong>Department:&nbsp;</strong> </td>
                    <td>Information Technology </td>
                  </tr>
                  <tr>
                    <td><strong>Contact:&nbsp;</strong> </td>
                    <td>+9186858316770 </td>
                  </tr>
                  <tr>
                    <td><strong>E-Mail:&nbsp;</strong> </td>
                    <td>maxyabc001@gmail.com</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="wbdbox"> <span> <img src="./images/Diwanshi.png" alt="Diwanshi">
              </span>
              <table>
                <tbody>
                  <tr>
                    <td><strong>Name:&nbsp;</strong> </td>
                    <td>Diwanshi </td>
                  </tr>
                  <tr>
                    <td><strong>Roll No:&nbsp;</strong> </td>
                    <td>15014011 </td>
                  </tr>
                  <tr>
                    <td><strong>Course:&nbsp;</strong> </td>
                    <td>B. Tech </td>
                  </tr>
                  <tr>
                    <td><strong>Department:&nbsp;</strong> </td>
                    <td>Information Technology </td>
                  </tr>
                  <tr>
                    <td><strong>E-Mail:&nbsp;</strong> </td>
                    <td>singla.diwanshi2@gmail.com</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="wbdbox"> <span><img src="./images/nancy.png" alt="Nancy">
              </span>
              <table>
                <tbody>
                  <tr>
                    <td><strong>Name:&nbsp;</strong> </td>
                    <td>Nancy</td>
                  </tr>
                  <tr>
                    <td><strong>Roll No:&nbsp;</strong> </td>
                    <td>15014019</td>
                  </tr>
                  <tr>
                    <td><strong>Course:&nbsp;</strong></td>
                    <td>B. Tech</td>
                  </tr>
                  <tr>
                    <td><strong>Department:&nbsp;</strong> </td>
                    <td>Information Technology</td>
                  </tr>
                  <tr>
                    <td><strong>E-Mail:&nbsp;</strong> </td>
                    <td>nancysingal1@gmail.com</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </center>
        </section>
      </section>
      <!--start wrapper-->
      <!--wrapper end-->
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
