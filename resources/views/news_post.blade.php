@extends('layouts.dashboard')
@section('title','Educhains-News_Post')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/news_post_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/news_post_responsive.css') }}">

@endpush
@section('content')
<div class="super_container">

    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url(images/news_background.jpg)"></div>
        </div>
        <div class="home_content">
            <h1>Latest News</h1>
        </div>
    </div>

    <!-- News -->

    <div class="news">
        <div class="container">
            <div class="row">

                <!-- News Post Column -->

                <div class="col-lg-8">

                    <div class="news_post_container">
                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_image">
                                <img src="images/news_1.jpg" alt="New Course Launch">
                            </div>
                            <div class="news_post_top d-flex flex-column flex-sm-row">
                                <div class="news_post_date_container">
                                    <div class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                        <div>15</div>
                                        <div>Dec</div>
                                    </div>
                                </div>
                                <div class="news_post_title_container">
                                    <div class="news_post_title">
                                        <a href="news_post.html">Launch of Our New Digital Marketing Course</a>
                                    </div>
                                    <div class="news_post_meta">
                                        <span class="news_post_author"><a href="#">By Educhains Team</a></span>
                                        <span>|</span>
                                        <span class="news_post_comments"><a href="#">5 Comments</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="news_post_text">
                                <p>Educhains is excited to announce the launch of our comprehensive Digital Marketing course, aimed at equipping learners with the latest industry tools and knowledge to excel in the digital world.</p>
                            </div>

                            <div class="news_post_quote">
                                <p class="news_post_quote_text"><span>“</span> The digital world is evolving, and so should your skills. Join our new course today and stay ahead of the curve! </p>
                            </div>

                            <p class="news_post_text" style="margin-top: 59px;">In addition to theory, our course offers hands-on experience with real-life case studies and projects. It’s designed to give you practical knowledge that’s directly applicable to your career. Whether you're new to the field or want to enhance your current skills, this course is perfect for you!</p>
                        </div>

                    </div>

                    <!-- Comments -->
                    <div class="news_post_comments">
                        <div class="comments_title">Comments</div>
                        <ul class="comments_list">

                            <!-- Comment -->
                            <li class="comment">
                                <div class="comment_container d-flex flex-row">
                                    <div>
                                        <div class="comment_image">
                                            <img src="images/comment_1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="comment_content">
                                        <div class="comment_meta">
                                            <span class="comment_name"><a href="#">Jane Doe</a></span>
                                            <span class="comment_separator">|</span>
                                            <span class="comment_date">Dec 15, 2023</span>
                                            <span class="comment_separator">|</span>
                                            <span class="comment_reply_link"><a href="#">Reply</a></span>
                                        </div>
                                        <p class="comment_text">This course was exactly what I needed to enhance my digital marketing skills. The hands-on approach was very beneficial!</p>
                                    </div>
                                </div>
                            </li>

                            <!-- Comment -->
                            <li class="comment">
                                <div class="comment_container d-flex flex-row">
                                    <div>
                                        <div class="comment_image">
                                            <img src="images/comment_2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="comment_content">
                                        <div class="comment_meta">
                                            <span class="comment_name"><a href="#">John Smith</a></span>
                                            <span class="comment_separator">|</span>
                                            <span class="comment_date">Dec 16, 2023</span>
                                            <span class="comment_separator">|</span>
                                            <span class="comment_reply_link"><a href="#">Reply</a></span>
                                        </div>
                                        <p class="comment_text">I’m looking forward to applying these new techniques in my job. Great course!</p>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>

                    <!-- Leave Comment -->

                    <div class="leave_comment">
                        <div class="leave_comment_title">Leave a comment</div>

                        <div class="leave_comment_form_container">
                            <form action="post">
                                <input id="comment_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
                                <input id="comment_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
                                <textarea id="comment_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                                <button id="comment_send_btn" type="submit" class="comment_send_btn trans_200" value="Submit">send message</button>
                            </form>
                        </div>
                    </div>

                </div>

                <!-- Sidebar Column -->

                <div class="col-lg-4">
                    <div class="sidebar">

                        <!-- Archives -->
                        <div class="sidebar_section">
                            <div class="sidebar_section_title">
                                <h3>Archives</h3>
                            </div>
                            <ul class="sidebar_list">
                                <li class="sidebar_list_item"><a href="#">Digital Marketing</a></li>
                                <li class="sidebar_list_item"><a href="#">Web Development</a></li>
                                <li class="sidebar_list_item"><a href="#">Success Stories</a></li>
                                <li class="sidebar_list_item"><a href="#">Workshops</a></li>
                                <li class="sidebar_list_item"><a href="#">New Courses</a></li>
                            </ul>
                        </div>

                        <!-- Latest Posts -->

                        <div class="sidebar_section">
                            <div class="sidebar_section_title">
                                <h3>Latest posts</h3>
                            </div>

                            <div class="latest_posts">

                                <!-- Latest Post -->
                                <div class="latest_post">
                                    <div class="latest_post_image">
                                        <img src="images/latest_1.jpg" alt="New Course">
                                    </div>
                                    <div class="latest_post_title"><a href="news_post.html">Our New Digital Marketing Course</a></div>
                                    <div class="latest_post_meta">
                                        <span class="latest_post_author"><a href="#">By Educhains Team</a></span>
                                        <span>|</span>
                                        <span class="latest_post_comments"><a href="#">5 Comments</a></span>
                                    </div>
                                </div>

                                <!-- Latest Post -->
                                <div class="latest_post">
                                    <div class="latest_post_image">
                                        <img src="images/latest_2.jpg" alt="Workshop Announcement">
                                    </div>
                                    <div class="latest_post_title"><a href="news_post.html">Upcoming Web Development Workshop</a></div>
                                    <div class="latest_post_meta">
                                        <span class="latest_post_author"><a href="#">By Educhains Team</a></span>
                                        <span>|</span>
                                        <span class="latest_post_comments"><a href="#">4 Comments</a></span>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Tags -->

                        <div class="sidebar_section">
                            <div class="sidebar_section_title">
                                <h3>Tags</h3>
                            </div>
                            <div class="tags d-flex flex-row flex-wrap">
                                <div class="tag"><a href="#">Courses</a></div>
                                <div class="tag"><a href="#">Workshops</a></div>
                                <div class="tag"><a href="#">Success</a></div>
                                <div class="tag"><a href="#">Digital Marketing</a></div>
                                <div class="tag"><a href="#">Web Development</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@push('scripts')
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('js/news_post_custom.js') }}"></script>

@endpush
