<?php

namespace App\Http\Controllers;

use App\Models\Insuree;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Models\Insurancetype;

class InsureeController extends Controller
{
    public function index()
    {
        // Eager load the 'provider' and 'insurancetype' relationships
        $insurees = Insuree::with('provider', 'insurancetype', "user", "insureeDetail")->get();

        return view('insurees.index', compact('insurees'));
    }

    public function create()
    {
        // Fetch providers and insurance types for dropdowns
        $providers = Provider::all();
        $insurancetypes = Insurancetype::all();


        return view('insurees.create', compact('providers', 'insurancetypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'provider_id' => 'required|exists:providers,id',
            'insurancetype_id' => 'required|exists:insurancetypes,id',
            'insurance_status' => 'nullable|string|max:255', // Add validation for insurance_status
        ]);
        $validatedData = $request->validate([
            'phone_number' => 'required|string',
            'zip' => 'required|string',
            'street' => 'required|string',
            'street_number' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'birth_number' => 'required|string',
            'bank_account' => 'required|string',
            //'insuree_id' => 'required|exists:insurees,id', // Assuming there is an 'insurees' table
        ]);

       
        $insuree = Insuree::create([
            'name' => $request->input('name'),
            'provider_id' => $request->input('provider_id'),
            'insurancetype_id' => $request->input('insurancetype_id'),
            'insurance_status' => $request->input('insurance_status'), // Include insurance_status
            'extras' => $request->input('extras', []),
            'user_id' => auth()->id(),
        ]);
         $insuree->insureeDetail()->create($validatedData);
        return redirect()->route('insurees.index')->with('success', 'Insuree created successfully');
    }

    public function show(Insuree $insuree)
    {
        // Eager load the 'provider' and 'insurancetype' relationships
        $insuree->load('provider', 'insurancetype');

        return view('insurees.show', compact('insuree'));
    }

    public function edit(Insuree $insuree)
    {
        // Fetch providers and insurance types for dropdowns
        $providers = Provider::all();
        $insurancetypes = Insurancetype::all();

        return view('insurees.edit', compact('insuree', 'providers', 'insurancetypes'));
    }

    public function update(Request $request, Insuree $insuree)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'provider_id' => 'required|exists:providers,id',
            'insurancetype_id' => 'required|exists:insurancetypes,id',
        ]);

        $insuree->update([
            'name' => $request->input('name'),
            'provider_id' => $request->input('provider_id'),
            'insurancetype_id' => $request->input('insurancetype_id'),
        ]);

        return redirect()->route('insurees.index')->with('success', 'Insuree updated successfully');
    }

    public function destroy(Insuree $insuree)
    {
        $insuree->delete();
        return redirect()->route('insurees.index')->with('success', 'Insuree deleted successfully');
    }
}
