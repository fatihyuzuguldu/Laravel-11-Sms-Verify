<!-- resources/views/dashboard/dashboard.blade.php -->
@extends('layouts.app')
@section('title', 'Anasayfa')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        sdasdasd, {{ Auth::user()->name }}!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
