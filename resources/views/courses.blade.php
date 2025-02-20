@extends('layouts.dashboard')
@section('title','Educhains-Courses')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset ('styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset ('styles/courses_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/courses_responsive.css') }}">
@endpush
@section('content')
<div class="super_container">


    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
        </div>
        <div class="home_content">
            <h1>Courses</h1>
        </div>
    </div>

    <!-- Popular -->

    <div class="popular page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Popular Courses</h1>
                    </div>
                </div>
            </div>

            <div class="row course_boxes">

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="{{asset ("images/course_1.jpg") }}" alt="https://unsplash.com/@kellybrito">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">A complete guide to design</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="{{ asset('images/author.jpg') }}" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/course_2.jpg') }}" alt="https://unsplash.com/@cikstefan">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">Beginners guide to HTML</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="{{ asset('images/author.jpg') }}" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset("images/course_3.jpg") }}" alt="https://unsplash.com/@dsmacinnes">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">Advanced Photoshop</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="{{asset ('images/author.jpg') }}" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/course_4.jpg') }}" alt="https://unsplash.com/@kellitungay">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">A complete guide to design</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="{{ asset('images/author.jpg') }}" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/course_5.jpg') }}" alt="https://unsplash.com/@claybanks1989">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">Beginners guide to HTML</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="{{asset ('images/author.jpg') }}" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="{{asset ('images/course_6.jpg') }}" alt="https://unsplash.com/@element5digital">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">Advanced Photoshop</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="{{ asset('images/author.jpg') }}" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/course_7.jpg') }}" alt="https://unsplash.com/@gaellemm">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">A complete guide to design</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="{{ asset('images/author.jpg') }}" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/course_8.jpg') }}" alt="https://unsplash.com/@juanmramosjr">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">Beginners guide to HTML</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="{{ asset('images/author.jpg') }}" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                        </div>
                    </div>
                </div>

                <!-- Popular Course Item -->
                <div class="col-lg-4 course_box">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/course_9.jpg') }}" alt="https://unsplash.com/@kimberlyfarmer">
                        <div class="card-body text-center">
                            <div class="card-title"><a href="courses.html">Advanced Photoshop</a></div>
                            <div class="card-text">Adobe Guide, Layes, Smart Objects etc...</div>
                        </div>
                        <div class="price_box d-flex flex-row align-items-center">
                            <div class="course_author_image">
                                <img src="{{ asset('images/author.jpg') }}" alt="https://unsplash.com/@mehdizadeh">
                            </div>
                            <div class="course_author_name">Michael Smith, <span>Author</span></div>
                            <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$29</span></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>

@endsection
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
<script src="{{ asset('js/courses_custom.js') }}"></script>

@endpush
