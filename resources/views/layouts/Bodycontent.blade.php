
<meta charset="UTF-8">
<meta name="description" content="TheQuest Gaming Magazine Template">
<meta name="keywords" content="gaming, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Stylesheets -->

<link rel="stylesheet" href="{{asset('public/test/css/mdb.min.css')}}">
<link rel="stylesheet" href="{{asset('public/test/css/style_for_container_news.css')}}">

<style>

    /*---------------------
    Helper CSS
     -----------------------*/

    .section-title {
        text-align: center;
    }

    .section-title h2 {
        font-size: 36px;
    }

    .set-bg {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top center;
    }

    .spad {
        padding-top: 106px;
        padding-bottom: 106px;
    }

    .text-white h1,
    .text-white h2,
    .text-white h3,
    .text-white h4,
    .text-white h5,
    .text-white h6,
    .text-white p,
    .text-white span,
    .text-white li,
    .text-white a {
        color: #fff;
    }
    /*---------------------
    Commom elements
     -----------------------*/

    /* buttons */

    .site-btn {
        display: inline-block;
        border: none;
        font-size: 14px;
        font-weight: 600;
        min-width: 164px;
        padding: 21px 47px;
        border-radius: 50px;
        text-transform: uppercase;
        background: #10ddb4;
        color: #161616;
        line-height: 1;
        cursor: pointer;
        text-align: center;
    }

    .site-btn:hover {
        color: #161616;
    }

    .site-btn.sb-color {
        background: #ff1f56;
        color: #fff;
    }

    .site-btn.sb-color:hover {
        color: #fff;
    }



    /*------------------
       Hero-section
     ---------------------*/

    .hero-item {
        height: 804px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        text-align: center;
        position: relative;
        padding-top: 140px;
    }

    .hero-item:after {
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background: #0d0d11;
        opacity: 0.74;
        z-index: 1;
    }

    .hero-item .container {
        position: relative;
        z-index: 9;
    }

    .hero-item h2 {
        font-size: 96px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 15px;
    }

    .hero-item p {
        font-size: 20px;
        margin-bottom: 35px;
    }

    .hero-item .site-btn,
    .hero-item p,
    .hero-item h2 {
        position: relative;
        top: 50px;
        opacity: 0;
    }

    .hero-slider .owl-item.active .hero-item h2,
    .hero-slider .owl-item.active .hero-item p,
    .hero-slider .owl-item.active .hero-item .site-btn {
        top: 0;
        opacity: 1;
    }

    .hero-slider .owl-item.active .hero-item h2 {
        -webkit-transition: all 0.5s ease 0.4s;
        transition: all 0.5s ease 0.4s;
    }

    .hero-slider .owl-item.active .hero-item p {
        -webkit-transition: all 0.5s ease 0.6s;
        transition: all 0.5s ease 0.6s;
    }

    .hero-slider .owl-item.active .hero-item .site-btn {
        -webkit-transition: all 0.5s ease 0.8s;
        transition: all 0.5s ease 0.8s;
    }

    .slider-progress-bar {
        position: absolute;
        width: 100%;
        bottom: 0;
        left: 0;
    }

    .slider-progress-bar .progress {
        height: 4px;
        background: #10ddb4;
        -webkit-animation: sliderProgressBar ease;
        animation: sliderProgressBar ease;
    }

    .my-slider:hover .slider-progress-bar .progress {
        -webkit-animation-play-state: paused;
        animation-play-state: paused;
    }

    @-webkit-keyframes sliderProgressBar {
        0% {
            width: 0%;
        }
        100% {
            width: 100%;
        }
    }

    @keyframes sliderProgressBar {
        0% {
            width: 0%;
        }
        100% {
            width: 100%;
        }
    }

    /*------------------
       Blog-section
     ---------------------*/

    .blog-section {
        background: #1c1c1c;
    }

    .blog-section .blog-posts {
        margin-bottom: -70px;
    }

    .blog-post {
        margin-bottom: 70px;
    }

    .blog-post img {
        margin-bottom: 34px;
        min-width: 100%;
    }

    .blog-post .post-date {
        display: inline-block;
        font-size: 14px;
        font-weight: 700;
        padding: 3px 16px;
        margin-bottom: 25px;
        background: #10ddb4;
    }

    .blog-post h3 {
        color: #fff;
        margin-bottom: 10px;
    }

    .blog-post h4 {
        color: #fff;
        margin-bottom: 10px;
    }

    .blog-post .post-metas {
        margin-bottom: 30px;
    }

    .blog-post .post-metas .post-meta {
        position: relative;
        display: inline-block;
        color: #8c8c8c;
        font-size: 14px;
        padding-right: 15px;
        margin-right: 14px;
        margin-bottom: 5px;
    }

    .blog-post .post-metas .post-meta:after {
        position: absolute;
        content: "|";
        right: 0;
        top: 0;
        color: #8c8c8c;
        font-size: 14px;
    }

    .blog-post .post-metas .post-meta:last-child {
        margin-right: 0;
        padding-right: 0;
    }

    .blog-post .post-metas .post-meta:last-child:after {
        display: none;
    }

    .blog-post .post-metas a {
        color: #ffea00;
    }

    .blog-post .read-more {
        font-size: 14px;
        font-weight: 700;
        color: #10ddb4;
    }

    .blog-post.featured-post,
    .blog-post.review-post,
    .blog-post.single-post {
        margin-bottom: 80px;
    }

    .blog-post.featured-post p,
    .blog-post.review-post p,
    .blog-post.single-post p {
        margin-bottom: 40px;
    }

    .blog-post.featured-post .post-metas a,
    .blog-post.review-post .post-metas a,
    .blog-post.single-post .post-metas a {
        color: #10ddb4;
    }

    .blog-post.review-post .post-metas {
        margin-bottom: 5px;
    }

    .blog-post.review-post .rating {
        font-size: 17px;
        color: #ffd200;
        margin-bottom: 30px;
    }

    .blog-post.review-post .rating i {
        display: inline-block;
        margin-right: 4px;
    }

    .sb-widget {
        margin-bottom: 75px;
    }

    .sb-widget:last-child {
        margin-bottom: 0;
    }

    .sb-widget .sb-title {
        font-size: 18px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 60px;
    }

    .sb-widget .sb-search input {
        width: 100%;
        height: 53px;
        font-size: 14px;
        font-style: italic;
        padding: 0 32px;
        border: none;
        border-bottom: 3px solid #10ddb4;
    }

    .sb-cata-list {
        list-style: none;
    }

    .sb-cata-list li {
        display: block;
        overflow: hidden;
        margin-bottom: 13px;
    }

    .sb-cata-list li a {
        display: block;
        color: #8c8c8c;
        font-size: 16px;
    }

    .sb-cata-list li span {
        float: right;
        display: inline-block;
        min-width: 25px;
        height: 25px;
        font-size: 11px;
        color: #1c1c1c;
        border-radius: 35px;
        background: #fff;
        text-align: center;
        padding: 5px 5px 0;
    }

    .sb-cata-list li:nth-child(1) span {
        background: #10ddb4;
    }

    .sb-cata-list li:nth-child(2) span {
        background: #ff1980;
    }

    .sb-cata-list li:nth-child(3) span {
        background: #ffe119;
    }

    .sb-cata-list li:nth-child(4) span {
        background: #5da9e4;
    }

    .sb-cata-list li:nth-child(5) span {
        background: #bd9bd2;
    }

    .sb-cata-list li:nth-child(6) span {
        background: #f89843;
    }

    .sb-cata-list li:last-child a {
        margin-bottom: 0;
    }

    .latest-news-widget .ln-item {
        margin-bottom: 29px;
        position: relative;
    }

    .latest-news-widget .ln-item:last-child {
        margin-bottom: 0;
    }

    .latest-news-widget .ln-item img {
        width: 85px;
        height: 85px;
        float: left;
        margin-right: 27px;
    }

    .latest-news-widget .ln-text {
        overflow: hidden;
    }

    .latest-news-widget .ln-text .ln-date {
        display: inline-block;
        font-size: 14px;
        font-weight: 700;
        padding: 1px 5px;
        margin-bottom: 10px;
        background: #10ddb4;
    }

    .latest-news-widget .ln-text h6 {
        font-size: 14px;
        font-weight: 500;
        color: #fff;
        margin-bottom: 5px;
    }

    .latest-news-widget .ln-text .ln-metas .ln-meta {
        position: relative;
        display: inline-block;
        color: #8c8c8c;
        font-size: 12px;
        padding-right: 13px;
        margin-right: 10px;
        margin-bottom: 5px;
    }

    .latest-news-widget .ln-text .ln-metas .ln-meta:after {
        position: absolute;
        content: "|";
        right: 0;
        top: 0;
        color: #8c8c8c;
        font-size: 14px;
    }

    .latest-news-widget .ln-text .ln-metas .ln-meta:last-child {
        margin-right: 0;
        padding-right: 0;
    }

    .latest-news-widget .ln-text .ln-metas .ln-meta:last-child:after {
        display: none;
    }

    .latest-news-widget .ln-text .ln-metas a {
        color: #ffea00;
    }

    .latest-news-widget.top-five .ln-index {
        position: absolute;
        left: 19px;
        top: -25px;
        width: 45px;
        height: 45px;
        font-size: 18px;
        font-weight: 700;
        color: #fff;
        background: #10ddb4;
        border-radius: 50%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .latest-news-widget.top-five .ln-item {
        margin-bottom: 59px;
    }

    .latest-news-widget.top-five .ln-item:nth-child(1) .ln-index {
        background: #ff5581;
    }

    .latest-news-widget.top-five .ln-item:nth-child(2) .ln-index {
        background: #10ddb4;
    }

    .latest-news-widget.top-five .ln-item:nth-child(3) .ln-index {
        background: #5da9e4;
    }

    .latest-news-widget.top-five .ln-item:nth-child(4) .ln-index {
        background: #ffe119;
    }

    .latest-news-widget.top-five .ln-item:nth-child(5) .ln-index {
        background: #bd9bd2;
    }

    .latest-news-widget.top-five .ln-item:last-child {
        margin-bottom: 0;
    }

    .latest-comments-widget .lc-item {
        margin-bottom: 23px;
    }

    .latest-comments-widget .lc-item:last-child {
        margin-bottom: 0;
    }

    .latest-comments-widget .lc-item img {
        float: left;
        width: 55px;
        height: 55px;
        border-radius: 50%;
        margin-right: 24px;
    }

    .latest-comments-widget .lc-text {
        overflow: hidden;
    }

    .latest-comments-widget .lc-text h6 {
        color: #fff;
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 8px;
    }

    .latest-comments-widget .lc-text span {
        color: #8c8c8c;
        font-size: 14px;
        font-weight: 400;
        display: inline-block;
        padding: 0 5px;
    }

    .latest-comments-widget .lc-text a {
        color: #10ddb4;
        font-size: 14px;
        font-weight: 400;
    }

    .latest-comments-widget .lc-date {
        color: #a5a4a4;
        font-weight: 700;
        font-size: 12px;
    }


</style>
        <section class="blog-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-post featured-post">
                            <img src="{{asset('img/blog/1.jpg')}}" alt="">
                            <div class="post-date">April 1, 2019</div>
                            <h3>The best games of 2019</h3>
                            <div class="post-metas">
                                <div class="post-meta">By Admin</div>
                                <div class="post-meta">in <a href="#">Games</a></div>
                                <div class="post-meta">3 Comments</div>
                            </div>
                            <p>Apart from counting words and characters, our online editor can help you to improve word choice and writing style, and, optionally, help you to detect grammar mistakes and plagiarism. </p>
                            <a href="#" class="site-btn">Read More</a>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog-post">
                                    <img src="{{asset('img/blog/2.jpg')}}" alt="">
                                    <div class="post-date">April 1,2019</div>
                                    <h4>The best games of 2019</h4>
                                    <div class="post-metas">
                                        <div class="post-meta">By Admin</div>
                                        <div class="post-meta">in <a href="#">Games</a></div>
                                        <div class="post-meta">3 Comments</div>
                                    </div>
                                    <p>Schedule auto-update windows! This will ensure that Steam doesn’t start updating a game while you’re in the middle of your work day..</p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-post">
                                    <img src="{{asset('img/blog/3.jpg')}}" alt="">
                                    <div class="post-date">April 1,2019</div>
                                    <h4>Tips to play a better game</h4>
                                    <div class="post-metas">
                                        <div class="post-meta">By Admin</div>
                                        <div class="post-meta">in <a href="#">Games</a></div>
                                        <div class="post-meta">3 Comments</div>
                                    </div>
                                    <p>Disabled CEF keyring integration by default. The -enable-keyring option can be passed to the Steam client to reinstate it.</p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-post">
                                    <img src="{{asset('img/blog/4.jpg')}}" alt="">
                                    <div class="post-date">April 1,2019</div>
                                    <h4>The best games of 2019</h4>
                                    <div class="post-metas">
                                        <div class="post-meta">By Admin</div>
                                        <div class="post-meta">in <a href="#">Games</a></div>
                                        <div class="post-meta">3 Comments</div>
                                    </div>
                                    <p>With that in mind, we thought it was a good time to remind everyone of some of the features the Steam client offers relating to downloads, so that you can manage your home bandwidth and help everyone in your house handle.</p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-post">
                                    <img src="{{asset('img/blog/5.jpg')}}" alt="">
                                    <div class="post-date">April 1,2019</div>
                                    <h4>Tips to play a better game</h4>
                                    <div class="post-metas">
                                        <div class="post-meta">By Admin</div>
                                        <div class="post-meta">in <a href="#">Games</a></div>
                                        <div class="post-meta">3 Comments</div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum susp-endisse ultrices gravida. Risus commodo.</p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 sidebar">
                        <div class="sb-widget">
                            <form class="sb-search">
                                <input type="text" placeholder="Search">
                            </form>
                        </div>
                        <div class="sb-widget">
                            <h2 class="sb-title">Categories</h2>
                            <ul class="sb-cata-list">
                                <li><a href="">Games</a></li>
                                <li><a href="">Gaming Tips & Tricks</a></li>
                                <li><a href="">Online Games</a></li>
                                <li><a href="">Team Games</a></li>
                                <li><a href="">Community</a></li>
                                <li><a href="">Uncategorized</a></li>
                            </ul>
                        </div>
                        <div class="sb-widget">
                            <h2 class="sb-title">Latest News</h2>
                            <div class="latest-news-widget">
                                <div class="ln-item">
                                    <img src="{{asset('img/blog-thumbs/1.jpg')}}" alt="">
                                    <div class="ln-text">
                                        <div class="ln-date">April 1, 2019</div>
                                        <h6>10 Amazing new games</h6>
                                        <div class="ln-metas">
                                            <div class="ln-meta">By Admin</div>
                                            <div class="ln-meta">in <a href="#">Games</a></div>
                                            <div class="ln-meta">3 Comments</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln-item">
                                    <img src="{{asset('img/blog-thumbs/2.jpg')}}" alt="">
                                    <div class="ln-text">
                                        <div class="ln-date">April 1, 2019</div>
                                        <h6>10 Amazing new games</h6>
                                        <div class="ln-metas">
                                            <div class="ln-meta">By Admin</div>
                                            <div class="ln-meta">in <a href="#">Games</a></div>
                                            <div class="ln-meta">3 Comments</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln-item">
                                    <img src="{{asset('img/blog-thumbs/3.jpg')}}" alt="">
                                    <div class="ln-text">
                                        <div class="ln-date">April 1, 2019</div>
                                        <h6>10 Amazing new games</h6>
                                        <div class="ln-metas">
                                            <div class="ln-meta">By Admin</div>
                                            <div class="ln-meta">in <a href="#">Games</a></div>
                                            <div class="ln-meta">3 Comments</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln-item">
                                    <img src="{{asset('img/blog-thumbs/4.jpg')}}" alt="">
                                    <div class="ln-text">
                                        <div class="ln-date">April 1, 2019</div>
                                        <h6>10 Amazing new games</h6>
                                        <div class="ln-metas">
                                            <div class="ln-meta">By Admin</div>
                                            <div class="ln-meta">in <a href="#">Games</a></div>
                                            <div class="ln-meta">3 Comments</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sb-widget">
                            <a href="#" class="add">
                                <img src="{{asset('img/add-2.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="sb-widget">
                            <h2 class="sb-title">Latest Comments</h2>
                            <div class="latest-comments-widget">
                                <div class="lc-item">
                                    <img src="{{asset('img/author-thumbs/1.jpg')}}" alt="">
                                    <div class="lc-text">
                                        <h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
                                        <div class="lc-date">April 1,2019</div>
                                    </div>
                                </div>
                                <div class="lc-item">
                                    <img src="{{asset('img/author-thumbs/2.jpg')}}" alt="">
                                    <div class="lc-text">
                                        <h6>Michael James<span> In </span><a href="">The best 2019 Games</a></h6>
                                        <div class="lc-date">April 1,2019</div>
                                    </div>
                                </div>
                                <div class="lc-item">
                                    <img src="{{asset('img/author-thumbs/3.jpg')}}" alt="">
                                    <div class="lc-text">
                                        <h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
                                        <div class="lc-date">April 1,2019</div>
                                    </div>
                                </div>
                                <div class="lc-item">
                                    <img src="{{asset('img/author-thumbs/4.jpg')}}" alt="">
                                    <div class="lc-text">
                                        <h6>Michael James<span> In </span><a href="">The best 2019 Games</a></h6>
                                        <div class="lc-date">April 1,2019</div>
                                    </div>
                                </div>
                                <div class="lc-item">
                                    <img src="{{asset('img/author-thumbs/1.jpg')}}" alt="">
                                    <div class="lc-text">
                                        <h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
                                        <div class="lc-date">April 1,2019</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog section end -->
</div>

