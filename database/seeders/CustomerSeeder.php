<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'nama' => 'John Doe',
            'rt' => 1,
            'rw' => 2,
            'no_telp' => '1234567890',
            'paket' => 'Premium'
        ]);

        Customer::create([
            'nama' => 'Jane Doe',
            'rt' => 3,
            'rw' => 4,
            'no_telp' => '0987654321',
            'paket' => 'Basic'
        ]);
    }
}
