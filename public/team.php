<?php
session_start();
$message = "";
if(isset($_SESSION["h_wrong"]))
{
	$message = "Please enter the details again.";
	unset($_SESSION["h_wrong"]);
}
?>
<!doctype html>
<html>
<head>
	<title>Bizzventure</title>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="assets/css/main2.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style>
		#t_1_sem, #t_0_sem, #t_2_sem, #t_3_sem, #t_4_sem{
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
									<div class="span-5-25">
									<h2>Team Details</h2>
        <form method="POST" action="../includes/check_team.php" id="reg_det">
	<?php echo $message;?>
	<div class="field sixth">
	<input type="text" name="t_0_name" required id="t_0_name" placeholder="Name" pattern="^\s*[a-zA-Z ']{2,}" title="No numbers or special characters allowed. Length greater than 2."></div>
	<div class="field sixth">
	<input type="text" name="t_0_branch" required id="t_0_branch" placeholder="Branch/Specialization" pattern="^\s*[A-Za-z ]{3,}" title="No numbers or special characters allowed. Length greater than 3."></div>
	<div class="field sixth">
	<input type="text" name="t_0_inst" required id="t_0_inst" placeholder="Institution" pattern="^\s*[A-Za-z ]{3,}" title="No numbers or special characters allowed. Length greater than 3."></div>
	<div class="field sixth">
	<input type="text" name="t_0_sem" required  id="t_0_sem" placeholder="Semester" pattern="[1-8]{1,1}" title="Semester should be between 1 and 8."></div>
	<div class="field sixth">
	<input type="text" name="t_0_phone" required id="t_0_phone" placeholder="Phone" pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$" title="Country code followed by 10 digit mobile number"></div>
	<div class="field sixth">
	<input type="email" name="t_0_email" required id="t_0_email" placeholder="Email"><br>
	</div>
	<div class="field sixth">
	<input type="text" name="t_1_name"  id="t_1_name" placeholder="Name" pattern="^\s*[a-zA-Z ']{2,}" title="No numbers or special characters allowed. Length greater than 2."></div>
	<div class="field sixth">
	<input type="text" name="t_1_branch"  id="t_1_branch" placeholder="Branch/Specialization" pattern="^\s*[A-Za-z ]{3,}" title="No numbers or special characters allowed. Length greater than 3."></div>
	<div class="field sixth">
	<input type="text" name="t_1_inst"  id="t_1_inst" placeholder="Institution" pattern="^\s*[A-Za-z ]{3,}" title="No numbers or special characters allowed. Length greater than 3."></div>
	<div class="field sixth">
	<input type="text" name="t_1_sem"  id="t_1_sem" placeholder="Semester" pattern="[1-8]{1,1}" title="Semester should be between 1 and 8."></div>
	<div class="field sixth">
	<input type="text" name="t_1_phone"  id="t_1_phone" placeholder="Phone" pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$" title="Country code followed by 10 digit mobile number"></div>
	<div class="field sixth">
	<input type="email" name="t_1_email"  id="t_1_email" placeholder="Email"><br>
	</div>
	<div class="field sixth">
	<input type="text" name="t_2_name"  id="t_2_name" placeholder="Name" pattern="^\s*[a-zA-Z ']{2,}" title="No numbers or special characters allowed. Length greater than 2."></div>
	<div class="field sixth">
	<input type="text" name="t_2_branch"  id="t_2_branch" placeholder="Branch/Specialization" pattern="^\s*[A-Za-z ]{3,}" title="No numbers or special characters allowed. Length greater than 3."></div>
	<div class="field sixth">
	<input type="text" name="t_2_inst"  id="t_2_inst" placeholder="Institution" pattern="^\s*[A-Za-z ]{3,}" title="No numbers or special characters allowed. Length greater than 3."></div>
	<div class="field sixth">
	<input type="text" name="t_2_sem"  id="t_2_sem" placeholder="Semester" pattern="[1-8]{1,1}" title="Semester should be between 1 and 8."></div>
	<div class="field sixth">
	<input type="text" name="t_2_phone"  id="t_2_phone" placeholder="Phone" pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$" title="Country code followed by 10 digit mobile number"></div>
	<div class="field sixth">
	<input type="email" name="t_2_email"  id="t_2_email" placeholder="Email"><br>
	</div>
	<div class="field sixth">
	<input type="text" name="t_3_name"  id="t_3_name" placeholder="Name" pattern="^\s*[a-zA-Z ']{2,}" title="No numbers or special characters allowed. Length greater than 2."></div>
	<div class="field sixth">
	<input type="text" name="t_3_branch"  id="t_3_branch" placeholder="Branch/Specialization" pattern="^\s*[A-Za-z ]{3,}" title="No numbers or special characters allowed. Length greater than 3."></div>
	<div class="field sixth">
	<input type="text" name="t_3_inst"  id="t_3_inst" placeholder="Institution" pattern="^\s*[A-Za-z ]{3,}" title="No numbers or special characters allowed. Length greater than 3."></div>
	<div class="field sixth">
	<input type="text" name="t_3_sem"  id="t_3_sem" placeholder="Semester" pattern="[1-8]{1,1}" title="Semester should be between 1 and 8."></div>
	<div class="field sixth">
	<input type="text" name="t_3_phone"  id="t_3_phone" placeholder="Phone" pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$" title="Country code followed by 10 digit mobile number"></div>
	<div class="field sixth">
	<input type="email" name="t_3_email"  id="t_3_email" placeholder="Email"><br>
	</div>
	<div class="field sixth">
	<input type="text" name="t_4_name"  id="t_4_name" placeholder="Name" pattern="^\s*[a-zA-Z ']{2,}" title="No numbers or special characters allowed. Length greater than 2."></div>
	<div class="field sixth">
	<input type="text" name="t_4_branch"  id="t_4_branch" placeholder="Branch/Specialization" pattern="^\s*[A-Za-z ]{3,}" title="No numbers or special characters allowed. Length greater than 3."></div>
	<div class="field sixth">
	<input type="text" name="t_4_inst"  id="t_4_inst" placeholder="Institution" pattern="^\s*[A-Za-z ]{3,}" title="No numbers or special characters allowed. Length greater than 3."></div>
	<div class="field sixth">
	<input type="text" name="t_4_sem"  id="t_4_sem" placeholder="Semester" pattern="[1-8]{1,1}" title="Semester should be between 1 and 8."></div>
	<div class="field sixth">
	<input type="text" name="t_4_phone"  id="t_4_phone" placeholder="Phone" pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$" title="Country code followed by 10 digit mobile number"></div>
	<div class="field sixth">
	<input type="email" name="t_4_email"  id="t_4_email" placeholder="Email"><br>
	</div>
<ul class="actions">
												<li><input type="submit" name="submit" value="Next" class="button special" /></li>
											</ul>
										</form>
									</div>
									<!--<div class="span-1-5">
										<h2 class="major" style="font-family:'Questrial',sans-serif;font-weight:100;font-size:40px;">TechTatva '17</h2>
										<ul class="contact-icons color1">
											<li class="icon fa-facebook"><a href="https://www.facebook.com/MITtechtatva/">facebook.com/MITtechtatva</a></li>
											<li class="icon fa-twitter"><a href="https://twitter.com/mittechtatva?lang=en">@MITtechtatva</a></li>
											<li class="icon fa-instagram"><a href="https://www.instagram.com/mittechtatva/">@mittechtatva</a></li>
											
										</ul>
										<br>
										<br>
										<h3 class="anim3" style="font-family:'Questrial',sans-serif;font-weight:100;font-size:13px;"><b>Designed by <a>System Admin</a> in MIT, Manipal.</b></h3>
									</div>-->
								</div>
							</section>

					</div>

			</div>
</body>
</html>