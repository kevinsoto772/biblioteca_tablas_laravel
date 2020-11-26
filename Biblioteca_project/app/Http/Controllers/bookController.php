<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libros;
use App\Models\autor;
use App\Models\editorial;

class bookController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('Book');
    }
}
