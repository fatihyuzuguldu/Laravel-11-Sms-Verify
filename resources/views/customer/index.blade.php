@extends('layouts.dashboard')
@section('title', 'Müşteriler')
@section('dashboard')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div class="datatables">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Müşteri Listesi</h4>
                    <div class="btn-group">
                        <a href="{{ route('customer.create') }}" class="btn btn-primary">Yeni Müşteri Ekle</a>
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
                            <th>Isim</th>
                            <th>Telefon</th>
                            <th>Cinsiyet</th>
                            <th>Durumu</th>
                            <th>Doğum Tarihi</th>
                            <th>Kayıt Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td><h6 class="mb-0"> {{ $customer->CustomerName }}</h6></td>
                                <td><h6 class="mb-0"> {{ $customer->CustomerPhone }}</h6></td>
                                <td><h6 class="mb-0"> {{ $customer->CustomerGender }}</h6></td>
                                <td>
                                    @if ($customer->CustomerIsActive == 1)
                                        <h6 class="mb-0" style="color: green"> Aktif</h6>
                                    @else
                                        <h6 class="mb-0" style="color: red"> Pasif</h6>
                                    @endif
                                </td>
                                <td><h6 class="mb-0"> {{ \Carbon\Carbon::parse($customer->CustomerBirthDate)->format('d.m.Y') }} <br> Yaş: {{ \Carbon\Carbon::parse($customer->CustomerBirthDate)->age }}</h6></td>
                                <td><h6 class="mb-0"> {{ $customer->created_at->format('d.m.Y') }}</h6></td>
                                <td>
                                    <button class="btn btn-primary viewCustomer" data-id="{{ $customer->id }}"><i class="ti ti-eye"></i></button>
                                    <button class="btn btn-success editCustomer" data-id="{{ $customer->id }}"><i class="ti ti-edit"></i></button>
                                    <button class="btn btn-danger deleteCustomer" data-id="{{ $customer->id }}"><i class="ti ti-square-x"></i></button>
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
            // Müşteri Silme
            $(document).on('click', '.deleteCustomer', function() {
                if (confirm('Müşteriyi silmek istediğinizden emin misiniz?')) {
                    var customerId = $(this).data('id');
                    $.ajax({
                        type: 'DELETE',
                        url: '/customer/' + customerId,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (data) {
                            $('#customer_' + customerId).remove();
                            window.location.reload(); // Sayfayı yenile
                        },
                        error: function (data) {
                            console.log('Error:', data);
                            window.location.reload(); // Sayfayı yenile
                        }
                    });
                }
            });

            // Müşteri Görüntüleme
            $(document).on('click', '.viewCustomer', function() {
                var customerId = $(this).data('id');
                window.location.href = '/Customer/View/' + customerId;
            });

            // Müşteri Düzenleme
            $(document).on('click', '.editCustomer', function() {
                var customerId = $(this).data('id');
                window.location.href = '/Customer/Edit/' + customerId;
            });
        });
    </script>
@endsection
