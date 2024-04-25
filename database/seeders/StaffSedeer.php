<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* Staff::create([
            'nip' => '231402131',
            'email' => 'sitiaudreyfalisya@gmail.com',
            'nama' => 'Audrey',
            'tanggal_lahir' => '2006-13-01',
            'no_hp' => '081234567890'
        ]);*/
        Staff::factory(8)->create();
    }
}
