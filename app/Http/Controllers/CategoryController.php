<?php

namespace App\Http\Controllers;

use App\Models\Insuree;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        $insurees = Insuree::all(); // Retrieve all Insurees
        return view('categories.create', compact('insurees'));
    }

    public function store(Request $request)
    {
        // Validation goes here
        $request->validate([
            'name' => 'required|string|max:255',
           
        ]);

        $category = Category::create([
            'name' => $request->input('name'),
            'insuree_id' => $request->input('insuree_id'),
        ]);

        // Sync the selected Insurees
        if ($request->has('insurees')) {
            $category->insurees()->sync($request->insurees);
        }

        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }



    // Display the specified resource.
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    // Show the form for editing the specified resource.
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Category $category)
    {
        // Validation goes here

        $category->update($request->all());
        $category->insurees()->sync($request->insurees);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    // Remove the specified resource from storage.
    public function destroy(Category $category)
    {
        $category->insurees()->detach();
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
