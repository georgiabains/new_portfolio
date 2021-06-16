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
        <h3>> mobile app<span class="blinking-underscore">_</span></h3>

        <div class="project-basic-info">
            <div class="info-column">
                <h4>year</h4>
                <p>2021</p>
            </div>
            <div class="info-column">
                <h4>role</h4>
                <p>Mobile Design</p>
            </div>
            <div class="info-column">
                <h4>team</h4>
                <p>CSC318: Team Psyched</p>
            </div>
        </div>

        <figure>
            <img src="../img/projects/food_waste_management/food_waste_management_mockup_one.png">
            <figcaption>Lorem ipsum.</figcaption>
        </figure>

        <p class="description">
            Lorem ipsum.
        </p>

        <figure>
            <img src="../img/projects/food_waste_management/food_waste_management_mockup_two.png">
            <figcaption>Lorem ipsum.</figcaption>
        </figure>

        <p class="description">
            Lorem ipsum.
        </p>

        <div class="project-page-slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="../img/projects/food_waste_management/food_waste_management_recipes_design.png">
                </div>
                <div class="slide">
                    <img src="../img/projects/food_waste_management/food_waste_management_recipes_prototype.png">
                </div>
                <div class="slide">
                    <img src="../img/projects/food_waste_management/food_waste_management_recipes_design.png">
                </div>
                <div class="slide">
                    <img src="../img/projects/food_waste_management/food_waste_management_recipes_prototype.png">
                </div>
            </div>
            <div class="slider-info">
                <div class="slider-controls">
                    <button class="play"><i class="fa fa-play"></i> Play</button>
                    <button class="pause"><i class="fa fa-pause"></i> Pause</button>
                </div>
                <p class="slider-caption">Lorem ipsum</p>
            </div>
        </div>

        <p class="description">
            Lorem ipsum <code>code test</code>.
        </p>

        <figure>
            <video loop muted class="play-on-hover">
                <source src="../img/projects/food_waste_management/food_waste_management_recipes_recording.mov">
            </video>
            <div class="video-info">
                <div class="video-controls">
                    <button class="play"><i class="fa fa-play"></i> Play</button>
                    <button class="pause"><i class="fa fa-pause"></i> Pause</button>
                </div>
                <figcaption class="video-caption">Lorem ipsum.</figcaption>
            </div>
        </figure>

        <a href="../projects.php" class="bracket-link">view all projects</a>

	</section>

</main>

<?php include "../_footer.php";?>

</body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
</html>