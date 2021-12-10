<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolutionSeeder extends Seeder
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
                'nama_solution' => 'Lighting Control',
                'keterangan' =>'Lighting Control',
            ],
            [
                'nama_solution' => 'Audio & Video Control',
                'keterangan' =>'Audio & Video Control',
            ],
            [
                'nama_solution' => 'Access Control & Security ',
                'keterangan' =>'Access Control & Security ',
            ],
            [
                'nama_solution' => 'Indoor Comfort',
                'keterangan' =>'Indoor Comfort',
            ],
            [
                'nama_solution' => 'Smart Security',
                'keterangan' =>'Smart Security',
            ],
            [
                'nama_solution' => 'Connectifity',
                'keterangan' =>'Connectifity',
            ],
        ];
        DB::table('solutions')->insert($solutions);    


        $solution = DB::table('solutions')->get();


        foreach ($solution as $key => $value) {
            # code...
            $link ="";
            switch ($value->nama_solution) {
                case 'Lighting Control':
                $link = "https://youtu.be/2jNQCSKeMGY";
                    break;
                case 'Indoor Comfort':
                $link = "https://youtu.be/FQ28x9UVSlU";
                    break;
                case 'Smart Security':
                $link = "https://youtu.be/NH6qKq63l9Q";
                    break;
                case 'Connectifity':
                $link = " https://youtu.be/M8nOOLDFl3Q";
                    break;
                default:
                    # code...
                    $link = "";
                    break;
            }

            DB::table('modules')->insert([
                'solutions' => $value->nama_solution,
                'link' => $link,
                'id_solutions' => $value->id,
            ]);
        }
    }
}
