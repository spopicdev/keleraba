@extends('layouts.skeleton')


@section ('content')



    <div class="col-8">

        <form method="post" class="form-control" action="/login_check">
            <h1> LOGIN</h1>

            {{csrf_field()}}

            <div class="form-group">
                <label for="email"> Email:</label>
                <input type="email" class="form-control" id="email" name="email">


            </div>

            <div class="form-group">
                <label for="password"> Password:</label>
                <input type="password" class="form-control" id="password" name="password">


            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>
        </form>

        <div class="form-group">
            @include('layouts.errors')
        </div>


            <hr>
            <div class="form-group">
            <div class="col-md-8 col-md-offset-2">
                    <a href="{{ url('login/twitter') }}" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                    <a href="{{ url('login/facebook') }}" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                    <a href="{{ url('login/google') }}" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i> Google</a>
                    <a href="{{ url('login/linkedin') }}" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i> Linkedin</a>
                    <a href="{{ url('login/github') }}" class="btn btn-social-icon btn-github"><i class="fa fa-github"></i> Github</a>

            </div>
    </div>
@endsection