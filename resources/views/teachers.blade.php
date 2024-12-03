@extends('layouts.dashboard')
@section('title','Educhains-Teachers')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/teachers_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/teachers_responsive.css') }}">

@endpush
@section('content')



<div class="super_container">


    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url(images/teachers_background.jpg)"></div>
        </div>
        <div class="home_content">
            <h1>Teachers</h1>
        </div>
    </div>

    <!-- Teachers -->

    <div class="teachers page_section">
        <div class="container">
            <div class="row">

                <!-- Teacher -->
                <div class="col-lg-4 teacher">
                    <div class="card">
                        <div class="card_img">
                            <div class="card_plus trans_200 text-center"><a href="#">+</a></div>
                            <img class="card-img-top trans_200" src="images/teacher_1.jpg" alt="https://unsplash.com/@michaeldam">
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title"><a href="#">Maria Smith</a></div>
                            <div class="card-text">Graphic Designer</div>
                            <div class="teacher_social">
                                <ul class="menu_social">
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Teacher -->
                <div class="col-lg-4 teacher">
                    <div class="card">
                        <div class="card_img">
                            <div class="card_plus trans_200 text-center"><a href="#">+</a></div>
                            <img class="card-img-top trans_200" src="images/teacher_2.jpg" alt="https://unsplash.com/@jcpeacock">
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title"><a href="#">Christian Blue</a></div>
                            <div class="card-text">Graphic Designer</div>
                            <div class="teacher_social">
                                <ul class="menu_social">
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Teacher -->
                <div class="col-lg-4 teacher">
                    <div class="card">
                        <div class="card_img">
                            <div class="card_plus trans_200 text-center"><a href="#">+</a></div>
                            <img class="card-img-top trans_200" src="images/teacher_3.jpg" alt="https://unsplash.com/photos/n8jeOSxCRfQ">
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title"><a href="#">James Brown</a></div>
                            <div class="card-text">Graphic Designer</div>
                            <div class="teacher_social">
                                <ul class="menu_social">
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Teacher -->
                <div class="col-lg-4 teacher">
                    <div class="card">
                        <div class="card_img">
                            <div class="card_plus trans_200 text-center"><a href="#">+</a></div>
                            <img class="card-img-top trans_200" src="images/teacher_4.jpg" alt="https://unsplash.com/@seteales">
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title"><a href="#">Julie Denver</a></div>
                            <div class="card-text">Graphic Designer</div>
                            <div class="teacher_social">
                                <ul class="menu_social">
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Teacher -->
                <div class="col-lg-4 teacher">
                    <div class="card">
                        <div class="card_img">
                            <div class="card_plus trans_200 text-center"><a href="#">+</a></div>
                            <img class="card-img-top trans_200" src="images/teacher_5.jpg" alt="https://unsplash.com/@jaredsluyter">
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title"><a href="#">Julie Denver</a></div>
                            <div class="card-text">Graphic Designer</div>
                            <div class="teacher_social">
                                <ul class="menu_social">
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Teacher -->
                <div class="col-lg-4 teacher">
                    <div class="card">
                        <div class="card_img">
                            <div class="card_plus trans_200 text-center"><a href="#">+</a></div>
                            <img class="card-img-top trans_200" src="images/teacher_6.jpg" alt="https://unsplash.com/@mehdizadeh">
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title"><a href="#">Julie Denver</a></div>
                            <div class="card-text">Graphic Designer</div>
                            <div class="teacher_social">
                                <ul class="menu_social">
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Milestones -->

    <div class="milestones">
        <div class="milestones_background" style="background-image:url(images/milestones_background.jpg)"></div>

        <div class="container">
            <div class="row">

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="images/milestone_1.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
                        <div class="milestone_counter" data-end-value="750">0</div>
                        <div class="milestone_text">Current Students</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="images/milestone_2.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
                        <div class="milestone_counter" data-end-value="120">0</div>
                        <div class="milestone_text">Certified Teachers</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="images/milestone_3.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
                        <div class="milestone_counter" data-end-value="39">0</div>
                        <div class="milestone_text">Approved Courses</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="images/milestone_4.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
                        <div class="milestone_counter" data-end-value="3500" data-sign-before="+">0</div>
                        <div class="milestone_text">Graduate Students</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Become -->

    <div class="become">
        <div class="container">
            <div class="row row-eq-height">

                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="become_title">
                        <h1>Become an Educhains Instructor</h1>
                    </div>
                    <p class="become_text">At Educhains, we are looking for passionate, skilled, and dedicated instructors to join our team and help shape the future of online education. Whether you have expertise in digital marketing, web development, or any other field, we welcome educators who are eager to share their knowledge and inspire the next generation of learners.</p>
                    <p class="become_text">As an Educhains instructor, you'll have access to a supportive community, flexible teaching hours, and the opportunity to impact students from around the world. If you're ready to take your teaching career to the next level, we'd love to have you on board.</p>
                    <div class="become_button text-center trans_200">
                        <a href="#">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="become_image">
                        <img src="images/become.jpg" alt="Educhains Instructor">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->


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
<script src="{{ asset('js/teachers_custom.js') }}"></script>

@endpush
