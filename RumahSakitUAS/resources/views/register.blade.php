
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
        <h2>Register</h2>
        @if(session('error'))
        <div class="alert alert-danger">
            <b>Opps! Something went wrong</b> {{session('error')}}
        </div>
        @endif
        <form action="{{route('confirm')}}" method="POST">
            @csrf
            <div class="user-box">
                <input type="email" name="email" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="text" name="username" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Kata Sandi</label>
            </div>
            <a href="#" onclick="document.querySelector('form').submit(); return false;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </a>
        </form>


        <p class="text-center" style="color:white">Sudah punya akun silahkan <a href="{{route('login')}}">Login Disini!</a></p>

    </div>
</body>

</html>