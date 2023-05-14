<?php

namespace Database\Seeders;

use App\Http\Enum\VehiclesTypeEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            'type' => VehiclesTypeEnum::voiture,
        ]);
        DB::table('types')->insert([
            'type' => VehiclesTypeEnum::moto,
        ]);
        DB::table('types')->insert([
            'type' => VehiclesTypeEnum::utilitaire,
        ]);
    }
}
