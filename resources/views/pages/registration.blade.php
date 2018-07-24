@extends('layouts.skeleton')
@section ('content')

    <div class="col-8">

        <h1> REGISTER </h1>

        <form action="/registration_check" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="name">Full Name:</label>
                <input class="form-control" name="name" @if (isset($name)) value="{{$name}}" @endif id="name" type="text" placeholder="Full Name">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" name="email" @if (isset($email)) value="{{$email}}" @endif id="email" type="text" placeholder="E-mail">
            </div>


            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" name="password" id="password" type="password" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Password:</label>
                <input class="form-control" name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm your password">
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Or Register with</label>
                <div class="row">
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <a href="{{ url('login/twitter') }}" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                    <a href="{{ url('login/facebook') }}" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                    <a href="{{ url('login/google') }}" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i> Google</a>
                    <a href="{{ url('login/linkedin') }}" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i> Linkedin</a>
                    <a href="{{ url('login/github') }}" class="btn btn-social-icon btn-github"><i class="fa fa-github"></i> Github</a>
                </div>
            </div>

        </form>


    </div>


@endsection