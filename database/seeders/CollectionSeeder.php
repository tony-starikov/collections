<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('collections')->insert([
            [
                'title' => 'ОКО ЗА ОКО',
                'description' => 'Ви допомагаєте Силам оборони України, просто заправляючи своє авто на ОККО. А 1 гривня з кожного літра пального PULLS 95 або PULLS Diesel, який ви залили в бак, автоматично летить на закупівлю «ШАРКІВ».',
                'target_amount' => '325_000_000',
                'link' => 'https://charity.okko.ua/',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'First Naval Fleet of Drones',
                'description' => 'Our first task is to assemble a fleet of 100 such vessels. They will defend the waters of our seas, stop russian ships carrying missiles from leaving the bay, protect merchant ships, and perform secret missions.',
                'target_amount' => '10_000_000',
                'link' => 'https://u24.gov.ua/navaldrones',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => '«Прицільно»',
                'description' => 'Забезпечимо майже 150 розрахунків Мk.19, американських автоматичних станкових гранатометів зі стрічковим живленням, спеціально спроєктованими прицілами та планшетами з ARMOR — програмним забезпеченням для стрільби із закритих позицій.',
                'target_amount' => '13_000_000',
                'link' => 'https://savelife.in.ua/projects/military/prytsilno/',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
