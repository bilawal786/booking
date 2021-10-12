<?php

namespace App\Http\Controllers\Admin;
use App\Client;
use App\Service;
use App\Employee;
use App\Appointment;
class HomeController
{
    public function index()
    {
        $clients = Client::all()->count();
        $services = Service::all()->count();
        $employee = Employee::all()->count();
        $appoin = Appointment::all()->count();
        return view('home', compact('clients', 'services', 'employee', 'appoin'));
    }
}
