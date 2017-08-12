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

        DB::table('users')->insert([
            'nama' => 'adit',
            'email' => 'adit@local.com',
            'nik' => '12345678911',
            'pangkat,golonganruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('adit'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'bapak',
            'email' => 'bapak@local.com',
            'nik' => '12345678912',
            'pangkat,golonganruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('bapak'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'ciripa',
            'email' => 'ciripa@local.com',
            'nik' => '12345678913',
            'pangkat,golonganruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('ciripa'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'pras',
            'email' => 'pras@local.com',
            'nik' => '12345678914',
            'pangkat,golonganruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('pras'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'elvis',
            'email' => 'elvis@local.com',
            'nik' => '12345678915',
            'pangkat,golonganruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('elvis'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'handoko',
            'email' => 'handoko@local.com',
            'nik' => '12345678916',
            'pangkat,golonganruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('handoko'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'suratno',
            'email' => 'suratno@local.com',
            'nik' => '12345678917',
            'pangkat,golonganruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('suratno'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'dery',
            'email' => 'dery@local.com',
            'nik' => '12345678918',
            'pangkat,golonganruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('dery'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'bintang',
            'email' => 'bintang@local.com',
            'nik' => '12345678919',
            'pangkat,golonganruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('bintang'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'dino',
            'email' => 'dino@local.com',
            'nik' => '12345678920',
            'pangkat,golonganruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('dino'),
            'img_url' => 'users.png',
        ]);
    }
}
