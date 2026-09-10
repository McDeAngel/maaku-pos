<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home',
            'activePage' => 'home',
        ];

        return view('partials/header', $data)
            . view('pages/home', $data)
            . view('partials/footer');
    }

    public function about(): string
    {
        $data = [
            'title' => 'About',
            'activePage' => 'about',
        ];

        return view('partials/header', $data)
            . view('pages/about', $data)
            . view('partials/footer');
    }
}
