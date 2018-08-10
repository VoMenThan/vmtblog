@extends('layouts.index')

@section('content')
<!--hero section start-->
<section class="hero hero-short-banner">
    <div class="hero-overlay"></div>
    <div class="hero-content light-txt">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-top-100">
                    <h2 class="">Blog Post Details</h2>

                    <p class="text-uppercase">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hero section end-->

<!--blog section start-->
<div class="section-wrapper">
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="col-md-12">
                        <div class="blog-post m-bot-0">

                            <!--post meta start-->
                            <div class="post-meta m-bot-50">
                                <div class="date">{{ $blog->created_at->format('d/m/Y') }}</div>
                                <h3>{{ $blog->Title }}</h3>

                                <div class="category">
                                    <span><i class="fa fa-user"></i> <a href="#">Jhon Doe</a></span>
                                    <span><a href="#">Design</a></span>
                                    <span><a href="#">Styles</a></span>
                                    <a href="#" class="pull-right blog-comments"> <i class="fa fa-comments-o"></i> 
                                        {{$blog->comment->count()}} Bình luận
                                    </a>
                                </div>
                            </div>
                            <!--post meta end-->

                            <!--post image start-->
                            <div class="thumb zoom-img">
                                <img src="img/{{ $blog->Image }}" alt=""/>
                            </div>
                            <!--post image end-->

                            <!--post description start-->
                            <div class="post-details">
                                {!! $blog->Content !!}

                            </div>
                            <!--post description end-->

                            <!--post tags start-->
                            <div class="post-tags">
                                <a href="#" title="">image</a>
                                <a href="#" title="">video</a>
                                <a href="#" title="">audio</a>
                                <a href="#" title="">design</a>
                                <a href="#" title="">development</a>
                            </div>
                            <!--post tags end-->

                            <!--author short info start-->
                            <article class="author-wrapper">
                                <div class="author_img">
                                    <img alt="" class="img-responsive alignleft" src="img/avatar-men-than.jpg">
                                </div>
                                <div class="author-info">
                                    <div class="title">
                                        <h4>About Jhon Doe</h4>
                                    </div>
                                    <p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>

                                <div class="post-footer">
                                    <div class="pull-left">
                                        <a href="#" class="read-more">Xem tất cả bài viết</a>
                                    </div>
                                    <div class="pull-right">
                                        <div class="social-links">
                                            <span><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                                            <span><a title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></span>
                                            <span><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
                                            <span><a title="Pinterest" href="#"><i
                                                    class="fa fa-pinterest"></i></a></span>
                                            <span><a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></span>
                                            <span><a title="Youtube" href="#"><i class="fa fa-youtube"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--author short info end-->

                            <!--comments start-->
                            <h4 class="m-bot-50">Bài này có {{$blog->comment->count()}} bình luận</h4>
                            <ul class="media-list comments-list  clearlist">
                                <!-- Comment Item start-->
                                @foreach($blog->comment as $cm)
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object comment-avatar" src="img/avatar-men-than.jpg" alt="" width="50" height="50">
                                    </a>

                                    <div class="media-body">
                                        <div class="comment-info">
                                            <div class="comment-author">
                                                <a href="#">{{$cm->user->name}}</a>
                                            </div>
                                            {{$cm->created_at->format('d/m/Y H:i:s')}}
                                            <a href="#" class="comment-reply"><i class="fa fa-comment-o"></i>Trả lời</a>
                                        </div>
                                        <p>
                                            {{$cm->Comment}}
                                        </p>
                                    </div>
                                </li>
                                @endforeach
                                <!-- End Comment Item -->

                                
                            </ul>
                            <!--comments end-->

                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Để lại bình luận của bạn</h4>
                                    <br/>
                                </div>
                                <form class="reply-comments-form">
                                    <div class="col-md-4 form-group">
                                        <label>Tên*</label>
                                        <input type="text" class="form-control" placeholder="Tên" required="">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Email*</label>
                                        <input type="email" class="form-control" placeholder="Email" required="">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label>Website</label>
                                        <input type="text" class="form-control" placeholder="Website">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Bình luận*</label>
                                        <textarea class="form-control" rows="5" name="comment"></textarea>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <button type="submit" class="btn btn-post"> Đăng</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <form class="search-form">
                            <input type="text" placeholder="Search..." value="">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget">
                        <h4>Danh mục</h4>
                        <ul class="widget-category">
                            @foreach($category as $cat)
                            <li>
                                <a href="#">{{$cat->Name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h4>Bài viết phổ biến</h4>
                        <ul class="widget-category widget-popular">
                            @foreach($popular as $item)
                            <li>
                                <div class="meta">{{ $item->created_at->format('d-m-Y') }}</div>
                                <a href="blog/{{ $item->NoTitle }}_{{$item->id}}.html">{{ $item->Title }}</a>

                                <div class="meta">
                                    <a href="blog/{{ $item->NoTitle }}_{{$item->id}}.html" class="">
                                        <i class="fa fa-comments-o"></i> 3 Bình luận
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="widget">
                        <h4>Thẻ </h4>
                        <!--post tags start-->
                        <div class="post-tags">
                            <a href="#" title="">image</a>
                            <a href="#" title="">video</a>
                            <a href="#" title="">audio</a>
                            <a href="#" title="">design</a>
                            <a href="#" title="">development</a>
                        </div>
                        <!--post tags end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--blog section end-->
@endsection