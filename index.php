<?php
    $path = urldecode(	parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH) );

    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
        $uri = 'https://';
    } else {
        $uri = 'http://';
    }
    $uri .= htmlentities($_SERVER['SERVER_NAME']);
    header('Location: '.$uri.$path.'public/');
    exit;
?>