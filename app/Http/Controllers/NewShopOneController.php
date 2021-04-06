<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewShopOneController extends Controller
{
    public function index(){
        return view('Frontend.home.home');
    }
    public function categoryProduct(){
        return view('Frontend.category.category-content');
    }
    public function mail(){
        return view('Frontend.mail.mail');
    }
}
