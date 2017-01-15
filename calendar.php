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
    <title>Calendar</title>
    <?php resources::header(); ?>
</head>
<body>

<?php resources::partA() ?>

<section id="content">
    <h2>2017 Calendar</h2>

    <iframe src="https://calendar.google.com/calendar/embed?src=frcteam5086%40gmail.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</section>

<?php resources::partB() ?>

</body>
</html>