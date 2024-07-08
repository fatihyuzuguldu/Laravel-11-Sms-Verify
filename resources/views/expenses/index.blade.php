@extends('layouts.dashboard')
@section('title', 'Gelir-Gider Listele')
@section('dashboard')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div class="datatables">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">@yield('title')</h4>
                    <div class="btn-group">
                        <a href="{{ route('expenses.create') }}" class="btn btn-primary">Yeni Gelir-Gider Ekle</a>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dışarı Aktar
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">PDF Olarak Dışarı Aktar</a>
                                <a class="dropdown-item" href="#">Excel Olarak Dışarı Aktar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered text-nowrap align-middle">
                        <thead>
                        <tr>
                            <th>Tür</th>
                            <th>Kategori Isim</th>
                            <th>Fiyat</th>
                            <th>Açıklama</th>
                            <th>Ödeme Türü</th>
                            <th>Tarih</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($expenses as $expense)
                            <tr>
                                @if($expense->category->ExpenseCategoryType == "income")
                                    <td><h6 class="mb-0" style="color: green">Gelir</h6></td>
                                    <td><h6 class="mb-0" style="color: green"> {{ $expense->category->ExpenseCategoryName }}</h6></td>
                                    <td><h6 class="mb-0" style="color: green">{{ number_format($expense->ExpensePrice, 2, ',', '.') }}</h6></td>
                                @else
                                    <td><h6 class="mb-0" style="color: red">Gider</h6></td>
                                    <td><h6 class="mb-0" style="color: red"> {{ $expense->category->ExpenseCategoryName }}</h6></td>
                                    <td><h6 class="mb-0" style="color: red">{{ number_format($expense->ExpensePrice, 2, ',', '.') }}</h6></td>
                                @endif
                                <td><h6 class="mb-0"> {{ $expense->ExpenseName }}</h6></td>

                                <td><h6 class="mb-0"> {{ $expense->ExpensePaymentMethod }}</h6></td>
                                    <td><h6 class="mb-0">{{ \Carbon\Carbon::parse($expense->created_at)->format('d.m.Y') }} <br> {{ \Carbon\Carbon::parse($expense->created_at)->format('H:i') }}</h6></td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('expenses.edit', $expense->id) }}"><i class="ti ti-edit"></i></a>

                                    <form action="{{ route('expenses.delete', $expense->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="ti ti-trash-x-filled"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
