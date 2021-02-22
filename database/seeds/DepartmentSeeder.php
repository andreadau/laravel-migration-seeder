<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments_list = config('departments');
        foreach ($departments_list as $department) {
            $newDepartment = new Department();
            $newDepartment->name = $department['name'];
            $newDepartment->company = $department['company'];
            $newDepartment->location = $department['location'];
            $newDepartment->utility = $department['utility'];
            $newDepartment->save();
        }
    }
}
