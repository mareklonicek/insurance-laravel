<!-- resources/views/insurance-types/create.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Create Insuree Details</h1>

<!-- Insurance type creation form -->
<form method="post" action="{{ route('insureeDetails.store', ['insuree' => $insuree->id]) }}">
    @csrf
    <label for="">Id:</label>
    <input type="text" name="insuree_id" value="{{ $insuree_id }}">
    {{-- Phone Number --}}
    <div class="form-group">
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" id="phone_number" class="form-control" required>
    </div>

    {{-- ZIP --}}
    <div class="form-group">
        <label for="zip">ZIP:</label>
        <input type="text" name="zip" id="zip" class="form-control" required>
    </div>

    {{-- Street --}}
    <div class="form-group">
        <label for="street">Street:</label>
        <input type="text" name="street" id="street" class="form-control" required>
    </div>

    {{-- Street Number --}}
    <div class="form-group">
        <label for="street_number">Street Number:</label>
        <input type="text" name="street_number" id="street_number" class="form-control" required>
    </div>

    {{-- City --}}
    <div class="form-group">
        <label for="city">City:</label>
        <input type="text" name="city" id="city" class="form-control" required>
    </div>

    {{-- Country --}}
    <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" name="country" id="country" class="form-control" required>
    </div>

    {{-- Birth Number --}}
    <div class="form-group">
        <label for="birth_number">Birth Number:</label>
        <input type="text" name="birth_number" id="birth_number" class="form-control" required>
    </div>

    {{-- Bank Account --}}
    <div class="form-group">
        <label for="bank_account">Bank Account:</label>
        <input type="text" name="bank_account" id="bank_account" class="form-control" required>
    </div>
    <br>
    <button type="submit">Create Insuree Details</button>
</form>
@endsection