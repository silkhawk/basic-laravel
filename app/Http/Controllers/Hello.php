<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello extends Controller
{
    public function index()
    {
        echo " Its Index from Hello ";
    }

    public function user()
    {
        echo " Its user from Hello ";
    }
}
