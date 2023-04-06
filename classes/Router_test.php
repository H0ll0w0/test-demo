<?php
class Router
{

    private $page;
    private $routes;

    public function __construct()
    {
        $this->routes = include 'config/routes.php';
        $this->page = isset($_GET["page"]) ? $_GET["page"] : "accueil";
    }

    public function getPage(): string{
        return $this->page;
    }

    public function getRoutes(): array{
        return $this->routes;
    }

    private function routeExists(): bool{
        return isset($this->routes[$this->page]);
    }
 
    public function includeTemplate(): void{
        if ( $this->routeExists() && file_exists(PAGES . $this->page . ".php")) {
            include PAGES . $this->page . ".php";
        } else {
            include PAGES . "page404.php";
        }
    }
}