<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Service;
use App\Models\User;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'john@example.com')->first(); // Assuming user with ID 1 is the seller of these services

        $user->services()->create([
            'service_title' => 'Logo Design',
            'service_description' => 'I will design a professional logo for your business.',
            'service_price' => 50,
            'service_category' => 'Graphic Design',
            'delivery_time' => 3,
            'service_status' => 'active',
        ]);

        $user->services()->create([
            'service_title' => 'Website Development',
            'service_description' => 'I will create a responsive website using modern technologies.',
            'service_price' => 200,
            'service_category' => 'Web Development',
            'delivery_time' => 7,
            'service_status' => 'active',
        ]);
    }
}
