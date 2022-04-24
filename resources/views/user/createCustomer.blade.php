@extends('user-Layout.app')
@section('title')
    Dashboard
@endsection

@section('content')
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<!-- add new users -->

<div class="col-8 w-100">
    <div>
        <h1 class="text-center text-primary"> Add New Customer</h1>
    </div>

<div class="card">
    <div class="card-body">
        
<form method="POST" action="{{ route('user.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Full Name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your email">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control" placeholder="Enter Your address">
    </div>
     <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Your phone">
    </div>
    <div class="form-group">
        <label for="bussiness">Bussiness</label>
        <input type="bussiness" name="bussiness" id="bussiness" class="form-control" placeholder="Enter Your bussiness">
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
    </div>
</div>
</div>

@endsection