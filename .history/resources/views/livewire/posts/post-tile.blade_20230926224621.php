<div class="post-item">
    <div class="post-item-wrap">
        <div class="post-image">
            <a href="#">
                <img alt="" src="images/blog/12.jpg">
            </a>
            <span class="post-meta-category"><a href="">{{ $post->catgory->title }}</a></span>
        </div>
        <div class="post-item-description">
            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
            <h2><a href="/post/{{ $post->slug }}">{{ $post->title }}
                </a></h2>
            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
            <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
        </div>
    </div>
</div>
