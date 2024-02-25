<!-- resources/views/providers/show.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Provider Details</h1>

<!-- Display provider details -->
<div>
    <h2>{{ $provider->name }}</h2>
    <!-- Add more provider details as needed -->
</div>

<a href="{{ route('providers.edit', $provider) }}">Edit Provider</a>
<form method="POST" action="{{ route('providers.destroy', $provider) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Provider</button>
</form>
@endsection