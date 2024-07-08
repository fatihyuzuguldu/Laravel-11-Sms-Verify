@extends('layouts.dashboard')
@section('title', $category->ExpenseCategoryName ." - Gelir-Gider Kategori Düzenle")
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
                    <form action="{{ route('expenses.categories.update', ['id' => $category->id]) }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ExpenseCategoryName">Ürün Kategori İsmi</label>
                                    <input type="text" class="form-control" id="ExpenseCategoryName" name="ExpenseCategoryName" value="{{ $category->ExpenseCategoryName }}" required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="ExpenseCategoryType">Kategori</label>
                                        <select class="form-select" id="ExpenseCategoryType" name="ExpenseCategoryType" required>
                                            <option value="expense" {{ $category->ExpenseCategoryType == 'expense' ? 'selected' : '' }}>Gider</option>
                                            <option value="income" {{ $category->ExpenseCategoryType == 'income' ? 'selected' : '' }}>Gelir</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-md-flex align-items-center">
                                    <a href="{{ route('expenses.categories.index') }}" class="btn btn-secondary">Geri</a>
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
