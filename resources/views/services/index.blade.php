@extends('layouts.dashboard')
@section('title', 'Hizmetler Listesi')
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
                        <a href="{{ route('services.create') }}" class="btn btn-primary">Yeni Hizmet Ekle</a>
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
                            <th>Hizmet ID</th>
                            <th>Isim</th>
                            <th>Fiyat</th>
                            <th>Seans Sayısı</th>
                            <th>Seans Süresi</th>
                            <th>Kategori</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td><h6 class="mb-0"> #{{ $service->id }}</h6></td>
                                <td><h6 class="mb-0"> {{ $service->ServiceName }}</h6></td>
                                <td><h6 class="mb-0"> {{ $service->ServicePrice }}</h6></td>
                                <td><h6 class="mb-0"> {{ $service->ServiceSessionCount }}</h6></td>
                                <td><h6 class="mb-0"> {{ $service->ServiceDuration }}</h6></td>
                                <td><h6 class="mb-0"> {{ $service->category->ServiceCategoryName }}</h6></td>
                                <td>
                                    <button class="btn btn-success editService" data-id="{{ $service->id }}"><i class="ti ti-edit"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            // Müşteri Düzenleme
            $(document).on('click', '.editService', function() {
                var customerId = $(this).data('id');
                window.location.href = '/services/edit/' + customerId;
            });
        });
    </script>
@endsection
