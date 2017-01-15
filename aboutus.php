<?php
/**
 * Created by PhpStorm.
 * User: josh
 * Date: 1/13/17
 * Time: 3:44 PM
 */
require 'resources.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Homepage</title>
    <?php resources::header(); ?>
</head>
<body>

<?php resources::partA() ?>

<section id="content">
    <h2>Who are the Cadillac Connectors?</h2>
    <p>
        The Connectors, <i>Team 5086</i>, are a part of <a href="http://firstinspires.org">FIRST</a> (For Inspiration and Recognition of Science and Technology)
        Robotics Competition. We seek to promote STEM (Science, Technology, Engineering and Math) in the Cadillac Area by
        building a robot over the course of six weeks and educating teens on real-world skills.
    </p>
    <h2>Follow what we do:</h2>
    <p>
        Our <a href="blog.php">blog</a> or our <a href="https://twitter.com/team5086">twitter</a> are both constantly full of team
        related info and updates. If you would rather have more weekly progress, subscribe to <a href="newsletter.php#subscribe">our newsletter</a>
        or check out our youtube video series, <a href="https://www.youtube.com/playlist?list=APJa_mUyGjpRXvBHV3ULNA">Robot in six weeks</a>.
    </p>
    <h2>Interested?</h2>
    <p>
        <b>Businesses:</b> Head over to <a href="sponsors.php">our sponsors page</a> to find out more about ways
        you can support our team.
    </p>
    <p>
        <b>Community Members:</b> Send us an email at <a href="mailto:frcteam5086@gmail.com">frcteam5086@gmail.com</a> and
        let us know how we can get to know you.
    </p>
    <p>
        <b>Parents / Students:</b> Talk to Mr. Whipple at Cadillac High School about joining the team. We are always
        interested in new members, regardless of experience.
    </p>
</section>

<?php resources::partB() ?>

</body>
</html>
