<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages=['Hakkımızda','Kariyer'];
        $count=0;
        foreach($pages as $page){
            $count++;
            DB::table('pages')->insert([
                'title'=>$page,
                'slug'=>Str::slug($page,'-'),
                'image'=>'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.6uQGalPNK9AxB1fJdP5UxwHaE8%26pid%3DApi&f=1&ipt=b68fae31ea98f770d8b5a94891cf56fbf4d71c2c8d355c51fbdbf7436db90ea3&ipo=images',
                'content'=>'Id ornare arcu odio ut sem nulla pharetra diam sit. Velit sed ullamcorper morbi tincidunt. Aliquet eget sit amet tellus cras adipiscing. Feugiat sed lectus vestibulum mattis. Enim sit amet venenatis urna cursus eget nunc scelerisque. Euismod in pellentesque massa placerat. Quam viverra orci sagittis eu volutpat odio. Sed turpis tincidunt id aliquet. Tempor id eu nisl nunc mi ipsum faucibus vitae aliquet. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit.

                Tellus at urna condimentum mattis pellentesque id nibh. Non blandit massa enim nec dui nunc. Ac ut consequat semper viverra nam libero justo. Bibendum est ultricies integer quis. Blandit volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque. Sed viverra tellus in hac habitasse platea dictumst vestibulum rhoncus. Volutpat blandit aliquam etiam erat velit scelerisque in. Dignissim cras tincidunt lobortis feugiat. Sapien et ligula ullamcorper malesuada proin. A scelerisque purus semper eget duis at tellus. Urna neque viverra justo nec ultrices. Faucibus purus in massa tempor nec feugiat nisl pretium fusce.',
                'order'=>$count,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
