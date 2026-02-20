<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        return view("Home/index", [
            "title" => "Home",
            "content" => "Hello, world!"
        ]);
    }

    public function about(): string {
        return view("Home/index", [
            "title" => "About",
            "content" => "About me ..."
        ]);
    }
}
