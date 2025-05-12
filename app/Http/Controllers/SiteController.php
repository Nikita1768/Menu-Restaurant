<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $dishes = Dish::where('show', true)->get();
        $categories = Category::with('dishes')->get();
        return view('components.frontend.index', compact('dishes', 'categories'));
    }

    public function category($id)
    {
        $dishes = Dish::query()
            ->where('show', true)
            ->where('category_id', $id)
            ->get();
        $categories = Category::with('dishes')->get();
        return view('components.frontend.index', compact('dishes', 'categories'));
    }

}
