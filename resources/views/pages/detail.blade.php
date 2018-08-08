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
                                <div class="date">Feb 21, 2017</div>
                                <h3>Best One page template ever. You'll really love it.</h3>

                                <div class="category">
                                    <span><i class="fa fa-user"></i> <a href="#">Jhon Doe</a></span>
                                    <span><a href="#">Design</a></span>
                                    <span><a href="#">Styles</a></span>
                                    <a href="#" class="pull-right blog-comments"> <i class="fa fa-comments-o"></i> 5
                                        Comments</a>
                                </div>
                            </div>
                            <!--post meta end-->

                            <!--post image start-->
                            <div class="thumb zoom-img">
                                <img src="img/parallax-2.jpg" alt=""/>
                            </div>
                            <!--post image end-->

                            <!--post description start-->
                            <div class="post-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias,
                                    aliquid deserunt dolorum eligendi facilis illo officiis quam recusandae
                                    reiciendis saepe similique temporibus? Commodi cumque exercitationem hic
                                    ipsa ipsam nemo!</p>

                                <p>
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                    here, content here', making it look like readable English. Many desktop publishing
                                    packages and web page editors now use Lorem Ipsum as their default model text, and a
                                    search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                </p>
                                <blockquote>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                    roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                    old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                                    looked up one of the more obscure Latin words, consectetur
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias,
                                    aliquid deserunt dolorum eligendi facilis illo officiis quam recusandae
                                    reiciendis saepe similique temporibus? Commodi cumque exercitationem hic
                                    ipsa ipsam nemo!</p>

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
                                    <img alt="" class="img-responsive alignleft" src="img/author.jpg">
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
                                        <a href="#" class="read-more">View all posts</a>
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
                            <h4 class="m-bot-50">This post has 6 comments</h4>
                            <ul class="media-list comments-list  clearlist">
                                <!-- Comment Item start-->
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object comment-avatar" src="img/author-2.jpg" alt="" width="50" height="50">
                                    </a>

                                    <div class="media-body">
                                        <div class="comment-info">
                                            <div class="comment-author">
                                                <a href="#">John Doe</a>
                                            </div>
                                            Feb 23, 2017, at 1:12
                                            <a href="#" class="comment-reply"><i class="fa fa-comment-o"></i>Reply</a>
                                        </div>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut
                                            ante eleifend eleifend.
                                        </p>

                                        <!--  second level Comment start-->
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object comment-avatar" src="img/author.jpg" alt="" width="50" height="50">
                                            </a>

                                            <div class="media-body">

                                                <div class="comment-info">
                                                    <div class="comment-author">
                                                        <a href="#">Mr Trone</a>
                                                    </div>
                                                    Feb 23, 2017, at 2:04
                                                    <a href="#" class="comment-reply"><i class="fa fa-comment-o"></i>Reply</a>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at
                                                    magna ut ante eleifend eleifend.
                                                </p>

                                                <!-- third level Comment start -->
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object comment-avatar" src="img/author-2.jpg" alt="" width="50" height="50">
                                                    </a>

                                                    <div class="media-body">

                                                        <div class="comment-info">
                                                            <div class="comment-author">
                                                                <a href="#">John Doe</a>
                                                            </div>
                                                            Feb 23, 2017, at 2:04
                                                            <a href="#" class="comment-reply"><i
                                                                    class="fa fa-comment-o"></i>Reply</a>
                                                        </div>

                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Quisque at magna ut ante eleifend eleifend.
                                                        </p>

                                                    </div>
                                                </div>
                                                <!-- third level Comment end -->
                                            </div>
                                        </div>
                                        <!-- second level Comment end -->
                                    </div>

                                </li>
                                <!-- End Comment Item -->

                                <!-- Comment Item start-->
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object comment-avatar" src="img/author.jpg" alt="" width="50" height="50">
                                    </a>

                                    <div class="media-body">
                                        <div class="comment-info">
                                            <div class="comment-author">
                                                <a href="#">John Doe</a>
                                            </div>
                                            Feb 23, 2017, at 2:04
                                            <a href="#" class="comment-reply"><i class="fa fa-comment-o"></i>Reply</a>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut
                                            ante eleifend eleifend.
                                        </p>
                                    </div>
                                </li>
                                <!-- End Comment Item -->

                                <!-- Comment Item start-->
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object comment-avatar" src="img/author-2.jpg" alt="" width="50" height="50">
                                    </a>

                                    <div class="media-body">

                                        <div class="comment-info">
                                            <div class="comment-author">
                                                <a href="#">John Doe</a>
                                            </div>
                                            Feb 23, 2017, at 2:04
                                            <a href="#" class="comment-reply"><i class="fa fa-comment-o"></i>Reply</a>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut
                                            ante eleifend eleifend.
                                        </p>
                                    </div>
                                </li>
                                <!-- End Comment Item -->
                            </ul>
                            <!--comments end-->

                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Leave a Reply</h4>
                                    <br/>
                                </div>
                                <form class="reply-comments-form">
                                    <div class="col-md-4 form-group">
                                        <label>Name*</label>
                                        <input type="text" class="form-control" placeholder="Name" required="">
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
                                        <label>Comments*</label>
                                        <textarea class="form-control" rows="5" name="comment"></textarea>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <button type="submit" class="btn btn-post"> Post Comment</button>
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
                        <h4>Popular Post</h4>
                        <ul class="widget-category widget-popular">
                            <li>
                                <div class="meta">FEB 21, 2017</div>
                                <a href="#">Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,</a>

                                <div class="meta">
                                    <a href="#" class=""><i class="fa fa-comments-o"></i> 3 Comments</a>
                                </div>
                            </li>
                            <li>
                                <div class="meta">FEB 21, 2017</div>
                                <a href="#">It is a long established fact that a reader will be distracted</a>

                                <div class="meta">
                                    <a href="#" class=""><i class="fa fa-comments-o"></i> 7 Comments</a>
                                </div>
                            </li>
                            <li>
                                <div class="meta">FEB 21, 2017</div>
                                <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                    roots</a>

                                <div class="meta">
                                    <a href="#" class=""><i class="fa fa-comments-o"></i> 4 Comments</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="widget">
                        <h4>Tags</h4>
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