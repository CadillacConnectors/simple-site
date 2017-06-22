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
    <title>Community</title>
    <?php resources::header(); ?>
</head>
<body>

<?php resources::partA() ?>

<section id="content">
    <h2>Cadillac News</h2>
        <a href="http://cadillacnews.com"><img src="/images/news.png" id="cnews" align="right" title="Cadillac News Logo" alt="Cadillac News"></a>
    <p>
        The Cadillac News has been a huge help to us by continually releasing articles that help us show our community what we are doing.
        A timeline of various articles that they have written can be found <a href="https://twitter.com/search?q=connectors%20from%3Acadillacnews&src=typd&lang=en">here</a>.
    </p>
    <hr>
    <h2>Sponsors</h2>
    <h3>Cost of a team</h3>
    <p>
        Every season, the average cost of building a robot and entering FRC Competition well exceeds $9,000. Also, every part of running a team cost money.
        Food, website hosting, software licences, and tools all cost more money. Our total annual expenditures often end up in the $11,000 range.
        With an even larger budget, we would be able to provide better experiences for all of the kids involved.
    </p>
    <h3>How Sponsors Help</h3>
    <p>
        This is where our sponsors come in. Our first three years we were given state grants to help start our team. As we move to more independence, sponsors
        become an increasingly important part of our organization. Monetary contributions are the most prevalent form of income for the team. This years sponsors can be found
        <a href="sponsors.php">here</a>. However, not all contributions have to be paid with a check. G&D Pizza sponsors us with food at some of our meetings, while
        cadillac computer center donated a laptop for us to use for programming. Our team is able to operate because of the generous support of our community and we are very
        grateful for any contribution.
    </p>
    <h3>We want your support!</h3>
    <p>
        Most businesses tend to think that they cannot support us for one of three reasons: not being a STEM business, not having enough to give, or not seeing the benefits.
        However, we think that there is a solution to each of these problems.
    </p>
    <h3>Become a sponsor today!</h3>
    <p>
        To apply to be a sponsor and see the benefits of being involved in a local robotics team, please <a href="sponsors.php#sponsor">click here</a>.
    </p>
</section>

<?php resources::partB() ?>

</body>
</html>
