<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\role;

class roleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array =['Admin','Editor','Writer'];
        for ($i = 0; $i <= 2; $i++) {
            $role = new role();
            $role->name = $array[$i];
            $role->save();
        }
    }
}
