<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $solutions =[
            [
                'type_barang' => 'Small',
                'keterangan' =>'Small',
            ],
            [
                'type_barang' => 'Medium',
                'keterangan' =>'Medium',
            ],
            [
                'type_barang' => 'Big',
                'keterangan' =>'Big',
            ],
        ];
        DB::table('type_barang')->insert($solutions);    
    }
}
