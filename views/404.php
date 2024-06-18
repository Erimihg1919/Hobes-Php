<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 Not Found</title>
    <link rel="stylesheet" href="/php-routing-demo/css/styles.css">
</head>
<body>
    <?php

    echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    ?>
    <h1>404 Not Found</h1>
    <p>The page you are looking for does not exist.</p>
    <a href="/Hobes-Php//">Go to Home Page</a>
</body>
</html>
