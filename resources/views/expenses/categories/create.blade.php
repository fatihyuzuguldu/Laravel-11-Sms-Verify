@extends('layouts.dashboard')
@section('title', 'Gelir-Gider Kategori Oluştur')
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
                    <form action="{{ route('expenses.categories.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ExpenseCategoryName">Hizmet Kategori İsmi</label>
                                    <input type="text" class="form-control" placeholder="İsim" id="ExpenseCategoryName" name="ExpenseCategoryName" value="{{ old('ExpenseCategoryName') }}" required autocomplete="ExpenseCategoryName" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="ExpenseCategoryType">Kategori<span style="color: red">(***)</span> </label>
                                        <select  class="form-select" id="ExpenseCategoryType" name="ExpenseCategoryType" required>
                                            <option value="expense">Gider</option>
                                            <option value="income">Gelir</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-md-flex align-items-center">
                                    <a href="{{ route('expenses.categories.index') }}" class="btn btn-secondary">Geri</a>
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
