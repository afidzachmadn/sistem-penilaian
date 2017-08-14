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
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('parto'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'adit',
            'email' => 'adit@local.com',
            'nik' => '12345678911',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('adit'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'bapak',
            'email' => 'bapak@local.com',
            'nik' => '12345678912',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('bapak'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'ciripa',
            'email' => 'ciripa@local.com',
            'nik' => '12345678913',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('ciripa'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'pras',
            'email' => 'pras@local.com',
            'nik' => '12345678914',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('pras'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'elvis',
            'email' => 'elvis@local.com',
            'nik' => '12345678915',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('elvis'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'handoko',
            'email' => 'handoko@local.com',
            'nik' => '12345678916',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('handoko'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'suratno',
            'email' => 'suratno@local.com',
            'nik' => '12345678917',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('suratno'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'dery',
            'email' => 'dery@local.com',
            'nik' => '12345678918',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('dery'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'bintang',
            'email' => 'bintang@local.com',
            'nik' => '12345678919',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('bintang'),
            'img_url' => 'users.png',
        ]);

        DB::table('users')->insert([
            'nama' => 'dino',
            'email' => 'dino@local.com',
            'nik' => '12345678920',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
            'password' => encrypt('dino'),
            'img_url' => 'users.png',
        ]);

    
    
        //======================================================================//


        
        DB::table('nilai-diri-sendiri')->insert([
            'nama' => 'parto',
            'email' => 'parto@local.com',
            'nik' => '12345678910',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
        ]);

        DB::table('nilai-diri-sendiri')->insert([
            'nama' => 'adit',
            'email' => 'adit@local.com',
            'nik' => '12345678911',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
        ]);

        DB::table('nilai-diri-sendiri')->insert([
            'nama' => 'bapak',
            'email' => 'bapak@local.com',
            'nik' => '12345678912',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
        ]);

        DB::table('nilai-diri-sendiri')->insert([
            'nama' => 'ciripa',
            'email' => 'ciripa@local.com',
            'nik' => '12345678913',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
        ]);

        DB::table('nilai-diri-sendiri')->insert([
            'nama' => 'pras',
            'email' => 'pras@local.com',
            'nik' => '12345678914',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
        ]);

        DB::table('nilai-diri-sendiri')->insert([
            'nama' => 'elvis',
            'email' => 'elvis@local.com',
            'nik' => '12345678915',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
        ]);

        DB::table('nilai-diri-sendiri')->insert([
            'nama' => 'handoko',
            'email' => 'handoko@local.com',
            'nik' => '12345678916',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
        ]);

        DB::table('nilai-diri-sendiri')->insert([
            'nama' => 'suratno',
            'email' => 'suratno@local.com',
            'nik' => '12345678917',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
        ]);

        DB::table('nilai-diri-sendiri')->insert([
            'nama' => 'dery',
            'email' => 'dery@local.com',
            'nik' => '12345678918',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
        ]);

        DB::table('nilai-diri-sendiri')->insert([
            'nama' => 'bintang',
            'email' => 'bintang@local.com',
            'nik' => '12345678919',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
        ]);

        DB::table('nilai-diri-sendiri')->insert([
            'nama' => 'dino',
            'email' => 'dino@local.com',
            'nik' => '12345678920',
            'pangkat_golongan_ruang' => 'pelaksana,3B',
            'bagian' => 'Teknologi Informasi',
            'jabatan' => 'Supervisor',
        ]);



//============================================================================================//


DB::table('nilai-untuk-orang-lain')->insert([
    'nama' => 'parto',
    'email' => 'parto@local.com',
    'nik' => '12345678910',
    'pangkat_golongan_ruang' => 'pelaksana,3B',
    'bagian' => 'Teknologi Informasi',
    'jabatan' => 'Supervisor',
]);

DB::table('nilai-untuk-orang-lain')->insert([
    'nama' => 'adit',
    'email' => 'adit@local.com',
    'nik' => '12345678911',
    'pangkat_golongan_ruang' => 'pelaksana,3B',
    'bagian' => 'Teknologi Informasi',
    'jabatan' => 'Supervisor',
]);

DB::table('nilai-untuk-orang-lain')->insert([
    'nama' => 'bapak',
    'email' => 'bapak@local.com',
    'nik' => '12345678912',
    'pangkat_golongan_ruang' => 'pelaksana,3B',
    'bagian' => 'Teknologi Informasi',
    'jabatan' => 'Supervisor',
]);

DB::table('nilai-untuk-orang-lain')->insert([
    'nama' => 'ciripa',
    'email' => 'ciripa@local.com',
    'nik' => '12345678913',
    'pangkat_golongan_ruang' => 'pelaksana,3B',
    'bagian' => 'Teknologi Informasi',
    'jabatan' => 'Supervisor',
]);

DB::table('nilai-untuk-orang-lain')->insert([
    'nama' => 'pras',
    'email' => 'pras@local.com',
    'nik' => '12345678914',
    'pangkat_golongan_ruang' => 'pelaksana,3B',
    'bagian' => 'Teknologi Informasi',
    'jabatan' => 'Supervisor',
]);

DB::table('nilai-untuk-orang-lain')->insert([
    'nama' => 'elvis',
    'email' => 'elvis@local.com',
    'nik' => '12345678915',
    'pangkat_golongan_ruang' => 'Jendral,10A',
    'bagian' => 'Teknologi Informasi',
    'jabatan' => 'Direksi',
]);

DB::table('nilai-untuk-orang-lain')->insert([
    'nama' => 'handoko',
    'email' => 'handoko@local.com',
    'nik' => '12345678916',
    'pangkat_golongan_ruang' => 'Jendral,10B',
    'bagian' => 'Teknologi Informasi',
    'jabatan' => 'Direksi',
]);

DB::table('nilai-untuk-orang-lain')->insert([
    'nama' => 'suratno',
    'email' => 'suratno@local.com',
    'nik' => '12345678917',
    'pangkat_golongan_ruang' => 'Inspektur,8A',
    'bagian' => 'Teknologi Informasi',
    'jabatan' => 'Pimpinan',
]);

DB::table('nilai-untuk-orang-lain')->insert([
    'nama' => 'dery',
    'email' => 'dery@local.com',
    'nik' => '12345678918',
    'pangkat_golongan_ruang' => 'Inspektur,8c',
    'bagian' => 'Teknologi Informasi',
    'jabatan' => 'Pimpinan',
]);

DB::table('nilai-untuk-orang-lain')->insert([
    'nama' => 'bintang',
    'email' => 'bintang@local.com',
    'nik' => '12345678919',
    'pangkat_golongan_ruang' => 'pelaksana,3B',
    'bagian' => 'Teknologi Informasi',
    'jabatan' => 'Supervisor',
]);

DB::table('nilai-untuk-orang-lain')->insert([
    'nama' => 'dino',
    'email' => 'dino@local.com',
    'nik' => '12345678920',
    'pangkat_golongan_ruang' => 'pelaksana,3B',
    'bagian' => 'Teknologi Informasi',
    'jabatan' => 'Supervisor',
]);


    }
}
