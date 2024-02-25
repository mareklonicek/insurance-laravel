<!-- resources/views/providers/create.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Create Provider</h1>

<!-- Provider creation form -->
<form method="POST" action="{{ route('providers.store') }}">
    @csrf
    <label for="name">Provider Name:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <button type="submit">Create Provider</button>
</form>
@endsection