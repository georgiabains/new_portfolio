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

		<h2>Experiential Learning Modules</h2>
        <h3>> core website<span class="blinking-underscore">_</span></h3>

        <div class="project-basic-info">
            <div class="info-column">
                <h4>year</h4>
                <p>2018 - 2019</p>
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
            <img src="../img/projects/el/el_mockup_one.png">
            <figcaption>A screenshot of the home page on an iMac and an iPhone.</figcaption>
        </figure>

        <p class="description">I was contracted by the University of Toronto's Online Learning Strategies department to design and develop a website for the project: Experiential Learning Modules. I was responsible for transforming the project head's vision for this project into a resource hub for Experiential projects at the University of Toronto.</p>

        <figure class="image-collage">
            <img class="top-left" src="../img/projects/el/el_mobile_six.PNG">
            <img class="main-image" src="../img/projects/el/el_mobile_seven.PNG">
            <img class="bottom-right" src="../img/projects/el/el_mobile_two.PNG">
            <figcaption>Three screenshots featuring an example Instructor Resource (Administration), the Instructor Resources, and About pages. iPhone X (375 x 812px) resolution.</figcaption>
        </figure>

        <p class="description">
            My design process involved researching similar projects headed by other Canadian universities and colleges and sketching multiple wireframes for revision.
        </p>

        <figure>
            <img src="../img/projects/el/el_mockup_two.png">
            <figcaption>Screenshots of the Instructor Resources and Student Module pages on desktop and mobile resolutions.</figcaption>
        </figure>

        <p class="description">
            I coded the site locally using MAMP (MacOS, Apache, MySQL, PHP) and WordPress. I used PHP to customize specific pages, for example the "Search" page, pictured below.
        </p>

        <figure>
            <img src="../img/projects/el/el_desktop_five.PNG">
            <figcaption>Screenshot of the "Search" page displaying the reuslts for "module."</figcaption>
        </figure>

        <p class="description">
            The modules themselves contain a large amount of information, and sectioning this information was one of my main design challenges. I wanted to reduce hard page reloads, so using jQuery to toggle the visibility of various sections was crucial. However, these separate sections would have had to be URL accessible for email campaigns and other such correspondence. My solution was to write a script in JavaScript that assigned each section a URL using <code>location.hash</code>.
        </p>

        <figure>
            <video loop muted class="play-on-hover">
                <source src="../img/projects/el/el_desktop_seven.mp4">
            </video>
            <div class="video-controls">
                <button class="play"><i class="fa fa-play"></i> Play</button>
                <button class="pause"><i class="fa fa-pause"></i> Pause</button>
            </div>
            <figcaption class="video-caption">Screen recording of the Instructor Resource titled <em>Experiential Learning 101</em>.</figcaption>
        </figure>

        <p class="description">
            Please note that the live website has since been updated, and some pages are no longer included (e.g. Instructor Resources).
        </p>

        <a href="../projects.php" class="bracket-link">view all projects</a>

	</section>

</main>

<?php include "../_footer.php";?>

</body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
</html>