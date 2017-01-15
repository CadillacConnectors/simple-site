<?php
require 'resources.php';
$article = $_GET["article"];
require 'articles.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Blog</title>
    <?php resources::header(); ?>
</head>
<body>

<?php resources::partA() ?>

<section id="content">
    <?php

    articles::getArticle($article);

    echo "<br>";
    echo '<button id="latest" onclick="latest()">Latest</button>';
    echo '<button id="next" onclick="next(' . $article . ')">Next</button>';
    echo '<button id="previous" onclick="previous(' . $article . ')">Previous</button>';
    echo '<button id="first" onclick="first()">First</button>';

    ?>
</section>

<?php resources::partB() ?>

<script>
    function next(current) {
        var url = window.location.href;
        if(url.indexOf("/articles/") != -1) {
            url = url.substring(0, url.indexOf("/articles/"));
        }
        console.log(url);
        window.location.href = url + "/articles/index.php?article=" + (current + 1);
    }

    function previous(current) {
        var url = window.location.href;
        if(url.indexOf("/articles/") != -1) {
            url = url.substring(0, url.indexOf("/articles/"));
        }
        console.log(url);
        window.location.href = url + "/articles/index.php?article=" + (current - 1);
    }

    function latest() {
        var url = window.location.href;
        if(url.indexOf("/articles/") != -1) {
            url = url.substring(0, url.indexOf("/articles/"));
        }
        console.log(url);
        window.location.href = url + "/articles/index.php?article=latest";
    }

    function first() {
        var url = window.location.href;
        if(url.indexOf("/articles/") != -1) {
            url = url.substring(0, url.indexOf("/articles/"));
        }
        console.log(url);
        window.location.href = url + "/articles/index.php?article=0";
    }

    function expandImage(e) {
        var a = document.getElementsByClassName("largeImage");
        for(var b in a) {
            b.className = "image";
        }
        e.className = "largeImage";
    }
</script>
</body>
</html>