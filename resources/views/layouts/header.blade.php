<header class="header d-flex flex-row">
    <div class="header_content d-flex flex-row align-items-center">
        <!-- Logo -->
        <div class="logo_container">
            <div class="logo">
                <img src="images/logo.png" alt="Educhains Logo">
                <span>EDUCHAINS</span>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="main_nav_container">
            <div class="main_nav">
                <ul class="main_nav_list">
                    <li class="main_nav_item"><a href="/">Home</a></li>
                    <li class="main_nav_item"><a href="{{ route('about') }}">About Us</a></li>
                    <li class="main_nav_item"><a href="{{ route('courses') }}">Courses</a></li>
                    <li class="main_nav_item"><a href="{{ route('services') }}">Services</a></li>
                    <li class="main_nav_item"><a href="{{ route('news') }}">News</a></li>
                    <li class="main_nav_item"><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="header_side d-flex flex-row justify-content-center align-items-center">
        <img src="images/phone-call.svg" alt="Phone Icon">
        <span>+201002247995</span>
    </div>

    <!-- Hamburger -->
    <div class="hamburger_container">
        <i class="fas fa-bars trans_200"></i>
    </div>
</header>
