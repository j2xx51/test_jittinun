<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'id' => 1,
            'name' => 'John',
            'start_date' => '2022-01-01',
            'description' => 'Employee 1',
            'image' => 'employee1.jpg',
        ]);

        Employee::create([
            'id' => 2,
            'name' => 'Jane',
            'start_date' => '2022-02-01',
            'description' => 'Employee 2',
            'image' => 'employee2.jpg',
        ]);

        Employee::create([
            'id' => 3,
            'name' => 'Mike',
            'start_date' => '2022-03-01',
            'description' => 'Employee 3',
            'image' => 'employee3.jpg',
        ]);

        Employee::create([
            'id' => 4,
            'name' => 'Lisa',
            'start_date' => '2022-04-01',
            'description' => 'Employee 4',
            'image' => 'employee4.jpg',
        ]);

        Employee::create([
            'id' => 5,
            'name' => 'Alex',
            'start_date' => '2022-05-01',
            'description' => 'Employee 5',
            'image' => 'employee5.jpg',
        ]);
    }
}
