
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('main.css') }}">
</head>

<body>
    <div class="login-box">
        <h2>Login Apk</h2>
        @if(session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{session('error')}}
        </div>
        @endif
        @if(session('success'))
        <div class="alert alert-success">
            <b>Yeay!</b> {{session('success')}}
        </div>
        @endif
        <form action="{{route('confirmLogin')}}" method="POST">
            @csrf
            <div class="user-box">
                <input type="text" name="email" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <a href="#" onclick="document.querySelector('form').submit(); return false;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </a>
        </form>


        <p class="text-center" style="color:white">Belum punya akun? <a href="{{route('regis')}}">Register</a> sekarang!</p>

    </div>
</body>

</html>