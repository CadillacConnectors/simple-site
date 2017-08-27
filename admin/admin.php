<?php
$username = $_GET['username'];
$password = $_GET['password'];
$issue = $_GET['issue'];
$test = $_GET['test'];
if ($username !== NULL) {
    $verified = verify($username, $password);
    if ($verified == "verified") {
        sendLetter($issue, $test);
    } else if ($verified = "invalid") {
        echo "invalid username/password. Please wait 30 seconds and try again";
    } else {
        echo "please wait for countdown to finish in 30 seconds.";
    }
}

function sendLetter($issue, $test) {
    if ($test == "true") {
        shell_exec('/var/www/update.sh && /var/www/test-mail.sh' . $issue);
    } else {
        shell_exec('/var/www/update.sh && /var/www/mail.sh' . $issue);
    }
    echo "Sent newsletter!";
}

function resetCountdown() {
    $timeout = fopen("/var/www/timeout.txt","w+");
    fwrite($timeout, "30");
    fclose($timeout);
}

function verify($username, $password) {
    $combination = $username . ":" . hash("SHA-256",$password) . "\n";
    echo $combination;
    $timeout = fopen("/var/www/timeout.txt", "r");
    if (fgets($timeout) != "0\n") {
        fclose($timeout);
        resetCountdown();
        return "timeout";
    }
    foreach(file("/var/www/users.conf") as $line) {
        if ($line == $combination) {
            echo $line . " = " . $combination;
            return "verified";
        }
    }
    resetCountdown();
    return "invalid";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <style>
        div {
            border-bottom: 2px solid #dedede;
            margin: 10px;
            padding-bottom: 10px;
            width: 350px;
        }
        .title {
            float: left;
            width: 150px;
            text-align: right;
            padding-right: 10px;
        }
        .submit {
            text-align: right;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <form>
        <div>
            <h1>Newsletter Publisher</h1>
        </div>
        <div>
            <label for="issue" class="title">Newsletter Issue:</label>
            <input type="number" id="issue" name="issue">
        </div>

        <div>
            <label for="username" class="title">Username:</label>
            <input type="text" id="username" name="username">
        </div>

        <div>
            <label for="password" class="title">Password:</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <input type="checkbox" id="test" name="test" value="true">
            <label for="test" class="title">Test Mode?</label>
        </div>

        <div class="submit">
            <input type="submit" value="Publish Newsletter" id="submit">
        </div>
    </form>
</body>
</html>
