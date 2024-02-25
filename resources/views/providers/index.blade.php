<!-- resources/views/providers/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Providers</h1>

<!-- Display providers and their details -->
@foreach($providers as $provider)
<div>
    <a href="{{ route('providers.show', $provider) }}">{{ $provider->name }}</a>
</div>
@endforeach

<a href="{{ route('providers.create') }}">Create New Provider</a>
@endsection