<!-- resources/views/insurees/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Insuree</h1>

    <!-- Insuree creation form -->
    <form method="POST" action="{{ route('insurees.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <label for="name">Insuree Name:</label>
                <input type="text" name="name" id="name" required>
                <!-- Dropdown for Providers -->
                <label for="provider_id">Select Provider:</label>
                <select name="provider_id" id="provider_id" required>
                    @foreach($providers as $provider)
                    <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                    @endforeach
                </select>
                <br>

                <!-- Dropdown for Insurance Types -->
                <label for="insurancetype_id">Select Insurance Type:</label>
                <select class="form-select" name="insurancetype_id" id="insurancetype_id" required>
                    @foreach($insurancetypes as $insurancetype)
                    <option value="{{ $insurancetype->id }}">{{ $insurancetype->name }}</option>
                    @endforeach
                </select>
                <br>
                <div class="mb-3">
                    <label for="insurance_status" class="form-label">Insurance Status:</label>
                    <select name="insurance_status" id="insurance_status" class="form-select" required>
                        <option value="Active">Active</option>
                        <option value="Cancelled">Cancelled</option>
                        <option value="Pending">Pending</option>
                        <option value="Expired">Expired</option>
                        <option value="Suspended">Suspended</option>
                    </select>
                </div>
                <br>
                <fieldset>
                    <label>Choose Extras:</label>
                    <input type="checkbox" name="extras[]" value="mushrooms">Mushrooms<br />
                    <input type="checkbox" name="extras[]" value="peppers">Peppers<br />
                    <input type="checkbox" name="extras[]" value="garlic">Garlic<br />
                    <input type="checkbox" name="extras[]" value="olives">Olives<br />
                </fieldset>
                <h1>Create Insuree Details</h1>


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
    </form>
    <button type="submit" class="btn btn-primary btn-sm">Create Insuree</button>
</div>
</div>
</form>
</div>
@endsection