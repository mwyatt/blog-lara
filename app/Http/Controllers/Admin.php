<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index()
    {
        echo '<pre>';
        print_r('index');
        echo '</pre>';
        exit;
        
    }
}
