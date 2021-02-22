<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees_list = [
            [
                'fullname' => 'Marco Cerri',
                'company' => 'Lambda',
                'role' => 'Accountant',
                "salary" => 23400
            ],
            [
                'fullname' => 'Luca Ambrosini',
                'company' => 'Delta',
                'role' => 'Accountant',
                "salary" => 25423
            ],
            [
                'fullname' => 'Alessandro Bianchi',
                'company' => 'Gamma',
                'role' => 'Architect',
                "salary" => 35000
            ],
            [
                'fullname' => 'Astaldo Almneti',
                'company' => 'Alpha',
                'role' => 'Manager',
                "salary" => 54000
            ],
        ];

        foreach ($employees_list as $employee) {
            $newEmployee = new Employee();
            $newEmployee->fullname = $employee['fullname'];
            $newEmployee->company = $employee['company'];
            $newEmployee->role = $employee['role'];
            $newEmployee->salary = $employee['salary'];
            $newEmployee->save();
        }
    }
}
