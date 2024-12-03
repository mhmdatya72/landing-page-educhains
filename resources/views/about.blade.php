@extends('layouts.dashboard')
@section('title','Educhains-About_Us')
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
            <div class="home_background prlx" style="background-image:url({{ asset('images/contact_background.jpg') }})"></div>
        </div>
        <div class="home_content text-center text-white py-5">
            <h1 class="display-5">About Educhains</h1>
        </div>
    </div>

    <!-- About Content -->
    <div class="about py-5">

        <!-- Introduction -->
        <div class="introduction">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="elements_title h3 font-weight-bold mb-4">Who We Are</div>
                        <p class="lead">Educhains is a leading educational platform offering a range of online and offline courses designed to equip learners with the skills needed to excel in today’s competitive job market. We provide practical, real-world education that helps individuals enhance their careers and achieve their professional goals.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mission and Vision -->
        <div class="mission_vision">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="elements_title h4 font-weight-bold mb-4">Our Mission</div>
                        <p class="lead">Our mission is to provide high-quality, accessible, and industry-relevant education that prepares students for real-world challenges. We aim to empower learners with the knowledge and skills they need to thrive in their careers and make a positive impact in their communities.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="elements_title h4 font-weight-bold mb-4">Our Vision</div>
                        <p class="lead">Our vision is to be a globally recognized leader in educational innovation, delivering personalized learning experiences that cater to the unique needs of each learner. We strive to offer flexible and affordable courses that bridge the gap between education and employment.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services -->
        <div class="services">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="elements_title h3 font-weight-bold mb-4">What We Offer</div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-lg-4 mb-4">
                        <div class="icon_container mb-3">
                            <img src="{{ asset('images/earth-globe.svg') }}" alt="">
                        </div>
                        <h3 class="h5 font-weight-bold">Online Courses</h3>
                        <p class="text-muted">We offer flexible online courses that allow learners to study at their own pace and convenience. Our courses cover a variety of subjects, including marketing, business, design, and technology.</p>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="icon_container mb-3">
                            <img src="{{ asset('images/exam.svg') }}" alt="">
                        </div>
                        <h3 class="h5 font-weight-bold">In-Person Workshops</h3>
                        <p class="text-muted">We also offer in-person workshops and training sessions, providing learners with practical, hands-on experience. These workshops are designed to enhance skills in a collaborative learning environment.</p>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="icon_container mb-3">
                            <img src="{{ asset('images/books.svg') }}" alt="">
                        </div>
                        <h3 class="h5 font-weight-bold">Comprehensive Library</h3>
                        <p class="text-muted">Our library provides access to a wide range of educational resources, including books, articles, and videos, to support learners in their studies and professional development.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Achievements -->
        <div class="milestones">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="elements_title h3 font-weight-bold mb-4">Our Milestones</div>
                    </div>
                </div>
            </div>

            <div class="milestones_container">
                <div class="milestones_background" style="background-image:url({{ asset('images/milestones_background.jpg') }})"></div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mb-4">
                            <div class="milestone text-center p-4">
                                <div class="milestone_icon mb-3"><img src="{{ asset('images/milestone_1.svg') }}" alt="Milestone"></div>
                                <div class="milestone_counter display-4" data-end-value="750">0</div>
                                <div class="milestone_text">Current Students</div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="milestone text-center p-4">
                                <div class="milestone_icon mb-3"><img src="{{ asset('images/milestone_2.svg') }}" alt="Milestone"></div>
                                <div class="milestone_counter display-4" data-end-value="120">0</div>
                                <div class="milestone_text">Certified Teachers</div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="milestone text-center p-4">
                                <div class="milestone_icon mb-3"><img src="{{ asset('images/milestone_3.svg') }}" alt="Milestone"></div>
                                <div class="milestone_counter display-4" data-end-value="39">0</div>
                                <div class="milestone_text">Approved Courses</div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="milestone text-center p-4">
                                <div class="milestone_icon mb-3"><img src="{{ asset('images/milestone_4.svg') }}" alt="Milestone"></div>
                                <div class="milestone_counter display-4" data-end-value="3500" data-sign-before="+">0</div>
                                <div class="milestone_text">Graduate Students</div>
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
