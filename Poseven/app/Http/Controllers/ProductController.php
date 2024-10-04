<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{   
    public $fodel = "admin.products.";
    public function index() {
        return view($this->fodel . __FUNCTION__);
    }

    public function create() {
        return view($this->fodel . __FUNCTION__);
    }

    public function update() {
        return view($this->fodel . __FUNCTION__);
    }
}
