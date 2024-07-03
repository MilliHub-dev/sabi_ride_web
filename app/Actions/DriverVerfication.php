<?php

namespace App\Actions;

use Illuminate\Support\Facades\Http;


class DriverVerfication
{
    public static function save()
    {
        $driver_vehicle_details = array_merge(session('vehicle_details'), session('licensing_details'));
        $documents = session('documents');
        $token = session('user')['access_token'];
        unset($driver_vehicle_details['driver_type']);

        try {
            $response_details = Http::withToken($token)
                ->post(env('BASE_URL') . '/api/v1/users/driver-car-details', $driver_vehicle_details);

            $response_documents = Http::withToken($token)
                ->post(env('BASE_URL') . '/api/v1/users/driver-verification', $documents);

            dd($response_details->body(), $response_documents->body());
            session()->forget('vehicle_details');
            session()->forget('licensing_details');
            session()->forget('documents');
        } catch (\Throwable $th) {

            session()->forget('vehicle_details');
            session()->forget('licensing_details');
            session()->forget('documents');

            flash('error' . 'Verification failed');
            return to_route('verification.start');
        }
    }
}
