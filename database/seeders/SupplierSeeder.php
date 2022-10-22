<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create([
            "name"=>"ACM",
            "address"=>"Yangon",
            "phone_number"=>"09777333222",
        ]);

        Supplier::create([
            "name"=>"Aung Chan",
            "address"=>"Mandalay",
            "phone_number"=>"09222444666",
        ]);

    }
}
