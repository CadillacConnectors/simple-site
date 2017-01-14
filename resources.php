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

        echo "<header><img src='/images/logo.png' class='full' alt='Cadillac Connectors'><h1>FRC TEAM 5086</h1></header>";
    }
}