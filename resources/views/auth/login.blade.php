<!-- resources/views/auth/login.blade.php -->
@extends('layouts.app')
@section('title', 'Giriş Yap')
@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="UserPhone">Telefon</label>
            <input
                type="tel"
                class="form-control"
                placeholder="Telefon"
                id="UserPhone"
                name="UserPhone"
                value="{{ old('UserPhone') }}"
                required
                autocomplete="tel"
                autofocus
                minlength="10"
                maxlength="10"
                pattern="[0-9]{10}"
                title="Lütfen 10 haneli bir telefon numarası girin"
                oninput="this.value = this.value.replace(/[^0-9]/g, '');">
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="form-check">
                <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" name="remember" checked="">
                <label class="form-check-label text-dark" for="flexCheckChecked">Beni Hatırla</label>
            </div>
            <div class="d-flex align-items-center">
                <p class="fs-12 mb-0 fw-medium">Hesabın yok mu?</p>
                <a class="text-primary fw-bolder ms-2" href="{{ route('register') }}">Kayıt Ol</a>
            </div>
        </div>
        <button type="submit" class="btn btn-dark w-100 py-8 mb-4 rounded-1">Giriş Yap</button>
    </form>
@endsection
