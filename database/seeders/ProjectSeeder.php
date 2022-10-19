<?php

namespace Database\Seeders;

use App\Models\Office;
use App\Models\Project;
use App\Models\ReadinessType;
use App\Models\Status;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            Project::truncate();
    
            $projects =  [
                [
                    'name' => 'Readiness support to Albania',
                    'reference'=>'ALB-RS-001',
                    'grant_amount'=> '300000',
                    'date_gcf'=> '11/15/2016',
                    'first_disbursement_amount'=> '147500',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Europe Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "completed")->firstOrFail()->id,
                    'start_date'=> '11/15/2016',
                    'end_date'=> '8/30/2017',
                    'duration'=> '12',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                // [
                //     'name' => 'Readiness support to Albania',
                //     'reference'=>'ALB-RS-001',
                //     'grant_amount'=> '300000',
                //     'date_gcf'=> '11/15/2016',
                //     'first_disbursement_amount'=> '147500',
                //     'readiness'=> 'Readiness',
                //     'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                //     'office_id'=> Office::query()->where("name", "Europe Office")->firstOrFail()->id,
                //     'status_id'=> Status::query()->where("name", "completed")->firstOrFail()->id,
                //     'start_date'=> '11/15/2016',
                //     'end_date'=> '8/30/2017',
                //     'duration'=> '18',
                //     'created_at' => Carbon::now(),
                //     'updated_at' => Carbon::now(),
                // ],
                // [
                //     'name' => 'Readiness support to Albania',
                //     'reference'=>'ALB-RS-001',
                //     'grant_amount'=> '300000',
                //     'date_gcf'=> '11/15/2016',
                //     'first_disbursement_amount'=> '147500',
                //     'readiness'=> 'Readiness',
                //     'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                //     'office_id'=> Office::query()->where("name", "Europe Office")->firstOrFail()->id,
                //     'status_id'=> Status::query()->where("name", "completed")->firstOrFail()->id,
                //     'start_date'=> '11/15/2016',
                //     'end_date'=> '8/30/2017',
                //     'duration'=> '24',
                //     'created_at' => Carbon::now(),
                //     'updated_at' => Carbon::now(),
                // ],
                // [
                //     'name' => 'Readiness support to Albania',
                //     'reference'=>'ALB-RS-001',
                //     'grant_amount'=> '300000',
                //     'date_gcf'=> '11/15/2016',
                //     'first_disbursement_amount'=> '147500',
                //     'readiness'=> 'Readiness',
                //     'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                //     'office_id'=> Office::query()->where("name", "Europe Office")->firstOrFail()->id,
                //     'status_id'=> Status::query()->where("name", "completed")->firstOrFail()->id,
                //     'start_date'=> '11/15/2016',
                //     'end_date'=> '8/30/2017',
                //     'duration'=> '36',
                //     'created_at' => Carbon::now(),
                //     'updated_at' => Carbon::now(),
                // ],
                
            ];
          
        Project::insert($projects);
    }
    }
}
