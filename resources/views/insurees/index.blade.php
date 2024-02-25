<!-- resources/views/insurees/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Insurees</h1>

<!-- Display insurees and their details -->

@foreach($insurees as $insuree)
<div>
    <a href="{{ route('insurees.show', $insuree) }}">{{ $insuree->name }}</a>
    <a href="{{ route('insurees.show', $insuree) }}">{{ $insuree->provider->name }}</a>
    <a href="{{ route('insurees.show', $insuree) }}">{{ $insuree->insurancetype->name }}</a>
    <p>Det. Id: {{ $insuree->insureeDetail->id ?? 'Not created yet' }}</p>
    <p>City: {{ $insuree->insureeDetail->city ?? 'Not defined yet' }}</p>
    <p>Extras: {!! implode('<br>', (array)$insuree->extras) ?? 'Not defined yet' !!}</p>






    <span>Insurance Status: {{ $insuree->insurance_status ?? 'N/A' }}</span>
    <!-- <p>Broker: {{ $insuree->user->name }}</p>
    <p>Number of {{ $insuree->user->name }}'s Insurees: {{ optional($insuree->user->insurees)->count() }}</p> -->
</div>
@endforeach


<a href="{{ route('insurees.create') }}">Create New Insuree</a>
@endsection