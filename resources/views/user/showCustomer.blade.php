@extends('user-Layout.app')
@section('title')
   User Dashboard
@endsection

@section('content')

<h1 class="text-center text-primary">All Customer's</h1>

<table class="table table-primary table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Balance</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Bussiness</th>
        <th scope="col">Created at</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
        <tr>
            <td>
                <a href="{{ route('user.show',['user'=>$customer->id]) }}">
                    {{ $customer->name }}
                </a>
            </td>
            <td>{{ $customer->email }}</td>
            <td>{{ balance($customer->id) }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->bussiness }}</td>
            <td>{{ $customer->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection