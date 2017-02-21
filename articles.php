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
    public static $articles = 8;

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
                $date="01/18/2017";
                $title="The Year to Date";
                $paragraphs->append("Hello All! We realize that we're a bit late to the blog scene, but unfortunately with the website being under construction, we haven't had much by the way of publication.");
                $paragraphs->append("If you wish to see our progress before this publication and since launch day, feel free to check out our instagram and twitter.");
                $paragraphs->append("We've had a lot of great progress so far. This week (however short it has been), we've managed to get a fairly good working prototype for our fuel intake (pictures to come). We also have the makings of our shooter barrel with launching wheel.");
                $paragraphs->append("We also had the great opportunity of talking Dave Good, a programming expert that helped us on further developing some of the ideas we had for our shooting system from the computer side.");
                $paragraphs->append("Our gear system is coming along nicely as well! It continues to see added modifications to allow us to recieve gears and transfer them to the airship in a more efficient way.");
                break;
            case 2:
                $author = "Kyle Leesch";
                $date="01/30/2017";
                $title="Blog Post 1";
                $paragraphs->append("We've progressed quite a ways since the last post! Most of our prototyping has been finished (with exception of the shooter... soon). Everything seems to be working great!");
                $paragraphs->append("We've also got a CAD version of our Robot's chassis, and have had quite a few parts of it cut out and assembled. It grows more functional by the day.");
                $paragraphs->append("On a media front, we've started interviews with a large part of the team to document what they've accomplished this season, as well as how they feel the robotics team has impacted them. We're looking forward to learning what members of the team feel that it's done for them!");
                $paragraphs->append("As always, if you want to see more day-to-day progress, try checking out our instagram! Pictures are posted there whenever we do something cool.");
                break;
            case 3:
                $author = "Kyle Leesch";
                $date="02/01/2017";
                $title="Blog Post 2";
                $paragraphs->append("Progress continues on our Chassis. Luckily for us, the bumper team realized early on that the length of our parts were 2 inches too long! We plan on trimming that down soon.");
                $paragraphs->append("We've officially broken down into more official sub teams after realizing the need to get people motivated about one specific issue. We were seeing a lot of help across the board, but not much concrete work was being done on some key components. Luckily, we've fixed that issue and we're full steam ahead!");
                $paragraphs->append("We're planning on getting some more parts machined down. Our CAD design is almost finished and that will give us the full idea of what we need to make for the official robot!");
                break;
            case 4:
                $author = 'Kyle Leesch';
                $date='2/10/2017';
                $title='Blog Post 3';
                $paragraphs->append("We've made great strides in our build. We officially have a driveable robot with an extremely good infeed system. We've also officially chosen which kind of shooter that we want as well as have made some of the final parts for it.");
                $paragraphs->append("Work on the electrical side has begun with cable management as a priority. Since space is fairly limited to preserve hopper space, things have to be wired with the smallest footprint possible. Despite this challenge, our electrical team has been full steam ahead!");
                $paragraphs->append("In other news, we've also constructed a new team computer! We're still awaiting a monitor for it, which is extremely hard to wait for considering this publication is currently being written on a laptop. Super excited to see it soon! If you are interested, there are a few pictures of us building it on our Instagram!");
                $paragraphs->append("There is also great news regarding a robotics team for lower grades than high school. We've officially been approved for an First Tech Challenge (FTC) team from the Junior High. We're excited to see how that goes, and hopeful that it will help encourage kids to join our team!");
                break;
                
            case 5:
                $author = 'Kyle Leesch';
                $date='2/14/2017';
                $title='The Final Week (Blog Post 4)';
                $paragraphs->append("The time has come for the final week of build season. We've gotten a lot done so far, but there is still much to go. We currently have finished the drive system and infeed, but we still have a hopper, auton, shooter, and hopper to create. Gonna be a busy week!");
                $paragraphs->append("We've officially submitted our Chairman's award portfolio, much to the thanks of the Business team. They've certainly got their work cut out for them! They've also been doing bi-weekly newsletters.");
                $paragraphs->append("This week marks the beginning of tryouts for drive team as well. We plan to have the finalized team in place by the weekend so we have plenty of practice time.");
                $paragraphs->append("Our vision processing system is growing more complex thanks to the programming team. We've gotten it mostly converted to C++ and it is now running on the on-board vision processing unit of the robot (the TX-1).");
                $paragraphs->append("That's all for now, but stay tuned to our Instagram this week. Plan on seeing a lot more testing videos and pictures as we ramp up for competition time!");
                break;
            case 6:
                $author = 'Kyle Leesch';
                $date='2/16/2017';
                $title="We're Getting There (Blog Post 5)";
                $paragraphs->append("All fairs well on the robot front. We got it driving for the second time yesterday, hoping to get drive team tryouts started tomorrow! There were a couple of balance issues, but we've pretty much got those worked out now.");
                $paragraphs->append("We're still waiting on the climber and the hopper (though it is worth saying that we are waiting to get everything in place on the rest of the robot before making the hopper, that way we can maximize space).");
                $paragraphs->append("Our T-Shirts are coming in today, can't wait to see how those look. Nothing like some team spirit to cheer everyone up!");
                $paragraphs->append("As we approach our final weekend of build season, we're pulling out all the stops to get this robot done in time. It's certainly looking like we'll achieve that goal this year!");
                $paragraphs->append("We also have nominated two of our members for the Dean's list. Both Joshua Jacobson and Shannon Metzger were nominated this year. Best of luck to them!");
                $paragraphs->append("As always, make sure to check out our Instagram! We've got a video of us firing the robot up for testing, so head on over to see us in action!");
                break;
            case 7:
                $author = 'Kyle Leesch';
                $date = '2/18/2017';
                $title = 'So Close, Yet So Far (Blog Post 6)';
                $paragraphs->append("The days of build season are drawing to a close. With only a 3 full days left of building, we've got our work cut out for us. All of the tele-op drive programming was finished today, only pending some tweaking when we actually have the robot ready to drive. We're still waiting on autonomous, and with our lead programmer sick at home we're not quite sure where that stands at the current time.");
                $paragraphs->append("The mechanical team is finalizing the build, with only a couple of things left to do. We still have to build is the hopper and reinforce the climbing portion of the robot.");
                $paragraphs->append("Unfortunately due to the mechanical setbacks, we haven't had the opportunity to get drive team tryouts going. Our drop dead date for that has been moved to during the day on Monday.");
                $paragraphs->append("The electrical team is almost finished, having only one more motor controller to fit in provided that there isn't anything they have to move for the mechanical team. From this point on, it's pretty much just cable management to finish.");
                $paragraphs->append("That's all for today's update. Keep checking out our Instagram to find videos of us testing the bot! We'll also be getting some driving around on there soon!");
                break;
            case 8:
                $author = 'Kyle Leesch';
                $date = '2/21/2017';
                $title = "It's Done! (Blog Post 7)";
                $paragraphs->append("The final day of build season has arrived! With it comes a pleasant surprise; the robot is pretty much done! Unlike previous years, we have actually managed to get it done in time for a decent amount of practice. Drive team is benig picked today, and we're going to practice for as long as possible.");
                $paragraphs->append("Electrical has been finished, and we're glad to have great cable management this year! Many zip strips have been spared.");
                $paragraphs->append("The programming team has finished tele-op controlling, and autonomous programming is nearing completion.");
                $paragraphs->append("In other news, our t-shirts have arrived. Keep a lookout at competition for these neon shirts, as they're quite stylish and pleasing to the eye.");
                $paragraphs->append("Interested in seeing a picture of the completed robot? See our Instragram and other various media for a complete look at this year's build season!");
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
