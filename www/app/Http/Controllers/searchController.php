<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(string $category, int $price = 0)
    {
        echo '<pre>' . htmlentities(print_r("Searching for $category with price from $price", true)) . '</pre>';
    }
}
