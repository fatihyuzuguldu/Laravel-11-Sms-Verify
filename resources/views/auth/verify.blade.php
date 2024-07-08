@extends('layouts.app')
@section('title', 'Sms Doğrulama')
@section('content')
    <form method="POST" action="{{ route('verify') }}" id="verifyForm">
        @csrf
        <div class="mb-3">
            <h3>Sms Doğrulama</h3>
            <h6>İsim: {{ session('UserFullName') }}</h6>
            <h6>Telefon Numarası: {{ session('UserPhone') }}</h6>
            <input type="hidden" name="UserPhone" value="{{ session('UserPhone') }}">
            <label class="form-label fw-semibold">6 haneli doğrulama kodunuzu girin.</label>
            <div
                class="auth-input-wrapper d-flex align-items-center justify-content-sm-between numeral-mask-wrapper">
                <input class="form-control auth-input h-px-50 text-center numeral-mask mx-1 my-2" name="code1" type="tel" maxlength="1" inputmode="numeric" pattern="[0-9]" required oninput="goToNextInput(event, 'code2')" onkeydown="goToPreviousInput(event, 'code1', 'code1')" autocomplete="off" autofocus />
                <input class="form-control auth-input h-px-50 text-center numeral-mask mx-1 my-2" name="code2" type="tel" maxlength="1" inputmode="numeric" pattern="[0-9]" required oninput="goToNextInput(event, 'code3')" onkeydown="goToPreviousInput(event, 'code1', 'code2')" autocomplete="off">
                <input class="form-control auth-input h-px-50 text-center numeral-mask mx-1 my-2" name="code3" type="tel" maxlength="1" inputmode="numeric" pattern="[0-9]" required oninput="goToNextInput(event, 'code4')" onkeydown="goToPreviousInput(event, 'code2', 'code3')" autocomplete="off">
                <input class="form-control auth-input h-px-50 text-center numeral-mask mx-1 my-2" name="code4" type="tel" maxlength="1" inputmode="numeric" pattern="[0-9]" required oninput="goToNextInput(event, 'code5')" onkeydown="goToPreviousInput(event, 'code3', 'code4')" autocomplete="off">
                <input class="form-control auth-input h-px-50 text-center numeral-mask mx-1 my-2" name="code5" type="tel" maxlength="1" inputmode="numeric" pattern="[0-9]" required oninput="goToNextInput(event, 'code6')" onkeydown="goToPreviousInput(event, 'code4', 'code5')" autocomplete="off">
                <input class="form-control auth-input h-px-50 text-center numeral-mask mx-1 my-2" name="code6" type="tel" maxlength="1" inputmode="numeric" pattern="[0-9]" required onkeydown="goToPreviousInput(event, 'code5', 'code6')" autocomplete="off">
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-dark w-100 py-8 mb-4 rounded-1">Doğrula</button>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div hidden="hidden" class="form-check">
                <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" name="remember" checked="">
                <label class="form-check-label text-dark" for="flexCheckChecked">Beni Hatırla</label>
            </div>
            <div class="d-flex align-items-left">
                <p class="fs-12 mb-0 fw-medium">Başka hesabın mı var?</p>
                <a class="text-primary fw-bolder ms-2" href="{{ route('logout.form') }}">Çıkış Yap</a>
            </div>
        </div>
    </form>
    <script>
        function goToNextInput(event, nextInputName) {
            var currentInput = event.target;
            if (currentInput.value.length === currentInput.maxLength) {
                var nextInput = document.getElementsByName(nextInputName)[0];
                if (nextInput) {
                    nextInput.focus();
                }
            }
        }

        function goToPreviousInput(event, previousInputName, currentInputName) {
            if (event.key === "Backspace" && event.target.value === "") {
                var previousInput = document.getElementsByName(previousInputName)[0];
                if (previousInput) {
                    previousInput.focus();
                }
            } else if (event.key === "ArrowLeft" && event.target.selectionStart === 0) {
                var currentInput = document.getElementsByName(currentInputName)[0];
                if (currentInput) {
                    currentInput.focus();
                }
            }
        }
    </script>
@endsection
