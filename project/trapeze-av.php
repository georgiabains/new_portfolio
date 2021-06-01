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

        <h2>Trapeze Autonomous Vehicles</h2>
        <h3>> microsite<span class="blinking-underscore">_</span></h3>

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
            <img src="../img/projects/trapeze_av/trapeze_av_mockup_one.png">
            <figcaption>A screenshot of the landing page on a MacBook and iPhone.</figcaption>
        </figure>

        <p class="description">
            This microsite was created to provide introductory information to the world of Autonomous Vehicles as part of Trapeze Group's JoinUs campaign. My responsibilites included creating thes static site, based on the mockup from Volaris Group's Senior Graphics Designer.
        </p>

        <figure class="image-collage">
            <img class="top-left" src="../img/projects/trapeze_av/trapeze_av_mobile_four.PNG">
            <video autoplay muted loop class="main-image">
                <source src="../img/projects/trapeze_av/trapeze_av_mobile_five.mov">
            </video>
            <img class="bottom-right" src="../img/projects/trapeze_av/trapeze_av_mobile_two.PNG">
            <figcaption>Two screenshots of the "What AV Means" and "Ongoing Challenges" sections, and one GIF showing a contact popup box. iPhone X (375 x 812px) resolution.</figcaption>
        </figure>

        <p class="description">
            This campaign included two prominant call-to-actions, which involved working closely with Volaris Group's Digital Marketing Manager and Senior Web Developer to ensure that the external API (Marketo) could accomplish the microsite's requirements. Together, we came up with a solution that delivered pertinent information to the Marketing Team, while following the microsite's decided upon aesthetic.
        </p>

        <figure>
            <video loop muted class="play-on-hover">
                <source src="../img/projects/trapeze_av/trapeze_av_desktop_two.mov">
            </video>
            <div class="video-info">
                <div class="video-controls">
                    <button class="play"><i class="fa fa-play"></i> Play</button>
                    <button class="pause"><i class="fa fa-pause"></i> Pause</button>
                </div>
                <figcaption class="video-caption">A screencapture of the lazy load in the Ongoing Challenges and Opportunities sections.</figcaption>
            </div>
        </figure>

        <p class="description">
            The above tiled display was accomplished using flexbox and specific class styling to allow for the Marketo form to stay visible while the tiles appeared on page load.
        </p>

        <a href="../projects.php" class="bracket-link">view all projects</a>

    </section>

</main>

<?php include "../_footer.php";?>
</body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
</html>