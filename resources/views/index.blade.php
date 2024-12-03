@extends('layouts.dashboard')
@section('title','Educhains-Home')
@section('content')
<!-- Menu -->


<!-- Home -->

<div class="home">

    <!-- Hero Slider -->
    <div class="hero_slider_container">
        <div class="hero_slider owl-carousel">

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
                    </div>
                </div>
            </div>

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
                    </div>
                </div>
            </div>

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
        <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
    </div>

</div>

<div class="hero_boxes">
    <div class="hero_boxes_inner">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="images/earth-globe.svg" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Online Courses</h2>
                            <a href="courses.html" class="hero_box_link">view more</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="images/books.svg" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Our Library</h2>
                            <a href="courses.html" class="hero_box_link">view more</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="images/professor.svg" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Our Teachers</h2>
                            <a href="{{ route('teachers') }}" class="hero_box_link">view more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
                <div class="card d-flex flex-column">
                    <img class="card-img-top" src="images/course_1.jpg" alt="Digital Marketing">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="card-title"><a href="courses.html">Digital Marketing Essentials</a></div>
                        <div class="card-text">Learn SEO, social media strategies, and digital advertising techniques.</div>
                    </div>
                    <div class="price_box d-flex flex-row align-items-center">
                        <div class="course_author_image">
                            <img src="images/author.jpg" alt="Instructor">
                        </div>
                        <div class="course_author_name">John Doe, <span>Instructor</span></div>
                        <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$49</span></div>
                    </div>
                </div>
            </div>

            <!-- Popular Course Item -->
            <div class="col-lg-4 course_box">
                <div class="card d-flex flex-column">
                    <img class="card-img-top" src="images/course_2.jpg" alt="Tech Skills">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="card-title"><a href="courses.html">Introduction to Web Development</a></div>
                        <div class="card-text">Learn the basics of HTML, CSS, and JavaScript to build your first website.</div>
                    </div>
                    <div class="price_box d-flex flex-row align-items-center">
                        <div class="course_author_image">
                            <img src="images/author.jpg" alt="Instructor">
                        </div>
                        <div class="course_author_name">Jane Smith, <span>Instructor</span></div>
                        <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$39</span></div>
                    </div>
                </div>
            </div>

            <!-- Popular Course Item -->
            <div class="col-lg-4 course_box">
                <div class="card d-flex flex-column">
                    <img class="card-img-top" src="images/course_3.jpg" alt="Advanced Photoshop">
                    <div class="card-body text-center d-flex flex-column">
                        <div class="card-title"><a href="courses.html">Advanced Photoshop</a></div>
                        <div class="card-text">Master advanced techniques in Photoshop for professional-grade designs.</div>
                    </div>
                    <div class="price_box d-flex flex-row align-items-center">
                        <div class="course_author_image">
                            <img src="images/author.jpg" alt="Instructor">
                        </div>
                        <div class="course_author_name">Michael Smith, <span>Instructor</span></div>
                        <div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$59</span></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Register -->

<div class="register">

    <div class="container-fluid">

        <div class="row row-eq-height">
            <div class="col-lg-6 nopadding">

                <!-- Register -->

                <div class="register_section d-flex flex-column align-items-center justify-content-center">
                    <div class="register_content text-center">
                        <h1 class="register_title">Register now and get a <span>50% discount</span> until 1 January</h1>
                        <p class="register_text">Join Educhains today and gain access to a wide range of industry-relevant courses, flexible learning options, and expert instructors. Take the first step towards enhancing your career prospects!</p>
                        <div class="button button_1 register_button mx-auto trans_200"><a href="register.html">Register Now</a></div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 nopadding">

                <!-- Search -->

                <div class="search_section d-flex flex-column align-items-center justify-content-center">
                    <div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
                    <div class="search_content text-center">
                        <h1 class="search_title">Find the Perfect Course</h1>
                        <form id="search_form" class="search_form" action="post">
                            <input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Course Name" required="required" data-error="Course name is required.">
                            <input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Category (e.g. Digital Marketing)">
                            <input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Degree Level (e.g. Beginner, Advanced)">
                            <button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">Search Courses</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Services -->

