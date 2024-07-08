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
                            <th>Müşteri NO</th>
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
                                <td><h6 class="mb-0">#{{ $customer->id }}</h6></td>
                                <td><h6 class="mb-0"> {{ $customer->CustomerName }}</h6></td>
                                <td><h6 class="mb-0"> {{ $customer->CustomerPhone }}</h6></td>
                                <td><h6 class="mb-0"> {{ $customer->CustomerGender }}</h6></td>
                                    <?php
                                    $dogumTarihi = $customer->CustomerBirthDate;
                                    $bugun = date("Y-m-d");
                                    $diff = date_diff(date_create($dogumTarihi), date_create($bugun));
                                    ?>
                                <td><h6 class="mb-0">{{ \Carbon\Carbon::parse($customer->CustomerBirthDate)->format('d.m.Y') }} <br> Yaş: {{ $diff->format('%y') }}</h6></td>
                                <td><h6 class="mb-0">{{ $customer->created_at->format('d.m.Y') }}</h6></td>
                                <td><h6 style="color:red" class="mb-0">{{ $customer->deleted_at }}</h6></td>
                                <td>
                                    <!-- Update and other actions -->
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
