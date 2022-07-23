<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Warehouse;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert Warehouse Data
        Warehouse::create([
            'name'              => 'AMP',
            'address'           => 'Senggarang',
            'head_of_warehouse' => 'Puji Hartono',
            'telpon'            => '085264113372'
        ]);
    }
}
