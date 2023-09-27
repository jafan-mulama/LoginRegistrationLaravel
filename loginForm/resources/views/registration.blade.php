@extends('layout')
@section('title', 'Registration')
@section('body_Content')
    <br/><br/><br/>
    <div class="container">

        <form action="{{ route('registration.post') }}}" method="post" class="ms-auto me-auto mt-auto" style="width: 400px">
            <div class="form-group">
                <label class="form-label" >Full Name</label>
                <input type="email" class="form-control"  placeholder="Full Name">
            </div><br/>
            <div class="form-group">
                <label class="form-label">Email address</label>
                <input type="text" class="form-control" placeholder="Enter email">
            </div><br/>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" class="form-control"  placeholder="Password">
            </div><br/>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
