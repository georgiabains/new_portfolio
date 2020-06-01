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

		<h2>Open UToronto</h2>
        <h3>> core website<span class="blinking-underscore">_</span></h3>

        <div class="project-basic-info">
            <div class="info-column">
                <h4>year</h4>
                <p>2018</p>
            </div>
            <div class="info-column">
                <h4>role</h4>
                <p>Web Design & Web Development</p>
            </div>
            <div class="info-column">
                <h4>company</h4>
                <p>Online Learning Strategies, University of Toronto</p>
            </div>
        </div>

        <figure>
            <img src="">
            <figcaption>Screenshots of home page.</figcaption>
        </figure>

        <p class="description">
            Open UToronto is a University of Toronto Initiative that focuses on delivering open (read: free) content provided by the University, to students, faculty, alumni, and the general public. I was contracted by UofT's Online Learning Strategies department to revamp the old site - keeping in mind SEO and accessible design.
        </p>

        <figure class=image-collage">
            <img class="top-left" src="">
            <img class="main-image" src="">
            <img class="bottom-right" src="">
            <figcaption>screenshots</figcaption>
        </figure>

        <p class="description">
            Designing this website overhaul involved careful inspection of the past site's layout and its analytics. I was given complete creative control over this re-design, and so I changed many structural elements of the site, including the navigation link hierarchy, and removing duplicate content in various pages.
        </p>

        <figure>
            <img src="">
            <figcaption>screenshot</figcaption>
        </figure>

        <p class="description">
            I coded the site locally using MAMP (MacOs, Apache, MySQL, PHP) and WordPress. I ensured that the menus worked with WordPress' internal code, and that updating the content would be straightforward. The final design involved clean and simple sections, with the site's content and information being the main focus.
        </p>

        <figure>
            <video loop muted class="play-on-hover">
                <source src="">
            </video>
            <div class="video-controls">
                <button class="play"><i class="fa fa-play"></i> Play</button>
                <button class="pause"><i class="fa fa-pause"></i> Pause</button>
            </div>
            <figcaption class="video-caption">screen recording</figcaption>
        </figure>

        <a href="../projects.php" class="bracket-link">view all projects</a>

	</section>

</main>

<?php include "../_footer.php";?>
</body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
</html>