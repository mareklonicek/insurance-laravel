@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Insuree Details</h1>

    <form method="POST" action="{{ route('insureeDetails.update', $insureeDetails) }}">
        @csrf
        @method('PUT')

        {{-- Phone Number --}}
        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $insureeDetail->phone_number }}" required>
        </div>

        {{-- ZIP --}}
        <div class="form-group">
            <label for="zip">ZIP:</label>
            <input type="text" name="zip" id="zip" class="form-control" value="{{ $insureeDetail->zip }}" required>
        </div>

        {{-- Street --}}
        <div class="form-group">
            <label for="street">Street:</label>
            <input type="text" name="street" id="street" class="form-control" value="{{ $insureeDetail->street }}" required>
        </div>

        {{-- Street Number --}}
        <div class="form-group">
            <label for="street_number">Street Number:</label>
            <input type="text" name="street_number" id="street_number" class="form-control" value="{{ $insureeDetail->street_number }}" required>
        </div>

        {{-- City --}}
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" name="city" id="city" class="form-control" value="{{ $insureeDetail->city }}" required>
        </div>

        {{-- Country --}}
        <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" name="country" id="country" class="form-control" value="{{ $insureeDetail->country }}" required>
        </div>

        {{-- Birth Number --}}
        <div class="form-group">
            <label for="birth_number">Birth Number:</label>
            <input type="text" name="birth_number" id="birth_number" class="form-control" value="{{ $insureeDetail->birth_number }}" required>
        </div>

        {{-- Bank Account --}}
        <div class="form-group">
            <label for="bank_account">Bank Account:</label>
            <input type="text" name="bank_account" id="bank_account" class="form-control" value="{{ $insureeDetail->bank_account }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Insuree Details</button>
    </form>
</div>
@endsection