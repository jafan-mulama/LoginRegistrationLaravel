@extends('layout')
@section('title', 'Registration')
@section('body_Content')
    <br/><br/><br/>
    <div class="container">
        <form action="{{ route('registration.post') }}" method="post" class="ms-auto me-auto mt-auto" style="width: 400px">
            @csrf <!-- Include CSRF token -->
            <div class="form-group">
                <label class="form-label" >Full Name</label>
                <input type="text" class="form-control"  placeholder="Full Name" name="name">
            </div><br/>
            <div class="form-group">
                <label class="form-label">Email address</label>
                <input type="text" class="form-control" placeholder="Enter email" name="email">
            </div><br/>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" class="form-control"  placeholder="Password" name="password">
            </div><br/>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
@endsection
