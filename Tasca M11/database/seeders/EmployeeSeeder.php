<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    const DEPARTMENT = ['RRHH', 'tecnology', 'consuerge', 'events department', 'nursery', 'cooking'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('employees')->insert([
                'first' => Str::random(10),
                'last' => Str::random(20),
                'comments' => Str::random(255),
                'incorporation_date' => Carbon::parse('Monday next week'),
                'department' => self::DEPARTMENT[rand(0, 5)],
            ]);
        }
    }
}
