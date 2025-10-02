@extends('layouts.app')

@section('content')
<style>
    .user-wrapper {
        max-width: 850px;
        margin: 40px auto;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }

    .user-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #eee;
        padding-bottom: 12px;
        margin-bottom: 20px;
    }

    .user-title {
        font-size: 22px;
        font-weight: 600;
        color: #333;
        margin: 0;
    }

    .user-btn {
        background-color: #0d6efd;
        color: #fff;
        padding: 8px 14px;
        font-size: 14px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.2s ease;
    }

    .user-btn:hover {
        background-color: #084298;
    }

    .user-alert {
        background-color: #d1e7dd;
        color: #0f5132;
        padding: 10px 16px;
        border-radius: 6px;
        margin-bottom: 20px;
        font-size: 14px;
        text-align: center;
    }

    .user-table {
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 15px;
        background-color: #fafafa;
    }
</style>

<div class="user-wrapper">
    {{-- Header --}}
    <div class="user-header">
        <h2 class="user-title">Daftar Pengguna</h2>
        <a href="{{ route('user.create') }}" class="user-btn">+ Tambah Pengguna</a>
    </div>

    {{-- Tabel --}}
    <div class="user-table">
        @include('components.user_table', ['user' => $user])
    </div>
</div>
@endsection
