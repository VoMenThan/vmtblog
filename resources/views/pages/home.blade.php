@extends('layouts.index')
@section('title')
Trang Chủ
@endsection
@section('content')
<!--hero section start-->
<div id="home">
    <section class="hero full-height">
        <div class="hero-overlay"></div>
        <div class="hero-content dark-txt-- light-txt text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" data-wow-duration="2s" data-wow-delay="1s">
                        <h5 class="banner-txt-position-">Chào bạn, tôi là </h5>

                        <h1 class="text-uppercase">Võ Mến Thân </h1>

                        <p class="hero-subtitle">
                            Tôi là một <span class="typist-text typist-blink"
                                         data-typist="Web Developer,Người Yêu Sáng Tạo,Người Ham Học Hỏi">Blogger</span>
                        </p>

                        <div class="social-link">
                            <a href="https://www.facebook.com/vomenthan" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="go-down wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">
            <a href="#about" class="mouse"></a>
        </div>
    </section>
</div>
<!--hero section end-->

<!--about section start-->
<div class="section-wrapper" id="about">
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 ">
                    <div class="section-title text-center m-bot-0 p-top-0 p-bot-0 section-space wow- fadeInUp">
                        <h3 class="m-top-0">Who am i?</h3>

                        <h1 class="title m-bot-50">Đôi nét về bản thân.</h1>
                    </div>

                    <div class="media about-info m-bot-100">
                        <div class="media-left about-thumb media-middle">
                            <a href="#">
                                <img alt="" class="media-object" src="img/avatar-men-than.jpg">
                            </a>
                        </div>
                        <div class="media-body">
                            <p>
                                Chào bạn, tên đầy đủ của tôi là <b>Võ Mến Thân</b>. 
                                Tôi sinh ra ở Bình Định và lớn lên ở Bình Phước. 
                                Sau thời gian cày cuốc ở phổ thông và sau đó lên đại học thì giờ tôi đã là một lập trình viên chuyên nghiệp (một anh hùng bàn phím thực thụ) ^^!
                                Hiện tại tôi đang sinh sống và làm việc tại Tp.HCM. 
                                Tôi rất thích không khí nơi này vì nó là một thành phố trẻ năng đông, đường xá nhộn nhịp và là thành phố không bao giờ ngủ.
                                Sở thích của tôi là lập trình những thứ mình tưởng tượng ra. 
                                Tính tình thân thiện, cởi mở, ham học hỏi và thẳng tính.
                                Ước mơ trở thành 1 lập trình viên giỏi và mở được công ty riêng về công nghệ.
                                Khát khao cống hiến sức lực và trí tuệ cho cộng đồng và xã hội. <br>
                                Châm ngôn sống của tôi:  
                                Hôm nay bạn chịu làm những thứ không ai làm, ngày mai bạn sẽ có những thứ không ai có.<br> 
                                Cách bạn làm một việc là cách bạn làm mọi việc.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h4 class="text-uppercase font-bold">Cao danh quý tánh của các hạ?</h4>

                            <p>Tại hạ đi không đổi tên, ngồi không đổi họ, tại hạ là...</p>

                            <ul class="info-list list-unstyled">
                                <li>
                                    <label>Họ tên:</label>
                                    <span>Võ Mến Thân</span>
                                </li>
                                <li>
                                    <label>Sinh nhật:</label>
                                    <span>23/01/1994</span>
                                </li>
                                <li>
                                    <label>Nghề nghiệp:</label>
                                    <span>Web Developer</span>
                                </li>
                                <li>
                                    <label>Trang web:</label>
                                    <span>www.vomenthan.com</span>
                                </li>
                                <li>
                                    <label>Skype:</label>
                                    <span>live:mrthancn12</span>
                                </li>
                                <li>
                                    <label>Email:</label>
                                    <span>mrthancn12@gmail.com</span>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4 class="text-uppercase font-bold">Tuyệt kỹ nội công</h4>

                            <p>
                                Trải qua 4 năm khổ luyện ở trường ĐH GTVT TP.HCM và mấy năm lăn lộn gian hồ làm việc cực lực tại 2 công ty. 
                                Nội công của tại hạ cũng có phần tiến triển. 
                                Nay đem tuyệt học của tại hạ dẹp an trừ nguy, tạo phước cho bá tánh! 
                            </p>

                            <!--progress bar start-->

                            <div class="progress mild-progress-style">
                                <div class="progress-bar" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 89%">
                                    <div class="skills-info">HTML & CSS <span>89%</span></div>
                                </div>
                            </div>

                            <div class="progress mild-progress-style">
                                <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 77%">
                                    <div class="skills-info">Javascript & Jquery <span>77%</span></div>
                                </div>
                            </div> 

                            <div class="progress mild-progress-style">
                                <div class="progress-bar" role="progressbar" aria-valuenow="69" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 69%">
                                    <div class="skills-info">Laravel <span>69%</span></div>
                                </div>
                            </div> 

                            <div class="progress mild-progress-style">
                                <div class="progress-bar" role="progressbar" aria-valuenow="83" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 83%">
                                    <div class="skills-info">WordPress <span>83%</span></div>
                                </div>
                            </div>

                            <div class="progress mild-progress-style">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 80%">
                                    <div class="skills-info">Bootstrap/Materialize <span>80%</span></div>
                                </div>
                            </div>

                            <div class="progress mild-progress-style">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 60%">
                                    <div class="skills-info">Photoshop/Inllustrator/XD <span>60%</span></div>
                                </div>
                            </div>

                            <div class="progress mild-progress-style">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 65%">
                                    <div class="skills-info">SQL/MySQL/PostgreSQL <span>65%</span></div>
                                </div>
                            </div>

                            <div class="progress mild-progress-style">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 50%">
                                    <div class="skills-info">UI/UX <span>50%</span></div>
                                </div>
                            </div>

                            
                            <!--progress bar end-->

                        </div>
                    </div>
                    <div class="text-center m-top-50">
                        <a class="btn line-btn-dark btn-icon btn-radius" href="#" title=""><i
                                class="fa fa-download"></i> Tải CV</a>
                    </div>
                </div>


            </div>


        </div>
    </section>
