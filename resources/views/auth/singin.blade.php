@extends('auth.auth-layout')



@section('content')
    <div class="b-t">
        <div class="center-block w-xxl w-auto-xs p-y-md text-center">
            <div class="p-a-md">
                <div><a href="#" class="btn btn-block indigo text-white m-b-sm"><i class="fa fa-facebook pull-left"></i>
                        Sign in with Facebook</a> <a href="#" class="btn btn-block red text-white"><i
                            class="fa fa-google-plus pull-left"></i> Sign in with Google+</a></div>
                <div class="m-y text-sm">OR</div>
                <form name="form" action="{{url('home')}}">
                    <div class="form-group"><input type="email" class="form-control" placeholder="Email" required></div>
                    <div class="form-group"><input type="password" class="form-control" placeholder="password" required>
                    </div>
                    <div class="m-b-md"><label class="md-check"><input type="checkbox"><i class="primary"></i> Keep me
                            signed in</label></div>
                    <button type="submit" class="btn btn-lg black p-x-lg">Sign in</button>
                </form>
                <div class="m-y"><a href="{{url('forgot-password')}}" class="_600">Forgot password?</a></div>
                <div>Do not have an account? <a href="{{url('singup')}}" class="text-primary _600">Sign up</a></div>
            </div>
        </div>
    </div>
@endsection
