<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | BSC'
        ];


        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | BSC'
        ];


        return view('pages/about', $data);
    }
}
