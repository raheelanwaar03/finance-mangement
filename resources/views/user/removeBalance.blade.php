@extends('user-Layout.app')
@section('title')
    Dashboard
@endsection

@section('content')
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<!-- add new users -->

<div class="col-8 w-100">
    <div>
        <h1 class="text-center text-primary">Remove Balance to {{ Auth::user()->name }}'s Account</h1>
    </div>

<div class="card">
    <div class="card-body">
        
<form method="POST" action="{{ route('user.minusBalance') }}">
    @csrf
    <div class="form-group">
        <label for="amount">Add Amount</label>
        <input type="number" name="amount" id="amount" class="form-control" placeholder="Enter amount">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" name="description" id="description" class="form-control" placeholder="Type description">
      <input type="hidden" name="customer_id" value="{{ $customer->id }}">
    </div>
    <button type="submit" class="btn btn-outline-danger">Remove</button>
</form>
    </div>
</div>
</div>

@endsection