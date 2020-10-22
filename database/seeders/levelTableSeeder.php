<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class levelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experience=0;
        for($i=0; $i<10; $i++)
        {
            DB::table('levels')->insert([
                'experience'=>$experience
            ]);
            if($experience==0)
                $experience=50;
            $experience = $experience * 2;
        }
       
    }
}
