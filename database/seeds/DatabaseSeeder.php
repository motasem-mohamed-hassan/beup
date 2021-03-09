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
        DB::table('users')->insert([
            'id'    =>  '1',
            'name'  => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('infos')->insert([
            'id'    =>  '1',
            'phone' =>  '123456789',
            'email' =>  'test@email.com',
            'location_en'   => 'location in EN',
            'location_ar'   => 'العنوان باللغة العربية',
            'whatsapp_link' =>  'https://web.whatsapp.com/'
        ]);
    }
}
