<?php

use Illuminate\Database\Seeder;

class KontenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'gambar_logo'=> 'desktop',
            'judul'=>'Visual  Studio',
            'desc1'=>'Projek  klinik dengan ui sederhana',
            'desc2'=>'Ongoing' 
        ];

        DB::table('tb_arc')->insert($data);

        $data = [
            'gambar_logo'=> 'desktop',
            'judul'=>'Visual  Studio',
            'desc1'=>'Projek  penjualan dengan ui sederhana',
            'desc2'=>'Ongoing' 
        ];

        DB::table('tb_arc')->insert($data);

        $data = [
            'gambar_logo'=> 'android',
            'judul'=>'Android',
            'desc1'=>'Projek tempat wisata dengan ui sederhana',
            'desc2'=>'Ongoing' 
        ];

        DB::table('tb_arc')->insert($data);

        $data = [
            'gambar_logo'=> 'web',
            'judul'=>'Website',
            'desc1'=>'Projek  web dinamis menggunakan php dan database mysql dengan ui sederhana',
            'desc2'=>'Ongoing' 
        ];

        DB::table('tb_arc')->insert($data);
    }
}
