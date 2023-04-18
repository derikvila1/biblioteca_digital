<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spaces')->insert([
            [
                'name' => "BIBLIOTECA DIGITAL",
                'available' => true,
                'schedules' => '[
                    {
                        "day": 1,
                        "dayName": "segunda-feira",
                        "firstHour": 9,
                        "lastHour": 17
                    },
                    {
                    "day": 2,
                    "dayName": "terça-feira",
                    "firstHour": 9,
                    "lastHour": 17
                },
                {
                    "day": 3,
                    "dayName": "quarta-feira",
                    "firstHour": 9,
                    "lastHour": 17
                },
                {
                    "day": 4,
                    "dayName": "quinta-feira",
                    "firstHour": 9,
                    "lastHour": 17
                },    
                {
                    "day": 5,
                    "dayName": "sexta-feira",
                    "firstHour": 9,
                    "lastHour": 17
                },    
                {
                    "day": 5,
                    "dayName": "sábado",
                    "firstHour": 9,
                    "lastHour": 17
                }]'
            ]
        ]);
    }
}