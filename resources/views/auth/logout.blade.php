@extends('layouts.app')
@section('title', 'Çıkış Yap')
@section('content')
    <div class="container">
        <h3>Çıkış Yap</h3>
        <p>Hesabınızdan çıkış yapmak üzeresiniz. Emin misiniz?</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Çıkış Yap</button>
        </form>
    </div>
@endsection
