@extends('layouts.app')
@section('title', 'Login')
@section('content')

<div class="login-container">
    <div class="login-box">
        <h1>RACOFFE</h1>
        <P>Welcome to our beloved coffe shop.</P>
        <form action="{{ route('login.proses')}}" method="POST">
            @csrf 

            <label>Username</label>

            <input
                type="text"
                name="username"
                placeholder="Masukkan username"
                value="{{ old('username') }}"
                required
            >

            @error('username')
                <p class="error">{{ $message }}</p>
            @enderror

            <button type="submit">Masuk</button>
        </form>
    </div>
</div>

@endsection