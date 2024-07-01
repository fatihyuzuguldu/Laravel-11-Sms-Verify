<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumber implements Rule
{
    public function passes($attribute, $value)
    {
        // Telefon numarasının uzunluğunu kontrol et
        if (strlen($value) !== 10) {
            return false;
        }

        // Başında '5' kontrolü yap
        if (substr($value, 0, 1) !== '5') {
            return false;
        }

        // Geçerli bir sayı olup olmadığını kontrol et
        if (!is_numeric($value)) {
            return false;
        }

        return true;
    }

    public function message()
    {
        return 'Telefon numarası geçersiz. Lütfen 10 haneli ve başında "5" olan bir telefon numarası giriniz.';
    }
}
