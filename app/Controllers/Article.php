<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArticleModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Article extends BaseController
{

    private $model;

    public function __construct()
    {
        $this->model = new ArticleModel();
    }

    private function getArticleOr404($id): \App\Entities\Article
    {
        $article = $this->model->find($id);
        if ($article === null) {
            throw PageNotFoundException::forPageNotFound("Article with id: $id not found!");
        }
        return $article;
    }

    public function index()
    {

        $articles = $this->model->findAll();

        return view("Article/index", [
            "title"    => "All Articles",
            "articles" => $articles,
        ]);
    }

    public function show($id)
    {
        $article = $this->getArticleOr404($id);
        return view("Article/show", [
            "title"   => $article->title,
            "article" => $article,
        ]);
    }

    public function new ()
    {

        return view("Article/new", [
            "title"   => "Create new article",
            "article" => new \App\Entities\Article(),
        ]);
    }

    public function create()
    {
        # dd($this->request->getPost());

        $data    = $this->request->getPost();
        $article = new \App\Entities\Article($this->request->getPost());
        $id      = $this->model->insert($article);
        if ($id === null) {
            return redirect()->back()
                ->with("errors", $this->model->errors())
                ->withInput();
        }
        return redirect()->to(url_to("Article::show", $id))
            ->with("message", "Article created!");
    }

    public function edit($id)
    {
        $article = $this->getArticleOr404($id);

        return view("Article/edit", [
            "title"   => "Edit: " . $article->title,
            "article" => $article,
        ]);
    }

    public function update($id)
    {
        $article = $this->getArticleOr404($id);
        $article->fill($this->request->getPost());

        if (! $article->hasChanged()) {
            return redirect()->back()->with("message", "Nothing changed!");
        }

        $success = $this->model->update($id, $article);

        if ($success) {
            return redirect()->to(url_to("Article::show", $id))
                ->with("message", "Article updated!");
        } else {
            return redirect()->back()
                ->with("errors", $this->model->errors())
                ->withInput();
        }
    }

    public function delete($id)
    {
        $article = $this->getArticleOr404($id);

        if($this->request->getMethod() === "POST") {
            $this->model->delete($id);
            return redirect()->to(url_to("Article::index"))
                                ->with("message", "Article deleted!");

        }

        return view("Article/delete", [
            "title"   => "Delete: " . $article->title,
            "article" => $article,
        ]);
    }
}
