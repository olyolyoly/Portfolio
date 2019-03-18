<?php
$db = new PDO("mysql:host=192.168.20.20;dbname=portfolio", 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


//$sql = 'SELECT `Title`,`Image_URL` FROM `portfolio`;';
//$query = $db->query($sql);
//
//$result= $query->fetchAll();

$result = [];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/portfolio.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
    <title>Ollie Portfolio</title>
</head>

<body>
    <nav>
        <div class="menu">
            <a href="#home" class="buttons"> HOME </a>
            <a href="#aboutme" class="buttons"> ABOUT </a>
            <a href="#portfolio" class="buttons"> PORTFOLIO </a>
            <a href="#contact" class="buttons"> CONTACT </a>
            <div class="images"></div>
        </div>
    </nav>

    <section id="home">
        <div class="image-container">
            <div class="image-title">
                <h1 class="title-style">Oliver Matthews</h1>
                <h2 class="title-style2">Trainee Full-Stack Developer</h2>
            </div>
        </div>
    </section>

    <section class="section1">
    </section>

    <section id="aboutme" class="section2">
        <h4>About</h4>
        <div class="bio-container">
            <div class="bio-text"> I am a student at Mayden Academy in Bath completing  a 16 week intensive, full-stack software developer programme.

            I’m quickly growing my technical skills and have adopted an agile approach to individual and team tasks.

            Before this I was a Director at a startup company based in London, we grew the company from a team of 2 to 25 over a 5 year period.

            I have extensive experience in sales & marketing, key account management and operations.

            I got a taste for writing code when I commissioned the build of a SQL database and worked closely with the developer, so I found and applied to Mayden Academy.

            I live in a small village in Cornwall by the sea with my family, we enjoy the outdoor lifestyle, the beach, BBQ and pubs.

            HTML - CSS

            I am familiar with Git and own a certified scrum master certificate.

            Next Steps

            The next step is to find an opportunity as a junior developer in a company with a fantastic culture that can support my development and help launch my new career.
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="section3">
            <h4>Portfolio</h4>
        </div>
            <div class="portfolio">
                <?php
                if (!empty($result)) {
                    foreach ($result as $project) {
                        echo '<div class="projects project-hover" style="background-image: url(' . $project['Image_URL'] . ')">' . $project['Title'] . '</div>';
                    }
                } else {
                    echo '<html> <h1 class="error-message"> <<<<< Error connecting to the database, please check back soon>>>>> </h1></html>';
                }
                ?>
            </div>
    </section>

    <section id="contact">
        <footer class="footer">

            <div class="contact-container">
                <h1>Contact</h1>
                <a href="mailto:o.matthews@rocketmail.com" class="mail-image"></a>
                <h3>07897 533 334</h3>
                <a href="https://github.com/olyolyoly" class="github-image"></a>
                <a href="https://www.linkedin.com/in/oliver-matthews/" class="linkedin-image"></a>
            </div>

        </footer>
    </section>

</body>
</html>

