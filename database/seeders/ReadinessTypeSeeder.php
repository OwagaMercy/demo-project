<?php

namespace Database\Seeders;

use App\Models\ReadinessType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ReadinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReadinessType::truncate();

        $readinessTypes =  [
            [
                'name' => 'Capacity Building',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'FI/TNA/other',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'NAP',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'REDD+',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        ReadinessType::insert($readinessTypes);
    }
}
