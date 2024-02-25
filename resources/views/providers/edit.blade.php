@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Provider</h1>

    <form method="POST" action="{{ route('providers.update', $provider) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Provider Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $provider->name }}" required>
        </div>

        <!-- Add other fields as needed -->

        <button type="submit" class="btn btn-primary">Update Provider</button>
    </form>
</div>
@endsection