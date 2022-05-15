<?php

use App\Models\Nationalitie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->delete();

        $nationals = [

            
            
           
      
            [

                'en'=> 'Egyptian',
                'ar'=> 'مصري'
            ],
         
         
            [

                'en'=> 'Syrian',
                'ar'=> 'سوري'
            ],
           
            [

                'en'=> 'Tunisian',
                'ar'=> 'تونسي'
            ],
            [

                'en'=> 'Turkish',
                'ar'=> 'تركي'
            ],
            
        ];

        foreach ($nationals as $n) {
            Nationalitie::create(['Name' => $n]);
        }

    }
}
