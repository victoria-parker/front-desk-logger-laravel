@extends('layouts.auth-master')

@section('content')

<h1>Register your company</h1>

    <form action="/register" method="post">
        @csrf

        @include('layouts.partials.messages')

        <div class="mb-3 form-floating">
            <input type="text" placeholder="Company" class="form-control" id="company"  name="company" >
          <label for="company" class="form-label">Company</label>
        </div>

        <div class="mb-3 form-floating">
            <input type="text" placeholder="Name" class="form-control" id="name"  name="name" >
          <label for="name" class="form-label">Name</label>
        </div>

        <div class="mb-3 form-floating">
            <input type="text" placeholder="Last Name" class="form-control" id="lastname"  name="lastname" >
          <label for="lastname" class="form-label">Last Name</label>
        </div>

        <div class="mb-3 form-floating">
            <input type="email" placeholder="Email address" class="form-control" id="email" name="email">
            <label for="email" class="form-label">Email address</label>
          </div>

          <div class="mb-3 form-floating">
            <input type="password" placeholder="Password" class="form-control" id="password" name="password">
            <label for="password" class="form-label">Password</label>
        </div>

        <div class="mb-3 form-floating">
            <input type="password" placeholder="Confirm Password" class="form-control" id="password_confirmation" name="password_confirmation">
            <label for="password_confirmation" class="form-label">Confirm your Password</label>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>

    </form>
@endsection
