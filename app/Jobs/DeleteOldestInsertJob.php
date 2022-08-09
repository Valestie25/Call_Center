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

use Illuminate\Support\Facades\DB;

class DeleteOldestInsertJob implements ShouldQueue
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


        //  DB::table('calls')->where('created_at','=',old())->delete();
        /* $delete= DepartmentBCall::select()->first();
        $delete -> delete(); */

        $date= call::select()->first();

        call::where('ID_LLAMADAS',$date)->delete();

        call::select()->get();
        /* 
        call::where('ID_LLAMADAS', '=', 'first')->delete();
        DepartmentBCall::delete()->get();
        DepartmentCCall::delete()->get();
        DepartmentDCall::delete()->get(); */
    }
}
