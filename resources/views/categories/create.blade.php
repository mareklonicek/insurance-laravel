<!-- resources/views/categories/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Category</h1>

    <!-- Category creation form -->
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Category Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <!-- Insurees Checkboxes -->
        <div class="mb-3">
            <label for="insurees" class="form-label">Select Insurees:</label>
            <div>
                @foreach($insurees as $insuree)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="insurees[]" value="{{ $insuree->id }}" id="insuree_{{ $insuree->id }}">
                    <label class="form-check-label" for="insuree_{{ $insuree->id }}">
                        {{ $insuree->name }}
                    </label>
                </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
</div>
@endsection