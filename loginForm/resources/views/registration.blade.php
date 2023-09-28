@extends('layout')
@section('title', 'Registration')
@section('body_Content')
    <br/><br/><br/>
    <div>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>

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
