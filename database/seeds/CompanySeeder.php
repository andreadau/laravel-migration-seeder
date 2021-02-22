<?php

use App\Company;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 30 ; $i++) { 
            $newCompany = new Company();
            $newCompany->name = $faker->company();
            $newCompany->address = $faker->address();
            $newCompany->worker = $faker->name(10);
            $newCompany->save();
        }
    }
}
