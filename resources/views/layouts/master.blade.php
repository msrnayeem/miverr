<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#fafafa">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    
    <title>@yield('title')</title>
    
    @stack('styles')
</head>
<body>

<header class="header sticky-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="logo">
                                <h2>Miverr</h2>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Find Service" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <i class="fas fa-search" aria-hidden="true"></i>
                                <div class="input-group-append">
                                    <button class="search btn btn-outline-secondary" type="button">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right">
                    <nav class="header-right-menu">
                        <ul>
                            <li><a href="#">Become a Seller</a></li>
                            <li><a href="#">Sign In</a></li>
                            <li><a class="join" href="#">Join</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <nav class="header-bottom-menu">
            <ul>
                <li>
                    <a href="#">Graphics & Design</a>
                    <ul class="submenu">
                        <li class="submenu-title">Graphics & Design</li>
                        <li><a href="#">Logo Design</a></li>
                        <li><a href="#">Illustration</a></li>
                        <li><a href="#">Brochure Design</a></li>
                        <li><a href="#">Packaging Design</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Digital Marketing</a>
                    <ul class="submenu">
                        <li class="submenu-title">Digital Marketing</li>
                        <li><a href="#">SEO</a></li>
                        <li><a href="#">Social Media Marketing</a></li>
                        <li><a href="#">Email Marketing</a></li>
                        <li class="submenu-title">Digital Marketing</li>
                        <li><a href="#">SEO</a></li>
                        <li><a href="#">Social Media Marketing</a></li>
                        <li><a href="#">Email Marketing</a></li>
                        <li class="submenu-title">Digital Marketing</li>
                        <li><a href="#">SEO</a></li>
                        <li><a href="#">Social Media Marketing</a></li>
                        <li><a href="#">Email Marketing</a></li>
                        <li class="submenu-title">Digital Marketing</li>
                        <li><a href="#">SEO</a></li>
                        <li><a href="#">Social Media Marketing</a></li>
                        <li><a href="#">Email Marketing</a></li>
                        <li class="submenu-title">Digital Marketing</li>
                        <li><a href="#">SEO</a></li>
                        <li><a href="#">Social Media Marketing</a></li>
                        <li><a href="#">Email Marketing</a></li>
                        <li class="submenu-title">Digital Marketing</li>
                        <li><a href="#">SEO</a></li>
                        <li><a href="#">Social Media Marketing</a></li>
                        <li><a href="#">Email Marketing</a></li>
                        <li class="submenu-title">Digital Marketing</li>
                        <li><a href="#">SEO</a></li>
                        <li><a href="#">Social Media Marketing</a></li>
                        <li><a href="#">Email Marketing</a></li>
                        <li class="submenu-title">Digital Marketing</li>
                        <li><a href="#">SEO</a></li>
                        <li><a href="#">Social Media Marketing</a></li>
                        <li><a href="#">Email Marketing</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Writing & Translation</a>
                    <ul class="submenu">
                        <li class="submenu-title">Writing & Translation</li>
                        <li><a href="#">Copywriting</a></li>
                        <li><a href="#">Translation</a></li>
                        <li><a href="#">Proofreading & Editing</a></li>
                    </ul>
                </li>
                <!-- Add more menu items with submenus here -->
            </ul>
        </nav>
    </div>
</header>


    <main>
        @yield('content')
    </main>



    <footer class="footer-top">
            <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                <div class="f-t-left">
                    <div class="row">
                    <div class="col-lg-4">
                        <div class="f-r-box">
                        <h4>Categories</h4>
                        <nav>
                            <ul>
                            <li><a href="#">Graphics & Design</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Writing & Translation</a></li>
                            <li><a href="#">Video & Animation</a></li>
                            <li><a href="#">Music & Audio</a></li>
                            <li><a href="#">Programming & Tech</a></li>
                            <li><a href="#">Business</a></li>
                            </ul>
                        </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="f-r-box">
                        <h4>About</h4>
                        <nav>
                            <ul>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Press & News</a></li>
                            <li><a href="#">Partnerships</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Intellectual Property Claims</a></li>
                            <li><a href="#">Investor Relations</a></li>
                            </ul>
                        </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="f-r-box">
                        <h4>Support</h4>
                        <nav>
                            <ul>
                            <li><a href="#">Help & Support</a></li>
                            <li><a href="#">Trust & Safety</a></li>
                            <li><a href="#">Selling on Fiverr</a></li>
                            <li><a href="#">Buying on Fiverr</a></li>                 
                            </ul>
                        </nav>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="f-t-right">
                    <div class="row">
                    <div class="col-lg-6">
                        <div class="f-r-box">
                        <h4>Community</h4>
                        <nav>
                            <ul>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Community Standards</a></li>                 
                            <li><a href="#">Podcast</a></li>                 
                            <li><a href="#">Affiliates</a></li>                 
                                                            
                            </ul>
                        </nav>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="f-r-box">
                        <h4>More From Fiverr</h4>
                        <nav>
                            <ul>
                            <li><a href="#">Fiverr Pro</a></li>
                            <li><a href="#">Fiverr Studios</a></li>
                            <li><a href="#">Fiverr Logo Maker</a></li>
                            <li><a href="#">Fiverr Guides</a></li>                 
                            
                            <small>Content Marketing</small> </a></li>                 
                            <li><a href="#">AND CO <br>
                                <small>Invoice Software</small> </a></li>                 
                            <li><a href="#">Learn <br>
                                <small>Online Courses</small> </a></li>                                                                      
                            </ul>
                        </nav>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </footer>
    <footer class="footer-bottom">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
            <div class="f-b-left">
                <p><span>Miverr</span>© Miverr International Ltd. {{ date('Y') }}</p>
                <!-- display year -->
                
            </div>
            </div>
            <div class="col-lg-6">
            <div class="f-b-right">
                <nav>
                <ul>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    
                </ul>
                </nav>
            </div>
            </div>
        </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
