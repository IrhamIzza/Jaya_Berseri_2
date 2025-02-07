<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('article')->insert([
        [   'judul' => "Pupuk NAP",
            'konten' => 'Pupuk NPK adalah adalah pupuk majemuk yang mengandung tiga unsur sekaligus. Unsur ini merupakan gabungan dari pupuk tunggal, yaitu N (Nitrogen), P (Phospat), dan, K (Kalium). Gabungan dari ketiga unsur inilah yang membuat pupuk ini disebut NPK.
                        Selain ketiga unsur hara makro, pupuk NPK juga mengandung 2 unsur hara mikro. 
                        Unsur-unsur yang terdapat dalam pupuk NPK dapat membantu pertumbuhan vegetatif, pertumbuhan akar, dan pembungaan. Pupuk NPK menjadi pupuk favorit dari para petani. Pupuk NPK yang ada di pasaran, sudah dibuat sesuai dengan kadar dan kombinasi yang beraneka ragam.',
        ],
        [   'judul' => "Pupuk DAP",
            'konten' => 'Pupuk adalah salah satu sumber nutrient yang dibutuhkan tanaman, dan Indonesia merupakan negara agraris yang mempunyai lahan pertanian yang cukup luas. Namun hingga saat ini produsen pupuk di Indonesia masih kurang, sehingga Indonesia masih mengimpor beberapa jenis pupuk dari luar. Untuk itu perlu didirikan industri pupuk di Indonesia agar dapat membantu memenuhi kebutuhan pupuk setiap daerah di Indonesia khususnya Kalimantan. Salah satu jenis pupuk yang umum digunakan adalah diamonium fosfat atau pupuk DAP. Pupuk DAP adalah pupuk majemuk buatan dengan mengandung dua unsur hara Nitrogen (N) dan Fosfor (P2O5) dengan rumus kimia (NH4)2HPO4..',
        ],
            
        ]);
    }
}
