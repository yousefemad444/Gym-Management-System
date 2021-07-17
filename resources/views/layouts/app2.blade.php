<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Gym Management System
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="off-canvas-sidebar">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="http://gymmanagementsystems.herokuapp.com/home">Gym
                Management
                System</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="http://gymmanagementsystems.herokuapp.com/home" class="nav-link">
                        <i class="material-icons">dashboard</i> Dashboard
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="http://gymmanagementsystems.herokuapp.com/login" class="nav-link">
                        <i class="material-icons">fingerprint</i> Login
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="http://gymmanagementsystems.herokuapp.com/profile" class="nav-link">
                        <i class="material-icons">face</i> Profile
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('http://gymmanagementsystems.herokuapp.com/material/img/login.jpg'); background-size: cover; background-position: top center;align-items: center;" data-color="purple">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="container" style="height: auto;">
            <div class="row align-items-center">
                <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
                    <h3>Log in to see how you can speed up your web development with out of the box CRUD for #User Management and more. </h3>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                    <form class="form" method="POST" action="http://gymmanagementsystems.herokuapp.com/login">
                        <input type="hidden" name="_token" value="4CkV4CWK5tZLjffwjjXa2jQGVQoaljyHbQ7IGTiM">
                        <div class="card card-login card-hidden mb-3">
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title"><strong>Login</strong></h4>
                            </div>
                            <div class="card-body">
                                <p class="card-description text-center">Sign in with  <strong>Your Account</strong>  and the password </p>
                                <div class="bmd-form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">
                                            <i class="material-icons">email</i>
                                          </span>
                                        </div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="bmd-form-group mt-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                              <span class="input-group-text">
                                                <i class="material-icons">lock_outline</i>
                                              </span>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-check mr-auto ml-3 mt-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" > Remember me
                                        <span class="form-check-sign">
                                      <span class="check"></span>
                                          </span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center">
                                <button type="submit" class="btn btn-primary btn-link btn-lg">Lets Go</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-6">
                            <a href="http://gymmanagementsystems.herokuapp.com/password/reset" class="text-light">
                                <small>Forgot password?</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</html>
