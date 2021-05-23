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

		<h2>Volaris Food Tech</h2>
        <h3>> microsite<span class="blinking-underscore">_</span></h3>

        <div class="project-basic-info">
            <div class="info-column">
                <h4>year</h4>
                <p>2021</p>
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
            <img src="../img/projects/foodtech/">
            <figcaption>Lorem ipsum.</figcaption>
        </figure>

        <p class="description">Lorem ipsum.</p>

        <figure class="image-collage">
            <img class="top-left" src="../img/projects/foodtech/">
            <img class="main-image" src="../img/projects/foodtech/">
            <img class="bottom-right" src="../img/projects/foodtech/">
            <figcaption>Lorem ipsum.</figcaption>
        </figure>

        <p class="description">
            Lorem ipsum.
        </p>

        <figure>
            <img src="../img/projects/foodtech/">
            <figcaption>Lorem ipsum.</figcaption>
        </figure>

        <p class="description">
            Lorem ipsum.
        </p>

        <figure>
            <img src="../img/projects/foodtech/">
            <figcaption>Lorem ipsum.</figcaption>
        </figure>

        <p class="description">
            Lorem ipsum <code>code test</code>.
        </p>

        <figure>
            <video loop muted class="play-on-hover">
                <source src="../img/projects/foodtech/foodtech_desktop_two.mov">
            </video>
            <div class="video-controls">
                <button class="play"><i class="fa fa-play"></i> Play</button>
                <button class="pause"><i class="fa fa-pause"></i> Pause</button>
            </div>
            <figcaption class="video-caption">A screen recording of the on-scroll animations on the Your Role: Corporate Development page.</figcaption>
        </figure>

        <figure>
			<video loop muted class="play-on-hover">
				<source src="../img/projects/foodtech/foodtech_desktop_three.mov">
			</video>
			<div class="video-controls">
				<button class="play"><i class="fa fa-play"></i> Play</button>
				<button class="pause"><i class="fa fa-pause"></i> Pause</button>
			</div>
			<figcaption class="video-caption">A screen recording of the category filter system on the Resources Hub page.</figcaption>
		</figure>

        <a href="../projects.php" class="bracket-link">view all projects</a>

	</section>

</main>

<?php include "../_footer.php";?>

</body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
</html>