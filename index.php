<?php
session_start();
require_once 'class.user.php';

$user = new USER();

if(isset($_POST['submit']))
{
	$username = $user->test_input(filter_var($_POST['username'],FILTER_SANITIZE_STRING));
	$email = $user->test_input(filter_var($_POST['email'],FILTER_SANITIZE_EMAIL));
	$mobile_no = $user->test_input(filter_var($_POST['mobile_no'],FILTER_VALIDATE_INT));
	if($user->register($username,$email,$mobile_no)==true)
		$msg="Your are Successfully Registered!";
	else
		$msg="Sorry some error occured. Please try again.";
}
if (!empty($msg)) 
	echo $msg;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Landing Page | Upx Academy</title>
<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
</head>
<body>
<header>
	<div class="col-1">
		<img src="assets/images/Logo.png" />
	</div>
	<div id="Header-Mid" class="col-9">
		<p>Toll-free number 1800-123-1260</p>
	</div>
	<div id="Header-Right" class="col-1">
		<img src="assets/images/Tech-Mahindra.png" />
	</div>
</header>
<div id="Live-Container">
	<div id="Live-Title">
		<img src="assets/images/laptop.png">
		<span><a href="http://www.youtube.com">Live &amp; Interactive</a></span>
	</div>
	<div id="Live-Body">
	<div id="Live-Heading">
		<p>FAST TRACK YOUR CAREER WITH BIG DATA ANALYTICS</p>
	</div>
		<div id="Live-Left" class="col-6">
			<p>PRESENTING</p>
			<p>INDIA'S LARGEST</p>
			<p><b>BIG DATA ANALYTICS</b> CAREER SERIES</p>
			<p>19TH FEB ONWARDS</p>
			<form action="" method="post">
				<input type="text" name="username" id="username" onblur="checkUser()" placeholder="Name" required="true" />
				<span id="user_status"></span>
				<input type="email" name="email" id="email" onblur="checkEmail()"  placeholder="Email" required="true" />
				<span id="email_status"></span>
				<input type="number" name="mobile_no" placeholder="Mobile No" required="true" />
				<input type="submit" name="submit" value="REGISTER FOR FREE" />
			</form>
		</div>
		<fieldset class="col-5">
			<legend>LEARN FROM<br/>TOP PRACTITIONERS</legend>
			<img src="assets/images/hp.png" />
			<img src="assets/images/salesforce.png" />
			<img src="assets/images/hortonworks.png" />
			<img src="assets/images/ebay.png" />
			<img src="assets/images/amadeus.png" />
			<img src="assets/images/amazon.png" />
		</fieldset>
	</div>
</div>
<div id="Agenda">
	<img src="assets/images/Agenda.png">
</div>
<div id="Data-Container">
	<div id="Data-Title">
		<span>Speakers</span>
	</div>
	<div id="Data-Body">
	<hr class="col-11" />
	<img id="Data-Body-fav" src="assets/images/speaker.png"/>
		<div id="Speakers-Grid" class="col-2">
			<div id="Speaker-Image">
				<img src="assets/images/manvender-singh.jpg" />
			</div>
			<div id="Speaker-Data">
				<a href="https://www.linkedin.com/in/manvenders/"><span>Manvender Singh</span>
				<p>Founder, UpX Academy</p></a>
			</div>
		</div>
		<div id="Speakers-Grid" class="col-2">
			<div id="Speaker-Image">
				<img src="assets/images/Sandeep Tompala.jpg" />
			</div>
			<div id="Speaker-Data">
				<a href="https://www.linkedin.com/in/sandeep-tompala-795b4b13/"><span>Sandeep Tompala</span>
				<p>Data Scientist, Twitter</p></a>
			</div>
		</div>
		<div id="Speakers-Grid" class="col-2">
			<div id="Speaker-Image">
				<img src="assets/images/manvender-singh.jpg" />
			</div>
			<div id="Speaker-Data">
				<a href="https://www.linkedin.com/in/manvenders/"><span>Manvender Singh</span>
				<p>Founder, UpX Academy</p></a>
			</div>
		</div>
		<div id="Speakers-Grid" class="col-2">
			<div id="Speaker-Image">
				<img src="assets/images/manvender-singh.jpg" />
			</div>
			<div id="Speaker-Data">
				<a href="https://www.linkedin.com/in/manvenders/"><span>Manvender Singh</span>
				<p>Founder, UpX Academy</p></a>
			</div>
		</div>
	</div>
