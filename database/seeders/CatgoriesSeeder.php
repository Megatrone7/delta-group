<?php

namespace Database\Seeders;

use App\Models\Catgory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatgoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catgory = ['ویلا' =>
            [
                'type' => 'vila',
                'url' => 'wwww'
            ],

            'کاغذ دیواری' =>
                [

                    'type' => 'kaqaz',
                    'url' => 'wwww'
                ]];

        foreach ($catgory as $categoryName => $details) {

            Catgory::create([

                'name' => $categoryName,
                'type' => $details['type']


            ]);

        }
    }
}
