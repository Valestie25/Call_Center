<?php

namespace Database\Seeders;

use App\Models\call;
use App\Models\DepartmentBCall;
use App\Models\DepartmentCCall;
use App\Models\DepartmentDCall;
use App\Models\Employee;
use Illuminate\Database\Seeder;


use Database\Seeders\Str;

class CallsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        call::factory(10)->create();
        DepartmentBCall::factory(100)->create();
        DepartmentCCall::factory(100)->create();
        DepartmentDCall::factory(100)->create();
        Employee::factory(100)->create();


    }
}
