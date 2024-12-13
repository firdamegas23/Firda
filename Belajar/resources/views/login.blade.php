<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/desain.css') }}">
    <title>Login</title>
    <meta name="description" content="Login NEV2">
</head>
<body>
    <div class="cover" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
        <div class="container">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
             @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
            </div>
            @endif

        <form action="{{ route('login') }}" method="POST" class="login-username">
            @csrf
           <center><p class="login-text" style="font-size: 2rem; font-weight: 800;">LOGIN</p>
           <br>
            <div class="input-group">
                <input type="text" id="username" name="username" placeholder="Username" class="form-controll @error('username') is-invalid
                @enderror" value="{{ old('username') }}" required autofocus>

                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
        </div>
    </div>
    
</body>
</html>