<div class="services page_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Our Services</h1>
                </div>
            </div>
        </div>

        <div class="row services_row">
            <!-- Innovative Educational Solutions -->
            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/earth-globe.svg" alt="Innovative Educational Solutions">
                </div>
                <h3>Innovative Educational Solutions</h3>
                <p>We provide modern educational and training solutions tailored to meet the evolving demands of the job market.</p>
            </div>

            <!-- Virtual Internships -->
            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/exam.svg" alt="Virtual Internships">
                </div>
                <h3>Virtual Internships</h3>
                <p>Gain practical experience through our virtual internship programs available in various fields.</p>
            </div>

            <!-- Customized Programs -->
            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/books.svg" alt="Customized Programs">
                </div>
                <h3>Customized Programs</h3>
                <p>Programs designed specifically to address individual needs, balancing theory and practice for optimal results.</p>
            </div>

            <!-- Educational Consultancy -->
            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/professor.svg" alt="Educational Consultancy">
                </div>
                <h3>Educational Consultancy</h3>
                <p>Expert guidance for schools, organizations, and individuals to enhance learning outcomes and operational efficiency.</p>
            </div>

            <!-- Market-Driven Learning -->
            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/blackboard.svg" alt="Market-Driven Learning">
                </div>
                <h3>Market-Driven Learning</h3>
                <p>Structured programs to align skills with industry demands and provide career-focused education.</p>
            </div>

            <!-- Certification and Career Support -->
            <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                <div class="icon_container d-flex flex-column justify-content-end">
                    <img src="images/mortarboard.svg" alt="Certification and Career Support">
                </div>
                <h3>Certification and Career Support</h3>
                <p>Receive recognized certifications and career support to achieve your professional aspirations.</p>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->

<div class="testimonials page_section">
    <div class="testimonials_background_container prlx_parent">
        <div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)"></div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>What Our Students Say</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <div class="testimonials_slider_container">

                    <!-- Testimonials Slider -->
                    <div class="owl-carousel owl-theme testimonials_slider">

                        <!-- Testimonials Item -->
                        <div class="owl-item">
                            <div class="testimonials_item text-center">
                                <div class="quote">“</div>
                                <p class="testimonials_text">“Educhains has significantly improved my skills in digital marketing. The course was comprehensive, practical, and aligned with the latest industry trends. It helped me land my first job in the field!”</p>
                                <div class="testimonial_user">
                                    <div class="testimonial_image mx-auto">
                                        <img src="images/testimonials_user.jpg" alt="Student Image">
                                    </div>
                                    <div class="testimonial_name">Sarah Ahmed</div>
                                    <div class="testimonial_title">Digital Marketing Graduate</div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials Item -->
                        <div class="owl-item">
                            <div class="testimonials_item text-center">
                                <div class="quote">“</div>
                                <p class="testimonials_text">“The virtual internship opportunities at Educhains provided me with invaluable hands-on experience. I was able to apply what I learned in real-world scenarios, which made a huge difference in my career.”</p>
                                <div class="testimonial_user">
                                    <div class="testimonial_image mx-auto">
                                        <img src="images/testimonials_user.jpg" alt="Student Image">
                                    </div>
                                    <div class="testimonial_name">Mohamed Ali</div>
                                    <div class="testimonial_title">Web Development Graduate</div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials Item -->
                        <div class="owl-item">
                            <div class="testimonials_item text-center">
                                <div class="quote">“</div>
                                <p class="testimonials_text">“The trainers at Educhains are top-notch. Their industry knowledge and practical insights helped me improve my professional skills and understand the job market better.”</p>
                                <div class="testimonial_user">
                                    <div class="testimonial_image mx-auto">
                                        <img src="images/testimonials_user.jpg" alt="Student Image">
                                    </div>
                                    <div class="testimonial_name">Ahmed Gamal</div>
                                    <div class="testimonial_title">Technology Solutions Graduate</div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- Events -->

<div class="events page_section">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Upcoming Events</h1>
                </div>
            </div>
        </div>

        <div class="event_items">

            <!-- Event Item -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-2 order-lg-1 order-2">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">15</div>
                                <div class="event_month">December</div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name"><a class="trans_200" href="#">Digital Marketing Workshop</a></div>
                                <div class="event_location">Educhains Training Center</div>
                                <p>Join us for a hands-on workshop on digital marketing, including SEO, social media strategies, and more!</p>
                            </div>
                        </div>

                        <div class="col-lg-4 order-lg-3 order-1">
                            <div class="event_image">
                                <img src="images/event_1.jpg" alt="Digital Marketing Workshop">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Event Item -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-2 order-lg-1 order-2">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">20</div>
                                <div class="event_month">December</div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name"><a class="trans_200" href="#">Open Day for New Students</a></div>
                                <div class="event_location">Educhains Campus</div>
                                <p>Discover the wide range of courses and services offered by Educhains. Meet our instructors and staff!</p>
                            </div>
                        </div>

                        <div class="col-lg-4 order-lg-3 order-1">
                            <div class="event_image">
                                <img src="images/event_2.jpg" alt="Open Day">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Event Item -->
            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-2 order-lg-1 order-2">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <div class="event_day">10</div>
                                <div class="event_month">January</div>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name"><a class="trans_200" href="#">Job Placement Fair</a></div>
                                <div class="event_location">Educhains Training Center</div>
                                <p>Meet leading companies and learn about internship and job opportunities in the technology and business sectors.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 order-lg-3 order-1">
                            <div class="event_image">
                                <img src="images/event_3.jpg" alt="Job Placement Fair">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection
