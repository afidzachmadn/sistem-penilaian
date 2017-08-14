<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('email', 100)->unique();
            $table->string('nik',100);
            $table->string('pangkat_golongan_ruang',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();
            $table->string('password', 500);
            $table->string('img_url', 100)->default('users.png');
            
        });
        
        Schema::create('nilai-diri-sendiri', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('email', 100)->unique();
            $table->string('nik',100);
            $table->string('pangkat_golongan_ruang',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();
            $table->float('nilai_kesetiaan')->nullable();
            $table->float('nilai_prestasi_kerja')->nullable();
            $table->float('nilai_tanggung_jawab')->nullable();
            $table->float('nilai_ketaatan')->nullable();
            $table->float('nilai_kejujuran')->nullable();
            $table->float('nilai_kerjasama')->nullable();
            $table->float('nilai_prakarsa')->nullable();
            $table->float('nilai_kepemimpinan')->nullable();
            $table->float('nilai_jumlah')->nullable();
            $table->float('nilai_rata_rata')->nullable();
            $table->string('sebutan')->nullable();

           
        }); 


        Schema::create('nilai-untuk-orang-lain', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100)->nullabe();
            $table->string('email', 100)->nullable();
            $table->string('nik',100);
            $table->string('pangkat_golongan_ruang',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();

            $table->float('nilai_kesetiaan_untuk_karyawan_1')->nullable();
            $table->float('nilai_prestasi_kerja_untuk_karyawan_1')->nullable();
            $table->float('nilai_tanggung_jawab_untuk_karyawan_1')->nullable();
            $table->float('nilai_ketaatan_untuk_karyawan_1')->nullable();
            $table->float('nilai_kejujuran_untuk_karyawan_1')->nullable();
            $table->float('nilai_kerjasama_untuk_karyawan_1')->nullable();
            $table->float('nilai_prakarsa_untuk_karyawan_1')->nullable();
            $table->float('nilai_kepemimpinan_untuk_karyawan_1')->nullable();
            $table->float('nilai_jumlah_untuk_karyawan_1')->nullable();
            $table->float('nilai_rata_rata_untuk_karyawan_1')->nullable();
            $table->string('sebutan_untuk_karyawan_1')->nullable();
            $table->string('nama_karyawan_1')->nullable();

            $table->float('nilai_kesetiaan_untuk_karyawan_2')->nullable();
            $table->float('nilai_prestasi_kerja_untuk_karyawan_2')->nullable();
            $table->float('nilai_tanggung_jawab_untuk_karyawan_2')->nullable();
            $table->float('nilai_ketaatan_untuk_karyawan_2')->nullable();
            $table->float('nilai_kejujuran_untuk_karyawan_2')->nullable();
            $table->float('nilai_kerjasama_untuk_karyawan_2')->nullable();
            $table->float('nilai_prakarsa_untuk_karyawan_2')->nullable();
            $table->float('nilai_kepemimpinan_untuk_karyawan_2')->nullable();
            $table->float('nilai_jumlah_untuk_karyawan_2')->nullable();
            $table->float('nilai_rata_rata_untuk_karyawan_2')->nullable();
            $table->string('sebutan_untuk_karyawan_2')->nullable();
            $table->string('nama_karyawan_2')->nullable();

            $table->float('nilai_kesetiaan_untuk_pimpinan')->nullable();
            $table->float('nilai_prestasi_kerja_untuk_pimpinan')->nullable();
            $table->float('nilai_tanggung_jawab_untuk_pimpinan')->nullable();
            $table->float('nilai_ketaatan_untuk_pimpinan')->nullable();
            $table->float('nilai_kejujuran_untuk_pimpinan')->nullable();
            $table->float('nilai_kerjasama_untuk_pimpinan')->nullable();
            $table->float('nilai_prakarsa_untuk_pimpinan')->nullable();
            $table->float('nilai_kepemimpinan_untuk_pimpinan')->nullable();
            $table->float('nilai_jumlah_untuk_pimpinan')->nullable();
            $table->float('nilai_rata_rata_untuk_pimpinan')->nullable();
            $table->string('sebutan_untuk_pimpinan')->nullable();
            $table->string('nama_pimpinan')->nullable();

            $table->string('komplain_untuk_karyawan_yang_dinilai')->nullable();
            $table->string('tanggapan_komplain_untuk_pimpinan')->nullable();
            $table->string('keputusan_untuk_direksi')->nullable();
            $table->string('nama_direksi')->nullable();




           
        }); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('users');
        Schema::drop('nilai-diri-sendiri');
        Schema::drop('nilai-untuk-orang-lain');
    }
}
