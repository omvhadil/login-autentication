<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes._style')
    <style>
        body {
            background-color: #e3ecfd;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh">
            <div class="col-4 bg-info" style="height: 500px">
            </div>
            <div class="col-4 bg-white" style="height: 500px">
                @yield('content')
            </div>
        </div>
    </div>

    @include('includes._script')
</body>

</html>
