<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{

    public function run()
    {
        for ($i = 0; $i < 20; $i++){
            DB::table('posts')->insert([
                'category_id' => rand(1, 10),
                'title' => 'Post '.$i,
                'slug' => 'post-'.$i,
                'description' => 'Description of Post '.$i,
                'text' => '<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum. <br>'.$i.'</p>',

            ]);
        }
    }
}
