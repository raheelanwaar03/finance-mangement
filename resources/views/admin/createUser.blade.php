@extends('admin-Layout.app')
@section('title')
    Dashboard
@endsection

@section('content')
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<!-- add new users -->

<div class="col-8 w-100">
    <div>
        <h1 class="text-center text-primary"> Add New User</h1>
    </div>

<div class="card">
    <div class="card-body">
        
<form method="POST" action="{{ route('admin.store') }}">
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
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your password">
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>
    </div>
</div>
</div>

@endsection