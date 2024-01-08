@extends('auth.layouts')

@section('content')
<style>
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #3498db;
        color: #fff;
        font-weight: bold;
        border-radius: 10px 10px 0 0;
        padding: 15px;
        text-align: center;
    }

    .card-body {
        padding: 20px;
    }

    .form-control {
        border-radius: 5px;
    }

    .btn-primary {
        background-color: #3498db;
        color: #fff;
        border-radius: 5px;
    }

    .btn-primary:hover {
        background-color: #2073b5;
    }

    .register-link {
        text-align: center;
        margin-top: 20px;
        color: #3498db;
    }

    .register-link a {
        text-decoration: none;
        font-weight: bold;
    }

    .register-link a:hover {
        text-decoration: underline;
    }
</style>

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                    </div>
                </form>

                <div class="register-link">
                    Don't have an account yet? <a href="{{ route('register') }}">Signup Here</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
