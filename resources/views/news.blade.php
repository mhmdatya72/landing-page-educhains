@extends('layouts.dashboard')
@section('title','Educhains-News')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/news_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/news_responsive.css') }}">

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

                <!-- News Column -->

                <div class="col-lg-8">

                    <div class="news_posts">
                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_image">
                                <img src="images/news_1.jpg" alt="New Courses">
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
                                        <a href="{{route('news_post')}}">New Digital Marketing Course Launched</a>
                                    </div>
                                    <div class="news_post_meta">
                                        <span class="news_post_author"><a href="#">By Educhains Team</a></span>
                                        <span>|</span>
                                        <span class="news_post_comments"><a href="#">5 Comments</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="news_post_text">
                                <p>Educhains has launched a comprehensive Digital Marketing course to equip learners with the latest industry trends and tools.</p>
                            </div>
                            <div class="news_post_button text-center trans_200">
                                <a href="{{route('news_post')}}">Read More</a>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_image">
                                <img src="images/news_2.jpg" alt="Workshop">
                            </div>
                            <div class="news_post_top d-flex flex-column flex-sm-row">
                                <div class="news_post_date_container">
                                    <div class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                        <div>20</div>
                                        <div>Dec</div>
                                    </div>
                                </div>
                                <div class="news_post_title_container">
                                    <div class="news_post_title">
                                        <a href="{{route('news_post')}}">Join Our Upcoming Web Development Workshop</a>
                                    </div>
                                    <div class="news_post_meta">
                                        <span class="news_post_author"><a href="#">By Educhains Team</a></span>
                                        <span>|</span>
                                        <span class="news_post_comments"><a href="#">8 Comments</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="news_post_text">
                                <p>Our hands-on workshop will guide participants through building their first website using modern web technologies.</p>
                            </div>
                            <div class="news_post_button text-center trans_200">
                                <a href="{{route('news_post')}}">Read More</a>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_image">
                                <img src="images/news_3.jpg" alt="Success Story">
                            </div>
                            <div class="news_post_top d-flex flex-column flex-sm-row">
                                <div class="news_post_date_container">
                                    <div class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                        <div>25</div>
                                        <div>Dec</div>
                                    </div>
                                </div>
                                <div class="news_post_title_container">
                                    <div class="news_post_title">
                                        <a href="{{route('news_post')}}">Student Success Stories</a>
                                    </div>
                                    <div class="news_post_meta">
                                        <span class="news_post_author"><a href="#">By Educhains Team</a></span>
                                        <span>|</span>
                                        <span class="news_post_comments"><a href="#">12 Comments</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="news_post_text">
                                <p>Read inspiring success stories from our students who transformed their careers with Educhains courses.</p>
                            </div>
                            <div class="news_post_button text-center trans_200">
                                <a href="{{route('news_post')}}">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Page Nav -->

                    <div class="news_page_nav">
                        <ul>
                            <li class="active text-center trans_200"><a href="#">01</a></li>
                            <li class="text-center trans_200"><a href="#">02</a></li>
                            <li class="text-center trans_200"><a href="#">03</a></li>
                        </ul>
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
                                    <div class="latest_post_title"><a href="{{route('news_post')}}">New Digital Marketing Course</a></div>
                                </div>

                                <!-- Latest Post -->
                                <div class="latest_post">
                                    <div class="latest_post_image">
                                        <img src="images/latest_2.jpg" alt="Workshop">
                                    </div>
                                    <div class="latest_post_title"><a href="{{route('news_post')}}">Web Development Workshop</a></div>
                                </div>

                                <!-- Latest Post -->
                                <div class="latest_post">
                                    <div class="latest_post_image">
                                        <img src="images/latest_3.jpg" alt="Student Story">
                                    </div>
                                    <div class="latest_post_title"><a href="{{route('news_post')}}">Success Stories</a></div>
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
<script src="{{ asset('js/news_custom.js') }}"></script>

@endpush
