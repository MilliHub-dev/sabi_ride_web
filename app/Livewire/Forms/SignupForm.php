<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Support\Facades\Http;
use Tzsk\Otp\Facades\Otp;

class SignupForm extends Form
{

    #[Validate('required|string')]
    public string $email = '';

    #[Validate('required|string')]
    public string $phone_number = '';

    #[Validate('required|string')]
    public string $location_city = '';

    #[Validate('required|string')]
    public string $password = '';



    public function sendVerificationSms()
    {
        $otp = Otp::digits(6)->generate($this->email);

        Http::post(
            'https://api.ng.termii.com/api/sms/send',
            [
                'to' => $this->phone_number,
                "from" => "Submmunity",
                "sms" => "Your verification code $otp",
                'type' => 'plain',
                'channel' => 'generic',
                "api_key" => "TLzBE3KDCHhdZtyjzEL02pnAg1Zj6P3qOEkUEZ8X4F3X5kl7kwxgQxJTTfXtWb"
            ]
        );
    }
}
