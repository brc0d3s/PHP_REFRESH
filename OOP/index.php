<?php
require_once 'Router.php';

// Register routes
Router::handle('GET', '/', 'homepg.php');
Router::handle('GET', '/about', 'about.php');
Router::handle('GET', '/submit', 'submit.php');

// 404 Fallback
http_response_code(404);
echo "404 Not Found: The requested resource does not exist.";
?>
