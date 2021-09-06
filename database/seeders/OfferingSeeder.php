<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offerings')->insert([
            'customer_id' => 1,
            'option' =>'rumah',
            'number_of_floors'=>'1',
            'number_of_rooms'=>'3',
            'system' => 'Security System',
            'create_at'=>Carbon::now(),
        ]);    
    }
}
