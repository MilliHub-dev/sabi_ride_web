<?php

namespace App\Livewire\Forms;

use App\Actions\ConnectDB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
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



    public function register()
    {
        $query = "SELECT * FROM signup WHERE email = '$this->email'";
        $result = ConnectDB::run($query);
        $hashed = Hash::make($this->password);
        if ($result === false) {
            $pdo = ConnectDB::connect();
            $query = "INSERT INTO signup (email, phone_number, location_city, password) VALUES (:email, :phone_number, :location_city, :password)";
            $stmt = $pdo->prepare($query);

            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':phone_number', $this->phone_number);
            $stmt->bindParam(':location_city', $this->location_city);
            $stmt->bindParam(':password', $hashed);

            $result = $stmt->execute();
            if ($result) {
                $query = "SELECT id, email, phone_number FROM signup WHERE email = '$this->email'";
                $user = ConnectDB::run($query);

                session()->put('user', $user);
                return $user;
            }
        } else {
            throw ValidationException::withMessages([
                'form.email' => 'Email is used',
            ]);
        }
    }
}
