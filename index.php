<!doctype html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>doc website</title>
</head>
<body ng-app="validationApp" ng-controller="mainController">
<div class="wrapper">
	<?php include_once('nav.php'); ?>

        <div class="site-content"> <!-- header -->
		<div class="banner col-md-9">
			<?php include_once('carousel.php'); ?>
		</div>
		<div class="col-md-3">
			<?php include_once('enquire.php'); ?>
		</div>
	</div>
	<div class="site-content"><!-- content -->
		<!-- Left Nav -->
		<?php include_once('LeftNav.php'); ?>
		<div class="content">
			<h1>Welcome to New China Acupuncture Centre</h1>
			<p>The ancient Chinese people discovered a blueprint for the human body. A timeless system so powerful that it has survived more than 5,000 years. Today, this system for promoting health and wellbeing is known as Traditional Chinese Medicine.</p>
			<p>As the Western world rediscovers the benefits of the traditional Chinese healing arts, modalities such as Acupuncture and Chinese Herbal Medicine are being recognised for their ability to treat numerous diseases and promote wellbeing, whilst providing a more holistic approach to health.</p>
			<p>I invite you to browse this site for an introduction to the wonderful world of Traditional Chinese Medicine and discover what Acupuncture & Chinese Herbal Medicine can do for you. Come and experience these ancient healing modalities for yourself and see how you too can reap the benefits of an ageless tradition.</p>
			<p>As a practitioner of 35 years in TCM, my expertise is in treating the following conditions:</p>
			<div class="service">
				<ul>
					<li>Acupuncture Facelift</li>
					<li>Back Pain</li>
					<li>Bell’s Palsy</li>
					<li>Cough & Bronchitis</li>
					<li>Fatigue</li>
					<li>Fever & Coughs</li>
				</ul>
			</div>
			<div class="service">
				<ul>
					<li>Headaches & Migraines</li>
					<li>Infertility</li>
					<li>Neck & Shoulder Pain</li>
					<li>Skin Complaints</li>
					<li>Stress/Anxiety</li>
					<li>Sport Injuries</li>
				</ul>
			</div>
		</div>
        </div>

	<!-- Footer -->
	<?php include_once('footer.php'); ?>
</div>
</body>
</html>
