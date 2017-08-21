<?php
$username = $_GET['username'];
$password = $_GET['password'];
$issue = $_GET['issue'];
$test = $_GET['test'];
if ($username !== '') {
    if (verify($username, $password)) {
        sendLetter($issue, $test);
    }
}

function sendLetter($issue, $test) {
    echo shell_exec('sh /var/www/test-mail.sh 13');
}

function resetCountdown() {
    $timeout = fopen("/var/www/timeout.txt","w+");
    fwrite($timeout, "120");
    fclose($timeout);
}

function verify($username, $password) {
    $users = fopen("/var/www/users.conf", "r");
    $timeout = fopen("/var/www/timeout.txt", "r");
    if (fgets($timeout) >= 0) {
        fclose($timeout);
        resetCountdown();
        return false;
    }
    while (($line = fgets($users) !== false)) {
        if ($line == $username . ":" . hash("SHA-512",$password)) {
            fclose($users);
            return true;
        }
    }
    resetCountdown();
    return false;
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
