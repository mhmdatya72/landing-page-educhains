@extends('layouts.dashboard')
@section('title','Educhains-Contact_Us')
@push('styles')
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
@endpush
@section('content')
<div class="super_container">

    <!-- Home -->

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
        </div>
        <div class="home_content">
            <h1>Contact</h1>
        </div>
    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- Contact Form -->
                    <div class="contact_form">
                        <div class="contact_title">Get in Touch</div>

                        <div class="contact_form_container">
                            <form action="post">
                                <input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Your Name" required="required" data-error="Name is required.">
                                <input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="Your Email" required="required" data-error="Valid email is required.">
                                <textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Your Message" required="required" data-error="Please, write us a message."></textarea>
                                <button id="contact_send_btn" type="button" class="contact_send_btn trans_200" value="Submit">Send Message</button>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="about">
                        <div class="about_title">Join Our Courses</div>
                        <p class="about_text">At Educhains, we offer a wide range of online and offline courses designed to meet the needs of today’s job market. Whether you're looking to improve your skills or gain new ones, we have the right course for you.</p>

                        <div class="contact_info">
                            <ul>
                                <li class="contact_info_item">
                                    <div class="contact_info_icon">
                                        <img src="images/placeholder.svg" alt="Location Icon">
                                    </div>
                                    El Ekbal Street, Louran, Alexandria, Egypt
                                </li>
                                <li class="contact_info_item">
                                    <div class="contact_info_icon">
                                        <img src="images/smartphone.svg" alt="Phone Icon">
                                    </div>
                                    +201002247995
                                </li>
                                <li class="contact_info_item">
                                    <div class="contact_info_icon">
                                        <img src="images/envelope.svg" alt="Email Icon">
                                    </div>educhainseg@gmail.com
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Google Map -->

            <div class="row">
                <div class="col">
                    <div id="google_map">
                        <div class="map_container">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



</div>

@endsection
@push('scripts')
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

@endpush
