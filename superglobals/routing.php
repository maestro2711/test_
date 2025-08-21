<?php

class Router {
    private array $routes;
  public function register(string $route, callable $action):self{
    $this->routes[$route] = $action; # Register a route with an action
    return $this; # Return the Router instance for method chaining
  }
 public function resolve(string $requestUri){
    $route=explode('?', $requestUri)[0]; # Extract the route from the request URI
    $action=$this->routes[$route] ?? null; # Get the action for the route
    if(!$action){
        throw new RouteNotFoundException(); # Throw an exception if the route is not found
    }
    if (is_callable($action)){
        return call_user_func($action); # Call the action if it is callable
    }
    if(is_array($action)){
   } 
    throw new RouteNotFoundException(); # Throw an exception if the action is not callable
  }
}