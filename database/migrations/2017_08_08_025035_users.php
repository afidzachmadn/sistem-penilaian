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
            $table->string('pangkat,golonganruang',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();
            $table->string('password', 500);
            $table->string('img_url', 100)->default('users.png');
            
        });
        
        Schema::create('nilai-diri-sendiri', function (Blueprint $table) {
            $table->integer('id')->nullable();
            $table->string('nama', 100);
            $table->string('email', 100)->unique();
            $table->string('nik',100);
            $table->string('pangkat,golonganruang',100)->nullable();
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
           
        }); 


        Schema::create('nilai-dari-orang-lain', function (Blueprint $table) {
            $table->integer('id')->nullable();
            $table->string('nama', 100);
            $table->string('email', 100)->unique();
            $table->string('nik',100);
            $table->string('pangkat,golonganruang',100)->nullable();
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
           
        }); 


        Schema::create('komplain-nilai', function (Blueprint $table) {
            $table->integer('id')->nullable();
            $table->string('nama', 100);
            $table->string('email', 100)->unique();
            $table->string('nik',100);
            $table->string('pangkat,golonganruang',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();
            $table->string('isi-komplain',1000)->nullable();
            $table->string('tanggapan-dari-pejabat-penilai',1000)->nullable();
            $table->string('keputusan-dari-atasan-pejabat-penilai',1000)->nullable();
            
           
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
        Schema::drop('nilai-dari-orang-lain');
    }
}
