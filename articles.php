<?php

/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 12/31/16
 * Time: 11:59 AM
 */
class articles
{
    //Increment this number everytime a new article is created
    public static $articles = 1;

    static function parseId($id) {
        $articles = self::$articles;
        if($id == "latest" || $id > $articles) {
            $id = $articles;
        }
        if ($id < 0) {
            $id = 0;
        }
        if(!is_numeric($id) || strrpos($id, ".")) {
            $id = $articles;
        }
        return $id;
    }

    static function getArticle($id) {


        //Do not change this
        $id = self::parseId($id);
        $author = "";
        $date = "";
        $title = "";
        $paragraphs = new ArrayObject();
        $images = new ArrayObject();

        //Add cases to this for every new article
        switch ($id) {

            //Article Number 0
            case 0:
                //Author's name
                $author = "Joshua Jacobson";

                //Date that article was published
                $date = "12/31/2016";

                //Title of article (should be less than 50 characters, doesn't have to be)
                $title = "Old articles are going to be archived";

                //Add paragraphs like this
                $paragraphs->append('The old articles from the 2016 season are set to be archieved in  location to be determined.');
                $paragraphs->append('They will be available shortly.');

                //Add Images like this
                //$images->append("01.png");
                //They will be search for in /blog/articles/images/YYYY/MM/DD/

                break;
            case 1:
                $author = "Kyle Leesch";
                $date="1/18/2017";
                $title="The Year to Date";
                $paragraphs->append("Hello All! We realize that we're a bit late to the blog scene, but unfortunately with the website being under construction, we haven't had much by the way of publication.");
                $paragraphs->append("If you wish to see our progress before this publication and since launch day, feel free to check out our instagram and twitter.");
                $paragraphs->append("We've had a lot of great progress so far. This week (however short it has been), we've managed to get a fairly good working prototype for our fuel intake (pictures to come). We also have the makings of our shooter barrel with launching wheel.");
                $paragraphs->append("We also had the great opportunity of talking Dave Good, a programming expert that helped us on further developing some of the ideas we had for our shooting system from the computer side.");
                $paragraphs->append("Our gear system is coming along nicely as well! It continues to see added modifications to allow us to recieve gears and transfer them to the airship in a more efficient way.")
                break;
            default:
                break;
        }

        //Do not change this
        self::printArticle($author, self::dateFormatter($date, "date"), self::dateFormatter($date, "humandate"), $date, $title, $paragraphs, $images, self::dateFormatter($date, "folder"));
    }

    static function printArticle($author, $date, $longdate, $humandate, $title, $paragraphs, $images, $folder) {
        echo "<article>";
        echo "<h1>$title</h1>";
        echo "<address class=\"author\">" . $author . " on <time datetime='$date' title='$longdate'>$humandate</time></address>";
        foreach ($paragraphs as $p) {
            echo "<p>" . $p . "</p>";
        }
        foreach ($images as $i) {
            echo '<img src="/blog/articles/images/' . $folder . $i . '" id="' . $i . '" class="image" onclick="expandImage(this)" >';
        }
        echo "</article>";
    }

    static function dateFormatter($date, $type) {
        if($type=="date") {
            return date('Y-m-d', strtotime($date));
        }
        if($type=="humandate") {
            return date('M jS, Y', strtotime($date));
        }
        if($type=="folder") {
            return date("Y/m/d/", strtotime($date));
        }
        return null;
    }
}
