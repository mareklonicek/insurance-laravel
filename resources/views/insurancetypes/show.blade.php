<!-- resources/views/insurance-types/show.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Insurance Type Details</h1>

<!-- Display insurance type details -->
<div>
    <h2>{{ $insurancetype->name }}</h2>
    <!-- Add more insurance type details as needed -->
</div>

<a href="{{ route('insurancetypes.edit', $insurancetype) }}">Edit Insurance Type</a>
<form method="POST" action="{{ route('insurancetypes.destroy', $insurancetype) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Insurance Type</button>
</form>
@endsection