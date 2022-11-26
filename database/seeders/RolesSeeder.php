<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::transaction(function () {
            DB::table('roles')->upsert([
                [
                    'name' => 'startup',
                    'guard_name' => 'api', 
                ],
                [
                    'name' => 'professional',
                    'guard_name' => 'api', 
                ],
                [
                    'name' => 'investor',
                    'guard_name' => 'api', 
                ]
            ], ['name', 'guard_name'], ['created_at','updated_at']);
        });
    }
}
