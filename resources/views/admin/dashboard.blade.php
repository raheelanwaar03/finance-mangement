@extends('admin-Layout.app')
@section('title')
   Admin Dashboard
@endsection

@section('content')
<div class="d-flex justify-content-around align-items-center">
    <h1 class="text-primary"> {{ Auth::user()->name }}  Welcome Admin to Dashboard</h1>
    <form action="{{ route('logout') }}" method="POST">
    @csrf
        <button class="btn btn-primary">Logout</button>
    </form>
</div>
@endsection