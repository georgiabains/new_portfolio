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

        <h2>Trapeze JoinUs</h2>
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
                <h4>languages</h4>
                <p>CSS (SCSS), HTML, jQuery</p>
            </div>
        </div>

        <figure class="image-collage">
            <img class="top-left" src="../img/projects/joinus/joinus_mobile_three.png">
            <video autoplay="true" loop class="main-image">
                <source src="../img/projects/joinus/joinus_mobile_two.mov">
            </video>
            <img class="bottom-right" src="../img/projects/joinus/joinus_mobile_four.png">
        </figure>

        <figure>
            <video loop muted class="play-on-hover">
                <source src="../img/projects/joinus/joinus_desktop_two.mov">
            </video>
            <div class="video-controls">
                <button class="play"><i class="fa fa-play"></i> Play</button>
                <button class="pause"><i class="fa fa-pause"></i> Pause</button>
            </div>
        </figure>

        <figure>
            <video loop muted class="play-on-hover">
                <source src="../img/projects/joinus/joinus_desktop_three.mov">
            </video>
            <div class="video-controls">
                <button class="play"><i class="fa fa-play"></i> Play</button>
                <button class="pause"><i class="fa fa-pause"></i> Pause</button>
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