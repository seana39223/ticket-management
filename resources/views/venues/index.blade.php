@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Venues</div>
                <div class="card-body">
                  <ul>
                  @foreach ($venues as $venue)
                    <li> {{$venue->name}}</li>
                  @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
