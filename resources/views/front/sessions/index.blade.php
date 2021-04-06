
@extends('front.layouts.master')
@section('content')
    
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>
                <div class="card-body">

                    @if ( $errors->any() )

                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif

                    @if ( session()->has('msg') )

                        <div class="alert alert-success">{{ session()->get('msg') }}</div>

                    @endif

                    <form action="/user/login" method="post">

                        @csrf

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" placeholder="Email" id="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" placeholder="Password" id="password"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                             <a href="#">   
                                Forgot Your Password?
                            </a>
                        </div><br>
                        <div class="form-group">
                            <button class="btn btn-success col-md-2">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection