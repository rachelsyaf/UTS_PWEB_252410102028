@extends('layouts.app')
@section('title', 'Profile')
@section('content')

<div class="container">
    <div class="profile-box">
        <h1>My Profile</h1>
        <div class="profile-avatar">
            {{ substr($username, 0, 1) }}
        </div>

        <h2>{{ $username }}</h2>
        <p>Administrator RACOFFE</p>
        <P>Status: Aktif</P>
    </div>

</div>

@endsection 