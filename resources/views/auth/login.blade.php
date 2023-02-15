@extends('layouts.auth-master')

@section('content')
    <form action="/login" method="post">
        @csrf
        <h1>Login</h1>

        @include('layouts.partials.messages')

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

@endsection
