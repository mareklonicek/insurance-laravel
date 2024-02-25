<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insurancetype;

class InsurancetypeController extends Controller
{
    public function index()
    {
        $insurancetypes = Insurancetype::all();
        return view('insurancetypes.index', compact('insurancetypes'));
    }

    public function create()
    {
        return view('insurancetypes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Add other validation rules as needed
        ]);

        insurancetype::create([
            'name' => $request->input('name'),
            // Add other fields as needed
        ]);

        return redirect()->route('insurancetypes.index')->with('success', 'Insurance Type created successfully');
    }

    public function show(insurancetype $insurancetype)
    {


        return view('insurancetypes.show', compact('insurancetype'));
    }

    public function edit(insurancetype $insurancetype)
    {
        return view('insurancetypes.edit', compact('insurancetype'));
    }

    public function update(Request $request, insurancetype $insurancetype)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Add other validation rules as needed
        ]);

        $insurancetype->update([
            'name' => $request->input('name'),
            // Add other fields as needed
        ]);

        return redirect()->route('insurancetypes.index')->with('success', 'Insurance Type updated successfully');
    }


    public function destroy(insurancetype $insurancetype)
    {
        $insurancetype->delete();
        return redirect()->route('insurancetypes.index')->with('success', 'Insurance Type deleted successfully');
    }
}
