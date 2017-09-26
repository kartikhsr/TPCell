<!DOCTYPE html>
                    <!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
                    <!--[if (gte IE 9)|!(IE)]><!-->
                    <html class="no-js" lang="en">
                      <!--<![endif]-->
                      <head>
                        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                        <title>Registration</title>
                        <meta name="description" content="">
                        <!-- CSS FILES -->
                        <link rel="stylesheet" type="text/css" href="css/style1.css">
                        <link rel="stylesheet" href="css/bootstrap.min.css">
                        <link rel="stylesheet" href="css/style.css">
                        <link rel="stylesheet" type="text/css" href="css/style.css"
                          media="screen" data-name="skins">
                        <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">
                        <link rel="stylesheet" href="css/fractionslider.css">
                        <link rel="stylesheet" href="css/style-fraction.css">
                        <link rel="stylesheet" type="text/css" href="css/switcher.css"
                          media="screen">
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
                                  <h2>G.J.U.S.&amp;T. T &amp; P Cell</h2>
                                  <nav id="breadcrumbs">
                                    <ul>
                                      <li>You are here:</li>
                                      <li><a href="index.php">Home</a></li>
                                      <li><a>For Student</a></li>
                                      <li>Registration</li>
                                    </ul>
                                  </nav>
                                </div>
                              </div>
                            </div>
                          </section>
                          <section class="wrapper">
                            <div style="background-image:url(images/bck.jpg)">
                              <section class="content blog">
                                <table class="tab" width="100%">
                                  <tbody>
                                    <tr>
                                      <td rowspan="8" width="50%"><img src="images/student-at-laptop-717x359.png"
                                          height="313" width="632"></td>
                                      <td class="div10" width="25%">Student Name</td>
                                      <td class="div10" width="3%">:</td>
                                      <td valign="middle" width="22%" align="left">
                                        <form name="form1" method="post" action="">
                                          <label for="textfield"></label> <input
                                            name="name" placeholder="Student Name"
                                            type="text"> </form>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="div10">Roll No.</td>
                                      <td class="div10">:</td>
                                      <td>
                                        <form name="form2" method="post" action="">
                                          <label for="textfield2"></label> <input
                                            name="rollno" placeholder="Roll No."
                                            type="text"> </form>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="div10">Programme</td>
                                      <td class="div10">:</td>
                                      <td>
                                        <form name="form3" method="post" action="">
                                          <select name="programme">
                                            <option value="B.Tech.">B.Tech. </option>
                                            <option value="M.Tech.">M.Tech. </option>
                                            <option value="MCA">MCA </option>
                                            <option value="B.Pharma">B.Pharma </option>
                                            <option value="M.Pharma">M.Pharma </option>
                                            <option value="M.Sc">M.Sc </option>
                                            <option value="B.Sc">B.Sc </option>
                                            <option value="MBA">MBA </option>
                                            <option value="M.Com">M.Com </option>
                                            <option value="Bachelor of Physiotherapy">Bachelor
                                              of Physiotherapy </option>
                                            <option value="Master of Physiotherapy">Master
                                              of Physiotherapy </option>
                                          </select>
                                        </form>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="div10">Gender</td>
                                      <td class="div10">:</td>
                                      <td>
                                        <select name="gender">
                                          <option value="Male"> Male </option>
                                          <option value="Female"> Female</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="div10">Mobile No.</td>
                                      <td class="div10">:</td>
                                      <td><input name="textfield5" placeholder="Mobile No."
                                          type="text"></td>
                                    </tr>
                                    <tr>
                                      <td class="div10">E-mail Id</td>
                                      <td class="div10">:</td>
                                      <td><input name="textfield6" placeholder="E-mail Id"
                                          type="text"></td>
                                    </tr>
                                    <tr>
                                      <td class="div10">Password</td>
                                      <td class="div10">:</td>
                                      <td><input name="textfield7" placeholder="Password"
                                          type="text"></td>
                                    </tr>
                                    <tr>
                                      <td class="div10">Confirm Password</td>
                                      <td class="div10">:</td>
                                      <td><input name="textfield8" placeholder="Confirm Password"
                                          type="text"></td>
                                    </tr>
                                    <tr>
                                      <td colspan="15" valign="baseline" align="center"><input
name="Submit" class="div2 div3" value="Submit" type="submit"></td>
    </tr>
</tbody></table>
					
				</section>
                            </div><!--/.row-->
			 <!--/.container-->
           </section>
		</section>
	
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
    </script>
</body></html>
