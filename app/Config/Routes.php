<?php

use CodeIgniter\Router\RouteCollection;
use Config\App;

use App\Controllers\Home;
use App\Controllers\Article;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get("/about", "Home::about");
$routes->get("about", [Home::class, "about"]);


$routes->get("article/all", [Article::class, "index"]);
# $routes->get("article/(:num)", [Article::class, "show/$1"]);
$routes->get("article/(:num)", "Article::show/$1");
$routes->get("article/new", "Article::new");
$routes->post("article/create", "Article::create");
