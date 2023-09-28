@extends('app.wrapper')
@section('content')
<section id="page-content" class="sidebar-right" style="transform: none;">
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">
            <!-- post content -->
            <div class="content col-lg-9">
                <!-- Page title -->
                <div class="page-title">
                    <h1>Blog - Right Sidebar</h1>
                    <div class="breadcrumb float-left">
                        <ul>
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">Blog</a>
                            </li>
                            <li class="active"><a href="#">Sidebar Right</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end: Page title -->
                <!-- Blog -->
                <div id="blog" class="post-thumbnails">
                    <!-- Post item-->
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/blog/12.jpg">
                                </a>
                                <span class="post-meta-category"><a href="">Lifestyle</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->

                </div>
                <!-- end: Blog -->
                <!-- Pagination -->
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- end: Pagination -->
            </div>
            <!-- end: post content -->
            <!-- Sidebar-->
            <div class="sidebar sticky-sidebar col-lg-3" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1139.71px;">
                <!--Tabs with Posts-->

                <!--End: Tabs with Posts-->
                <!-- Twitter widget -->

                <!-- end: Twitter widget-->
                <!--widget tags -->

                <!--end: widget tags -->
                <!--widget newsletter-->

                <!--end: widget newsletter-->
            <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: fixed; transform: translateY(120px); top: 0px; left: 836.667px; width: 201px;"><div class="widget ">
                    <h4 class="widget-title">Recent Posts</h4>
                    <div class="post-thumbnail-list">
                        <div class="post-thumbnail-entry">
                            <img alt="" src="images/blog/thumbnail/5.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">A true story, that never been told!</a>
                                <span class="post-date"><i class="icon-clock"></i> 6m ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="images/blog/thumbnail/6.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Beautiful nature, and rare feathers!</a>
                                <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                        <div class="post-thumbnail-entry">
                            <img alt="" src="images/blog/thumbnail/7.jpg">
                            <div class="post-thumbnail-content">
                                <a href="#">Lorem ipsum dolor sit amet</a>
                                <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                            </div>
                        </div>
                    </div>
                </div><div class="widget widget-tweeter" data-username="envato" data-limit="2">
                    <h4 class="widget-title">Recent Tweets</h4>
                <div id="twitter-cnt"><span>Loading...</span></div></div><div class="widget  widget-tags">
                    <h4 class="widget-title">Tags</h4>
                    <div class="tags">
                        <a href="#">Design</a>
                        <a href="#">Portfolio</a>
                        <a href="#">Digital</a>
                        <a href="#">Branding</a>
                        <a href="#">HTML</a>
                        <a href="#">Clean</a>
                        <a href="#">Peace</a>
                        <a href="#">Love</a>
                        <a href="#">CSS3</a>
                        <a href="#">jQuery</a>
                    </div>
                </div><div class="widget  widget-newsletter">
                    <form class="widget-subscribe-form" novalidate="" action="include/subscribe-form.php" role="form" method="post">
                        <h4 class="widget-title">Newsletter</h4>
                        <small>Stay informed on our latest news!</small>
                        <div class="input-group">
                            <input type="email" required="" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                            <span class="input-group-btn">
                                <button type="submit" id="widget-subscribe-submit-button" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                            </span> <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>
                    </form>
                </div></div></div>
            <!-- end: Sidebar-->
        </div>
    </div>
</section>
@endsection
