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
    <title>Newsletter</title>
    <?php resources::header(); ?>
</head>
<body>

<?php resources::partA() ?>

<section id="content">
    <h2>Cadillac Connectors Newsletter:</h2>
    <h3>2017 -</h3>
    <p>
        Issue 1 - <a href="newsletters/Issue%2001.pdf">1/13/2017</a>.
    </p>
    <p>
        Issue 2 - <a href="newsletters/Issue%2002.pdf">1/27/2017</a>.
    </p>
    <p>
        Issue 3 - <a href="newsletters/Issue%2003.pdf">2/11/2017</a>.
    </p>
    <p>
        Issue 4 - <a href="newsletters/Issue%2004.pdf">2/25/2017</a>.
    </p>
    <p>
        Issue 5 - <a href="newsletters/Issue%2005.pdf">3/11/2017</a>.
    </p>
    <p>
        Issue 6 - <a href="newsletters/Issue%2006.pdf">2/25/2017</a>.
    </p>
    <p>
        Issue 7 [SPECIAL EDITION]- <a href="newsletters/Issue%2007.pdf">4/11/2017</a>.
    </p>
    <p>
        Issue 8 - <a href="newsletters/Issue%2008.pdf">4/17/2017</a>.
    </p>
    <p>
        Issue 9 - <a href="newsletter/Issue%2009.pdf">5/2/2017</a>.
    </p>
    <p>
        Issue 10 - <a href="newsletter/Issue%2010.pdf">6/24/2017</a>.
    </p>
    
    
    <h2>Want to be notified when we post? Subscribe to our Newsletter here</h2>
    <form action="/newsletter.php">
        Email:<br>
        <input type="text" name="Email" placeholder="Someone@example.com">
        <br>
        <input type="Submit" value="Subscribe">
    </form> 
</section>

<?php resources::partB() ?>

</body>
</html>
