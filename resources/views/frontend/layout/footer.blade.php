    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-lg-7 col-12">
                    <div class="row">
                        
                        <div class="footer_img">
                            <img src="frontend/images/BS.png" class="w-50 ml-5" alt="">
                        </div>
                        
                        <div class="col-md-3 col-lg-3 col-6">
                            <div class="footer_links">
                                <ul>
                                    <li><a href="">Forum</a></li>
                                    <li><a href="">FAQs</a></li>
                                    <li><a href="">Partners</a></li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="col-md-3 col-lg-3 col-6">
                            <div class="footer_links">
                                <ul>
                                    <li><a href="">Location</a></li>
                                    <li><a href="">All News</a></li>
                                    <li><a href="">Why Us?</a></li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="col-md-3 col-lg-3 col-6">
                            <div class="footer_links">
                                <ul>
                                    <li><a href="">Terms of Services</a></li>
                                    <li><a href="">Events</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-md-3 col-lg-3 col-6">
                            <div class="footer_links">
                                <ul>
                                    <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
                                    <li><a href="">About Us</a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-lg-5 col-sm-6 col-12">
                    <div class="social_media">
                        <div class="social_media_headline">
                            <h3>Social Networks</h3>
                            <p>Follow us on social networks to stay upto date with the latest news on N&B WELL SERVICE LLC.</p>
                        </div>

                        <div class="social_links">
                            <ul>
                                <li><a href="https://www.facebook.com/rfb20"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/FightersRfb"><i class="fab fa-twitter"></i></a></li>
                                <!-- <li><a href=""><i class="fab fa-linkedin-in"></i></a></li> -->
                                <li><a href="https://www.youtube.com/channel/UC5pz54PQ1TZJW24cFT9rrpg"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="mailto:rfb0620@gmail.com"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </footer>

    <div class="copyright">
        <p>&copy; Brand Share Ltd. 2020 - 2024. All rights reserved</p>
    </div>

    <script src="{{ asset('frontend/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>

    @yield('script')

    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>

    


    <!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
</body>
</html>