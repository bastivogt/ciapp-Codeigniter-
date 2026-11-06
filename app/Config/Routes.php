<?php

use CodeIgniter\Router\RouteCollection;
use Config\App;

use App\Controllers\Home;
use App\Controllers\ArticleController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get("/about", "Home::about");
$routes->get("about", [Home::class, "about"]);


// $routes->get("article/all", [Article::class, "index"]);
// # $routes->get("article/(:num)", [Article::class, "show/$1"]);
// # $routes->get("article/(:num)", "Article::show/$1");
// $routes->get("article/(:num)", [Article::class, "show"]);
// $routes->get("article/new", "Article::new");
// $routes->post("article/create", "Article::create");
// $routes->get("article/edit/(:num)", "Article::edit/$1");
// $routes->post("article/update/(:num)", "Article::update/$1");
// $routes->get("article/delete/(:num)", "Article::delete/$1");
// #$routes->post("article/delete/(:num)", "Article::delete/$1");
// $routes->post("article/destroy/(:num)", [Article::class, "destroy"]);

$routes->get("articles", [ArticleController::class, "index"]);
$routes->get("articles/(:num)", [ArticleController::class, "show"]);
$routes->get("articles/new", [ArticleController::class, "new"]);
$routes->post("articles", [ArticleController::class, "create"]);
$routes->get("articles/(:num)/edit", [ArticleController::class, "edit"]);
$routes->put("articles/(:num)", [ArticleController::class, "update"]);
$routes->get("articles/(:num)/delete", [ArticleController::class, "delete"]);
$routes->delete("articles/(:num)", [ArticleController::class, "destroy"]);
