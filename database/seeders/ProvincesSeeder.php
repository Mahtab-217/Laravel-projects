<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Provinces =[ 
            ["name"=> 'Ghazni'], 
            ["name"=> 'Kabul'], 
            ["name"=> 'Herat'], 
            ["name"=> 'Balkh'], 
            ["name"=> 'Nangarhar'], 
            ["name"=> 'Qandahar'], 
            ["name"=> 'Bamian'], 
            ["name"=> 'Parwan'], 
            ["name"=> 'Takhar'], 
            ["name"=> 'Badakhshan'], 
            ["name"=> 'Samangan'], 
            ["name"=> 'Konduz'], 
            ["name"=> 'Paktia'], 
            ["name"=> 'Paktika'], 
            ["name"=> 'Khost'], 
            ["name"=> 'Laghman'], 
            ["name"=> 'Noristan'], 
            ["name"=> 'Farah'], 
            ["name"=> 'Ghore'], 
            ["name"=> 'Nimroz'], 
            ["name"=> 'Helmand'], 
            ["name"=> 'Zabul'], 
            ["name"=> 'Orozgan'], 
            ["name"=> 'Daikondy'], 
            ["name"=> 'Fariab'], 
            ["name"=> 'Jawozjan'], 
            ["name"=> 'Sarpul'], 
            ["name"=> 'Maidan Wardag'], 
            ["name"=> 'Logar'], 
            ["name"=> 'Baghlan'], 
            ["name"=> 'Kapisa'], 
            ["name"=> 'Panjshir'], 
            ["name"=> 'Badghis'], 
            ["name"=> 'Samangan'], 
        ];
        DB::table("Provinces")->insert($Provinces);
        //
    }
}
