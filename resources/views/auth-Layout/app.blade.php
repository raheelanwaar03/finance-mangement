<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center min-vh-100 bg-primary">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1>@yield('card-title')</h1>
                    </div>
                    <div class="card-body">
                       @yield('form-content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>