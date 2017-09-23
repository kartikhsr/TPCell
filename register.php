
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Registration:T&amp;P Cell</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="User Register Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Amaranth:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <div class="content">
		<h1>User Register Form </h1>
		<div class="main">
			<h2>Register Your Account Here</h2>
			
			<form  method="post" action="bregister.php">
				<h5>Student Name</h5>
				<input type="text" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required>
				<h5>Roll No</h5>
				<input type="text" name="roll"   onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required>
                <h5>Programme</h5>
				<select name="programme" >
                <option value="B.tech">B.tech </option>
                <option value="M.tech">M.tech</option>
                <option value="MBA"> MBA</option>
                <option value="MCA">MCA</option>
                <option value="B.Pharma"> B.Pharma</option>
                <option value="M.Pharma">M.Pharma</option>
                <option value="M.SC">M.SC</option>
                <option value="B.SC">B.SC</option>
                <option value="M.Com">M.Com</option>
                <option value="BPT">Bachelor of Physiotherapy</option>
                <option value="MPT">Master of Physiotherapy</option>                
               
                </select>
                <br/> <br/>
                <h5>Gender</h5>
                <select name="gender">
                <option value="Male"> Male </option>
                <option value="Female"> Female</option>
                </select>
                <br/> <br/>
                <h5>Mobile No</h5>
				<input type="text" name="mob"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required>
                
                <h5>Email Id</h5>
				<input type="email" name="email"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-Mail';}" required>
                
                
                <br/> <br/>
				<h5>Password</h5>
				<input type="password" name="pass"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"  required>
				<h5>Confirm password</h5>
				<input type="password" name="pass"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required>
                
				<input type="submit" value="Register" required>                 
			</form>
		</div>
		<p class="footer">&copy; 2017 T&amp;P Cell GJUS&amp;T. All Rights Reserved | Design by <a href="#"> GJU STUDENTS</a></p>
	</div>
</body>
</html>
