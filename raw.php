<?php
# same as index.php but with raw output (no other bullshit than ip/host/ua/method)

if (isset($_GET['host'])) {
    echo gethostbyaddr($_SERVER['REMOTE_ADDR'])."\n";
} elseif (isset($_GET['ua'])) {
    echo $_SERVER['HTTP_USER_AGENT']."\n";
} elseif (isset($_GET['method'])) {
    echo $_SERVER['REQUEST_METHOD']."\n";
} else {
    echo $_SERVER['REMOTE_ADDR']."\n";
}