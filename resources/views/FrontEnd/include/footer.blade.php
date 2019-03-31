<footer class="footer-sec-w3layouts">
        <div class="container">
            <div class="w3ls-inner-sec py-lg-4 py-3">
                <div class="row copyright-info mt-3">
                    <div class="col-lg-6 copyright">
                        <p>&copy; 2019 
                            <a href="http://roya-foundation.org/" target="blank"> Roya Foundation </a>
                            . All Rights Reserved
                        </p>
                    </div>

                    <div class="col-lg-2 offset-md-4">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

                        <div class="fb-like" data-href="https://www.facebook.com/RoyaFoundationOrg/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <script src=" {{ asset('FrontEnd/js/jquery-2.2.3.min.js') }} "></script>
    <script src=" {{ asset('FrontEnd/js/responsiveslides.min.js') }} "></script>
    @stack('script')
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>

    <script src=" {{ asset('FrontEnd/js/jquery.sliderPro.min.js') }} "></script>
    <script src=" {{ asset('FrontEnd/js/jquery.fancybox.pack.js') }} "></script>
    <script src=" {{ asset('FrontEnd/js/timeline.min.js') }} "></script>
    <script>
        timeline(document.querySelectorAll('.timeline'), {
            forceVerticalMode: 700,
            mode: 'horizontal',
            verticalStartPosition: 'left',
            visibleItems: 4
        });
    </script>
    <script src=" {{ asset('FrontEnd/js/bootstrap.js') }} "></script>
    <script src=" {{ asset('FrontEnd/js/move-top.js') }} "></script>
    <script src=" {{ asset('FrontEnd/js/easing.js') }} "></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
</body>

</html>