</div>
<!--about section end-->

<!--parallax section start-->
<section class="section-space parallax parallax-promo">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 light-txt text-right wow fadeInLeft">
                <h2 class="m-top-0">Bạn muốn làm việc với tôi. Bạn nhấn vào đây.</h2>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInRight">
                <a href="#" class="btn line-btn-light btn-radius">Nhấn đây nè</a>
            </div>

        </div>
    </div>
</section>
<!--parallax section end-->

<!--experience section start-->
<div class="section-wrapper" id="experience">
    <section class="section-space section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h1 class="title text-uppercase"> Kinh nghiệm làm việc</h1>

                        <div class="sub-title">Pellentesque eu quam sem, ac malesuada leo sem quam pellente.</div>
                    </div>
                    <section class="timeliner timeline-container">
                        <div class="timeline-block">
                            <div class="timeline-icon">
                                <i class="fa fa-briefcase"></i>
                            </div>

                            <div class="timeline-content">
                                <h2>Ban Vien Ltd.</h2>
                                <span class="text-muted">PHP Developer</span>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                    provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?
                                    Iste voluptatibus minus veritatis qui ut.</p>
                                <span class="cd-date">Tháng 7, 2016 - Đến nay</span>
                            </div>
                        </div>

                        <div class="timeline-block">
                            <div class="timeline-icon">
                                <i class="fa fa-briefcase"></i>
                            </div>

                            <div class="timeline-content">
                                <h2>Ban Vien Ltd.</h2>
                                <span class="text-muted">Front-end Developer</span>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                    provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?
                                    Iste voluptatibus minus veritatis qui ut.</p>
                                <span class="cd-date">Tháng 12, 2016 - Tháng 6, 2017</span>
                            </div>
                        </div>

                        <div class="timeline-block clearfix">
                            <div class="timeline-icon">
                                <i class="fa fa-times"></i>
                            </div>

                            <div class="timeline-content">
                                <h2>S.E.N PLATFORM</h2>
                                <span class="text-muted">Tester</span>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                    provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis
                                    unde?</p>
                                <span class="cd-date">Tháng 6, 2016 -  tháng 11, 2016 </span>
                            </div>
                        </div>

                        <div class="timeline-block clearfix">
                            <div class="timeline-icon ">
                                <i class="fa fa-times"></i>
                            </div>

                            <div class="timeline-content">
                                <h2>S.E.N PLATFORM</h2>
                                <span class="text-muted">Data entry</span>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati,
                                    quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda
                                    delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis.
                                    Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident
                                    pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi
                                    repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis
                                    fugiat aliquam sunt similique aut adipisci.</p>
                                <span class="cd-date">Tháng 1, 2016 -  tháng 5, 2016</span>
                            </div>
                        </div>

                        <div class="timeline-block clearfix">
                            <div class="timeline-icon">
                                <i class="fa fa-times"></i>
                            </div>

                            <div class="timeline-content">
                                <h2>DB Research</h2>
                                <span class="text-muted">Data Mining</span>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                    provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?
                                    Iste voluptatibus minus veritatis qui ut.</p>
                                <span class="cd-date">Tháng 9, 2015 - Tháng 12, 2016</span>
                            </div>
                        </div>

                    </section>

                    <!--education start-->
                    <div class="section-wrapper" id="education">
                        <div class="section-title m-top-100 text-center">
                            <h1 class="title text-uppercase"> Trình độ học vấn</h1>

                            <div class="sub-title">Pellentesque eu quam sem, ac malesuada leo sem quam pellente.</div>
                        </div>
                        <section class="timeliner timeline-container">
                            <div class="timeline-block">
                                <div class="timeline-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>

                                <div class="timeline-content">
                                    <h2>Hệ thống thông tin - Khoa CNTT</h2>
                                    <span class="text-muted">ĐH Giao Thông Vận Tải TP.HCM</span>

                                    <p>Dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad
                                        debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                    <span class="cd-date">2012 - 2016 </span>
                                </div>
                            </div>

                            <div class="timeline-block clearfix">
                                <div class="timeline-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>

                                <div class="timeline-content">
                                    <h2>Lớp A1</h2>
                                    <span class="text-muted">Trường THPT Bù Đăng</span>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                        provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis
                                        unde?</p>
                                    <span class="cd-date">2009 - 2012 </span>
                                </div>
                            </div>

                            <div class="timeline-block clearfix">
                                <div class="timeline-icon ">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>

                                <div class="timeline-content">
                                    <h2>Lớp E </h2>
                                    <span class="text-muted">Trường THCS Minh Hưng</span>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                        provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis
                                        unde?</p>
                                    <span class="cd-date">2006 - 2009 </span>
                                </div>
                            </div>

                            <div class="timeline-block clearfix">
                                <div class="timeline-icon ">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>

                                <div class="timeline-content">
                                    <h2>Lớp A4 </h2>
                                    <span class="text-muted">Trường Tiểu Học Hưng Tân</span>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum
                                        provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis
                                        unde?</p>
                                    <span class="cd-date">2000 - 2006 </span>
                                </div>
                            </div>

                        </section>
                    </div>
                    <!--education end-->

                </div>
            </div>
        </div>
    </section>
