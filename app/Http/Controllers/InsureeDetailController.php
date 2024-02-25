<?php

namespace App\Http\Controllers;

use App\Models\Insuree;
use Illuminate\Http\Request;
use App\Models\InsureeDetail;

class InsureeDetailController extends Controller
{
    public function index()
    {
        $insureeDetails = InsureeDetail::with("insuree")->get();
        return view('insureedetails.index', compact('insureeDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Insuree $insuree)
    {

        return view('insureedetails.create', compact('insuree'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Insuree $insuree)
    {
        $validatedData = $request->validate([
            'phone_number' => 'required|string',
            'zip' => 'required|string',
            'street' => 'required|string',
            'street_number' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'birth_number' => 'required|string',
            'bank_account' => 'required|string',
            'insuree_id' => 'required|exists:insurees,id', // Assuming there is an 'insurees' table
        ]);

        $insuree->insureeDetail()->create($validatedData);

        return redirect()->route('insureeDetails.index')->with('success', 'InsureeDetail created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InsureeDetail  $insureeDetail
     * @return \Illuminate\Http\Response
     */
    public function show(InsureeDetail $insureeDetail)
    {
        return view('insureedetails.show', compact('insureeDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InsureeDetail  $insureeDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(InsureeDetail $insureeDetail)
    {
        return view('insureedetails.edit', compact('insureeDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InsureeDetail  $insureeDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InsureeDetail $insureeDetail)
    {
        $request->validate([
            'phone_number' => 'required|string',
            'zip' => 'required|string',
            'street' => 'required|string',
            'street_number' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'birth_number' => 'required|string',
            'bank_account' => 'required|string',
        ]);

        $insureeDetail->update($request->all());

        return redirect()->route('insureedetails.index')->with('success', 'InsureeDetail updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InsureeDetail  $insureeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(InsureeDetail $insureeDetail)
    {
        $insureeDetail->delete();

        return redirect()->route('insureedetails.index')->with('success', 'InsureeDetail deleted successfully');
    }
}
