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
# $routes->get("article/(:num)", "Article::show/$1");
$routes->get("article/(:num)", [Article::class, "show"]);
$routes->get("article/new", "Article::new");
$routes->post("article/create", "Article::create");
$routes->get("article/edit/(:num)", "Article::edit/$1");
$routes->post("article/update/(:num)", "Article::update/$1");
$routes->get("article/delete/(:num)", "Article::delete/$1");
$routes->post("article/delete/(:num)", "Article::delete/$1");