</div>
<!-- experience section end-->

<!--fun factor section start-->
<section class="section-space parallax parallax-funfactor light-txt">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6">
                <div class="fun-box text-center">
                    <i class="icon-lightbulb"></i>

                    <div class="value" data-target="310">0</div>
                    <div class="title">Dự án đã làm</div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="fun-box text-center">
                    <i class="icon-trophy"></i>

                    <div class="value" data-target="15">0</div>
                    <div class="title">Giải thưởng</div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="fun-box text-center">
                    <i class="icon-wine"></i>

                    <div class="value" data-target="39018">0</div>
                    <div class="title">facebook like</div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="fun-box text-center">
                    <i class=" icon-beaker"></i>

                    <div class="value" data-target="32">0</div>
                    <div class="title">Dự án hiện tại</div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--fun factor section end-->

<!--portfolio section start-->
<div class="section-wrapper" id="portfolio">
    <section class="section-space">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="title"> Danh mục đầu tư</h1>

                <div class="sub-title">Pellentesque eu quam sem, ac malesuada leo sem quam pellente.</div>
            </div>

            <div class="text-center clearfix">
                <nav class="portfolio-filter">
                    <ul>
                        <li><a class="active" href="#" data-filter="*">Tổng hợp</a></li>
                        <li><a href="#" data-filter=".cat2">PHP Developer</a></li>
                        <li><a href="#" data-filter=".cat1">Front-end</a></li>
                        <li><a href="#" data-filter=".cat3">Tester</a></li>
                    </ul>
                </nav>
            </div>
            <div class="portfolio portfolio-gallery ">

                <div class="portfolio-grid item-w1 item-h2 cat3">
                    <div class=" portfolio-item zoom-img">
                        <a href="#" title="">
                            <img src="img/portfolio_03.jpg" alt="">
                        </a>

                        <div class="portfolio-hover">
                            <div class="title">Bootstrap 3+</div>
                            <span class="category">Graphic, print</span>

                            <div class="p-btn">
                                <a href="img/portfolio_03.jpg" class="popup-gallery"
                                   title="Bootstrap 3+"><i class="fa fa-search"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="portfolio-grid item-w1 item-h2 cat2">
                    <div class=" portfolio-item zoom-img">
                        <a href="#" title="">
                            <img src="img/portfolio_02.jpg" alt="">
                        </a>

                        <div class="portfolio-hover">
                            <div class="title">Clean Code</div>
                            <span class="category">Print, Graphic</span>

                            <div class="p-btn">
                                <a href="img/portfolio_02.jpg" class="popup-gallery"
                                   title="Clean Code"><i class="fa fa-search"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="portfolio-grid item-w2 item-h2 cat1">
                    <div class=" portfolio-item zoom-img">
                        <a href="#" title="">
                            <img src="img/portfolio_04.jpg" alt="">
                        </a>

                        <div class="portfolio-hover">
                            <div class="title">Built in SCSS</div>
                            <span class="category">Print, Media</span>

                            <div class="p-btn">
                                <a href="img/portfolio_04.jpg" class="popup-gallery"
                                   title="Built in SCSS"><i class="fa fa-search"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="portfolio-grid item-w1 item-h2 cat2">
                    <div class=" portfolio-item zoom-img">
                        <a href="#" title="">
                            <img src="img/portfolio_05.jpg" alt="">
                        </a>

                        <div class="portfolio-hover">
                            <div class="title">Gulp Task</div>
                            <span class="category">Design, Media</span>

                            <div class="p-btn">
                                <a href="img/portfolio_05.jpg" class="popup-gallery" title="Gulp Task"><i
                                        class="fa fa-search"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="portfolio-grid item-w1 item-h2 cat3">
                    <div class=" portfolio-item zoom-img">
                        <a href="#" title="">
                            <img src="img/portfolio_06.jpg" alt="">
                        </a>

                        <div class="portfolio-hover">
                            <div class="title">Full Responsive</div>
                            <span class="category">Web, Graphic</span>

                            <div class="p-btn">
                                <a href="img/portfolio_06.jpg" class="popup-gallery"
                                   title="Full Responsive"><i class="fa fa-search"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="portfolio-grid item-w1 item-h2 cat1">
                    <div class=" portfolio-item zoom-img">
                        <a href="#" title="">
                            <img src="img/portfolio_07.jpg" alt="">
                        </a>

                        <div class="portfolio-hover">
                            <div class="title">Easy to Customise</div>
                            <span class="category">Web, Print</span>

                            <div class="p-btn">
                                <a href="img/portfolio_07.jpg" class="popup-gallery"
                                   title="Easy to Customise"><i class="fa fa-search"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="portfolio-grid item-w1 item-h2 cat2">
                    <div class=" portfolio-item zoom-img">
                        <a href="#" title="">
                            <img src="img/portfolio_08.jpg" alt="">
                        </a>

                        <div class="portfolio-hover">
                            <div class="title">Free Update</div>
                            <span class="category">Web, Media</span>

                            <div class="p-btn">
                                <a href="img/portfolio_08.jpg" class="popup-gallery"
                                   title="Free Update"><i class="fa fa-search"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="portfolio-grid item-w1 item-h2 cat3">
                    <div class=" portfolio-item zoom-img">
                        <a href="#" title="">
                            <img src="img/portfolio_10.jpg" alt="">
                        </a>

                        <div class="portfolio-hover">
                            <div class="title">Web Development</div>
                            <span class="category">Web, Design</span>

                            <div class="p-btn">
                                <a href="img/portfolio_10.jpg" class="popup-gallery"
                                   title="Web Development"><i class="fa fa-search"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="portfolio-grid item-w1 item-h2 cat1">
                    <div class=" portfolio-item zoom-img">
                        <a href="#" title="">
                            <img src="img/portfolio_11.jpg" alt="">
                        </a>

                        <div class="portfolio-hover">
                            <div class="title">Print Media</div>
                            <span class="category">Print, Media</span>

                            <div class="p-btn">
                                <a href="img/portfolio_11.jpg" class="popup-gallery"
                                   title="Print Media"><i class="fa fa-search"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--portfolio section end-->

