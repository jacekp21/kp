<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::create([
            'name'              => 'Vendor A',
            'address'           => 'Jl. Jendral Sudirman No. 15',
            'telpon'            => '0812123456',
            'email'             => 'A@vendor.com',
            'bank'              => 'BCA',
            'cabang'            => 'Bandung',
            'nama_rekening'     => 'Vendor A',
            'no_rek'            => '1234567'
        ]);
    }
}
