<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class SignupForm extends Form
{

    #[Validate('required|string')]
    public string $email = '';

    #[Validate('required|string')]
    public string $name = '';

    #[Validate('required|string')]
    public string $password = '';
}
