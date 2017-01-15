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
    <figure>
        <a href="http://cadillacnews.com" id="cnews"><img src="/images/news.png" align="right" title="Cadillac News Logo" alt="Cadillac News"></a>
    </figure>
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
    <div id="myths">
        <h4>Myth #1: You have to be a STEM business to support a STEM organization.</h4>
        <p>
            Even though our organization is based on building robots, we work on a lot more than just Science and Math. We have to write applications, create budgets, hold meetings
            and a whole host of other activities that make us into the organization we are. Because of this, we enjoy sponsors of all different industries - not just technological ones.
        </p>
        <h4>Myth #2: You have to give thousands of dollars to make a difference</h4>
        <p>
            $11,000 sounds like a lot of money for a business to sponsor. However, we are not going to an individual business expecting a contribution of that magnitude.
            Instead, many business giving small contributions brings us to that goal. While a larger sum is definitely given more benefits, a smaller sum is still valuable to our team.
            Every dollar donated is another dollar that can go to educating teens in the greater Cadillac area.
        </p>
        <h4>Myth #3: There are few real benefits</h4>
        <p>
            Our team has a <a href="sponsors.php#benefits">structured hierarchy</a> of benefits as far as formal rewards are concerned. To a greater extent however, your business
            is able to make a lasting effect on the kids who go through our program. During their time here, kids learn skills that are applicable in any industry - problem solving,
            leadership, and communication skills that any business can use. During this time, the kids also get to see businesses at the front of it - your business.
            These businesses stick at the back of the students mind and if they come back to the local area to join the workforce, the businesses they saw in robotics will be the businesses
            they apply to work at first.
        </p>
    </div>
    <h3>Become a sponsor today!</h3>
    <p>
        To apply to be a sponsor and see the benefits of being involved in a local robotics team, please <a href="sponsors.php#sponsor">click here</a>.
    </p>
</section>

<?php resources::partB() ?>

</body>
</html>
