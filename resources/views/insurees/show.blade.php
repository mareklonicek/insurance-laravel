<!-- resources/views/insurees/show.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Insuree Details</h1>

<!-- Display insuree details -->
<div>
    <h2>{{ $insuree->name }}</h2>
    <span>Insurance Status: {{ $insuree->insurance_status ?? 'N/A' }}</span>
    <p>City: {{ $insuree->insureeDetail->city ?? 'Not defined yet' }}</p>
    <p>Categories: {{ implode(', ', $insuree->extras) ?? 'Not defined yet' }}</p>

    <p>Or - Categories:
        @forelse($insuree->extras as $extra)
        {{ $extra }},
        @empty
        Not defined yet
        @endforelse
    </p>
</div>

<a href="{{ route('insurees.edit', $insuree) }}">Edit Insuree</a>
<form method="POST" action="{{ route('insurees.destroy', $insuree) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Insuree</button>
</form>
@endsection