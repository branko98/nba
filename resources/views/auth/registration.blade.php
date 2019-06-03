@extends('layouts.master')

@section('title')
    
@endsection

@section('content')
    <h1>Registration</h1>

    <form action="/registration" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" 
                class="form-control"
                id="name"
                name="name"
                required/>   
        </div>
        @include('partials.error-message', ['fieldTitle' => 'name'])
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" 
                class="form-control"
                id="email"
                name="email"
                required/>   
        </div>
        @include('partials.error-message', ['fieldTitle' => 'email'])
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" 
                class="form-control"
                id="password"
                name="password"
                required/>   
        </div>
        @include('partials.error-message', ['fieldTitle' => 'password'])
        <div class="form-group">
                <label for="password_confirmation">Confirmation password</label>
                <input type="password" 
                    class="form-control"
                    id="password_confirmation"
                    name="password_confirmation"
                    required/>   
        </div>
        @include('partials.error-message', ['fieldTitle' => 'password_confirmation'])
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
