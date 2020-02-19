<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);

        /*
        DB::table('apps')->insert([
            'app_name' => 'Pure',
            'app_status' => '1',
            'app_url' => 'https://pure.rug.nl/admin/',
            'app_remarks' => 'geen opmerkingen'
        ]);

        DB::table('apps')->insert([
            'app_name' => 'Digitale Zadenatlas van Nederland',
            'app_status' => '1',
            'app_url' => 'http://dzn.eldoc.ub.rug.nl/',
            'app_remarks' => 'geen opmerkingen'
        ]);
        */

        DB::table('servers')->insert([
            'server_name' => 'taske',
            'server_type' => 'virtuele server',
            'server_otap' => 'test'
        ]);

        DB::table('servers')->insert([
            'server_name' => 'poewaai',
            'server_type' => 'virtuele server',
            'server_otap' => 'productie'
        ]);

    }
}
