<!-- resources/views/insurance-types/create.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Create Insurance Type</h1>

<!-- Insurance type creation form -->
<form method="POST" action="{{ route('insurancetypes.store') }}">
    @csrf
    <label for="name">Insurance Type:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <button type="submit">Create Insurance Type</button>
</form>
@endsection