@extends('admin-Layout.app')
@section('title')
   Admin Dashboard
@endsection

@section('content')

<h1 class="text-center text-primary">All User's</h1>

<table class="table table-primary table-hover">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Created at</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection