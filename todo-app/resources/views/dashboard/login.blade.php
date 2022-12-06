@extends('layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center mt-5">
    <form method="POST" action="{{route('login.auth')}}" class="card py-4 px-4">
        @csrf
        @if (Session::get('success'))
             <div class="alert alert-success w-75">
                 {{ Session::get('success') }}
            </div>
        @endif
        @if (Session::get('fail'))
             <div class="alert alert-danger">
                 {{ Session::get('fail') }}
            </div>
        @endif
        @if (Session::get('notAllowed'))
             <div class="alert alert-danger">
                 {{ Session::get('notAllowed') }}
            </div>
        @endif
        @if ($errors->any())
             <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>   
            </div>
        @endif
        <div class="text-center logo">
            <H3>Login Page</H3>
        </div>
        <div class="text-center mt-3">
            

        
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Username</label>
            <input class="form-control" type="text" name="username" placeholder="Enter Username">
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Password</label>
            <input class="form-control" type="password" name="password" placeholder="Enter Password">
        </div>

        <div class=" mt-3 ">
        don't have an account?  <span><a href="{{route('register')}}" style="text-decoration: none;">Register here  </a></span>
            
        </div><br>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
