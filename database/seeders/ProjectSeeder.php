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
                    'duration' => '12',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Technology Needs Assessment for the Implementation of Climate Action Plans',
                    'reference'=>'BRA-RS-001',
                    'grant_amount'=> '700000',
                    'date_gcf'=> '06/20/2018',
                    'first_disbursement_amount'=> '197450',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "FI/TNA/other")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Economy Division")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '06/20/2018',
                    'end_date'=> '12/19/2019 12:00:00',
                    'duration' => '18',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => '1. Establishing and strengthening National Designated Authorities or Focal Points;
                    2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes.',
                    'reference'=>'COM-RS-001',
                    'grant_amount'=> '426080',
                    'date_gcf'=> '11/01/2018',
                    'first_disbursement_amount'=> '147500',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Ecosystems")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "completed")->firstOrFail()->id,
                    'start_date'=> '11/01/2018',
                    'end_date'=> '8/30/2017',
                    'duration' => '24',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Building sub-national capacities for the implementation of the National Adaptation Plan in Costa Rica',
                    'reference'=>'CRI-RS-002',
                    'grant_amount'=> '2861917',
                    'date_gcf'=> '10/23/2018',
                    'first_disbursement_amount'=> '350575.33',
                    'readiness'=> 'National Adaptation Plans',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "NAP")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Latin America Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '10/23/2018',
                    'end_date'=> '10/23/2021',
                    'duration' => '36',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Building capacity to advance National Adaptation Plan Process in the Dominican Republic',
                    'reference'=>'DOM-RS-002',
                    'grant_amount'=> '2998325',
                    'date_gcf'=> '07/11/2018',
                    'first_disbursement_amount'=> '1161912',
                    'readiness'=> 'National Adaptation Plans',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "NAP")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Latin America Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '07/11/2018',
                    'end_date'=> '06/10/2021',
                    'duration' => '36',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Supporting Egypt’s engagement with the Green Climate Fund: Logical framework support',
                    'reference'=>'EGY-RS-001',
                    'grant_amount'=> '300000',
                    'date_gcf'=> '05/02/2017',
                    'first_disbursement_amount'=> '122456',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Ecosystems")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '04/24/2017',
                    'end_date'=> '10/23/2018 12:00:00',
                    'duration' => '18',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Drought Early Warning and Forecasting System: Improving resiliency of crops to drought through strengthened early warning within Ghana, Uganda and Sudan',
                    'reference'=>'GHA-RS-001',
                    'grant_amount'=> '300150',
                    'date_gcf'=> '05/02/2017',
                    'first_disbursement_amount'=> '300150',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "FI/TNA/other")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "CTCN")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "completion report submitted")->firstOrFail()->id,
                    'start_date'=> '05/15/2017',
                    'end_date'=> '05/10/2019',
                    'duration' => '24',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                
                
            ];
          
        Project::insert($projects);
    }
    }
}
