<!-- resources/views/insurance-types/show.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Insuree Details Particulars</h1>

<div>
    <strong>Phone Number:</strong> {{ $insureeDetail->phone_number }}
</div>

<div>
    <strong>ZIP:</strong> {{ $insureeDetail->zip }}
</div>

<div>
    <strong>Street:</strong> {{ $insureeDetail->street }}
</div>

<div>
    <strong>Street Number:</strong> {{ $insureeDetail->street_number }}
</div>

<div>
    <strong>City:</strong> {{ $insureeDetail->city }}
</div>

<div>
    <strong>Country:</strong> {{ $insureeDetail->country }}
</div>

<div>
    <strong>Birth Number:</strong> {{ $insureeDetail->birth_number }}
</div>

<div>
    <strong>Bank Account:</strong> {{ $insureeDetail->bank_account }}
</div>

<div>
    <a href="{{ route('insureeDetails.edit', ['insureeDetail' => $insureeDetail->id]) }}" class="btn btn-primary">Edit</a>

</div>
<form method="POST" action="{{ route('insureeDetails.destroy', $insureeDetail) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Insuree Details</button>
</form>
<br><a href="{{ route('insureeDetails.index') }}" class="btn btn-secondary">Back to List</a>
@endsection