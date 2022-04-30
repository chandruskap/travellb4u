  <header id="header" class="navbar-static-top">
            <div class="topnav hidden-xs">
                <div class="container pt-3">
                    <ul class="quick-menu pull-left">
                        <li><a href="#">My Account</a></li>
                        <li class="ribbon">
                            <a href="#">English</a>
                            <ul class="menu mini">
                                <li><a href="#" title="Dansk">Dansk</a></li>
                                <li><a href="#" title="Deutsch">Deutsch</a></li>
                                <li class="active"><a href="#" title="English">English</a></li>
                                <li><a href="#" title="Español">Español</a></li>
                                <li><a href="#" title="Français">Français</a></li>
                                <li><a href="#" title="Italiano">Italiano</a></li>
                                <li><a href="#" title="Magyar">Magyar</a></li>
                                <li><a href="#" title="Nederlands">Nederlands</a></li>
                                <li><a href="#" title="Norsk">Norsk</a></li>
                                <li><a href="#" title="Polski">Polski</a></li>
                                <li><a href="#" title="Português">Português</a></li>
                                <li><a href="#" title="Suomi">Suomi</a></li>
                                <li><a href="#" title="Svenska">Svenska</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="quick-menu pull-right">
                        <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
                        <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
                        <li class="ribbon currency">
                            <a href="#" title="">INR</a>
                            <ul class="menu mini">
                                <li class="active"><a href="#" title="INR">INR</a></li>
                                <li><a href="#" title="AUD">AUD</a></li>
                                <li><a href="#" title="BRL">BRL</a></li>
                                <li><a href="#" title="USD">USD</a></li>
                                <li><a href="#" title="CAD">CAD</a></li>
                                <li><a href="#" title="CHF">CHF</a></li>
                                <li><a href="#" title="CNY">CNY</a></li>
                                <li><a href="#" title="CZK">CZK</a></li>
                                <li><a href="#" title="DKK">DKK</a></li>
                                <li><a href="#" title="EUR">EUR</a></li>
                                <li><a href="#" title="GBP">GBP</a></li>
                                <li><a href="#" title="HKD">HKD</a></li>
                                <li><a href="#" title="HUF">HUF</a></li>
                                <li><a href="#" title="IDR">IDR</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-header">

                <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                    Mobile Menu Toggle
                </a>

                <div class="container">
                    <h1 class="logo navbar-brand">
                        <a href="index.html" title="Travelo - home">
                            <img src="images/logo.jpg" alt="Travelo HTML5 Template" />
                        </a>
                    </h1>

                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li class="menu-item-has-children">
                                <a href="{{route('index')}}" class="{{last(request()->segments()) == 'index' ? 'active':''}}">Home</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('hotel')}}" class="{{last(request()->segments()) == 'hotel' ? 'active':''}}">Hotels</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('fights')}}" class="{{last(request()->segments()) == 'fights' ? 'active':''}}">Flights</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('holidays')}}" class="{{last(request()->segments()) == 'holidays' ? 'active':''}}">Holidays</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('gifting')}}" class="{{last(request()->segments()) == 'gifting' ? 'active':''}}">Gifting</a>

                            </li>

                            <li class="">
                                <a href="{{route('contact-us')}}" class="{{last(request()->segments()) == 'contact-us' ? 'active':''}}">Contact Us</a>

                            </li>


                        </ul>
                    </nav>
                </div>

                <nav id="mobile-menu-01" class="mobile-menu collapse">
                    <ul id="mobile-primary-menu" class="menu">
                        <li class="menu-item-has-children">
                            <a href="index.html">Home</a>
                            <ul>
                                <li><a href="index.html">Home Layout 1</a></li>
                                <li><a href="homepage2.html">Home Layout 2</a></li>
                                <li><a href="homepage3.html">Home Layout 3</a></li>
                                <li><a href="homepage4.html">Home Layout 4</a></li>
                                <li><a href="homepage5.html">Home Layout 5</a></li>
                                <li><a href="homepage6.html">Home Layout 6</a></li>
                                <li><a href="homepage7.html">Home Layout 7</a></li>
                                <li><a href="homepage8.html">Home Layout 8</a></li>
                                <li><a href="homepage9.html">Home Layout 9</a></li>
                                <li><a href="homepage10.html">Home Layout 10</a></li>
                                <li><a href="homepage11.html">Home Layout 11</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="hotel-index.html">Hotels</a>
                            <ul>
                                <li><a href="hotel-index.html">Home Hotels</a></li>
                                <li><a href="hotel-list-view.html">List View</a></li>
                                <li><a href="hotel-grid-view.html">Grid View</a></li>
                                <li><a href="hotel-block-view.html">Block View</a></li>
                                <li><a href="hotel-detailed.html">Detailed</a></li>
                                <li><a href="hotel-booking.html">Booking</a></li>
                                <li><a href="hotel-thankyou.html">Thank You</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="flight-index.html">Flights</a>
                            <ul>
                                <li><a href="flight-index.html">Home Flights</a></li>
                                <li><a href="flight-list-view.html">List View</a></li>
                                <li><a href="flight-grid-view.html">Grid View</a></li>
                                <li><a href="flight-block-view.html">Block View</a></li>
                                <li><a href="flight-detailed.html">Detailed</a></li>
                                <li><a href="flight-booking.html">Booking</a></li>
                                <li><a href="flight-thankyou.html">Thank You</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="car-index.html">Cars</a>
                            <ul>
                                <li><a href="car-index.html">Home Cars</a></li>
                                <li><a href="car-list-view.html">List View</a></li>
                                <li><a href="car-grid-view.html">Grid View</a></li>
                                <li><a href="car-block-view.html">Block View</a></li>
                                <li><a href="car-detailed.html">Detailed</a></li>
                                <li><a href="car-booking.html">Booking</a></li>
                                <li><a href="car-thankyou.html">Thank You</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="cruise-index.html">Cruises</a>
                            <ul>
                                <li><a href="cruise-index.html">Home Cruises</a></li>
                                <li><a href="cruise-list-view.html">List View</a></li>
                                <li><a href="cruise-grid-view.html">Grid View</a></li>
                                <li><a href="cruise-block-view.html">Block View</a></li>
                                <li><a href="cruise-detailed.html">Detailed</a></li>
                                <li><a href="cruise-booking.html">Booking</a></li>
                                <li><a href="cruise-thankyou.html">Thank You</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="tour-index.html">Tour</a>
                            <ul>
                                <li><a href="tour-index.html">Home Tour</a></li>
                                <li><a href="tour-fancy-package-2column.html">Fancy Packages 2 Column</a></li>
                                <li><a href="tour-fancy-package-3column.html">Fancy Packages 3 Column</a></li>
                                <li><a href="tour-fancy-package-4column.html">Fancy Packages 4 Column</a></li>
                                <li><a href="tour-simple-package-2column.html">Simple Packages 2 Column</a></li>
                                <li><a href="tour-simple-package-3column.html">Simple Packages 3 Column</a></li>
                                <li><a href="tour-simple-package-4column.html">Simple Packages 4 Column</a></li>
                                <li><a href="tour-simple-package-3column.html">Location - Eruope</a></li>
                                <li><a href="tour-simple-package-4column.html">Location - North America</a></li>
                                <li><a href="tour-detailed1.html">Detailed 1</a></li>
                                <li><a href="tour-detailed2.html">Detailed 2</a></li>
                                <li><a href="tour-booking.html">Booking</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="#">Standard Pages</a>
                                    <ul>
                                        <li><a href="pages-aboutus1.html">About Us 1</a></li>
                                        <li><a href="pages-aboutus2.html">About Us 2</a></li>
                                        <li><a href="pages-services1.html">Services 1</a></li>
                                        <li><a href="pages-services2.html">Services 2</a></li>
                                        <li><a href="pages-photogallery-4column.html">Gallery 4 Column</a></li>
                                        <li><a href="pages-photogallery-3column.html">Gallery 3 Column</a></li>
                                        <li><a href="pages-photogallery-2column.html">Gallery 2 Column</a></li>
                                        <li><a href="pages-photogallery-fullview.html">Gallery Read</a></li>
                                        <li><a href="pages-blog-rightsidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="pages-blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="pages-blog-fullwidth.html">Blog Full Width</a></li>
                                        <li><a href="pages-blog-read.html">Blog Read</a></li>
                                        <li><a href="pages-faq1.html">Faq 1</a></li>
                                        <li><a href="pages-faq2.html">Faq 2</a></li>
                                        <li><a href="pages-layouts-leftsidebar.html">Layouts Left Sidebar</a></li>
                                        <li><a href="pages-layouts-rightsidebar.html">Layouts Right Sidebar</a></li>
                                        <li><a href="pages-layouts-twosidebar.html">Layouts Two Sidebar</a></li>
                                        <li><a href="pages-layouts-fullwidth.html">Layouts Full Width</a></li>
                                        <li><a href="pages-contactus1.html">Contact Us 1</a></li>
                                        <li><a href="pages-contactus2.html">Contact Us 2</a></li>
                                        <li><a href="pages-contactus3.html">Contact Us 3</a></li>
                                        <li><a href="pages-travelo-policies.html">Travelo Policies</a></li>
                                        <li><a href="pages-sitemap.html">Site Map</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Extra Pages</a>
                                    <ul>
                                        <li><a href="extra-pages-holidays.html">Holidays</a></li>
                                        <li><a href="extra-pages-hotdeals.html">Hot Deals</a></li>
                                        <li><a href="extra-pages-before-you-fly.html">Before You Fly</a></li>
                                        <li><a href="extra-pages-inflight-experience.html">Inflight Experience</a></li>
                                        <li><a href="extra-pages-things-todo1.html">Things To Do 1</a></li>
                                        <li><a href="extra-pages-things-todo2.html">Things To Do 2</a></li>
                                        <li><a href="extra-pages-travel-essentials.html">Travel Essentials</a></li>
                                        <li><a href="extra-pages-travel-stories.html">Travel Stories</a></li>
                                        <li><a href="extra-pages-travel-guide.html">Travel Guide</a></li>
                                        <li><a href="extra-pages-travel-ideas.html">Travel Ideas</a></li>
                                        <li><a href="extra-pages-travel-insurance.html">Travel Insurance</a></li>
                                        <li><a href="extra-pages-group-booking.html">Group Bookings</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Special Pages</a>
                                    <ul>
                                        <li><a href="pages-404-1.html">404 Page 1</a></li>
                                        <li><a href="pages-404-2.html">404 Page 2</a></li>
                                        <li><a href="pages-404-3.html">404 Page 3</a></li>
                                        <li><a href="pages-coming-soon1.html">Coming Soon 1</a></li>
                                        <li><a href="pages-coming-soon2.html">Coming Soon 2</a></li>
                                        <li><a href="pages-coming-soon3.html">Coming Soon 3</a></li>
                                        <li><a href="pages-loading1.html">Loading Page 1</a></li>
                                        <li><a href="pages-loading2.html">Loading Page 2</a></li>
                                        <li><a href="pages-loading3.html">Loading Page 3</a></li>
                                        <li><a href="pages-login1.html">Login Page 1</a></li>
                                        <li><a href="pages-login2.html">Login Page 2</a></li>
                                        <li><a href="pages-login3.html">Login Page 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Shortcodes</a>
                            <ul>
                                <li><a href="shortcode-accordions-toggles.html">Accordions &amp; Toggles</a></li>
                                <li><a href="shortcode-tabs.html">Tabs</a></li>
                                <li><a href="shortcode-buttons.html">Buttons</a></li>
                                <li><a href="shortcode-icon-boxes.html">Icon Boxes</a></li>
                                <li><a href="shortcode-gallery-styles.html">Image &amp; Gallery Styles</a></li>
                                <li><a href="shortcode-image-box-styles.html">Image Box Styles</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Listing Styles</a>
                                    <ul>
                                        <li><a href="shortcode-listing-style1.html">Listing Style 01</a></li>
                                        <li><a href="shortcode-listing-style2.html">Listing Style 02</a></li>
                                        <li><a href="shortcode-listing-style3.html">Listing Style 03</a></li>
                                    </ul>
                                </li>
                                <li><a href="shortcode-dropdowns.html">Dropdowns</a></li>
                                <li><a href="shortcode-pricing-tables.html">Pricing Tables</a></li>
                                <li><a href="shortcode-testimonials.html">Testimonials</a></li>
                                <li><a href="shortcode-our-team.html">Our Team</a></li>
                                <li><a href="shortcode-gallery-popup.html">Gallery Popup</a></li>
                                <li><a href="shortcode-map-popup.html">Map Popup</a></li>
                                <li><a href="shortcode-style-changer.html">Style Changer</a></li>
                                <li><a href="shortcode-typography.html">Typography</a></li>
                                <li><a href="shortcode-animations.html">Animations</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Bonus</a>
                            <ul>
                                <li><a href="dashboard1.html">Dashboard 1</a></li>
                                <li><a href="dashboard2.html">Dashboard 2</a></li>
                                <li><a href="dashboard3.html">Dashboard 3</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">7 Footer Styles</a>
                                    <ul>
                                        <li><a href="#">Default Style</a></li>
                                        <li><a href="footer-style1.html">Footer Style 1</a></li>
                                        <li><a href="footer-style2.html">Footer Style 2</a></li>
                                        <li><a href="footer-style3.html">Footer Style 3</a></li>
                                        <li><a href="footer-style4.html">Footer Style 4</a></li>
                                        <li><a href="footer-style5.html">Footer Style 5</a></li>
                                        <li><a href="footer-style6.html">Footer Style 6</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">8 Header Styles</a>
                                    <ul>
                                        <li><a href="#">Default Style</a></li>
                                        <li><a href="header-style1.html">Header Style 1</a></li>
                                        <li><a href="header-style2.html">Header Style 2</a></li>
                                        <li><a href="header-style3.html">Header Style 3</a></li>
                                        <li><a href="header-style4.html">Header Style 4</a></li>
                                        <li><a href="header-style5.html">Header Style 5</a></li>
                                        <li><a href="header-style6.html">Header Style 6</a></li>
                                        <li><a href="header-style7.html">Header Style 7</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">7 Inner Start Styles</a>
                                    <ul>
                                        <li><a href="#">Default Style</a></li>
                                        <li><a href="inner-starts-style1.html">Inner Start Style 1</a></li>
                                        <li><a href="inner-starts-style2.html">Inner Start Style 2</a></li>
                                        <li><a href="inner-starts-style3.html">Inner Start Style 3</a></li>
                                        <li><a href="inner-starts-style4.html">Inner Start Style 4</a></li>
                                        <li><a href="inner-starts-style5.html">Inner Start Style 5</a></li>
                                        <li><a href="inner-starts-style6.html">Inner Start Style 6</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">3 Search Styles</a>
                                    <ul>
                                        <li><a href="search-style1.html">Search Style 1</a></li>
                                        <li><a href="search-style2.html">Search Style 2</a></li>
                                        <li><a href="search-style3.html">Search Style 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="mobile-topnav container">
                        <li><a href="#">MY ACCOUNT</a></li>
                        <li class="ribbon language menu-color-skin">
                            <a href="#" data-toggle="collapse">ENGLISH</a>
                            <ul class="menu mini">
                                <li><a href="#" title="Dansk">Dansk</a></li>
                                <li><a href="#" title="Deutsch">Deutsch</a></li>
                                <li class="active"><a href="#" title="English">English</a></li>
                                <li><a href="#" title="Español">Español</a></li>
                                <li><a href="#" title="Français">Français</a></li>
                                <li><a href="#" title="Italiano">Italiano</a></li>
                                <li><a href="#" title="Magyar">Magyar</a></li>
                                <li><a href="#" title="Nederlands">Nederlands</a></li>
                                <li><a href="#" title="Norsk">Norsk</a></li>
                                <li><a href="#" title="Polski">Polski</a></li>
                                <li><a href="#" title="Português">Português</a></li>
                                <li><a href="#" title="Suomi">Suomi</a></li>
                                <li><a href="#" title="Svenska">Svenska</a></li>
                            </ul>
                        </li>
                        <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
                        <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
                        <li class="ribbon currency menu-color-skin">
                            <a href="#">USD</a>
                            <ul class="menu mini">
                                <li><a href="#" title="AUD">AUD</a></li>
                                <li><a href="#" title="BRL">BRL</a></li>
                                <li class="active"><a href="#" title="USD">USD</a></li>
                                <li><a href="#" title="CAD">CAD</a></li>
                                <li><a href="#" title="CHF">CHF</a></li>
                                <li><a href="#" title="CNY">CNY</a></li>
                                <li><a href="#" title="CZK">CZK</a></li>
                                <li><a href="#" title="DKK">DKK</a></li>
                                <li><a href="#" title="EUR">EUR</a></li>
                                <li><a href="#" title="GBP">GBP</a></li>
                                <li><a href="#" title="HKD">HKD</a></li>
                                <li><a href="#" title="HUF">HUF</a></li>
                                <li><a href="#" title="IDR">IDR</a></li>
                            </ul>
                        </li>
                    </ul>

                </nav>
            </div>
            <div id="travelo-signup" class="travelo-signup-box travelo-box">
                <div class="login-social">
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                    <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
                </div>
                <div class="seperator"><label>OR</label></div>
                <div class="simple-signup">
                    <div class="text-center signup-email-section">
                        <a href="#" class="signup-email"><i class="soap-icon-letter"></i>Sign up with Email</a>
                    </div>
                    <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund olicy, and Host Guarantee Terms.</p>
                </div>
                <div class="email-signup">
                    <form>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="first name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="last name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="email address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="confirm password">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Tell me about Travell b4u
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="description">By signing up, I agree to Travell b4u's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</p>
                        </div>
                        <button type="submit" class="full-width btn-medium">SIGNUP</button>
                    </form>
                </div>
                <div class="seperator"></div>
                <p>Already a Travell b4u member? <a href="#travelo-login" class="goto-login soap-popupbox">Login</a></p>
            </div>
            <div id="travelo-login" class="travelo-login-box travelo-box">
                <div class="login-social">
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                    <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
                </div>
                <div class="seperator"><label>OR</label></div>
                <form>
                    <div class="form-group">
                        <input type="text" class="input-text full-width" placeholder="email address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="input-text full-width" placeholder="password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="forgot-password pull-right">Forgot password?</a>
                        <div class="checkbox checkbox-inline">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </form>
                <div class="seperator"></div>
                <p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>
            </div>
        </header>