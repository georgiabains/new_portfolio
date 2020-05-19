<!DOCTYPE html>
<html lang="en">

    <head>

    	<title>Georgia Bains</title>

    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="../css/styles.css?<?php echo time(); ?>">

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
    </head>

    <body>
<?php include "../_header.php";?>

<main>

	<section class="project-page-details">

		<h2>Volaris Group</h2>
		<h3>> core website<span class="blinking-underscore">_</span></h3>

		<div class="project-basic-info">
			<div class="info-column">
				<h4>year</h4>
				<p>2019</p>
			</div>
			<div class="info-column">
				<h4>role</h4>
				<p>Web Development</p>
			</div>
			<div class="info-column">
				<h4>company</h4>
				<p>Volaris Group</p>
			</div>
		</div>

		<figure>
			<img src="../img/projects/volaris/volaris_mockup_one.png">
			<figcaption>A screenshot of the landing page on a MacBook, iPad, and iPhone.</figcaption>
		</figure>

		<p class="description">Working as a web developer for Volaris Group's marketing department, I helped implement the redesign for the company's core website. My primary objective was to ensure the site was fully responsive and met Web Content Accessiblity Guidelines (<a href="https://www.w3.org/WAI/standards-guidelines/wcag/">WCAG 2.0</a>).</p>

		<figure class="image-collage">
			<img class="top-left" src="../img/projects/volaris/volaris_mobile_four.PNG">
			<img class="main-image" src="../img/projects/volaris/volaris_mobile_two.gif">
			<img class="bottom-right" src="../img/projects/volaris/volaris_mobile_seven.PNG">
			<figcaption>Two screenshots of the About and Home page, and one GIF showing the hamburger menu. iPhone X (375 x 812px) resolution.</figcaption>
		</figure>

		<p class="description">I developed the site locally using MAMP (Mac, Apache, MySQL, PHP), in collaboration with Volaris Group's Senior Web Developer. We used Git to ensure that any updates to the code were reflected in our individual work. We published the site on ExpressionEngine.</p> 

		<figure>
			<img src="../img/projects/volaris/volaris_mockup_two.png">
			<figcaption>Two screenshots of the site's landing page, displayed on iPhones.</figcaption>
		</figure>

		<p class="description">Accessibility was a vital component of Volaris Group's website, as the site used a myriad of embedded content to demonstrate its message. This included carousels with embedded videos and pop-up boxes for email lists. In order to ensure that this information was available to anyone with disabilties, I coded JavaScript functions that allowed for navigating the site with a keyboard (e.g. using the 'tab' and 'enter' keys) to pause the carousel, and enter and exit from any pop-up box.</p>

		<div class="project-column">
			<div class="column-small">
				<figure>
					<img src="../img/projects/volaris/volaris_mockup_five.png">
					<figcaption>A screenshot of the site's landing page displayed on an iPhone, with the menu expanded.</figcaption>
				</figure>
			</div>
			<div class="column-large">
				<p>As new devices are constanty being introduced, i designed the responsive breakpoints based on natural breaks in the site's content, to ensure that this website stands the test of time and can be accessed from any device.</p>
			</div>
		</div>

		<p class="description">
			We used jQuery to manage the display of large amounts of content, most noteably on the Home and About pages. Mouse over the images below to see the jQuery in action, or select the corresponding play button.
		</p>

		<figure>
			<video loop muted class="play-on-hover">
				<source src="../img/projects/volaris/volaris_desktop_three.mov">
			</video>
			<div class="video-controls">
				<button class="play"><i class="fa fa-play"></i> Play</button>
				<button class="pause"><i class="fa fa-pause"></i> Pause</button>
			</div>
			<figcaption class="video-caption">A screen recording of the carousel on the home page.</figcaption>
		</figure>

		<figure>
			<video loop muted class="play-on-hover">
				<source src="../img/projects/volaris/volaris_desktop_four.mov">
			</video>
			<div class="video-controls">
				<button class="play"><i class="fa fa-play"></i> Play</button>
				<button class="pause"><i class="fa fa-pause"></i> Pause</button>
			</div>
			<figcaption class="video-caption">A screen recording of the timeline on the About page.</figcaption>
		</figure>

		<a href="../projects.php" class="bracket-link">view all projects</a>

	</section>

</main>

<?php include "../_footer.php";?>
</body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
</html>