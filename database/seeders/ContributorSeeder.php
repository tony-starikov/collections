<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contributors')->insert([
            [
                'collection_id' => 1,
                'user_name' => 'User1',
                'amount' => '1000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'collection_id' => 2,
                'user_name' => 'User2',
                'amount' => '2000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'collection_id' => 2,
                'user_name' => 'User3',
                'amount' => '3000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            [
                'collection_id' => 3,
                'user_name' => 'User4',
                'amount' => '4000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'collection_id' => 3,
                'user_name' => 'User5',
                'amount' => '5000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'collection_id' => 3,
                'user_name' => 'User6',
                'amount' => '6000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
