<?php

namespace app\core;

/**
 * Class Router
 * @package app\core
 */
class Router
{

    protected array $routes = [];
    protected Request $request;
    protected Response $response;

    /**
     * Router constructor.
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }


    /**
     * @param string $path
     * @param $callback
     */
    public function get(string $path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    /**
     * @param string $path
     * @param $callback
     */
    public function post(string $path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    // Get route callback using path and method
    public function resolve()
    {
        $method = $this->request->method();
        $path = $this->request->getPath();
        $callback = $this->routes[$method][$path] ?? false;

        // Render view
        if (is_string($callback)) {
            return $this->renderView($callback);
        }

        if (is_array($callback)) {
            Application::$app->setController(new $callback[0]());
            $callback[0] = Application::$app->getController();
        }

        // Call callback
        if ($callback)
            return call_user_func($callback, $this->request);

        // 404 Not found
        $this->response->setStatusCode(404);
        return $this->renderView('_404');

    }

    public function renderContentToLayout($contentSection, $content)
    {
        $layoutContent = $this->includeAsString(Application::$ROOT_DIR . "/views/layout/" . Application::$app->controller->layout . ".php");
        return str_replace("{{" . $contentSection . "}}", $content, $layoutContent);
    }

    public function renderView($view, $data = null)
    {
        $viewContent = $this->includeAsString(Application::$ROOT_DIR . "/views/$view.php", $data);
        return $this->renderContentToLayout('content', $viewContent);
    }

    /**
     * @param $path
     * @return false|string
     */
    private function includeAsString($path, $data = null)
    {
        if ($data) {
            foreach ($data as $key => $value) {
                ${$key} = $value;
            }
        }
        ob_start();
        include_once($path);
        return ob_get_clean();
    }

}