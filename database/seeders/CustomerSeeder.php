<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => 'Customer 1',
            'email' =>'choirfilza@gmail.com',
            'phone_number'=>'0812341234',
            'city'=>'Jakarta',
            'create_at'=>Carbon::now(),
        ]);
    }
}
