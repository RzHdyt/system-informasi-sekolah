@extends('layouts.web.auth')

@section('content')
<div class="login-box">
    <div class="card-header text-center">
        <!-- /.login-logo -->
        <h1>Selamat datang,</h1>
        Silahkan Login Terlebih Dahulu
        <br>
    </div>
    <div class="card card-outline card-primary">
        <div class="card-body">
            <p class="login-box-msg"></p>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text"
                        name="email" placeholder="Email Address" value="{{ old('email') }}" autofocus required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="password"
                        name="password" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mb-0">
                <a href="register.html" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->
@endsection