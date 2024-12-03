<!-- Footer -->
<footer class="footer">
    <div class="container">

        <!-- Newsletter -->
        <div class="newsletter">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Subscribe to our newsletter</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <div class="newsletter_form_container mx-auto">
                        <form action="post">
                            <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                <input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Please enter a valid email.">
                                <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer Content -->
        <div class="footer_content">
            <div class="row">

                <!-- Footer Column - About -->
                <div class="col-lg-3 footer_col">
                    <!-- Logo -->
                    <div class="logo_container">
                        <div class="logo">
                            <img src="{{ asset('images/logo.png') }}" alt="">
                            <span>Educhains</span>
                        </div>
                    </div>
                    <p class="footer_about_text">Educhains is an innovative educational platform providing courses and services tailored to local and global labor market needs through modern technology.</p>
                </div>

                <!-- Footer Column - Menu -->
                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Menu</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item"><a href="/">Home</a></li>
                            <li class="footer_list_item"><a href="{{ route('about') }}">About Us</a></li>
                            <li class="footer_list_item"><a href="{{ route('courses') }}">Courses</a></li>
                            <li class="footer_list_item"><a href="{{ route('news') }}">News</a></li>
                            <li class="footer_list_item"><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column - Useful Links -->
                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Useful Links</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item"><a href="#">Testimonials</a></li>
                            <li class="footer_list_item"><a href="#">FAQ</a></li>
                            <li class="footer_list_item"><a href="#">Community</a></li>
                            <li class="footer_list_item"><a href="#">Gallery</a></li>
                            <li class="footer_list_item"><a href="#">Tuition Fees</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column - Contact -->
                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Contact</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/placeholder.svg" alt="">
                                </div>
                                El Ekbal Street, Louran, Alexandria, Egypt
                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/smartphone.svg" alt="">
                                </div>
                                +201002247995
                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/envelope.svg" alt="">
                                </div>
                                educhainseg@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer Copyright -->
        <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
            <div class="footer_copyright">
                <span>Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved | Educhains</span>
            </div>
            <div class="footer_social ml-sm-auto">
                <ul class="menu_social">
                    <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</footer>
