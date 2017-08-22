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
            $table->string('nik',100);
            $table->string('email', 100)->unique();
            $table->string('no_hp',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();
            $table->string('password', 500);
            $table->string('img_url', 100)->default('users.png');
            
        });
        
        Schema::create('nilai-dari-diri-sendiri-untuk-diri-sendiri', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama', 100);
            $table->string('nik',100);
            $table->string('email', 100)->nullable();
            $table->string('no_hp',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();
            

            $table->float('kompetensi_1')->nullable();
            $table->string('kompetensi_1_alasan')->nullable();

            $table->float('kompetensi_2')->nullable();
            $table->string('kompetensi_2_alasan')->nullable();

            $table->float('kompetensi_3')->nullable();
            $table->string('kompetensi_3_alasan')->nullable();

            $table->float('kompetensi_4')->nullable();
            $table->string('kompetensi_4_alasan')->nullable();

            $table->float('kompetensi_5')->nullable();
            $table->string('kompetensi_5_alasan')->nullable();

            $table->float('kompetensi_6')->nullable();
            $table->string('kompetensi_6_alasan')->nullable();

            $table->float('kompetensi_7')->nullable();
            $table->string('kompetensi_7_alasan')->nullable();

            $table->float('kompetensi_8')->nullable();
            $table->string('kompetensi_8_alasan')->nullable();

            $table->float('kompetensi_9')->nullable();
            $table->string('kompetensi_9_alasan')->nullable();

            $table->float('kompetensi_10')->nullable();
            $table->string('kompetensi_10_alasan')->nullable();

            $table->float('kompetensi_11')->nullable();
            $table->string('kompetensi_11_alasan')->nullable();
            
            $table->float('kompetensi_12')->nullable();
            $table->string('kompetensi_12_alasan')->nullable();

            $table->float('kompetensi_13')->nullable();
            $table->string('kompetensi_13_alasan')->nullable();

            $table->float('kompetensi_14')->nullable();
            $table->string('kompetensi_14_alasan')->nullable();

            $table->float('kompetensi_15')->nullable();
            $table->string('kompetensi_15_alasan')->nullable();

            $table->float('kompetensi_16')->nullable();
            $table->string('kompetensi_16_alasan')->nullable();

            $table->float('kompetensi_17')->nullable();
            $table->string('kompetensi_17_alasan')->nullable();

            $table->float('kompetensi_18')->nullable();
            $table->string('kompetensi_18_alasan')->nullable();

            $table->float('jumlah')->nullable();
            $table->float('rata_rata')->nullable();
            $table->string('sebutan',100)->nullable();

            $table->datetime('tanggal_penilaian')->nullable();

           
        });
        
        Schema::create('nilai-dari-karyawan-untuk-karyawan', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama', 100);
            $table->string('nik',100);
            $table->string('email', 100)->nullable();
            $table->string('no_hp',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();
            $table->float('kompetensi_1')->nullable();
            $table->string('kompetensi_1_alasan')->nullable();


            $table->float('kompetensi_2')->nullable();
            $table->string('kompetensi_2_alasan')->nullable();

            $table->float('kompetensi_3')->nullable();
            $table->string('kompetensi_3_alasan')->nullable();

            $table->float('kompetensi_4')->nullable();
            $table->string('kompetensi_4_alasan')->nullable();

            $table->float('kompetensi_5')->nullable();
            $table->string('kompetensi_5_alasan')->nullable();

            $table->float('kompetensi_6')->nullable();
            $table->string('kompetensi_6_alasan')->nullable();

            $table->float('kompetensi_7')->nullable();
            $table->string('kompetensi_7_alasan')->nullable();

            $table->float('kompetensi_8')->nullable();
            $table->string('kompetensi_8_alasan')->nullable();

            $table->float('kompetensi_9')->nullable();
            $table->string('kompetensi_9_alasan')->nullable();

            $table->float('kompetensi_10')->nullable();
            $table->string('kompetensi_10_alasan')->nullable();

            $table->float('kompetensi_11')->nullable();
            $table->string('kompetensi_11_alasan')->nullable();
            
            $table->float('kompetensi_12')->nullable();
            $table->string('kompetensi_12_alasan')->nullable();

            $table->float('kompetensi_13')->nullable();
            $table->string('kompetensi_13_alasan')->nullable();

            $table->float('kompetensi_14')->nullable();
            $table->string('kompetensi_14_alasan')->nullable();

            $table->float('kompetensi_15')->nullable();
            $table->string('kompetensi_15_alasan')->nullable();

            $table->float('kompetensi_16')->nullable();
            $table->string('kompetensi_16_alasan')->nullable();

            $table->float('kompetensi_17')->nullable();
            $table->string('kompetensi_17_alasan')->nullable();

            $table->float('kompetensi_18')->nullable();
            $table->string('kompetensi_18_alasan')->nullable();

            $table->float('jumlah')->nullable();
            $table->float('rata_rata')->nullable();
            $table->string('sebutan',100)->nullable();

            $table->string('nama_yang_dinilai',100)->nullable();
            $table->string('nik_yang_dinilai',100)->nullable();
            $table->string('bagian_yang_dinilai',100)->nullable();
            $table->string('jabatan_yang_dinilai',100)->nullable();

            $table->datetime('tanggal_penilaian')->nullable();

           
        }); 



        Schema::create('nilai-dari-karyawan-untuk-ketua-tim', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama', 100);
            $table->string('nik',100);
            $table->string('email', 100)->nullable();
            $table->string('no_hp',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();

            $table->float('kompetensi_4')->nullable();
            $table->string('kompetensi_4_alasan')->nullable();


            $table->float('kompetensi_6')->nullable();
            $table->string('kompetensi_6_alasan')->nullable();

            $table->float('kompetensi_7')->nullable();
            $table->string('kompetensi_7_alasan')->nullable();

            $table->float('kompetensi_8')->nullable();
            $table->string('kompetensi_8_alasan')->nullable();


            $table->float('kompetensi_10')->nullable();
            $table->string('kompetensi_10_alasan')->nullable();

            $table->float('kompetensi_11')->nullable();
            $table->string('kompetensi_11_alasan')->nullable();
            

            $table->float('kompetensi_13')->nullable();
            $table->string('kompetensi_13_alasan')->nullable();            

            $table->float('kompetensi_17')->nullable();
            $table->string('kompetensi_17_alasan')->nullable();


            $table->float('jumlah')->nullable();
            $table->float('rata_rata')->nullable();
            $table->string('sebutan',100)->nullable();
            
            $table->string('nama_yang_dinilai',100)->nullable();
            $table->string('nik_yang_dinilai',100)->nullable();
            $table->string('bagian_yang_dinilai',100)->nullable();
            $table->string('jabatan_yang_dinilai',100)->nullable();

            $table->datetime('tanggal_penilaian')->nullable();

           
        }); 





        Schema::create('nilai-dari-karyawan-untuk-direksi', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama', 100);
            $table->string('nik',100);
            $table->string('email', 100)->nullable();
            $table->string('no_hp',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();

            $table->float('kompetensi_4')->nullable();
            $table->string('kompetensi_4_alasan')->nullable();


            $table->float('kompetensi_6')->nullable();
            $table->string('kompetensi_6_alasan')->nullable();

            $table->float('kompetensi_7')->nullable();
            $table->string('kompetensi_7_alasan')->nullable();

            $table->float('kompetensi_8')->nullable();
            $table->string('kompetensi_8_alasan')->nullable();


            $table->float('kompetensi_10')->nullable();
            $table->string('kompetensi_10_alasan')->nullable();

            $table->float('kompetensi_11')->nullable();
            $table->string('kompetensi_11_alasan')->nullable();
            

            $table->float('kompetensi_13')->nullable();
            $table->string('kompetensi_13_alasan')->nullable();            

            $table->float('kompetensi_17')->nullable();
            $table->string('kompetensi_17_alasan')->nullable();


            $table->float('jumlah')->nullable();
            $table->float('rata_rata')->nullable();
            $table->string('sebutan',100)->nullable();
            
            $table->string('nama_yang_dinilai',100)->nullable();
            $table->string('nik_yang_dinilai',100)->nullable();
            $table->string('bagian_yang_dinilai',100)->nullable();
            $table->string('jabatan_yang_dinilai',100)->nullable();

            $table->datetime('tanggal_penilaian')->nullable();

           
        }); 





        Schema::create('nilai-dari-ketua-tim-untuk-ketua-tim', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama', 100);
            $table->string('nik',100);
            $table->string('email', 100)->nullable();
            $table->string('no_hp',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();

            $table->float('kompetensi_4')->nullable();
            $table->string('kompetensi_4_alasan')->nullable();


            $table->float('kompetensi_6')->nullable();
            $table->string('kompetensi_6_alasan')->nullable();

            $table->float('kompetensi_7')->nullable();
            $table->string('kompetensi_7_alasan')->nullable();

            $table->float('kompetensi_8')->nullable();
            $table->string('kompetensi_8_alasan')->nullable();


            $table->float('kompetensi_10')->nullable();
            $table->string('kompetensi_10_alasan')->nullable();

            $table->float('kompetensi_11')->nullable();
            $table->string('kompetensi_11_alasan')->nullable();
            

            $table->float('kompetensi_13')->nullable();
            $table->string('kompetensi_13_alasan')->nullable();            

            $table->float('kompetensi_17')->nullable();
            $table->string('kompetensi_17_alasan')->nullable();


            $table->float('jumlah')->nullable();
            $table->float('rata_rata')->nullable();
            $table->string('sebutan',100)->nullable();
            
            $table->string('nama_yang_dinilai',100)->nullable();
            $table->string('nik_yang_dinilai',100)->nullable();
            $table->string('bagian_yang_dinilai',100)->nullable();
            $table->string('jabatan_yang_dinilai',100)->nullable();

            $table->datetime('tanggal_penilaian')->nullable();

           
        }); 



        Schema::create('nilai-dari-ketua-tim-untuk-karyawan', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama', 100);
            $table->string('nik',100);
            $table->string('email', 100)->nullable();
            $table->string('no_hp',100);
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();

            $table->float('kompetensi_1')->nullable();
            $table->string('kompetensi_1_alasan')->nullable();

            $table->float('kompetensi_2')->nullable();
            $table->string('kompetensi_2_alasan')->nullable();

            $table->float('kompetensi_3')->nullable();
            $table->string('kompetensi_3_alasan')->nullable();

            $table->float('kompetensi_4')->nullable();
            $table->string('kompetensi_4_alasan')->nullable();

            $table->float('kompetensi_5')->nullable();
            $table->string('kompetensi_5_alasan')->nullable();

            $table->float('kompetensi_6')->nullable();
            $table->string('kompetensi_6_alasan')->nullable();

            $table->float('kompetensi_7')->nullable();
            $table->string('kompetensi_7_alasan')->nullable();

            $table->float('kompetensi_8')->nullable();
            $table->string('kompetensi_8_alasan')->nullable();

            $table->float('kompetensi_9')->nullable();
            $table->string('kompetensi_9_alasan')->nullable();

            $table->float('kompetensi_10')->nullable();
            $table->string('kompetensi_10_alasan')->nullable();

            $table->float('kompetensi_11')->nullable();
            $table->string('kompetensi_11_alasan')->nullable();

            $table->float('kompetensi_12')->nullable();
            $table->string('kompetensi_12_alasan')->nullable();

            $table->float('kompetensi_13')->nullable();
            $table->string('kompetensi_13_alasan')->nullable();

            $table->float('kompetensi_14')->nullable();
            $table->string('kompetensi_14_alasan')->nullable();

            $table->float('kompetensi_15')->nullable();
            $table->string('kompetensi_15_alasan')->nullable();

            $table->float('kompetensi_16')->nullable();
            $table->string('kompetensi_16_alasan')->nullable();

            $table->float('kompetensi_17')->nullable();
            $table->string('kompetensi_17_alasan')->nullable();

            $table->float('kompetensi_18')->nullable();
            $table->string('kompetensi_18_alasan')->nullable();

            $table->float('jumlah')->nullable();
            $table->float('rata_rata')->nullable();
            $table->string('sebutan',100)->nullable();
            
            $table->string('nama_yang_dinilai',100)->nullable();
            $table->string('nik_yang_dinilai',100)->nullable();
            $table->string('bagian_yang_dinilai',100)->nullable();
            $table->string('jabatan_yang_dinilai',100)->nullable();

            $table->datetime('tanggal_penilaian')->nullable();
            
            

           
        }); 




        Schema::create('nilai-dari-ketua-tim-untuk-direksi', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama', 100);
            $table->string('nik',100);
            $table->string('email', 100)->nullable();
            $table->string('no_hp',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();

            $table->float('kompetensi_4')->nullable();
            $table->string('kompetensi_4_alasan')->nullable();


            $table->float('kompetensi_6')->nullable();
            $table->string('kompetensi_6_alasan')->nullable();

            $table->float('kompetensi_7')->nullable();
            $table->string('kompetensi_7_alasan')->nullable();

            $table->float('kompetensi_8')->nullable();
            $table->string('kompetensi_8_alasan')->nullable();


            $table->float('kompetensi_10')->nullable();
            $table->string('kompetensi_10_alasan')->nullable();

            $table->float('kompetensi_11')->nullable();
            $table->string('kompetensi_11_alasan')->nullable();
            

            $table->float('kompetensi_13')->nullable();
            $table->string('kompetensi_13_alasan')->nullable();            

            $table->float('kompetensi_17')->nullable();
            $table->string('kompetensi_17_alasan')->nullable();


            $table->float('jumlah')->nullable();
            $table->float('rata_rata')->nullable();
            $table->string('sebutan',100)->nullable();
            
            $table->string('nama_yang_dinilai',100)->nullable();
            $table->string('nik_yang_dinilai',100)->nullable();
            $table->string('bagian_yang_dinilai',100)->nullable();
            $table->string('jabatan_yang_dinilai',100)->nullable();

            $table->datetime('tanggal_penilaian')->nullable();

           
        }); 




        Schema::create('nilai-dari-direksi-untuk-direksi', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama', 100);
            $table->string('nik',100);
            $table->string('email', 100)->nullable();
            $table->string('no_hp',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();

            $table->float('kompetensi_4')->nullable();
            $table->string('kompetensi_4_alasan')->nullable();


            $table->float('kompetensi_6')->nullable();
            $table->string('kompetensi_6_alasan')->nullable();

            $table->float('kompetensi_7')->nullable();
            $table->string('kompetensi_7_alasan')->nullable();

            $table->float('kompetensi_8')->nullable();
            $table->string('kompetensi_8_alasan')->nullable();


            $table->float('kompetensi_10')->nullable();
            $table->string('kompetensi_10_alasan')->nullable();

            $table->float('kompetensi_11')->nullable();
            $table->string('kompetensi_11_alasan')->nullable();
            

            $table->float('kompetensi_13')->nullable();
            $table->string('kompetensi_13_alasan')->nullable();            

            $table->float('kompetensi_17')->nullable();
            $table->string('kompetensi_17_alasan')->nullable();


            $table->float('jumlah')->nullable();
            $table->float('rata_rata')->nullable();
            $table->string('sebutan',100)->nullable();
            
            $table->string('nama_yang_dinilai',100)->nullable();
            $table->string('nik_yang_dinilai',100)->nullable();
            $table->string('bagian_yang_dinilai',100)->nullable();
            $table->string('jabatan_yang_dinilai',100)->nullable();

            $table->datetime('tanggal_penilaian')->nullable();

           
        }); 


        Schema::create('nilai-dari-direksi-untuk-ketua-tim', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama', 100);
            $table->string('nik',100);
            $table->string('email', 100)->nullable();
            $table->string('no_hp',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();

            $table->float('kompetensi_1')->nullable();
            $table->string('kompetensi_1_alasan')->nullable();

            $table->float('kompetensi_2')->nullable();
            $table->string('kompetensi_2_alasan')->nullable();

            $table->float('kompetensi_3')->nullable();
            $table->string('kompetensi_3_alasan')->nullable();

            $table->float('kompetensi_4')->nullable();
            $table->string('kompetensi_4_alasan')->nullable();

            $table->float('kompetensi_5')->nullable();
            $table->string('kompetensi_5_alasan')->nullable();

            $table->float('kompetensi_6')->nullable();
            $table->string('kompetensi_6_alasan')->nullable();

            $table->float('kompetensi_7')->nullable();
            $table->string('kompetensi_7_alasan')->nullable();

            $table->float('kompetensi_8')->nullable();
            $table->string('kompetensi_8_alasan')->nullable();

            $table->float('kompetensi_9')->nullable();
            $table->string('kompetensi_9_alasan')->nullable();

            $table->float('kompetensi_10')->nullable();
            $table->string('kompetensi_10_alasan')->nullable();

            $table->float('kompetensi_11')->nullable();
            $table->string('kompetensi_11_alasan')->nullable();

            $table->float('kompetensi_12')->nullable();
            $table->string('kompetensi_12_alasan')->nullable();

            $table->float('kompetensi_13')->nullable();
            $table->string('kompetensi_13_alasan')->nullable();

            $table->float('kompetensi_14')->nullable();
            $table->string('kompetensi_14_alasan')->nullable();

            $table->float('kompetensi_15')->nullable();
            $table->string('kompetensi_15_alasan')->nullable();

            $table->float('kompetensi_16')->nullable();
            $table->string('kompetensi_16_alasan')->nullable();

            $table->float('kompetensi_17')->nullable();
            $table->string('kompetensi_17_alasan')->nullable();

            $table->float('kompetensi_18')->nullable();
            $table->string('kompetensi_18_alasan')->nullable();

            $table->float('jumlah')->nullable();
            $table->float('rata_rata')->nullable();
            $table->string('sebutan',100)->nullable();
           
            $table->string('nama_yang_dinilai',100)->nullable();
            $table->string('nik_yang_dinilai',100)->nullable();
            $table->string('bagian_yang_dinilai',100)->nullable();
            $table->string('jabatan_yang_dinilai',100)->nullable();

            $table->datetime('tanggal_penilaian')->nullable();
            
            

           
        }); 







        Schema::create('nilai-dari-direksi-untuk-karyawan', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama', 100);
            $table->string('nik',100);
            $table->string('email', 100)->nullable();
            $table->string('no_hp',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();

            $table->float('kompetensi_1')->nullable();
            $table->string('kompetensi_1_alasan')->nullable();

            $table->float('kompetensi_2')->nullable();
            $table->string('kompetensi_2_alasan')->nullable();

            $table->float('kompetensi_3')->nullable();
            $table->string('kompetensi_3_alasan')->nullable();

            $table->float('kompetensi_4')->nullable();
            $table->string('kompetensi_4_alasan')->nullable();

            $table->float('kompetensi_5')->nullable();
            $table->string('kompetensi_5_alasan')->nullable();

            $table->float('kompetensi_6')->nullable();
            $table->string('kompetensi_6_alasan')->nullable();

            $table->float('kompetensi_7')->nullable();
            $table->string('kompetensi_7_alasan')->nullable();

            $table->float('kompetensi_8')->nullable();
            $table->string('kompetensi_8_alasan')->nullable();

            $table->float('kompetensi_9')->nullable();
            $table->string('kompetensi_9_alasan')->nullable();

            $table->float('kompetensi_10')->nullable();
            $table->string('kompetensi_10_alasan')->nullable();

            $table->float('kompetensi_11')->nullable();
            $table->string('kompetensi_11_alasan')->nullable();

            $table->float('kompetensi_12')->nullable();
            $table->string('kompetensi_12_alasan')->nullable();

            $table->float('kompetensi_13')->nullable();
            $table->string('kompetensi_13_alasan')->nullable();

            $table->float('kompetensi_14')->nullable();
            $table->string('kompetensi_14_alasan')->nullable();

            $table->float('kompetensi_15')->nullable();
            $table->string('kompetensi_15_alasan')->nullable();

            $table->float('kompetensi_16')->nullable();
            $table->string('kompetensi_16_alasan')->nullable();

            $table->float('kompetensi_17')->nullable();
            $table->string('kompetensi_17_alasan')->nullable();

            $table->float('kompetensi_18')->nullable();
            $table->string('kompetensi_18_alasan')->nullable();

            $table->float('jumlah')->nullable();
            $table->float('rata_rata')->nullable();
            $table->string('sebutan',100)->nullable();
            
            $table->string('nama_yang_dinilai',100)->nullable();
            $table->string('nik_yang_dinilai',100)->nullable();
            $table->string('bagian_yang_dinilai',100)->nullable();
            $table->string('jabatan_yang_dinilai',100)->nullable();

            $table->datetime('tanggal_penilaian')->nullable();
            
            

           
        }); 


        Schema::create('komplain', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama', 100);
            $table->string('nik',100);
            $table->string('email', 100)->unique();
            $table->string('no_hp',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();

            $table->string('isi_komplain',10000)->nullable();

            $table->string('tujuan_ketua_tim',100)->nullable();

            $table->string('Tujuan_direksi',100)->nullable();

            
            

           
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
        Schema::drop('nilai-dari-karyawan-untuk-karyawan');
        Schema::drop('nilai-dari-ketua-tim-untuk-karyawan');
        Schema::drop('nilai-dari-direksi-untuk-ketua-tim');
        Schema::drop('nilai-dari-direksi-untuk-karyawan');
    }
}
