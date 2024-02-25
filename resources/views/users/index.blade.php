<!-- resources/views/providers/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Users</h1>

@foreach($users as $user)
<div>
    <p>{{ $user->name }}</p>
    @if ($user->insurees)
    <p>Number of {{ $user->name }}'s Insurees: {{ optional($user->insurees)->count()}}
    <ul>
        @foreach($user->insurees as $insuree)
        <li>{{ $insuree->name }} - {{ $insuree->insurance_status }}
            , Provider: {{ $insuree->provider->name }}, Insurance Type: {{ $insuree->insurancetype->name }},
           <p>Extras: {!! implode('<br>', (array)$insuree->extras) ?? 'Not defined yet' !!}</p>



        </li>

        @endforeach
    </ul>
    @else
    <p>No insurees for this user.</p>
    @endif
</div>
@endforeach


@endsection