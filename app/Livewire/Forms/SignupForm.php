<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SignupForm extends Form
{

    #[Validate('required|string')]
    public string $email = '';

    #[Validate('required|string')]
    public string $phone_number = '';

    #[Validate('required|string')]
    public string $first_name = '';
    #[Validate('required|string')]
    public string $last_name = '';

    #[Validate('required|string')]
    public string $password = '';



    public function register()
    {
        $response = Http::acceptJson()->post(env('BASE_URL') . '/api/v1/users/register/sabi-rider', [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'password' => $this->password
        ]);
        if (!$response->successful()) {
            throw ValidationException::withMessages([
                'form.email' => "Email or phone number seems to exist",
            ]);
        }
        session()->put('email', $response->json()['email']);
    }
}
