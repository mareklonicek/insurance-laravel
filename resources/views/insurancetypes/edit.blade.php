@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Insurance Type</h1>

    <form method="POST" action="{{ route('insurancetypes.update', $insurancetype) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Insurance Type Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $insurancetype->name }}" required>
        </div>

        <!-- Add other fields as needed -->

        <button type="submit" class="btn btn-primary">Update Insurance Type</button>
    </form>
</div>
@endsection