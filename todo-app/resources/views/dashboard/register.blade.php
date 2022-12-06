@extends('layout')

@section('content')

<div class="container my-5 d-flex justify-content-center align-items-center">
    <form method="POST" action="{{route('register.post')}}" class="card py-4 px-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <div class="text-center logo ml-3">
            <h3>Register Page</h3>
        </div>
        <div class="text-center mt-3">
            
        
        
        </div>
        <div class="position-relative mt-3 form-input">
            <label>E-mail</label>
            <input class="form-control" type="email" name="email" placeholder="Enter E-mail">
        </div>
        <div class="position-relative mt-3 form-input">
            <label>Full Name</label>
            <input class="form-control" type="text" name="name" placeholder="Enter Full Name">
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
        Already have an account?  <span><a href="/" style="text-decoration: none;">Login here  </a></span>
            
        </div><br>
        <button type="submit" class="btn btn-primary">Create Account</button>
    </form>
</div>
@endsection

    