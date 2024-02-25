<!-- resources/views/insurance-types/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Insuree Details</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Phone Number</th>
            <th>ZIP</th>
            <th>Street</th>
            <th>Street Number</th>
            <th>City</th>
            <th>Country</th>
            <th>Birth Number</th>
            <th>Bank Account</th>
            <th>Insuree ID</th>
            <th>Insuree Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($insureeDetails as $insureeDetail)
        <tr>
            <td>{{ $insureeDetail->id }}</td>
            <td>{{ $insureeDetail->phone_number }}</td>
            <td>{{ $insureeDetail->zip }}</td>
            <td>{{ $insureeDetail->street }}</td>
            <td>{{ $insureeDetail->street_number }}</td>
            <td>{{ $insureeDetail->city }}</td>
            <td>{{ $insureeDetail->country }}</td>
            <td>{{ $insureeDetail->birth_number }}</td>
            <td>{{ $insureeDetail->bank_account }}</td>
            <td>{{ $insureeDetail->insuree_id }}</td>
            <td>{{ $insureeDetail->insuree->name }}</td>
            <td>
                <a href="{{ route('insureeDetails.show', ['insureeDetail' => $insureeDetail->id]) }}" class="btn btn-info">View</a>
                <a href="{{ route('insureeDetails.edit', ['insureeDetail' => $insureeDetail->id]) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('insurees.show', ['insuree' => $insureeDetail->insuree_id]) }}" class="btn btn-primary">Insuree</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('insureeDetails.create') }}">Create New Insuree Details</a>
@endsection