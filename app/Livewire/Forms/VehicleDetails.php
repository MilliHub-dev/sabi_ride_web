<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class VehicleDetails extends Form
{

    // #[Validate('required|string')]
    // public string $driver_type = '';

    #[Validate('required|string')]
    public string $vehicle_manufacturer = '';

    #[Validate('required|string')]
    public string $vehicle_model = '';

    #[Validate('required|string')]
    public string $vehicle_color = '';

    #[Validate('required|string')]
    public string $vehicle_year = '';
}
