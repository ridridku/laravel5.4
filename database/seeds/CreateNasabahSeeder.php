<?php

use Illuminate\Database\Seeder;

class CreateNasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //delete users table records
         DB::table('nasabahs')->delete();
         //insert some dummy records
         DB::table('nasabahs')->insert(array(
             array('nama_lengkap'=>'john','alamat'=>'john@clivern.com','rekening'=>'555'),
             array('nama_lengkap'=>'mark','alamat'=>'mark@clivern.com','rekening'=>'555'),
             array('nama_lengkap'=>'Karl','alamat'=>'karl@clivern.com','rekening'=>'555'),
          
          ));
    }
}
