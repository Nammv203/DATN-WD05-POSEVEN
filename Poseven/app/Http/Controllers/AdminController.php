<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public $fodel = "admin.";
    public function index() {
        return view($this->fodel . __FUNCTION__ );
    }
}
