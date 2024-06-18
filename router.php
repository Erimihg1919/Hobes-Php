<?php
class Router {
    private $routes = [];

    public function add($route, $file) {
        $this->routes[$route] = $file;
    }

    public function dispatch($uri) {
        $uri = parse_url($uri, PHP_URL_PATH);
        if (array_key_exists($uri, $this->routes)) {
            include $this->routes[$uri];
        } else {
            $this->handle404();
        }
    }

    private function handle404() {
        http_response_code(404);
        include 'views/404.php';
    }
}
?>
