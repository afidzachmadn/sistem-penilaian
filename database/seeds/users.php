<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'nama' => 'Parto',
            'nik' => '12345678910',
            'email' => 'parto@local.com',
            'no_hp' => '08976543212',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Officer',
            'password' => encrypt('parto'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'Adit',
            'nik' => '12345678911',
            'email' => 'adit@local.com',
            'no_hp' => '089765132452',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Officer',
            'password' => encrypt('adit'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'Ciripa',
            'nik' => '12345678912',
            'email' => 'ciripa@local.com',
            'no_hp' => '0897242323431',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Officer',
            'password' => encrypt('ciripa'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'Ade',
            'nik' => '12345678913',
            'email' => 'ade@local.com',
            'no_hp' => '08976543212',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Pimpinan',
            'password' => encrypt('ade'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'Obenk',
            'nik' => '12345678914',
            'email' => 'obenk@local.com',
            'no_hp' => '081412434321',
            'bagian' => 'sales',
            'jabatan' => 'officer',
            'password' => encrypt('obenk'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'Pras',
            'nik' => '12345678915',
            'email' => 'pras@local.com',
            'no_hp' => '01313124113131',
            'bagian' => 'sales',
            'jabatan' => 'officer',
            'password' => encrypt('pras'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'Ampas',
            'nik' => '12345678916',
            'email' => 'ampas@local.com',
            'no_hp' => '0897131231321',
            'bagian' => 'sales',
            'jabatan' => 'officer',
            'password' => encrypt('ampas'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'Dino',
            'nik' => '12345678917',
            'email' => 'dino@local.com',
            'no_hp' => '0891132123232232',
            'bagian' => 'sales',
            'jabatan' => 'Pimpinan',
            'password' => encrypt('dino'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'Mencret',
            'nik' => '12345678918',
            'email' => 'mencret@local.com',
            'no_hp' => '0897654213123',
            'bagian' => 'Analis Keuangan',
            'jabatan' => 'officer',
            'password' => encrypt('mencret'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'rendy',
            'nik' => '12345678919',
            'email' => 'rendy@local.com',
            'no_hp' => '08973123455653',
            'bagian' => 'Analis Keuangan',
            'jabatan' => 'officer',
            'password' => encrypt('rendy'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'sasha',
            'nik' => '12345678920',
            'email' => 'sasha@local.com',
            'no_hp' => '089731635323',
            'bagian' => 'Analis Keuangan',
            'jabatan' => 'Pimpinan',
            'password' => encrypt('sasha'),
            'img_url' => 'users.png',
        ]);

        

    
    
        
    }
}
