<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $NoiDung = "
		<p>Kể từ khi ra mắt vào tháng 03 năm ngoái, Nintendo Switch đã tẩu tán được gần 20 triệu máy. Tính đến giờ, hầu hết mọi người đều nghĩ rằng Nintendo Switch, Xbox One và Sony PS4 là ba đối thủ cạnh tranh trực tiếp trên thị trường.</p>
		<p>Tuy nhiên nếu nhìn sâu hơn vào những số liệu cũng như thói quen chơi game của những gia đình và người tiêu dùng sở hữu Switch, phát hiện được ra một điều đáng nể của Nintendo: Họ đang tự tạo ra cả một thị trường riêng, không cạnh tranh trực tiếp với console truyền thống, lại càng không đụng vào game mobile trên các thiết bị di động khác.</p>
		<p>Tháng 10/2017, chủ tịch Nintendo Tatsumi Kimishima chia sẻ một bản báo cáo sau khi cuộc họp công bố báo cáo tài chính kết thúc. Những dữ kiện ông chia sẻ trong bản báo cáo này khiến chúng ta nhận ra một điều rằng Nintendo Switch có một tính năng mà không máy console hiện tại nào cạnh tranh được, đó chính là cơ chế căn bản cho phép chơi kiểu hybrid, vừa ngồi nhà xuất hình lên TV thông qua dock sạc, vừa cho phép mang ra đường thưởng thức game như một tablet nho nhỏ.</p>
		<p>Hiện tại hơn 50% tổng số người sử dụng Switch đều chơi game bằng cả hai cách, theo dữ liệu gửi về cho Nintendo. Điều này có nghĩa concept máy chơi game của người Nhật Bản đã được cộng đồng chấp nhận và sử dụng hàng ngày.</p>
		<p>Chính sự độc đáo này khiến cho tiềm năng lâu dài của Switch trở nên vô cùng khả quan.</p>";

        DB::table('Blog')->insert([
        	[
        		'idCategoryBlog'=>'1',
        		'Title' => 'Hơn 1 năm qua Nintendo Switch đã tự tạo ra một thị trường mới toanh như thế nào?',
        		'NoTitle' => 'hon-1-nam-qua-nintendo-switch-da-tu-tao-ra-mot-thi-truong-moi-toanh-nhu-the-nao',
        		'Excerpts' => 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.',
        		'Content' => $NoiDung,
        		'Image' => 'hero-1.jpg',
        		'Highlights' => 1
        	],
        	[
        		'idCategoryBlog'=>'1',
        		'Title' => 'Lần đầu ĐH FPT cấp học bổng tiến sĩ ',
        		'NoTitle' => 'Lan-Dau-Dh-Fpt-Cap-Hoc-Bong-Tien-Si',
        		'Excerpts' => 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.',
        		'Content' => $NoiDung,
        		'Image' => 'hero-1.jpg',
        		'Highlights' => 1
        	],
        	[
        		'idCategoryBlog'=>'1',
        		'Title' => 'Bên trong ổ cắm điện cắm 4000W',
        		'NoTitle' => 'ben-trong-o-cam-dien-cam-4000w',
        		'Excerpts' => 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.',
        		'Content' => $NoiDung,
        		'Image' => 'hero-1.jpg',
        		'Highlights' => 1
        	],
        	[
        		'idCategoryBlog'=>'2',
        		'Title' => 'Phải chăng PS4 là món đồ chơi chỉ dành cho người nhiều tiền?',
        		'NoTitle' => 'phai-chang-ps4-la-mon-do-choi-chi-danh-cho-nguoi-nhieu-tien',
        		'Excerpts' => 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.',
        		'Content' => $NoiDung,
        		'Image' => 'hero-1.jpg',
        		'Highlights' => 1
        	],
        	[
        		'idCategoryBlog'=>'3',
        		'Title' => 'Tự làm UPS cho modem wifi, đèn led',
        		'NoTitle' => 'tu-lam-ups-cho-modem-wifi-den-led',
        		'Excerpts' => 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.',
        		'Content' => $NoiDung,
        		'Image' => 'hero-1.jpg',
        		'Highlights' => 1
        	]

    	]);
    }
}
