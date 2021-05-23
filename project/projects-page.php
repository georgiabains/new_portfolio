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

		<h2>Website Title</h2>
        <h3>> core website<span class="blinking-underscore">_</span></h3>

        <div class="project-basic-info">
            <div class="info-column">
                <h4>year</h4>
                <p>20XX</p>
            </div>
            <div class="info-column">
                <h4>role</h4>
                <p>Web Design & Web Development</p>
            </div>
            <div class="info-column">
                <h4>company</h4>
                <p>Company Name</p>
            </div>
        </div>

        <figure>
            <img src="../img/projects/el/el_mockup_one.png">
            <figcaption>Lorem ipsum.</figcaption>
        </figure>

        <p class="description">Lorem ipsum.</p>

        <figure class="image-collage">
            <img class="top-left" src="../img/projects/el/el_mobile_six.PNG">
            <img class="main-image" src="../img/projects/el/el_mobile_seven.PNG">
            <img class="bottom-right" src="../img/projects/el/el_mobile_two.PNG">
            <figcaption>Three screenshots featuring an example Instructor Resource (Administration), the Instructor Resources, and About pages. iPhone X (375 x 812px) resolution.</figcaption>
        </figure>

        <p class="description">
            Lorem ipsum.
        </p>

        <figure>
            <img src="../img/projects/el/el_mockup_two.png">
            <figcaption>Lorem ipsum.</figcaption>
        </figure>

        <p class="description">
            Lorem ipsum.
        </p>

        <figure>
            <img src="../img/projects/el/el_desktop_five.PNG">
            <figcaption>Lorem ipsum.</figcaption>
        </figure>

        <p class="description">
            Lorem ipsum <code>code test</code>.
        </p>

        <figure>
            <video loop muted class="play-on-hover">
                <source src="../img/projects/el/el_desktop_seven.mp4">
            </video>
            <div class="video-controls">
                <button class="play"><i class="fa fa-play"></i> Play</button>
                <button class="pause"><i class="fa fa-pause"></i> Pause</button>
            </div>
            <figcaption class="video-caption">Lorem ipsum.</figcaption>
        </figure>

        <p class="description">
            Lorem ipsume.
        </p>

        <a href="../projects.php" class="bracket-link">view all projects</a>

	</section>

</main>

<?php include "../_footer.php";?>

</body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
</html>