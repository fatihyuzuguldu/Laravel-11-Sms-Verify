@extends('layouts.dashboard')
@section('title', $customer->CustomerName ." - Düzenle")
@section('dashboard')
    <div class="row">
        <div class="col-12">
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
                        <form action="{{ route('customer.edit', $customer->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CustomerName">Müşteri İsmi</label>
                                    <input type="text" class="form-control" id="CustomerName" name="CustomerName" value="{{ $customer->CustomerName }}" required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CustomerPhone">Telefon Numarası</label>
                                    <input type="text" class="form-control" id="CustomerPhone" name="CustomerPhone" pattern="[0-9]{10}" minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');" value="{{ $customer->CustomerPhone }}" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="CustomerGender">Cinsiyet</label>
                                        <select class="form-control" id="CustomerGender" name="CustomerGender" required>
                                            <option value="Erkek" {{ $customer->CustomerGender == 'Erkek' ? 'selected' : '' }}>Erkek</option>
                                            <option value="Kız" {{ $customer->CustomerGender == 'Kız' ? 'selected' : '' }}>Kız</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="CustomerBirthDate">Doğum Tarihi</label>
                                        <input type="date" class="form-control" id="CustomerBirthDate" name="CustomerBirthDate" value="{{ $customer->CustomerBirthDate }}">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="CustomerIsActive">Durum</label>
                                        <select class="form-control" id="CustomerIsActive" name="CustomerIsActive">
                                            <option value="1" {{ $customer->CustomerIsActive == '1' ? 'selected' : '' }}>Aktif</option>
                                            <option value="0" {{ $customer->CustomerIsActive == '0' ? 'selected' : '' }}>Pasif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-md-flex align-items-center">
                                        <a href="{{ route('Customer') }}" class="btn btn-secondary">Geri</a>
                                    <div class="ms-auto mt-3 mt-md-0">
                                        <button type="submit" class="btn btn-primary hstack gap-6">
                                            Kaydet
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
