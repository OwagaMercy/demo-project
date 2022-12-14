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
                    'name' => 'Supporting Egypt???s engagement with the Green Climate Fund: Logical framework support',
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
                [
                    'name' => 'Supporting strategic planning to engage with the GCF and comply with the national commitments under the Paris Agreement regarding the LULUCF sector',
                    'reference'=>'HND-RS-002',
                    'grant_amount'=> '764960',
                    'date_gcf'=> '1/18/2018',
                    'first_disbursement_amount'=> '243515',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "REDD+")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Latin America Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '1/18/2018',
                    'end_date'=> '7/19/2019  12:00:00 PM',
                    'duration' => '18',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Strengthening NDA of Jordan to deliver on GCF Investment Framework',
                    'reference'=>'JOR-RS-001',
                    'grant_amount'=> '300000',
                    'date_gcf'=> '6/15/2017',
                    'first_disbursement_amount'=> '150000',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "West Asia Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '6/15/2017',
                    'end_date'=> '12/14/2018  12:00:00 PM',
                    'duration' => '18',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Building Capacity in Madagascar to engage with the GCF',
                    'reference'=>'MDG-RS-001',
                    'grant_amount'=> '300000',
                    'date_gcf'=> '7/20/2018',
                    'first_disbursement_amount'=> '177588',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Ecosystems")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '7/20/2018',
                    'end_date'=> '7/19/2019',
                    'duration' => '12',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Accessing REDD+ result-based payments in Malaysia',
                    'reference'=>'MLY-RS-002',
                    'grant_amount'=> '819230',
                    'date_gcf'=> '11/12/2018',
                    'first_disbursement_amount'=> '465695.33',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "REDD+")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Asia Pacific Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '11/12/2018',
                    'end_date'=> '11/13/2020',
                    'duration' => '24',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Establishing and strengthening National Designated Authority (NDA), and developing strategic framework for engagement with the GCF in Maldives',
                    'reference'=>'MDV-RS-001',
                    'grant_amount'=> '300000',
                    'date_gcf'=> '6/16/2017',
                    'first_disbursement_amount'=> '198545',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Asia Pacific Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '6/16/2017',
                    'end_date'=> '6/13/2018',
                    'duration' => '12',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Building capacity to advance National Adaptation Plan Process in Mauritania',
                    'reference'=>'MRT-RS-002',
                    'grant_amount'=> '2670374',
                    'date_gcf'=> '7/17/2018',
                    'first_disbursement_amount'=> '742163',
                    'readiness'=> 'National Adaptation Plans',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "NAP")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Africa Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '7/17/2018',
                    'end_date'=> '7/8/2021',
                    'duration' => '36',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Climate Change Vulnerability and Adaptation Study for Port of Port Louis',
                    'reference'=>'MUS-RS-002',
                    'grant_amount'=> '324764',
                    'date_gcf'=> '1/22/2018',
                    'first_disbursement_amount'=> '324764',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "FI/TNA/other")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "CTCN")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '1/22/2018',
                    'end_date'=> '4/19/2019  6:00:00 AM',
                    'duration' => '15',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Scaling-up of Implementation of Low-Carbon District Heating Systems in Mongolia',
                    'reference'=>'MNG-RS-003',
                    'grant_amount'=> '368000',
                    'date_gcf'=> '2/1/2018',
                    'first_disbursement_amount'=> '250000',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "FI/TNA/other")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Asia Pacific Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '2/1/2018',
                    'end_date'=> '2/1/2019',
                    'duration' => '12',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Building capacity to advance National Adaptation Plan Process in Mongolia',
                    'reference'=>'MNG-RS-004',
                    'grant_amount'=> '2895461',
                    'date_gcf'=> '6/20/2018',
                    'first_disbursement_amount'=> '406123',
                    'readiness'=> 'National Adaptation Plans',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "NAP")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Asia Pacific Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '6/20/2018',
                    'end_date'=> '6/19/2021',
                    'duration' => '24',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Establishing and Strengthening National Designated Authority (NDA), and Developing Strategic Framework for Engagement with the GCF in Myanmar',
                    'reference'=>'MMR-RS-002',
                    'grant_amount'=> '300000',
                    'date_gcf'=> '11/10/2017',
                    'first_disbursement_amount'=> '115840',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Asia Pacific Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '11/10/2017',
                    'end_date'=> '5/11/2019  12:00:00 PM',
                    'duration' => '18',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => '1. Establishing and strengthening National Designated Authorities or Focal Points;
                    2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes.',
                    'reference'=>'MNE-RS-001',
                    'grant_amount'=> '300000',
                    'date_gcf'=> '11/15/2016',
                    'first_disbursement_amount'=> '145300',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Europe Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '8/30/2016',
                    'end_date'=> '6/19/2021',
                    'duration' => '12',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Building capacity to advance National Adaptation Plan Process in Mongolia',
                    'reference'=>'MMR-RS-001',
                    'grant_amount'=> '336520',
                    'date_gcf'=> '7/26/2017',
                    'first_disbursement_amount'=> '336520',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "FI/TNA/other")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "CTCN")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '7/26/2017',
                    'end_date'=> '7/26/2018',
                    'duration' => '12',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Building Capacity to Advance National Adaptation Plan Process in Nepal',
                    'reference'=>'NPL-RS-001',
                    'grant_amount'=> '2935350',
                    'date_gcf'=> '5/15/2017',
                    'first_disbursement_amount'=> '465410',
                    'readiness'=> 'National Adaptation Plans',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "NAP")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Asia Pacific Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '5/15/2017',
                    'end_date'=> '5/14/2020',
                    'duration' => '36',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Building Niger???s engagement with the GCF: Establishment and strengthening of the NDA, and elaboration of a country programme identifying strategic priorities',
                    'reference'=>'NER-RS-002',
                    'grant_amount'=> '300000',
                    'date_gcf'=> '6/20/2018',
                    'first_disbursement_amount'=> '138100',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Ecosystems")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "requesting funds")->firstOrFail()->id,
                    'start_date'=> '6/20/2018',
                    'end_date'=> '12/19/2019  12:00:00 PM',
                    'duration' => '18',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Building capacity to advance National Adaptation Plan Process in Pakistan',
                    'reference'=>'PAK-RS-003',
                    'grant_amount'=> '2969674',
                    'date_gcf'=> '3/2/2018',
                    'first_disbursement_amount'=> '675420',
                    'readiness'=> 'National Adaptation Plans',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "NAP")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Asia Pacific Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '3/3/2018',
                    'end_date'=> '3/4/2021',
                    'duration' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Technology Road Map for the Implementation of Climate Action Plans in Palestine.',
                    'reference'=>'PSE-RS-002',
                    'grant_amount'=> '254100',
                    'date_gcf'=> '10/18/2017',
                    'first_disbursement_amount'=> '254100',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "FI/TNA/other")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "CTCN")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '10/18/2017',
                    'end_date'=> '10/18/2018',
                    'duration' => '12',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Developing the capacities of the Republic of Serbia for an effective engagement with the Green Climate Fund',
                    'reference'=>'SRB-RS-001',
                    'grant_amount'=> '300000',
                    'date_gcf'=> '1/12/2018',
                    'first_disbursement_amount'=> '130000',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Europe Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '1/12/2018',
                    'end_date'=> '1/12/2019',
                    'duration' => '12',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Republic of South Sudan Green Climate Fund???s Readiness and Preparatory Support Project ',
                    'reference'=>'SSD-RS-001',
                    'grant_amount'=> '300000',
                    'date_gcf'=> '6/20/2018',
                    'first_disbursement_amount'=> '153178',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Policy & Programme Division")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '6/20/2018',
                    'end_date'=> '12/19/2019  12:00:00 PM',
                    'duration' => '18',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Green Climate Fund Readiness Support for Swaziland',
                    'reference'=>'SWZ-RS-002',
                    'grant_amount'=> '299032',
                    'date_gcf'=> '3/12/2018',
                    'first_disbursement_amount'=> '83046',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Ecosystems")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '3/12/2018',
                    'end_date'=> '3/13/2020',
                    'duration' => '24',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Building capacity to advance National Adaptation Plan process in Swaziland ',
                    'reference'=>'SWZ-RS-003',
                    'grant_amount'=> '2796359',
                    'date_gcf'=> '6/28/2018',
                    'first_disbursement_amount'=> '744662',
                    'readiness'=> 'National Adaptation Plans',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "NAP")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Africa Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '6/28/2018',
                    'end_date'=> '6/27/2021',
                    'duration' => '36',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Technology Road Map for the Implementation of Climate Action Plans in Palestine.',
                    'reference'=>'TON-RS-002',
                    'grant_amount'=> '200000',
                    'date_gcf'=> '4/20/2017',
                    'first_disbursement_amount'=> '200000',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "FI/TNA/other")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "CTCN")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '4/20/2017',
                    'end_date'=> '10/9/2017  12:00:00 PM',
                    'duration' => '6',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => '1. Establishing and strengthening National Designated Authorities or Focal Points;
                    2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes.',
                    'reference'=>'ZWE-RS-001',
                    'grant_amount'=> '300000',
                    'date_gcf'=> '3/5/2018',
                    'first_disbursement_amount'=> '121354',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity Building")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Ecosystems")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '3/5/2018',
                    'end_date'=> '3/4/2020',
                    'duration' => '24',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Building capacity to advance National Adaptation Plan Process in Zimbabwe ',
                    'reference'=>'ZWE-RS-002',
                    'grant_amount'=> '2993349',
                    'date_gcf'=> '5/11/2018',
                    'first_disbursement_amount'=> '877525',
                    'readiness'=> 'National Adaptation Plans',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "NAP")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Africa Office")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '5/11/2018',
                    'end_date'=> '5/13/2021',
                    'duration' => '36',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Jordan Integrated Landscape Management Initiative (JILMI)',
                    'reference'=>'S1-32GCL-000023',
                    'grant_amount'=> '2886275',
                    'date_gcf'=> '3/5/2018',
                    'first_disbursement_amount'=> '278946.28',
                    'readiness'=> 'Readiness',
                    'readiness_type_id'=> ReadinessType::query()->where("name", "Capacity building")->firstOrFail()->id,
                    'office_id'=> Office::query()->where("name", "Ecosystems")->firstOrFail()->id,
                    'status_id'=> Status::query()->where("name", "under implementation")->firstOrFail()->id,
                    'start_date'=> '8/28/2018',
                    'end_date'=> '12/28/2019',
                    'duration' => '12',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ];
          
        Project::insert($projects);
    }
    }
}