<!--blog section start-->
<div class="section-wrapper" id="blog">
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h1 class="title"> Blog Post</h1>

                        <div class="sub-title">Pellentesque eu quam sem, ac malesuada leo sem quam pellente.</div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="blog-post">
                        <div class="thumb zoom-img">
                            <a href="blog-single.html">
                                <img src="img/portfolio_01.jpg" alt=""/>

                                <div class="date">{{$highlights[0]->created_at->format('d/m/Y')}}</div>
                            </a>

                        </div>
                        <div class="post-meta">

                            <h4><a href="blog-single.html">{{$highlights[0]->Title}}</a></h4>

                            <div class="category">
                                <span><a href="#">Design</a></span>
                                <span><a href="#">Styles</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="blog-post">
                        <div class="thumb zoom-img">
                            <a href="blog-single.html">
                                <img src="img/portfolio_06.jpg" alt=""/>

                                <div class="date">{{$highlights[1]->created_at->format('d/m/Y')}}</div>
                            </a>
                        </div>
                        <div class="post-meta">
                            <h4><a href="blog-single.html">{{$highlights[1]->Title}}</a></h4>

                            <div class="category">
                                <span><a href="#">Corporate</a></span>
                                <span><a href="#">Styles</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">

                    <div class="blog-post">
                        <div class="thumb zoom-img">
                            <a href="blog-single.html">
                                <img src="img/portfolio_03.jpg" alt=""/>

                                <div class="date">{{$highlights[2]->created_at->format('d/m/Y')}}</div>
                            </a>
                        </div>
                        <div class="post-meta">
                            <h4><a href="blog-single.html">{{$highlights[2]->Title}}</a></h4>

                            <div class="category">
                                <span><a href="#">Business</a></span>
                                <span><a href="#">Styles</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-quote-box">
                        <p>Design is not just what it looks like and feels like. Design is how it works.</p>
                        <span>- Steve Jobs -</span>
                    </div>
                    <div class="blog-post">
                        <div class="thumb zoom-img">
                            <a href="blog-single.html">
                                <img src="img/portfolio_06.jpg" alt=""/>

                                <div class="date">{{$highlights[3]->created_at->format('d/m/Y')}}</div>
                            </a>
                        </div>
                        <div class="post-meta">
                            <h4><a href="blog-single.html">{{$highlights[3]->Title}}</a></h4>

                            <div class="category">
                                <span><a href="#">Corporate</a></span>
                                <span><a href="#">Styles</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="blog-post">
                        <div class="thumb zoom-img">
                            <a href="blog-single.html">
                                <img src="img/portfolio_04.jpg" alt=""/>

                                <div class="date">{{$highlights[4]->created_at->format('d/m/Y')}}</div>
                            </a>
                        </div>
                        <div class="post-meta">
                            <h4><a href="blog-single.html">{{$highlights[4]->Title}}</a></h4>

                            <div class="category">
                                <span><a href="#">Design</a></span>
                                <span><a href="#">Styles</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post">
                        <div class="thumb zoom-img">
                            <a href="blog-single.html">
                                <img src="img/portfolio_05.jpg" alt=""/>

                                <div class="date">{{$highlights[5]->created_at->format('d/m/Y')}}</div>
                            </a>
                        </div>
                        <div class="post-meta">
                            <h4><a href="blog-single.html">{{$highlights[5]->Title}}</a></h4>

                            <div class="category">
                                <span><a href="#">Fresh</a></span>
                                <span><a href="#">Styles</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center m-top-50">
                    <a href="blog-single.html" class="btn line-btn-dark btn-radius"> Xem Tất Cả Blogs</a>
                </div>

            </div>
        </div>
    </section>
