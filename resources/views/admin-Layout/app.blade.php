<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-around align-itenms-center">
            <div class="col-md-2">
                <!-- Sidebar -->
                <div class="side-bar">
                    <div class="side-bar-body">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link color1" href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color1" href="{{ route('admin.create') }}">Add Users</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link color1" href="{{ route('admin.index') }}">See All Users</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link color1" href="{{ route('admin.create') }}">Add Customers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color1" href="{{ route('admin.index') }}">See All Customers</a>
                            </li> --}}
                            {{-- <li class="nav-item">
                                <a class="nav-link color1" href="{{ route('admin.addBalance',['id'=>$customer->id]) }}">Add Balance To Customer</a>
                            </li> --}}
                            {{-- <li class="nav-item">
                                <a class="nav-link color1" href="{{ route('userShow') }}">All Users</a>
                            </li> --}}
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <input type="submit" value="Logout" class="btn btn-primary btn-block">
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>                
            </div>
            <div class="col-md-10">
                <div class="container-fluid m-3">
                    @yield('content')
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>