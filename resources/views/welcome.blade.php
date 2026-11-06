@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-md p-8 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Selamat Datang</h2>
            <p class="text-gray-600 text-lg mb-8">
                Sistem Informasi Perpustakaan Sederhana
            </p>
            @auth
                <p class="text-gray-600 mb-6">
                    Halo, <strong>{{ auth()->user()->name }}</strong>! Anda login sebagai <strong>{{ ucfirst(auth()->user()->role) }}</strong>
                </p>
                @if (auth()->user()->isAdmin())
                    <p class="text-gray-600 mb-4">Sebagai Admin, Anda dapat mengelola seluruh sistem.</p>
                @else
                    <p class="text-gray-600 mb-4">Sebagai Petugas, Anda dapat mengelola buku, anggota, dan peminjaman.</p>
                @endif
            @else
                <p class="text-gray-600 mb-6">Silakan login untuk mengakses sistem.</p>
                <a href="{{ route('login') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
                    Login Sekarang
                </a>
            @endauth
        </div>
    </div>
@endsection
