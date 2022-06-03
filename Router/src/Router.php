<?php

namespace App;

class Router
{
    private $handlers;
    private $notFoundHandler;
    const METHOD_POST = 'POST';
    const METHOD_GET = 'GET';

    private function addHandler($path, $method, $handler)
    {
        $this->handlers[$method . $path] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handler,
        ];
    }

    public function get($path, $handler)
    {
        $this->addHandler($path, self::METHOD_GET, $handler);
    }

    public function post($path, $handler)
    {
        $this->addHandler($path, self::METHOD_POST, $handler);
    }

    public function addNotFoundHandler($handler)
    {
        $this->notFoundHandler = $handler;
    }

    public function run()
    {
        $requestURI = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $request_segments = explode('/', $requestURI);
        $requestPath = '/Router/public/' . $request_segments[count($request_segments) - 1];
        $method = $_SERVER['REQUEST_METHOD'];

        $callback = null;
        foreach ($this->handlers as $handler) {
            if ($handler['path'] === $requestPath && $method === $handler['method']) {
                $callback = $handler['handler'];
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