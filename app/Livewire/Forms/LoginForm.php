<?php

namespace App\Livewire\Forms;

use App\Actions\ConnectDB;
use Illuminate\Support\Facades\Hash;
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

        $query = "SELECT * FROM signup WHERE email = '$this->email'";
        $user = ConnectDB::run($query);
        if ($user !== false) {
            if (Hash::check($this->password, $user['password'])) {
                session()->put('user', $user);
                return $user;
            } else {
                throw ValidationException::withMessages([
                    'form.email' => "Credentials don't match",
                ]);
            }
        } else {
            throw ValidationException::withMessages([
                'form.email' => "Email doesn't exist",
            ]);
        }
    }
}
