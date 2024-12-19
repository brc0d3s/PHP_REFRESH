<?php
class Router {
    public static function handle($method = 'GET', $path = '/', $filename = '') {
        $currentMethod = $_SERVER['REQUEST_METHOD'];
        $currentURI = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Ignore query parameters

        // Ensure the request method matches
        if ($currentMethod !== $method) {
            return false;
        }

        // Automatically detect the root folder dynamically
        $root = dirname($_SERVER['SCRIPT_NAME']); // e.g., /PHP/OOP
        $pattern = '#^' . $root . $path . '$#';

        // Check if the current URI matches the pattern
        if (preg_match($pattern, $currentURI)) {
            if (file_exists($filename)) {
                require_once $filename;
            } else {
                http_response_code(500);
                echo "Error: File not found - " . htmlspecialchars($filename);
            }
            exit; // Stop further route handling
        }

        return false;
    }
}
