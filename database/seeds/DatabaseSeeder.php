<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('apps')->insert([
            'app_name' => 'Pure',
            'app_status' => 'active',
            'app_url' => 'https://pure.rug.nl/admin/',
            'app_remarks' => 'geen opmerkingen'
        ]);

        DB::table('apps')->insert([
            'app_name' => 'Digitale Zadenatlas van Nederland',
            'app_status' => 'active',
            'app_url' => 'http://dzn.eldoc.ub.rug.nl/',
            'app_remarks' => 'geen opmerkingen'
        ]);

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
