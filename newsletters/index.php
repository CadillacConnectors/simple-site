<?php
$issue = $_GET['i'];
if ($switch < 10) {
    header( 'Location: https://www.connectors5086.org/newsletters/Issue%200' . $issue ) ;
} else {
    header( 'Location: https://www.connectors5086.org/newsletters/Issue%20' . $issue ) ;
}
