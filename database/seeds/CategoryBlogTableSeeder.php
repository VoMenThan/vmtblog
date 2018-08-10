<?php

use Illuminate\Database\Seeder;

class CategoryBlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoryblog')->insert([
        	['Name' => 'Xã Hội','NoName' => 'Xa-Hoi'],
        	['Name' => 'Thế Giới','NoName' => 'The-Gioi'],
        	['Name' => 'Kinh Doanh','NoName' => 'Kinh-Doanh'],
        	['Name' => 'Văn Hoá','NoName' => 'Van-Hoa'],
        	['Name' => 'Thể Thao','NoName' => 'The-Thao'],
        	['Name' => 'Pháp Luật','NoName' => 'Phap-Luat'],
        	['Name' => 'Đời Sống','NoName' => 'Doi-Song'],
        	['Name' => 'Khoa Học','NoName' => 'Khoa-Hoc'],
        	['Name' => 'Vi Tính','NoName' => 'Vi-Tinh']
    	]);
    }
}
