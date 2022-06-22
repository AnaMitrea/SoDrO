<?php

namespace App;

include_once 'application/database/DatabaseHandler.php';
require 'application/class/models/Contact.php';
require 'application/class/models/Shop.php';

class Router
{
    private $handlers;
    private $notFoundHandler;
    const METHOD_POST = 'POST';
    const METHOD_GET = 'GET';

    private function addHandler($path, $method, $handler): void
    {
        $this->handlers[$method . $path] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handler,
        ];
    }

    public function get($path, $handler): void
    {
        $this->addHandler($path, self::METHOD_GET, $handler);
    }

    public function post($path, $handler): void
    {
        $this->addHandler($path, self::METHOD_POST, $handler);
    }

    public function addNotFoundHandler($handler): void
    {
        $this->notFoundHandler = $handler;
    }

    public function endpoint($requestURI): string
    {
        $request_segments = explode('/', $requestURI);
        $requestPath = '/BackendRouting';
        for($index = 2; $index < count($request_segments); $index++) {
            $requestPath .= ( '/'. $request_segments[$index]);
        }
        return $requestPath;
    }

    public function run(): void
    {
        $requestURI = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestPath = $this->endpoint($requestURI);

        $method = $_SERVER['REQUEST_METHOD'];

        $callback = null;
        foreach ($this->handlers as $handler) {
            if ($handler['path'] === $requestPath && $method === $handler['method']) {
                $callback = $handler['handler'];
            }
        }

        # pentru cazul in care handler ul este de tipul:     MyClass::class . '::myFunction'
        if (is_string($callback)) {
            $parts = explode('::', $callback);
            if (is_array($parts)) {
                $className = array_shift($parts);
                $handler = new $className;
                $method = array_shift($parts);
                $callback = [$handler, $method];
            }
        }

        if (!$callback) {
            header("HTTP/1.0 404 Not Found");
            if (!empty($this->notFoundHandler)) {
                $callback = $this->notFoundHandler;
            }
        }

        call_user_func_array($callback, [
            array_merge($_GET, $_POST)
        ]);
    }
}