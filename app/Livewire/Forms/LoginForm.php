<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        // dd($this->only(['email', 'password']));
        $user = DB::table('signup')->where('email', $this->email)->first();
        if (Hash::check($user->password, $this->password)) {
            session()->put('id', $user->id);

            $verification_status = DB::table('driver_verification')->where('user_id', $user->id)
                ->first()
                ->verification_status;

            if ($verification_status) {
                return redirect()->route('verification.complete');
            } else {
                return redirect()->route('verification.start');
            }
        }
    }
}
