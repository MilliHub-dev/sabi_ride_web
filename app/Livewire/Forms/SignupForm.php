<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

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
}
