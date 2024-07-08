@extends('layouts.dashboard')
@section('title', 'Hizmet Oluştur')
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
                    <form action="{{ route('services.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ServiceCategoryName">Hizmet İsmi</label>
                                    <input type="text" class="form-control" placeholder="" name="ServiceName" id="ServiceName" value="{{ old('ServiceName') }}" required autocomplete="ServiceName" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ServicePrice">Fiyat</label>
                                    <input type="number" class="form-control" placeholder="" name="ServicePrice" id="ServicePrice" value="{{ old('ServicePrice') }}" required autocomplete="ServicePrice">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ServiceSessionCount">Seans Sayısı</label>
                                    <input type="number" class="form-control" placeholder="" name="ServiceSessionCount" id="ServiceSessionCount" value="{{ old('ServiceSessionCount') }}" required autocomplete="ServiceSessionCount">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ServiceDuration">Servis Süresi / dk</label>
                                    <input type="number" class="form-control" placeholder="" name="ServiceDuration" id="ServiceDuration" value="{{ old('ServiceDuration') }}" required autocomplete="ServiceDuration">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <div class="mb-3 has-success">
                                        <label class="form-label" for="service_category_id">Kategori</label>
                                        <select class="form-select" id="service_category_id" name="service_category_id" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->ServiceCategoryName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="ServiceDescription">Açıklama</label>
                                    <textarea name="ServiceDescription" id="ServiceDescription" class="form-control" required autocomplete="ServiceDescription">{{ old('ServiceDescription') }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-md-flex align-items-center">
                                        <a href="{{ route('services.index') }}" class="btn btn-secondary">Geri</a>
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
