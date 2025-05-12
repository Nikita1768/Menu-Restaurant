<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Dishes\StoreDishRequest;
use App\Http\Requests\Admin\Dishes\UpdateDishRequest;
use App\Models\Category;
use App\Models\Dish;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dish::all();
        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.dishes.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDishRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('dishes', $image, $imageName);
            $data['image'] = 'dishes/' . $imageName;
        }
        Dish::create($data);
        return to_route('admin.dishes.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        $categories = Category::all();
        return view('admin.dishes.edit', compact('dish', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDishRequest $request, Dish $dish)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('dishes', $image, $imageName);
            $data['image'] = 'dishes/' . $imageName;
        }
        $dish->update($data);
        return to_route('admin.dishes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return to_route('admin.dishes.index');
    }
}
