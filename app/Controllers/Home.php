<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
    public function home(): string
    {
        return view('welcome_message');
    }
    public function addproduct(): string
    {
        return view('addproducts');
    }
    public function searchproduct(): string
    {
        return view('searchproduct');
    }
}
