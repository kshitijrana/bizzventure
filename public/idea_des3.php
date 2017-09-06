<?php
session_start();
$message = "";
if(isset($_SESSION["des3_wrong"]))
{
	$message = "Please enter the details again.";
	unset($_SESSION["des3_wrong"]);
}

echo '
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
		textarea{
			resize:none;
		}
		input{
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
									<h1 class="major" style="font-family:Questrial,sans-serif;font-weight:100;">Bizzventure</h1>
									<h2 class="major" style="font-family:Questrial,sans-serif;font-weight:100;">Contact</h2>
									<p>For any queries, please contact :-</p>
									<ul>
										<li><b>Mayank - +91 9845654051</b></li>
										<li><b>Harshini - +91 9066257352</b></li>
									</ul>
								</div>
								<div class="inner columns divided">
									<div class="span-3-25">
									<h2>Idea Details:</h2>
        <form method="POST" action="../includes/check_idea_des3.php" id="reg_det">
        <?php echo $message;?>';

$team_size = $_SESSION["team_size"];
$i = 0;
for(; $i < $team_size; $i++)
{
	echo '<div class="field third"><input name="name_'.$i.'" value="'.$_SESSION["t_".$i."_name"].'" readonly></div>';
	echo '<div class="field third"><input name="title_'.$i.'" required placeholder="Title" pattern="^\s*[a-zA-Z ]{3,}" title="Numbers or special characters not allowed. Length >= 3."></div>';
	echo '<div class="field third"><input name="contribution_'.$i.'" required placeholder="Contribution (min. 15 characters)" pattern="^\s*[a-zA-Z \']{15,}" title="Numbers or special characters no allowed. Length >= 15."></div>';
	echo '<br>';
}
echo '<div class="field third"><input name="h_name_'.$i.'" value="'.$_SESSION["h_name"].'" readonly></div>';
echo '<div class="field third"><input name="h_title" required placeholder="Title" pattern="^\s*[a-zA-Z ]{3,}" title="Numbers or special characters not allowed. Length >= 3."></div>';
echo '<div class="field third"><input name="h_contribution" required placeholder="Contribution (min. 15 characters)" pattern="^\s*[a-zA-Z \']{15,}" title="Numbers or special characters no allowed. Length >= 15."></div>';
	echo '</form>
										<input type="submit" name="submit" value="Next" class="button special" form="reg_det"/>
										</div>
									<div class="span-1-5">
										<h2 class="major" style="font-family:Questrial,sans-serif;font-weight:100;font-size:40px;">TechTatva 17</h2>
										<ul class="contact-icons color1">
											<li class="icon fa-facebook"><a href="https://www.facebook.com/MITtechtatva/">facebook.com/MITtechtatva</a></li>
											<li class="icon fa-twitter"><a href="https://twitter.com/mittechtatva?lang=en">@MITtechtatva</a></li>
											<li class="icon fa-instagram"><a href="https://www.instagram.com/mittechtatva/">@mittechtatva</a></li>
											
										</ul>
										<br>
										<br>
										<h3 style="font-family:Questrial,sans-serif;font-weight:100;font-size:13px;"><b>Designed by <a>System Admin</a> in MIT, Manipal.</b></h3>
									</div>
								</div>
							</section>

					</div>

			</div>
</body>
</html>';
?>