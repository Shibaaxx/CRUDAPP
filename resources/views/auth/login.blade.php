@extends('layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('post.login') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required>
                        </div>
                        <button class="btn btn-primary w-100">
                            Login
                        </button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="{{ route('register') }}">
                            Don't have an account? Register here
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection