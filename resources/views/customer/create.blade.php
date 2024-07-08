@extends('layouts.dashboard')
@section('title', 'Müşteri Ekle')
@section('dashboard')
    <div class="row">
        <div class="col-12">
            <!-- ----------------------------------------- -->
            <!-- 1. Basic Form -->
            <!-- ----------------------------------------- -->
            <!-- start Basic Form -->
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('customer.create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CustomerName">Müşteri İsmi</label>
                                    <input type="text" class="form-control" placeholder="İsim" id="CustomerName" name="CustomerName" value="{{ old('CustomerName') }}" required autocomplete="CustomerName" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CustomerPhone">Telefon Numarası</label>
                                    <input
                                        type="tel"
                                        class="form-control"
                                        placeholder="535*******"
                                        id="CustomerPhone"
                                        name="CustomerPhone"
                                        value="{{ old('CustomerPhone') }}"
                                        required
                                        autocomplete="CustomerPhone"
                                        autofocus
                                        minlength="10"
                                        maxlength="10"
                                        pattern="[0-9]{10}"
                                        title="Lütfen 10 haneli bir telefon numarası girin"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <div class="mb-3 has-success">
                                        <label class="form-label" for="tb-pwd">Cinsiyet</label>
                                        <select class="form-select" id="CustomerGender" name="CustomerGender" required>
                                            <option value="Erkek" {{ old('CustomerGender') == 'Erkek' ? 'selected' : '' }}>Erkek</option>
                                            <option value="Kız" {{ old('CustomerGender') == 'Kız' ? 'selected' : '' }}>Kız</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="CustomerBirthDate">Doğum Tarihi</label>
                                        <input type="date" class="form-control" id="CustomerBirthDate" name="CustomerBirthDate" value="{{ old('CustomerBirthDate') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-md-flex align-items-center">
                                        <a href="{{ route('Customer') }}" class="btn btn-secondary">Geri</a>
                                    <div class="ms-auto mt-3 mt-md-0">
                                        <button type="submit" class="btn btn-primary hstack gap-6">
                                            <i class="ti ti-plus fs-4"></i>
                                            Ekle
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
@endsection
