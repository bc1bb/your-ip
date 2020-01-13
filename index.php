<?php
echo "<h1>Your IP</h1>\n";
echo "<h2>Client</h2>\n";

echo "Your IP: ".$_SERVER['REMOTE_ADDR']. " (Port: ". $_SERVER['REMOTE_PORT']. ")". "<br>\n";
echo "Your hostname: ".gethostbyaddr($_SERVER['REMOTE_ADDR'])."<br>\n";
echo "Your User Agent: ".$_SERVER['HTTP_USER_AGENT']."<br>\n";

if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    echo "<code>X_FORWARDED_FOR</code>: ".$_SERVER['HTTP_X_FORWARDED_FOR']."<br>\n";
}
if (!empty($_SERVER['HTTP_REFERER'])) {
    echo "Referer: ".$_SERVER['HTTP_REFERER']."<br>\n";
}
echo "Request Method: ".$_SERVER['REQUEST_METHOD']."<br>\n";

echo "<h2>Server</h2>\n";

echo "Server's IP: ".$_SERVER['SERVER_ADDR']. " (Port: ". $_SERVER['SERVER_PORT']. ")". "<br>\n";
echo "Server's hostname: ".gethostname()."<br>\n";
echo "Software: ".$_SERVER['SERVER_SOFTWARE']."<br>\n";
echo "CGI Version: ".$_SERVER['GATEWAY_INTERFACE']."<br>\n";
echo "Protocol: ".$_SERVER['SERVER_PROTOCOL']."<br>\n";

echo "<br><br>Use <a href=\"raw.php\">raw.php</a> to get raw output, don't forget you can use one of the following argument <code>host</code> or <code>ua</code>.<br>\n";
