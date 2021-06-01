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
                <h4>company</h4>
                <p>Volaris Group</p>
            </div>
        </div>

        <figure>
            <img src="../img/projects/joinus/joinus_mockup_one.png">
            <figcaption>A screenshot of the landing page on an iMac, MacBook, and iPad.</figcaption>
        </figure>

        <p class="description">
            For this microsite creation, I was responsible for manifesting the Senior Graphics Designer's for Trapeze Group's JoinUs campaign. Due to the succint nature of the site, I paid extra attention to the jQuery animations that toggle content visibility - both for desktop and mobile view.
        </p>

        <figure class="image-collage">
            <img class="top-left" src="../img/projects/joinus/joinus_mobile_three.png">
            <video autoplay muted loop class="main-image">
                <source src="../img/projects/joinus/joinus_mobile_two.mov">
            </video>
            <img class="bottom-right" src="../img/projects/joinus/joinus_mobile_four.png">
            <figcaption>Two screenshots of the Our Journey and Contact Us sections, and one GIF showing one of the view more/less buttons. iPhone X (375 x 812px) resolution.</figcaption>
        </figure>

        <p class="description">
            In addition to the jQuery toggle effects, I used flexbox to create tables to display multiple tiles of information between desktop and mobile resolutions.
        </p>

        <figure>
            <img src="../img/projects/joinus/joinus_mockup_two.png">
        </figure>

        <p class="description">
            Over the course of development, I proposed small design edits to the Marketing Team. The first was to include a "view less" button to toggled content. I accomplished this by using jQuery's DOM selectors so that the text switches from "View more" to "View less" after pressing a button. This allows for viewers, especially those on mobile, to have increased control over their experience.
        </p>

        <figure>
            <video loop muted class="play-on-hover">
                <source src="../img/projects/joinus/joinus_desktop_three.mov">
            </video>
            <div class="video-info">
                <div class="video-controls">
                    <button class="play"><i class="fa fa-play"></i> Play</button>
                    <button class="pause"><i class="fa fa-pause"></i> Pause</button>
                </div>
                <figcaption class="video-caption">A screen recording of the timeline in the Our Journey section.</figcaption>
            </div>
        </figure>

        <p class="description">
            Another proposed edit was the hover effect on the links to bring together Trapeze Group's secondary colour (bright blue) and add visual interest to the navigation.
        </p>

        <figure>
            <video loop muted class="play-on-hover">
                <source src="../img/projects/joinus/joinus_desktop_two.mov">
            </video>
            <div class="video-info">
                <div class="video-controls">
                    <button class="play"><i class="fa fa-play"></i> Play</button>
                    <button class="pause"><i class="fa fa-pause"></i> Pause</button>
                </div>
                <figcaption class="video-caption">A screen recording of the navigation hover effects and their smooth scroll functionality.</figcaption>
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