<?php

/**
 * Created by PhpStorm.
 * User: josh
 * Date: 1/13/17
 * Time: 4:13 PM
 */
class resources
{
    static function header() {
        echo "<meta charset=\"UTF-8\">";
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/index.css\">";
        echo "<link rel=\"icon\" href=\"/favicon.ico\" type=\"image/x-icon\">";
        echo "<link rel=\"shortcut icon\" href=\"/favicon.ico\" type=\"image/x-icon\">";
    }

    static function partA() {
        echo "<nav><ul>";

        echo "<li><a href='/aboutus.php'>About Us</a></li>";
        echo "<li><a href='/community.php'>Community</a></li>";
        echo "<li><a href='/steamworks.php'><i>FIRST</i> Steamworks</a></li>";
        echo "<li><a href='/blog.php'>Blog</a></li>";
        echo "<li><a href='/index.php'><img src='/favicon.ico' alt='Homepage'></a></li>";
        echo "<li><a href='/newsletter.php'>Newsletter</a></li>";
        echo "<li><a href='/calendar.php'>Calendar</a></li>";
        echo "<li><a href='/sponsors.php'>Sponsors</a></li>";
        echo "<li>Coming Soon...</li>";

        echo "</ul></nav>";

        echo "<header><img src='/images/logo.png' class='full' alt='Cadillac Connectors'><h1>FRC TEAM 5086</h1><p>Leading the robot revolution with gracious professionalism.</p></header>";
    }

    static function partB() {
        echo "<footer>";
        echo "<h2><i>Connect</i> with us</h2>";
        echo "<p>";
        echo "    <a href='https://twitter.com/team5086'><img src=\"images/twitter.png\" alt=\"Twitter\" title=\"Cadillac Connectors Twitter\" class=\"mediaButton\"></a>";
        echo "    <a href='https://facebook.com/team5086'><img src=\"images/facebook.png\" alt=\"Facebook\" title=\"Cadillac Connectors Facebook\" class=\"mediaButton\"></a>";
        echo "    <a href='https://instagram.com/team5086'><img src=\"images/instagram.png\" alt=\"Instagram\" title=\"Cadillac Connectors Instagram\" class=\"mediaButton\"></a>";
        echo "    <a href='https://pinterest.com/team5086'><img src=\"images/pintrest.png\" alt=\"Pinterest\" title=\"Cadillac Connectors Pinterest\" class=\"mediaButton\"></a>";
        echo "    <a href='https://reddit.com/r/cadillacconnectors'><img src=\"images/reddit.png\" alt=\"Reddit\" title=\"Cadillac Connectors Subreddit\" class=\"mediaButton\"></a>";
        echo "    <a href='https://www.youtube.com/channel/UCAPJa_mUyGjpRXvBHV3ULNA'><img src=\"images/youtube.png\" alt=\"Youtube\" title=\"Cadillac Connectors Youtube Channel\" class=\"mediaButton\"></a>";
        echo "</p>";
        echo "<p>&copy;Joshua Jacobson, 2017.</p>";
        echo "</footer>";
    }
}