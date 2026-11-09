@extends('layouts.app')
@section('title', 'Menu')
@section('content')

<div class="container">
    <h1>Daftar Menu RACOFFE</h1>
    <p>Berbagai pilihan makanan dan minuman kami.</p>
   
    <div class="menu-container">
        @foreach ($menu as $item)
            <div class="menu-card">
                <h3>{{ $item['nama'] }}</h3>
                <p>{{ $item['kategori'] }}</p>
                <h4>
                    Rp {{ number_format($item['harga'], 0, ',', '.') }}
                </h4>
            </div>
        @endforeach
    </div>

</div>

@endsection
