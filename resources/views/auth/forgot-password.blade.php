@extends('auth.auth-layout')



@section('content')

    <div class="b-t">
        <div class="center-block w-xxl w-auto-xs p-y-md text-center">
            <div class="p-a-md">
                <div><h4>Forgot your password?</h4>
                    <p class="text-muted m-y">Enter your email below and we will send you instructions on how to change
                        your password.</p></div>
                <form name="reset">
                    <div class="form-group"><input type="email" placeholder="Email" class="form-control" required></div>
                    <button type="submit" class="btn black btn-block p-x-md">Send</button>
                </form>
                <div class="p-y-lg">Return to <a href="{{url('singin')}}" class="text-primary _600">Sign in</a></div>
            </div>
        </div>
    </div>


@endsection
