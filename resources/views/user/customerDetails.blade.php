@extends('user-Layout.app')
@section('title')
   User Dashboard
@endsection

@section('content')

<h1 class="text-center text-primary">Customer's Detail</h1>

<table class="table table-primary table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Bussiness</th>
        <th scope="col">Balance</th>
        <th scope="col">Created at</th>
        <th scope="col">Add Balance</th>
        <th scope="col">Remove Balance</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->bussiness }}</td>
            <td>{{ number_format($balance,2) }}</td>
            <td>{{ $customer->created_at }}</td>
            <td>
                <a href="{{ route('user.addBalance',['id'=>$customer->id]) }}" class="btn btn-success btn-sm">Add Balance</a>                
            </td>
            <td>
              <a href="{{ route('user.removeBalance',['id'=>$customer->id]) }}" class="btn btn-danger btn-sm">Remove Balance</a>
            </td>
        </tr>
    </tbody>
  </table>
@endsection