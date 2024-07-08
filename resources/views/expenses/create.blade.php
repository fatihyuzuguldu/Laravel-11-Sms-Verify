@extends('layouts.dashboard')
@section('title', 'Gelir-Gider Ekle')
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
                    <form action="{{ route('expenses.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <div class="mb-3 has-success">
                                        <label class="form-label" for="ExpenseCategoryType">Kategori</label>
                                        <select class="form-select" id="ExpenseCategoryType" name="ExpenseCategoryType" required>
                                            <option value="income">Gelir</option>
                                            <option value="expense" selected>Gider</option> <!-- Başlangıçta "Gider" seçili -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <div class="mb-3 has-success">
                                        <label class="form-label" for="expense_category_id">Kategori</label>
                                        <select class="form-control" id="expense_category_id" name="expense_category_id">
                                            @foreach($categories as $category)
                                                @if($category->ExpenseCategoryType == "expense")
                                                    <option value="{{ $category->id }}">{{ $category->ExpenseCategoryName }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ExpensePrice">Fiyat</label>
                                    <input type="number" step="0.01" class="form-control" pattern="[0-9]+([,\.][0-9]+)?" name="ExpensePrice" id="ProductPrice" value="{{ old('ExpensePrice') }}" required autocomplete="ExpensePrice">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <div class="mb-3 has-success">
                                        <label class="form-label" for="ExpensePaymentMethod">Ödeme Yöntemi</label>
                                        <select class="form-select" id="ExpensePaymentMethod" name="ExpensePaymentMethod" required>
                                            <option value="Nakit">Nakit</option>
                                            <option value="Banka Transferi">Banka Transferi</option>
                                            <option value="Kredi Kartı">Kredi Kartı</option>
                                            <option value="Diğer">Diğer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="ExpenseName">Açıklama</label>
                                    <input type="text" class="form-control" placeholder="" name="ExpenseName" id="ExpenseName" value="{{ old('ExpenseName') }}" required autocomplete="ExpenseName" autofocus>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-md-flex align-items-center">
                                    <a href="{{ route('expenses.index') }}" class="btn btn-secondary">Geri</a>
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

        <script>
            document.getElementById('ExpenseCategoryType').addEventListener('change', function() {
                var type = this.value;
                var categorySelect = document.getElementById('expense_category_id');
                categorySelect.innerHTML = ''; // Kategorileri temizle

                // Yeni kategori seçeneklerini ekle
                @foreach($categories as $category)
                    @if($category->ExpenseCategoryType == "income")
                if (type === 'income') {
                    var option = document.createElement('option');
                    option.value = '{{ $category->id }}';
                    option.textContent = '{{ $category->ExpenseCategoryName }}';
                    categorySelect.appendChild(option);
                }
                @else
                if (type === 'expense') {
                    var option = document.createElement('option');
                    option.value = '{{ $category->id }}';
                    option.textContent = '{{ $category->ExpenseCategoryName }}';
                    categorySelect.appendChild(option);
                }
                @endif
                @endforeach
            });

            // Sayfa yüklendiğinde ilk kez çağır
            document.getElementById('type').dispatchEvent(new Event('change'));
        </script>
@endsection
