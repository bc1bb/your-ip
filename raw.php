<?php
# same as index.php but with raw output (no other bullshit than ip/host/ua)

if (isset($_GET['host'])) {
    echo gethostbyaddr($_SERVER['REMOTE_ADDR'])."\n";
} elseif (isset($_GET['ua'])) {
    echo $_SERVER['HTTP_USER_AGENT']."\n";
} else {
    echo $_SERVER['REMOTE_ADDR']."\n";
}