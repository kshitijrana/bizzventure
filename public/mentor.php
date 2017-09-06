<?php
session_start();
$message = "";
if(isset($_SESSION["m_wrong"]))
{
	$message = "Please enter the details again.";
	unset($_SESSION["m_wrong"]);
}
?>
<!doctype html>
<html>
<head>
	<title>Bizzventure</title>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style>
		#h_sem{
			background: transparent;
			padding: 0 0.75rem;
			border: solid 2px rgba(255, 255, 255, 0.25);
			border-radius: 0.25rem;
			height:2.5rem;
			width: 100%;
		}
		</style>
</head>
<body>
<div id="page-wrapper">
<div id="wrapper">
<section class="panel color4-alt">
								<div class="intro color4">
									<h1 class="major" style="font-family:'Questrial',sans-serif;font-weight:100;">Bizzventure</h1>
									<h2 class="major" style="font-family:'Questrial',sans-serif;font-weight:100;">Contact</h2>
									<p>For any queries, please contact :-</p>
									<ul>
										<li><b>Mayank - +91 9845654051</b></li>
										<li><b>Harshini - +91 9066257352</b></li>
									</ul>
								</div>
								<div class="inner columns divided">
									<div class="span-3-25">
									<h2>Team Mentor</h2>
        <form method="POST" action="../includes/check_mentor.php" id="reg_det">
	<?php echo $message;?>
	<div class="field half">
	<input type="text" name="m_name" required id="m_name" placeholder="Name" pattern="^\s*[a-zA-Z ']{2,}" title="Name cannot contain numbers or special characters. It should have at least 2 characters."></div>
	<div class="field half">
	<input type="text" name="m_branch" required id="m_branch" placeholder="Department" pattern="^\s*[A-Za-z ]{3,}" title="Department name cannot contain numbers or special characters. It should have at least 3 characters."></div>
	<div class="field half">
	<input type="text" name="m_inst" required id="m_inst" placeholder="Institution" pattern="^\s*[A-Za-z ]{3,}" title="Institution name cannot contain numbers or special characters. It should have at least 3 characters."></div>
	<div class="field half">
	<input type="text" name="m_phone" required id="m_phone" placeholder="Phone" pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$" title="Phone number format: +(Country code) (10 digit phone number)"></div>
	<div class="field half">
	<input type="email" name="m_email" required id="m_email" placeholder="Email"></div>

										</form>
										<input type="submit" name="submit" value="Next" class="button special" form="reg_det"/>
										<a href="idea_des1.php"><button class="button special">Skip</button></a>
																			</div>
									<div class="span-1-5">
										<h2 class="major" style="font-family:'Questrial',sans-serif;font-weight:100;font-size:40px;">TechTatva '17</h2>
										<ul class="contact-icons color1">
											<li class="icon fa-facebook"><a href="https://www.facebook.com/MITtechtatva/">facebook.com/MITtechtatva</a></li>
											<li class="icon fa-twitter"><a href="https://twitter.com/mittechtatva?lang=en">@MITtechtatva</a></li>
											<li class="icon fa-instagram"><a href="https://www.instagram.com/mittechtatva/">@mittechtatva</a></li>
											
										</ul>
										<br>
										<br>
										<h3 style="font-family:'Questrial',sans-serif;font-weight:100;font-size:13px;"><b>Designed by <a>System Admin</a> in MIT, Manipal.</b></h3>
									</div>
								</div>
							</section>

					</div>

			</div>
</body>
</html>

