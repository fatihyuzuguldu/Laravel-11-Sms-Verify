@extends('layouts.dashboard')
@section('title', $category->ServiceCategoryName ." - Hizmetler Kategorisi Düzenle")
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
                        <form action="{{ route('services.categories.update', ['id' => $category->id]) }}" method="POST">
                        @csrf
                            @method('POST')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CustomerName">Hizmet Kategori İsmi</label>
                                    <input type="text" class="form-control" id="ServiceCategoryName" name="ServiceCategoryName" value="{{ $category->ServiceCategoryName }}" required autofocus>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-md-flex align-items-center">
                                    <a href="{{ route('services.categories.index') }}" class="btn btn-secondary">Geri</a>
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