</div>
<!--blog section end-->

<!--clients section start-->
<section class="client-section section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="clients-logo">
                    <a href="#" class="client-item"><img src="img/sass.png" alt="Client"></a>
                    <a href="#" class="client-item"><img src="img/envato.png" alt="Client"></a>
                    <a href="#" class="client-item"><img src="img/javascript.png" alt="Client"></a>
                    <a href="#" class="client-item"><img src="img/qunit.png" alt="Client"></a>
                    <a href="#" class="client-item"><img src="img/jquery.png" alt="Client"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--clients section end-->

<!--contact section start-->
<div class="section-wrapper" id="contact">
    <section class="section-space p-bot-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h1 class="title"> Liên hệ với tôi</h1>

                        <div class="sub-title">Pellentesque eu quam sem, ac malesuada leo sem quam pellente.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-with-location">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-list text-center">
                            <div class="icon">
                                <i class="icon-map-pin"></i>
                            </div>
                            <div class="service-info">
                                <h4>Địa chỉ liên hệ</h4>

                                <p>
                                    435/89/13 Huỳnh Tấn Phát<br>
                                    Tân Thuận Đông, Quận 7<br>
                                    Tp. Hồ Chí Minh
                                </p>
                                <br/>

                                <p>
                                    <abbr title="Phone">E:</abbr> mrthancn12@gmail.com <br/>
                                    <abbr title="Phone">P:</abbr> (+84) 961 617 160
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="contact-wrap">
                            <h3 class="text-left m-top-0">Say Hi to Us</h3>

                            <form role="form" id="contactForm" class="contact-form" data-toggle="validator">
                                <div class="row">
                                    <div class=" col-md-6">
                                        <div class="form-group ">
                                            <input type="text" id="name" class="form-control" placeholder="Tên"
                                                   required data-error="Bạn chưa nhập tên nè">

                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class=" col-md-6">
                                        <div class="form-group ">
                                            <input type="email" class="email form-control" id="email"
                                                   placeholder="Email" required
                                                   data-error="Bạn chưa nhập email nữa nè">

                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <input type="text" id="msg_subject" class="form-control" placeholder="Chủ đề"
                                               required data-error="Chủ đề nữa nè">

                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <textarea id="message" rows="7" placeholder="Tin nhắn" class="form-control"
                                                  required data-error="Tin nhắn chưa nhập nè"></textarea>

                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <button type="submit" id="submit" class="btn solid-btn-dark btn-radius">Gửi</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--maps start-->
            <!--<div id="map"></div>-->
            <!--maps end-->
        </div>
    </section>
</div>
<!--contact section end-->
@endsection