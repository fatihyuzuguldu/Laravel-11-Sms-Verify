@extends('layouts.dashboard')
@section('title', 'Ürün Oluştur')
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
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ProductCategoryName">Ürün İsmi</label>
                                    <input type="text" class="form-control" placeholder="" name="ProductName" id="ProductName" value="{{ old('ProductName') }}" required autocomplete="ProductName" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ProductPrice">Fiyat</label>
                                    <input type="number" class="form-control" placeholder="" name="ProductPrice" id="ProductPrice" value="{{ old('ProductPrice') }}" required autocomplete="ProductPrice">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ProductBarcode">Barkod</label>
                                    <input type="number" class="form-control" placeholder="" name="ProductBarcode" id="ProductBarcode" value="{{ old('ProductBarcode') }}" required autocomplete="ProductBarcode">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ProductStock">Stok</label>
                                    <input type="number" class="form-control" placeholder="" name="ProductStock" id="ProductStock" value="{{ old('ProductStock') }}" required autocomplete="ProductStock">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <div class="mb-3 has-success">
                                        <label class="form-label" for="product_category_id">Kategori</label>
                                        <select class="form-select" id="product_category_id" name="product_category_id" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->ProductCategoryName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="ProductDescription">Açıklama</label>
                                    <textarea name="ProductDescription" id="ProductDescription" class="form-control" required autocomplete="ProductDescription">{{ old('ProductDescription') }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-md-flex align-items-center">
                                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Geri</a>
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
