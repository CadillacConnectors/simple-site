<?php
$issue = $_GET['i'];
if ($issue < 10) {
    header( 'Location: https://www.connectors5086.org/newsletters/Issue%200' . $issue ) ;
} else {
    header( 'Location: https://www.connectors5086.org/newsletters/Issue%20' . $issue ) ;
}
