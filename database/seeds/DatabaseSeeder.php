<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $NoiDung = array(
            'Bài viết rất hay',
            'Tôi rất thích bài viết này',
            'Bài viết này tạm ổn',
            'Hay quá trời',
            'Tôi sẽ học thèo bài viết này',
            'Bài viết này chưa được hay lắm',
            'Ý kiến của tôi khác so với bài này',
            'Bài viết này được',
            'Không thích bài viết này',
            'Tôi chưa có ý kiến gì'
        );

        for($i=1;$i<=20;$i++)
        {
            DB::table('comment')->insert(
                [
                    'idUser' => rand(1,2),
                    'idBlog' => rand(1,10),
                    'Comment' => $NoiDung[rand(0,9)],
                    'created_at' => new DateTime()
                ]
            );
        }

    	
    }
}
