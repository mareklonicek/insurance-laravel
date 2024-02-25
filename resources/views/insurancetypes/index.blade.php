<!-- resources/views/insurance-types/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Insurance Types</h1>

<!-- Display insurance types and their details -->
@foreach($insurancetypes as $insurancetype)
<div>
    {{ $insurancetype->name }}
    <a href="{{ route('insurancetypes.show', $insurancetype) }}">{{ $insurancetype->name }}</a>
</div>
@endforeach

<a href="{{ route('insurancetypes.create') }}">Create New Insurance Type</a>
@endsection