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
            'nama' => 'parto',
            'email' => 'parto@local.com',
            'nik' => '12345678910',
            'pangkat,golonganruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('parto'),
            'img_url' => 'users.png',
        ]);
    }
}
