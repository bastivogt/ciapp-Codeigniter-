<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ArticleModel;

class Article extends BaseController
{
    public function index()
    {

        $model = new ArticleModel();
        $articles = $model->findAll();


        return view("Article/index", [
            "title" => "All Articles",
            "articles" => $articles
        ]);
    }


    public function show($id)
    {
        $model = new ArticleModel();
        $article = $model->find((int)$id);

        return view("Article/show", [
            "title" => $article["title"],
            "article" => $article
        ]);
    }


    public function new()
    {

        return view("Article/new", [
            "title" => "Create new article"
        ]);
    }

    public function create() {
        # dd($this->request->getPost());

        $data = $this->request->getPost();
        $model = new ArticleModel();
        $id = $model->insert($data);
        if(!$id) {
            return redirect()->back()
                            ->with("errors", $model->errors())
                            ->withInput();
        }
        return redirect()->to(url_to("Article::show", $id))
                        ->with("message", "Article created!");
    }
}
