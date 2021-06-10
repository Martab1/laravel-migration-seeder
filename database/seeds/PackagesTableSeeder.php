<?php

use Illuminate\Database\Seeder;
use App\package;
class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){

             // creazione istanza (record,row)
             $new_trip = new package();

             // popolazione colonne
             $new_trip->description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda ex aperiam architecto voluptate distinctio nisi inventore quisquam, pariatur accusantium soluta, perferendis error repellendus officia quam accusamus modi facere illo consequatur.';
             $new_trip->state = 'Italy';
             $new_trip->city = 'Rome';
             $new_trip->price = rand(800,6000);
             $new_trip->guests = rand(2,12);
             $new_trip->is_available = (1);


             // salvare record nel db
             $new_trip->save();
        }
        
    }
}