</div>
<div id="Data-Container">
	<div id="Data-Title">
		<span>SESSIONS</span>
	</div>
	<div id="Data-Body">
	<hr class="col-11" />
	<img id="Data-Body-fav"  src="assets/images/session.png"/>
		<div id="Sessions-Grid" class="col-3">
			<div id="Session-Title">
				<span>10th Dec, 2016 | Online</span>
			</div>
			<div id="Session-Body">
				<p>How to crack Big Data &amp; Data Science roles withAnalytics Vidhya</p>
			</div>
		</div>
		<div id="Sessions-Grid" class="col-3">
			<div id="Session-Title">
				<span>10th Dec, 2016 | Online</span>
			</div>
			<div id="Session-Body">
				<p>How to crack Big Data &amp; Data Science roles withAnalytics Vidhya</p>
			</div>
		</div>
		<div id="Sessions-Grid" class="col-3">
			<div id="Session-Title">
				<span>10th Dec, 2016 | Online</span>
			</div>
			<div id="Session-Body">
				<p>How to crack Big Data &amp; Data Science roles withAnalytics Vidhya</p>
			</div>
		</div>
		<div id="Sessions-Grid" class="col-3">
			<div id="Session-Title">
				<span>10th Dec, 2016 | Online</span>
			</div>
			<div id="Session-Body">
				<p>How to crack Big Data &amp; Data Science roles withAnalytics Vidhya</p>
			</div>
		</div>
		<div id="Sessions-Grid" class="col-3">
			<div id="Session-Title">
				<span>10th Dec, 2016 | Online</span>
			</div>
			<div id="Session-Body">
				<p>How to crack Big Data &amp; Data Science roles withAnalytics Vidhya</p>
			</div>
		</div>
		<div id="Sessions-Grid" class="col-3">
			<div id="Session-Title">
				<span>10th Dec, 2016 | Online</span>
			</div>
			<div id="Session-Body">
				<p>How to crack Big Data &amp; Data Science roles withAnalytics Vidhya</p>
			</div>
		</div>
	</div>
</div>
<div id="Data-Container">
	<div id="Data-Title">
		<span>About Us</span>
	</div>
	<div id="Data-Body">
	<hr class="col-11" />
	<img id="Data-Body-fav"  src="assets/images/about.png"/>
		<p>In this digital era, the right data tools have the power to transform businesses by giving them a definitive edge. Powered and promoted by Tech Mahindra,one of the foremost names in Information Technology today, UpX is a world class education venture for Big Data professionals. We recognize both thechallenge and opportunity, and are committed to educating and empowering professionals through transformational courses. </p>
	</div>
</div>
<div id="Courses">
	<div id="Courses-Title">
		<span>OUR COURSES</span>
	</div>
	<div id="Left-Course" class="col-5">
		<div id="Left-Course-Content">
		<p>BIG DATA</p>
		<hr/>
		<ul>
			<a href="http://upxacademy.com"><li>HADOOP</li></a>
			<a href="http://upxacademy.com"><li>APACHE SPARK</li></a>
			<a href="http://upxacademy.com"><li>MONGO DB</li></a>
		</ul>
		<a href="http://upxacademy.com"><span>KNOW MORE</span></a>
		</div>
	</div>
	<div id="Right-Course" class="col-5">
		<div id="Right-Course-Content">
		<p>DATA SCIENCE</p>
		<hr/>
		<ul>
			<a href="http://upxacademy.com"><li>DATA ANALYTICS</li></a>
			<a href="http://upxacademy.com"><li>MACHINE LEARNING</li></a>
			<a href="http://upxacademy.com"><li>TABLEAU</li></a>
		</ul>
		<a href="http://upxacademy.com"><span>KNOW MORE</span></a>
		</div>
	</div>
</div>
<footer>
	<div id="Footer-Left" class="col-3">
		<p><a href="http://www.upxacademy.com" target="blank">www.upxacademy.com</a></p>
		<p><a href="mailto:">Email : info@upxacademy.com</a></p>
	</div>
	<div id="Footer-Right">
	<p>&copy; 2017 Upx. All Rights Reserved</p>
	</div>
</footer>
</body>
</html>

<script type="text/javascript">
function checkUser() {
	jQuery.ajax({
	url: "check_user.php",
	data:'username='+$("#username").val(),
	type: "POST",
	success:function(data){
		$("#user_status").html(data);
	},
	error:function (){}
	});
}

function checkEmail(){
	jQuery.ajax({
	url: "check_user.php",
	data:'email='+$("#email").val(),
	type: "POST",
	success:function(data){
		$("#email_status").html(data);
	},
	error:function (){}
	});
}
</script>