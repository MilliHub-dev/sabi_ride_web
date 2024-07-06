<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    public function authenticate()
    {
        try {
            $response = Http::acceptJson()->post(env('BASE_URL') . '/api/v1/users/login/sabi-rider', [
                'email' => $this->email,
                'password' => $this->password
            ]);
            if (array_key_exists('message', $response->json())) {
                $message = $response->json()['message'];

                if (str_contains($message, "user does not exist")) {
                    throw ValidationException::withMessages([
                        'form.email' => "credentials don't match",
                    ]);
                }

                if (str_contains($message, "user is not activated")) {
                    return $message;
                }

                throw ValidationException::withMessages([
                    'form.email' => $response->json()['message'],
                ]);
            }
            $token = $response->json()['access_token'];
            $request = Http::withToken($token)->get(env('BASE_URL') . '/api/v1/users/driver-verification');

            if (array_key_exists('data', $request->json())) {
                session()->put('verification_status', $request->json()['data']['verification_comment']);
            }
            return $response->json();
        } catch (\Throwable $th) {
            throw ValidationException::withMessages([
                'form.email' => $th->getMessage(),
            ]);
        }
    }
}
