@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a new Venue</div>
                <div class="card-body">
                    <form method='POST' action='/venues'>
                      {{csrf_field()}}
                      <input type='text' name='name' placeholder="Venue name" required>
                      <input type='text' name='address1' placeholder="1st Line of Address:" required>
                      <input type='text' name='address2' placeholder="2nd Line of Address (optional):" required>
                      <input type='text' name='postcode' placeholder="Postcode:" required>
                      <input type='text' name='city' placeholder="City:" required>
                      <input type='text' name='country' placeholder="Country:" required>
                      <button type='submit'> Create New Intent</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
