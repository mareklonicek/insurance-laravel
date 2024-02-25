<!-- resources/views/categories/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categories</h1>

    <!-- Display categories -->
    @forelse($categories as $category)
    <div>
        <h3>{{ $category->name }}</h3>
        <p>Insurees:
            @forelse($category->insurees as $insuree)
            {{ $insuree->name }},
            @empty
            No insurees assigned to this category.
            @endforelse
        </p>
        <hr>
    </div>
    @empty
    <p>No categories found.</p>
    @endforelse

    <a href="{{ route('categories.create') }}">Create New Category</a>
</div>
@endsection