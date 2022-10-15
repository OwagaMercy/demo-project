<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();

        $countries =  [
            [
                'name' => 'Albania',
                'project_id'=> Project::query()->where("reference", "ALB-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Romania',
                'project_id'=> Project::query()->where("reference", "ALB-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Brazil',
                'project_id'=> Project::query()->where("reference", "BRA-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Panama',
                'project_id'=> Project::query()->where("reference", "BRA-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Comoros',
                'project_id'=> Project::query()->where("reference", "COM-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Costa Rica',
                'project_id'=> Project::query()->where("reference", "CRI-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dominican Republic',
                'project_id'=> Project::query()->where("reference", "DOM-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Morocco',
                'project_id'=> Project::query()->where("reference", "EGY-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Egypt',
                'project_id'=> Project::query()->where("reference", "EGY-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ghana',
                'project_id'=> Project::query()->where("reference", "GHA-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Uganda',
                'project_id'=> Project::query()->where("reference", "GHA-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Uganda',
                'project_id'=> Project::query()->where("reference", "TON-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sudan',
                'project_id'=> Project::query()->where("reference", "GHA-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Honduras',
                'project_id'=> Project::query()->where("reference", "HND-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jordan',
                'project_id'=> Project::query()->where("reference", "JOR-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Malaysia',
                'created_at' => Carbon::now(),
                'project_id'=> Project::query()->where("reference", "MDG-RS-001")->firstOrFail()->id,
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Madgascar',
                'project_id'=> Project::query()->where("reference", "MLY-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Maldives',
                'project_id'=> Project::query()->where("reference", "MDV-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mauritania ',
                'project_id'=> Project::query()->where("reference", "MRT-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mauritius',
                'project_id'=> Project::query()->where("reference", "MUS-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mogolia',
                'project_id'=> Project::query()->where("reference", "MNG-RS-004")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mogolia',
                'project_id'=> Project::query()->where("reference", "MNG-RS-003")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Montenegro',
                'project_id'=> Project::query()->where("reference", "MNE-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Myanmar',
                'project_id'=> Project::query()->where("reference", "MMR-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Myanmar',
                'project_id'=> Project::query()->where("reference", "MMR-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nepal',
                'project_id'=> Project::query()->where("reference", "NPL-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Niger',
                'project_id'=> Project::query()->where("reference", "NER-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pakistan',
                'project_id'=> Project::query()->where("reference", "PAK-RS-003")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Palestine',
                'project_id'=> Project::query()->where("reference", "PSE-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Serbia',
                'project_id'=> Project::query()->where("reference", "SRB-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Swaziland',
                'project_id'=> Project::query()->where("reference", "SWZ-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Swaziland',
                'project_id'=> Project::query()->where("reference", "SWZ-RS-003")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tonga',
                'project_id'=> Project::query()->where("reference", "TON-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tanzania',
                'project_id'=> Project::query()->where("reference", "TON-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kenya',
                'project_id'=> Project::query()->where("reference", "TON-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Zimbabwe',
                'project_id'=> Project::query()->where("reference", "ZWE-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Zimbabwe',
                'project_id'=> Project::query()->where("reference", "ZWE-RS-002")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jordan PPFA',
                'project_id'=> Project::query()->where("reference", "S1-32GCL-000023")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'South Sudan',
                'project_id'=> Project::query()->where("reference", "SSD-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Egypt',
                'project_id'=> Project::query()->where("reference", "SSD-RS-001")->firstOrFail()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        Country::insert($countries);
    }
    
}
