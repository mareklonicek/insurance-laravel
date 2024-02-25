<!-- resources/views/insurees/edit.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Edit Insuree</h1>

<!-- Display validation errors, if any -->
@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- Edit Insuree form -->
<form method="POST" action="{{ route('insurees.update', $insuree) }}">
    @csrf
    @method('PUT')

    <label for="name">Insuree Name:</label>
    <input type="text" name="name" id="name" value="{{ $insuree->name }}" required>
    <br>

    <!-- Dropdown for providers -->
    <label for="provider_id">Select Provider:</label>
    <select name="provider_id" id="provider_id" required>
        @foreach($providers as $provider)
        <option value="{{ $provider->id }}" {{ $insuree->provider_id == $provider->id ? 'selected' : '' }}>
            {{ $provider->name }}
        </option>
        @endforeach
    </select>
    <br>

    <!-- Dropdown for insurance types -->
    <label for="insurancetype_id">Select Insurance Type:</label>
    <select name="insurancetype_id" id="insurancetype_id" required>
        @foreach($insurancetypes as $insurancetype)
        <option value="{{ $insurancetype->id }}" {{ $insuree->insurancetype_id == $insurancetype->id ? 'selected' : '' }}>
            {{ $insurancetype->name }}
        </option>
        @endforeach
    </select>
    <br>

    <button type="submit">Update Insuree</button>
</form>
@endsection