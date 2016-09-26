<?php

use Collejo\App\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RequiredDataSeeder::class);
        $this->call(StudentDataSeeder::class);
        $this->call(EmployeeDataSeeder::class);
    }

}
