<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'name' => '1 Hour Php 330.00',
                'description' => 'Succeding Hours PHP 180.00/hour. Cleaner transpo base on location',
                'price' => 330,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '2 Hours Php 530.00',
                'description' => 'Succeding Hours PHP 180.00/hour. Cleaner transpo base on location',
                'price' => 570,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sofa Cleaning',
                'description' => 'Price may vary depending on size. Cleaner transpo base on location',
                'price' => 0,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Carpet Cleaning',
                'description' => 'Price may vary depending on size. Cleaner transpo base on location',
                'price' => 0,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bed Cleaning',
                'description' => 'Price may vary depending on size. Cleaner transpo base on location',
                'price' => 0,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '1hour Php 350.00',
                'description' => 'Succeding Hours PHP 180.00/hour. Cleaner transpo base on location',
                'price' => 350,
                'category_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '2hours Php 600.00',
                'description' => 'Succeding Hours PHP 180.00/hour. Cleaner transpo base on location',
                'price' => 350,
                'category_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '2hours Php 900.00',
                'description' => 'Succeding Hours PHP 200.00/hour. Cleaner transpo base on location',
                'price' => 900,
                'category_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
        ];

        Service::insert($services);
    }
}
