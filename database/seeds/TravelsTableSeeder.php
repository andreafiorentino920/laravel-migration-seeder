<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for($i=0; $i <=10;$i++){
            $newTravel = new Travel();
            $newTravel->destinazione = $faker->country();
            $newTravel->passeggeri = $faker->numberBetween(1,5);
            $newTravel->partenza = $faker->dateTimeAD();
            $newTravel->ritorno = $faker->dateTimeAD();
            $newTravel->descrizione =$faker->paragraph();
            $newTravel->prezzo = $faker->randomFloat(2, 300, 3000);
            $newTravel->save();
        }
    }
}
