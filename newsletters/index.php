<?php
date_default_timezone_set('America/Detroit');
$issue = $_GET['i'];
$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d H:i:s');

$log = fopen("/var/www/data/issue$issue.txt", "a+");
$value = "$ip  $date\n";
fwrite($log, $value);
fclose($log);

if ($issue < 10) {
    header( 'Location: https://connectors5086.org/newsletters/Issue%200' . $issue . '.pdf') ;
} else {
    if ($issue == "12%") {
        header( 'Location: https://connectors5086.org/newsletters/Issue%2012.pdf') ;
    } else {
        header( 'Location: https://connectors5086.org/newsletters/Issue%20' . $issue . '.pdf') ;
    }
}
