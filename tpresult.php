<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Placement Result</title>
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
                <h2>Placement Result</h2>
                <nav id="breadcrumbs">
                  <ul>
                    <li>You are here:</li>
                    <li><a href="index.php">Home</a></li>
                    <li><a>Announcements</a></li>
                    <li>Placement Result</li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="container">
        <div class="dividerHeading">
                <h4><span>Joint campus drive by Bhilwara Info Technology Ltd. </span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:18-06-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>13013105</td>
                      <td>Shweta    Rani</td>
                      <td>B.Tech(C.S.E)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13013094</td>
                      <td>Sakshi    Garg</td>
                      <td>B.Tech(C.S.E)</td>
                    </tr>
                  </tbody>
                </table>
              </div>

             
         <div class="dividerHeading">
                <h4><span>On campus drive Kandhari Beverages</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:31-05-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td></td>
                      <td>15042007</td>
                      <td>Ajay    Chauhan</td>
                      <td>M.sc(evs)</td>
                    </tr>
                  </tbody>
                </table>
              </div>

        <div class="dividerHeading">
                <h4><span>Off campus drive by Rivigo</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:31-05-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                      <td></td>
                      <td>13013022</td>
                      <td>Binay Kumar Yadav</td>
                      <td>B.Tech(C.S.E)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
                 <div class="dividerHeading">
                <h4><span>On campus drive by SaiCom Codes Flexoprint Pvt Ltd</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:26-05-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>13032019</td>
                      <td>Naveen    jangra</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13032916</td>
                      <td>Ajay    Kumar</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
 
              <div class="dividerHeading">
                <h4><span>Off campus drive by J.Mitra & Co. Pvt Ltd</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:26-05-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                      <td></td>
                      <td>15092004</td>
                      <td>Devanshu</td>
                      <td>M.Sc(Bio-Nano)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>15092027</td>
                      <td>Amarjeet</td>
                      <td>M.Sc(Bio-Nano)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
               <div class="dividerHeading">
                <h4><span>On campus drive by Boettcher(India) Pvt LTd </span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:22-05-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>13032907</td>
                      <td>Shekhar</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13032010</td>
                      <td>Aman    Verma</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
             
              <div class="dividerHeading">
                <h4><span>On campus drive by Galaxy Offset India Pvt Ltd </span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:13-05-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>13032017</td>
                      <td>Monu    Gill</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13032044</td>
                      <td>Ojasvi    Malik</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13032046</td>
                      <td>Lalit</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13032901</td>
                      <td>Madhav    girdhar</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13032911</td>
                      <td>krishan    kumar</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <div class="dividerHeading">
                <h4><span>Off campus drive DARCL Logisitics</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:13-05-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>13013109</td>
                      <td>Swati    Bansal</td>
                      <td>B.Tech(C.S.E)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="dividerHeading">
                <h4><span>On campus drive by KODAK</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:09-05-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>13032902</td>
                      <td>Rahul    Gupta</td>
                      <td>B.Tech(ptg)</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="dividerHeading">
                <h4><span>On campus drive by AS Packers</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:19-04-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>13032002</td>
                      <td>Raj    Kumar</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13032003</td>
                      <td>Ajay    Gill</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13032007</td>
                      <td>Happy</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Kuldeep</td>
                      <td>B.Tech(Printing)</td>
                      <td>13032029</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13032030</td>
                      <td>Gajender</td>
                      <td>B.Tech(Printing)</td>
                  </tbody>
                </table>
              </div>
               <div class="dividerHeading">
                <h4><span>On campus drive by Velocious Labs System Integration Pvt Ltd</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:18-04-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>13152035</td>
                      <td>Jyoti    Sihag</td>
                      <td>B.Tech(E.C.E)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>15151013</td>
                      <td>Anshu </td>
                      <td>M.Tech(E.C.E)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13152079</td>
                      <td> Rajat Kumar</td>
                      <td>B.Tech(E.C.E)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13152097</td>
                      <td>Sadgi    Sharma</td>
                      <td>B.Tech(E.C.E)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13152909</td>
                      <td>Krishan    Malik</td>
                      <td>B.Tech(E.C.E)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13152911</td>
                      <td>Lisha</td>
                      <td>B.Tech(E.C.E)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="dividerHeading">
                <h4><span>Joint campus drive by Alembic Pharmaceuticals Ltd</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:28-03-2017</span></h4>
            </div>
              <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>13125002</td>
                      <td>Utkarsh Sheoran</td>
                      <td>B.Pharma</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13125008</td>
                      <td>Parveen</td>
                      <td>B.Pharma</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13125031</td>
                      <td>Deepak Insa</td>
                      <td>B.Pharma</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13125036</td>
                      <td>Navneet Kumar</td>
                      <td>B.Pharma</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13125042</td>
                      <td>Hitesh Kumar</td>
                      <td>B.Pharma</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13125048</td>
                      <td>Rakesh</td>
                      <td>B.Pharma</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13125049</td>
                      <td>Sandeep Saini</td>
                      <td>B.Pharma</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13125912</td>
                      <td>Umesh Kumar</td>
                      <td>B.Pharma</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="dividerHeading">
                <h4><span>On campus drive by Academiaguru</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:09-03-2017</span></h4>
            </div>
              <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>15101010</td>
                      <td>Preeti Yadav</td>
                      <td>MBA</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>15104008</td>
                      <td>Manoj singh</td>
                      <td>MBA</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>15104019</td>
                      <td>Sonu Kumari</td>
                      <td>MBA</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>15106011</td>
                      <td>Diksha</td>
                      <td>MBA</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>15101023</td>
                      <td>Shruti Dhamija</td>
                      <td>MBA</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>15101016</td>
                      <td>Vanisha Thakral</td>
                      <td>MBA</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>15101010</td>
                      <td>Nishant Mehta</td>
                      <td>MBA</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13014935</td>
                      <td>Vijay Kumar</td>
                      <td>B.Tech(I.T)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>15101087</td>
                      <td>Aanchal Rustagi</td>
                      <td>MBA</td>
                    </tr>
                  </tbody>
                </table>
                </div>
                
        <div class="dividerHeading">
              <h4><span>On&nbsp;campus&nbsp;drive&nbsp;by&nbsp;Huhtamaki-PPL&nbsp;</span></h4>
            </div>
            <div class="dividerHeading">
              <h4><span>Date:28-02-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
              <table class="table table-striped table-hover css-serial">
                <thead>
                  <tr>
                    <th>Sr No.</th>
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Course</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td>13162061</td>
                    <td>Kiran Sama</td>
                    <td>B.Tech&nbsp;(M.E)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13162047</td>
                    <td>Kirti Deswal</td>
                    <td>B.Tech&nbsp;(M.E)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13162035</td>
                    <td>Manika</td>
                    <td>B.Tech&nbsp;(M.E)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13162029</td>
                    <td>Rahul Yadav</td>
                    <td>B.Tech&nbsp;(M.E)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13162914</td>
                    <td>Ashish Garg</td>
                    <td>B.Tech&nbsp;(M.E)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13162012</td>
                    <td>Jitender Kumar</td>
                    <td>B.Tech&nbsp;(M.E)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13162909</td>
                    <td>Vikas Sharma</td>
                    <td>B.Tech(M.E)&nbsp;</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13032051</td>
                    <td>Sachin Sharma</td>
                    <td>B.Tech&nbsp;(Printing)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13032047</td>
                    <td>Ashish Soni</td>
                    <td>B.Tech&nbsp;(Printing)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13032041</td>
                    <td>Rishabh Chawla</td>
                    <td>B.Tech&nbsp;(Printing)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13032036</td>
                    <td>Anil Kumar</td>
                    <td>B.Tech&nbsp;(Printing)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Manyank Nawani</td>
                    <td>B.Tech&nbsp;(Printing)</td>
                    <td>13032027</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13032026</td>
                    <td>Deepak Sharma</td>
                    <td>B.Tech&nbsp;(Printing)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13032024</td>
                    <td>Hariom Sharma</td>
                    <td>B.Tech(Printing)&nbsp;</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13032020</td>
                    <td>Pardeep Poonia</td>
                    <td>B.Tech&nbsp;(Printing)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13032011</td>
                    <td>Sonu lohan</td>
                    <td>B.Tech&nbsp;(Printing)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>13032009</td>
                    <td>Mohit Suhag</td>
                    <td>B.Tech&nbsp;(Printing)</td>
                  </tr>
                </tbody>
              </table>
              </div>
              
          <div class="dividerHeading">
            <h4><span>On campus drive by Hatron Limited</span></h4>
          </div>
          <div class="dividerHeading">
            <h4><span>27/02/2017</span></h4>
          </div>
          <div style="overflow-x:auto;">
            <table class="table table-striped table-hover css-serial">
              <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Roll No.</th>
                  <th>Name</th>
                  <th>Course</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td>13013030</td>
                  <td>Dhiresh Kumar</td>
                  <td>B.Tech(C.S.E)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Komel</td>
                  <td>B.Tech(C.S.E)</td>
                  <td>13013051</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13013905</td>
                  <td>Arun Kumar</td>
                  <td>B.Tech(C.S.E)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13014036</td>
                  <td>Sukhvinder</td>
                  <td>B.Tech(I.T)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13014038</td>
                  <td>Vijay Hassanpuri</td>
                  <td>B.Tech(I.T)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13014931</td>
                  <td>Sanny Verma</td>
                  <td>B.Tech(I.T)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13152104</td>
                  <td>Shashank Prashar</td>
                  <td>B.Tech(C.S.E)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13013034</td>
                  <td>Govind Kumar</td>
                  <td>B.Tech(C.S.E)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13013060</td>
                  <td>Nikhil Arora</td>
                  <td>B.Tech(C.S.E)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13013120</td>
                  <td>Yogesh</td>
                  <td>B.Tech(C.S.E)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13152086</td>
                  <td>Ritika Sharma</td>
                  <td>B.Tech(C.S.E)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>11014907</td>
                  <td>Jitender</td>
                  <td>B.Tech(C.S.E)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13013036</td>
                  <td>Harshit Bhatt</td>
                  <td>B.Tech(C.S.E)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13013065</td>
                  <td>Pankaj Yadav</td>
                  <td>B.Tech(C.S.E)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13013071</td>
                  <td>Prakash</td>
                  <td>B.Tech(C.S.E)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13013098</td>
                  <td>Shivam Choudhary</td>
                  <td>B.Tech (C.S.E)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13013119</td>
                  <td>Yogesh</td>
                  <td>B.Tech(C.S.E)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13013909</td>
                  <td>Gourav</td>
                  <td>B.Tech(C.S.E)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Sachin Kumar</td>
                  <td>B.Tech(C.S.E)</td>
                  <td>13013919</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13014009</td>
                  <td>Balvinder</td>
                  <td>B.Tech(I.T)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>13014917</td>
                  <td>Mehak Girdhar</td>
                  <td>B.Tech(I.T)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>14012921</td>
                  <td>Ashish Gaur</td>
                  <td>MCA</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Vikash Singh</td>
                  <td>MCA</td>
                  <td>14012901</td>
                </tr>
                <tr>
                  <td></td>
                  <td>14012044</td>
                  <td>Veenu Rani</td>
                  <td>MCA</td>
                </tr>
                <tr>
                  <td></td>
                  <td>14012011</td>
                  <td>Heena Dhiman</td>
                  <td>MCA</td>
                </tr>
                <tr>
                  <td></td>
                  <td>14012929</td>
                  <td>Anju</td>
                  <td>MCA</td>
                </tr>
                <tr>
                  <td></td>
                  <td>14012007</td>
                  <td>Deepali Gupta</td>
                  <td>MCA</td>
                </tr>
              </tbody>
            </table>
          </div>
          
             <div class="dividerHeading">
                <h4><span>Off campus drive by Dic India Limited</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:22-02-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>13032004</td>
                      <td>Gaurav    Jawa</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13032014</td>
                      <td>Shaliesh    Kumar</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              
              <div class="dividerHeading">
                <h4><span>On campus drive by Amber Websoft</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:18-01-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>14012917</td>
                      <td>Sumeet    Kumar</td>
                      <td>MCA</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>14012913</td>
                      <td>JItender    Narang</td>
                      <td>MCA</td>
                    </tr>
                  </tbody>
                </table>
              </div>
               <div class="dividerHeading">
                <h4><span>On campus drive by Samaarambh Techno Mgmt Pvt.Ltd</span></h4>
              </div>
              
              <div class="dividerHeading">
              <h4><span>Date:17-01-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>13013919</td>
                      <td>Sachin Kumar</td>
                      <td>B.Tech(C.S.E)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13013928</td>
                      <td>Vishal    Yadav</td>
                      <td>B.Tech(C.S.E)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13013024</td>
                      <td>Deeksha    Bhatia</td>
                      <td>B.Tech(C.S.E)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13013103</td>
                      <td>Shweta    Rani</td>
                      <td>B.Tech(C.S.E)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>14012011</td>
                      <td>Heena    Dhiman</td>
                      <td>M.C.A</td>
                    </tr>
                  </tbody>
                </table>
              </div>
                <div class="dividerHeading">
                <h4><span>On campus drive by iMentor Knowledge Services</span></h4>
              </div>
		<div class="dividerHeading">
              <h4><span>Date:16-01-2017</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                   <tr>
                     <td></td>
                     <td>13013037</td>
                     <td>Hemant</td>
                     <td>B.Tech(C.S.E)</td>
                   </tr>
                   <tr>
                     <td></td>
                     <td>13152018</td>
                     <td>Apoorv Pandy</td>
                     <td>B.Tech(E.C.E)</td>
                   </tr>
                   <tr>
                     <td></td>
                     <td>13152002</td>
                     <td>Aarushi</td>
                     <td>B.Tech(E.C.E)</td>

                   </tr>
                   <tr>
                     <td></td>
                     <td>13152032</td>
                     <td>Hanish</td>
                     <td>B.Tech(E.C.E)</td>

                   </tr>
                   <tr>
                     <td></td>
                     <td>15105010</td>
                     <td>Shafaq    Khan</td>
                     <td>M.B.A(MKTG)</td>

                   </tr>
                  </tbody>
                </table>
              </div>
              
              <div class="dividerHeading">
                <h4><span>Off campus drive by Sakata Inc</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:18-12-2016</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>13032001</td>
                      <td>Shailesh    Chauhan</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13032018</td>
                      <td>Amit</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13032034</td>
                      <td>Vikarant</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13032042</td>
                      <td>Mayank    Chhabra</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
               <div class="dividerHeading">
                <h4><span>Joint campus drive by Wipro</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:18-10-2016</span></h4>
            </div>
              <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>13013017</td>
                      <td>Ashish Kumar</td>
                      <td>B.Tech(C.S.E)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13013039</td>
                      <td>Himani Goel</td>
                      <td>B.Tech(C.S.E)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13152029</td>
                      <td>Dhruv Kajal</td>
                      <td>B.Tech(E.C.E)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13152038</td>
                      <td>Komal Singal</td>
                      <td>B.Tech(E.C.E)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13013004</td>
                      <td>Ajay Baghela</td>
                      <td>B.Tech(C.S.E)</td>
                    </tr>
                  </tbody>
                </table>
                </div>
                
              
                
              <div class="dividerHeading">
                <h4><span>Off campus drive by ITC</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:05-08-2016</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>12033027</td>
                      <td>Siddhant    Arya</td>
                      <td>B.Tech(Packaging)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>12032904</td>
                      <td>Rohit    Asija</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>12032009</td>
                      <td>Arun    Kumar</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>15101063</td>
                      <td>Surender    Singh</td>
                      <td>M.B.A</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>15103048</td>
                      <td>Manish    Kumar</td>
                      <td>M.COM</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>15105012</td>
                      <td>Ashish    Anand</td>
                      <td>M.B.A</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>13013020</td>
                      <td>Bhavik    Garg</td>
                      <td>B.Tech(C.S.E)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <div class="dividerHeading">
                <h4><span>Off Campus drive by Prem Industries Pvt. Ltd</span></h4>
              </div>
              <div class="dividerHeading">
                <h4><span> Date: 28-07-2016</span></h4>
              </div>
              <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>12032013</td>
                      <td>Dinesh</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>12032014</td>
                      <td>Gaurav</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>12032037</td>
                      <td>Rakesh</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>12032050</td>
                      <td>Sunil Kumar</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>12033039</td>
                      <td>Terath Dass</td>
                      <td>B.Tech(Pakaging)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>12033004</td>
                      <td>Amit</td>
                      <td>B.Tech(Packaging)</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>12032047</td>
                      <td>Sumit Mehta</td>
                      <td>B.Tech(Printing)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>12032049</td>
                      <td>Sunil Bhukal</td>
                      <td>B.Tech(printing)</td>
                    </tr>
                  </tbody>
                </table>
                </div>
           <div class="dividerHeading">
                <h4><span>Off campus drive by SysCom</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:17-07-2016</span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>12032048</td>
                      <td>Sumit    Kumar</td>
                      <td>B.Tech(ptg)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
                <div class="dividerHeading">
                <h4><span>Joint campus drive by Daffodil</span></h4>
              </div>
              <div class="dividerHeading">
              <h4><span>Date:09-01-2016 </span></h4>
            </div>
            <div style="overflow-x:auto;">
                <table class="table table-striped table-hover css-serial">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Roll No.</th>
                      <th>Name</th>
                      <th>Course</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>13013034</td>
                      <td>Govind    Kumar</td>
                      <td>B.Tech(C.S.E)</td>
                    </tr>
                  </tbody>
                </table>
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

                
                
                
               
                
                
             
             
             


              
              

             

              
             
              
              
