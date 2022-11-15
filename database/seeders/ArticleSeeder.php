<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=1;$i<50;$i++){
            $title=$faker->sentence(4);
            DB::table('articles')->insert([
                'category_id'=>rand(1,7),
                'title'=>$title,
                'image'=>$faker->imageUrl(800,400,'cats',true,'kokbirasi'),
                'content'=>$faker->paragraph(6),
                'slug'=>Str::slug($title,'-'),
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
