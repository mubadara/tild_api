<?php

namespace App\Controllers;

use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        json(Category::all());
    }
}
