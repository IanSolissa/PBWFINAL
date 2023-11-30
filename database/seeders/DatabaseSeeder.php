<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Berita;
use App\Models\Artis;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'id'=>'1',
            'username'=>'Yosua Jelianvero Solissa',
            'email'=>'YosuaJelianveroSolissa@gmail.com',
            'password'=> bcrypt('YosuaSolissa'),
        ]);
        Artis::create([
            'id'=>'1',
            'nama_artis'=>'Yosua Jelianvero Solissa',
             ]);
      Berita::create([
            'id'=>'1',
            'judul_berita'=>'Coldplay',
            'id_artis'=>'1'
             ]);
    }
}
