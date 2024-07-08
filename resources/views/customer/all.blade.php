@extends('layouts.dashboard')
@section('title', 'Silinen Müşteriler')
@section('dashboard')

    <div class="datatables">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Silinen Müşteriler</h4>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered text-nowrap align-middle">
                        <thead>
                        <!-- start row -->
                        <tr>
                            <th>Isim</th>
                            <th>Telefon</th>
                            <th>Cinsiyet</th>
                            <th>Doğum Tarihi</th>
                            <th>Kayıt Tarihi</th>
                            <th>Silinme Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        <!-- end row -->
                        </thead>
                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td><h6 class="mb-0"> {{ $customer->CustomerName }}</h6></td>
                                <td><h6 class="mb-0"> {{ $customer->CustomerPhone }}</h6></td>
                                <td><h6 class="mb-0"> {{ $customer->CustomerGender }}</h6></td>
                                <td><h6 class="mb-0"> {{ \Carbon\Carbon::parse($customer->CustomerBirthDate)->format('d.m.Y') }} <br> Yaş: {{ \Carbon\Carbon::parse($customer->CustomerBirthDate)->age }}</h6></td>
                                <td><h6 class="mb-0"> {{ $customer->created_at->format('d.m.Y') }}</h6></td>
                                <td><h6 class="mb-0" style="color: red"> {{ \Carbon\Carbon::parse($customer->deleted_at)->format('d.m.Y') }}</h6></td>
                                <td>
                                    <button class="btn btn-success rotateCustomer" data-id="{{ $customer->id }}"><i class="ti ti-rotate"></i></button>
                                    <button class="btn btn-danger deleteCustomer" data-id="{{ $customer->id }}"><i class="ti ti-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.rotateCustomer', function() {
                if (confirm('Müşteriyi geri döndermek istediğinizden emin misiniz?')) {
                    var customerId = $(this).data('id');
                    $.ajax({
                        type: 'PUT',
                        url: '/customer/rotate/' + customerId,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (data) {
                            $('#customer_' + customerId).remove();
                            alert('Müşteri başarıyla silindi.');
                            window.location.reload(); // Sayfayı yenile
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                }
            });
        });
    </script>


@endsection
