<?php
namespace App\Services;

class SmsSenderService
{
    public function sendVerifySms($phonenumber, $randomNumber,$userfullname)
    {
        $curl = curl_init();
        $params = [
            'api_id' => "xxx",
            'api_key' => "xxxx",
            'sender' => 'F.Yuzuguldu',
            'message_type' => 'turkce',
            'message_content_type' => 'bilgi',
            'phones' => [
                [
                    "phone" => $phonenumber,
                    "message" => 'Sn. '.$userfullname.', doğrulama kodunuz: ' . $randomNumber,
                ]
            ]
        ];

        $curl_options = [
            CURLOPT_URL => 'https://api.vatansms.net/api/v1/NtoN',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POSTFIELDS => json_encode($params),
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json'
            ]
        ];

        curl_setopt_array($curl, $curl_options);

        $response = curl_exec($curl);

        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
        }

        curl_close($curl);

        if (isset($error_msg)) {
            return [
                'status' => 'error',
                'message' => $error_msg
            ];
        }

        return json_decode($response, true);
    }
}
