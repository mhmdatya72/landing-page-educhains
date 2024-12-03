@extends('layouts.dashboard')
@section('title','Educhains-Services')
@push('styles')


<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
@endpush
@section('content')

<div class="container-fluid">

    <!-- Menu -->
    <div class="menu_container menu_mm">
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
        </div>
        <div class="home_content">
            <h1>Our Services</h1>
        </div>
    </div>

    <!-- Services -->

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="services_container">
                        <div class="service_item text-left d-flex flex-column align-items-start justify-content-start">
                            <div class="icon_container d-flex flex-column justify-content-end">
                                <img src="images/earth-globe.svg" alt="">
                            </div>
                            <h3>Online Courses</h3>
                            <p>Our online courses offer flexibility and industry-relevant skills. Learn at your own pace with a variety of courses in digital marketing, web development, and more.</p>
                        </div>

                        <div class="service_item text-left d-flex flex-column align-items-start justify-content-start">
                            <div class="icon_container d-flex flex-column justify-content-end">
                                <img src="images/exam.svg" alt="">
                            </div>
                            <h3>In-Person Training</h3>
                            <p>For those who prefer face-to-face learning, we offer in-person training sessions led by expert instructors. Participate in workshops, seminars, and more.</p>
                        </div>

                        <div class="service_item text-left d-flex flex-column align-items-start justify-content-start">
                            <div class="icon_container d-flex flex-column justify-content-end">
                                <img src="images/books.svg" alt="">
                            </div>
                            <h3>Amazing Resource Library</h3>
                            <p>Access our extensive library of learning materials, including e-books, research papers, and videos, designed to enhance your learning experience.</p>
                        </div>

                        <div class="service_item text-left d-flex flex-column align-items-start justify-content-start">
                            <div class="icon_container d-flex flex-column justify-content-end">
                                <img src="images/professor.svg" alt="">
                            </div>
                            <h3>Expert Instructors</h3>
                            <p>Our instructors are highly qualified and experienced professionals in their fields. They provide personalized attention to help you succeed.</p>
                        </div>

                        <div class="service_item text-left d-flex flex-column align-items-start justify-content-start">
                            <div class="icon_container d-flex flex-column justify-content-end">
                                <img src="images/blackboard.svg" alt="">
                            </div>
                            <h3>Top Educational Programs</h3>
                            <p>We offer a wide range of educational programs that are aligned with the latest trends in the industry, designed to help you build a successful career.</p>
                        </div>

                        <div class="service_item text-left d-flex flex-column align-items-start justify-content-start">
                            <div class="icon_container d-flex flex-column justify-content-end">
                                <img src="images/mortarboard.svg" alt="">
                            </div>
                            <h3>Graduate Diploma</h3>
                            <p>Earn a prestigious graduate diploma from Educhains after completing your program. Our diplomas are recognized and respected in the industry.</p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Milestones -->

            <div class="milestones">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="elements_title">Milestones</div>
                        </div>
                    </div>
                </div>

                <div class="milestones_container">
                    <div class="milestones_background" style="background-image:url(images/milestones_background.jpg)"></div>

                    <div class="container">
                        <div class="row">

                            <!-- Milestone -->
                            <div class="col-lg-3 milestone_col">
                                <div class="milestone text-center">
                                    <div class="milestone_icon"><img src="images/milestone_1.svg" alt="Current Students"></div>
                                    <div class="milestone_counter" data-end-value="750">0</div>
                                    <div class="milestone_text">Current Students</div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-lg-3 milestone_col">
                                <div class="milestone text-center">
                                    <div class="milestone_icon"><img src="images/milestone_2.svg" alt="Certified Teachers"></div>
                                    <div class="milestone_counter" data-end-value="120">0</div>
                                    <div class="milestone_text">Certified Teachers</div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-lg-3 milestone_col">
                                <div class="milestone text-center">
                                    <div class="milestone_icon"><img src="images/milestone_3.svg" alt="Approved Courses"></div>
                                    <div class="milestone_counter" data-end-value="39">0</div>
                                    <div class="milestone_text">Approved Courses</div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="col-lg-3 milestone_col">
                                <div class="milestone text-center">
                                    <div class="milestone_icon"><img src="images/milestone_4.svg" alt="Graduate Students"></div>
                                    <div class="milestone_counter" data-end-value="3500" data-sign-before="+">0</div>
                                    <div class="milestone_text">Graduate Students</div>
                                </div>
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


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/elements_custom.js"></script>
@endpush
