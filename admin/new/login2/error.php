<?php
header('HTTP/1.1 404 Not Found');
    echo "<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\">\n<html><head>\n<title>404 Not Found</title>\n</head>";
    echo "<body>\n<h1>Not Found</h1>\n<p>The requested URL ".$_SERVER['REQUEST_URI']." was not found on this server.</p>\n";
    
    // Echo output similar to Apache's default 404 (if thats what you're using)
    exit;

?>
