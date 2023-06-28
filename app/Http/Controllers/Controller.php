<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Employee;
use Database\Seeders\EmployeeSeeder;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function seedEmployees()
    {
        $seeder = new EmployeeSeeder();
        $seeder->run();
        
        return "Employees seeded successfully!";
    }
}
