<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\call;
use App\Models\DepartmentBCall;
use App\Models\DepartmentCCall;
use App\Models\DepartmentDCall;
use App\Models\Employee;

class InsertDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        call::factory(1)->create();
        DepartmentBCall::factory(1)->create();
        DepartmentCCall::factory(1)->create();
        DepartmentDCall::factory(1)->create();
    }
}
