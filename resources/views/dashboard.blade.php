@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<div class="container">
    <div class="Welcome">
        <p>Welcome to RACOFFE</p>
        <h1>Hai, {{ $username }}!</h1>
        <p>
            Selamat datang di website pengelolaan menu RACOFFE.
        </p>
    </div>

    <div class="dashboard-card">
        <div class="card">
            <h3>5</h3>
            <p>Total Menu</p>
        </div>

        <div class="card">
            <h3>3</h3>
            <p>Minuman</p>
        </div>

        <div class="card">
            <h3>2</h3>
            <p>Makanan</p>
        </div>

    </div>

    <div class="about">
        <h2>About RACOFFE</h2>

        <P>
            RACOFFE merupakan kafe yang menyediakan beberapa pilihan minuman dan makanan. Kami menghadirkan suasana yang sejuk dan nyaman untuk menemani waktu melepas penat para pengunjung.
        </P>
    </div>

</div>

@endsection