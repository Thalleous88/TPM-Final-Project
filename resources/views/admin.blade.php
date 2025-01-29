<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPM</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <h1 class="text center mt-3" style="text-align:center;">Admin Page</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <a href="{{ route('registerAdmin') }}" class="btn btn-primary mx-auto" role="button" style="text-align:center;">Register</a>
            </div>
        </div>
    </div>
</body>
</html>