<?php

use Illuminate\Database\Seeder;
use App\Pakage;

class PakagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayPackages = config('pakage');
        foreach($arrayPackages as $item) {
            $newPackage = new Pakage();

            $newPackage -> {'name_package'} = $item["name_package"];
            $newPackage -> cost = $item["cost"];
            $newPackage -> {'duration_day'} = $item["duration_day"];
            $newPackage -> descrition = $item["descrition"];
            $newPackage -> place = $item["place"];
            $newPackage -> {'type_locality'} = $item["type_locality"];
            $newPackage-> save();
        }
    }
}