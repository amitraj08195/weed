<section id="footer-bottom">
    <div class="container">
        <h2>Get in touch</h2>
        <p class="text-center">Sign me up for regular updates on upcoming News Events.</p>
        <div class="col-md-6">
            <div class="form-main-left  wow slideright" data-wow-duration="2s">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="your name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="your e-mail">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="your phone">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Enter your message here..."></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button class="btn-default"><i class="fa fa-send"></i> &nbsp; submit</button>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="contact-right">
                <ul class="list-inline list-inline1">
                    <li class="col-md-9 phone wow fadeInDown" data-wow-offset="200">
                        <i class="fa fa-phone"></i><h6>Call Us:</h6>+11 111-111-1111 ,+213234-111-1111
                    </li>
                    <li class="col-md-9 middle wow fadeInDown" data-wow-offset="200">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h6>Location:</h6>8220 Big Rock Street, country name , SA-957845
                    </li>
                    <li class="col-md-9 last wow fadeInDown" data-wow-offset="200">
                        <i class="fa fa-envelope"></i>
                        <h6>Email Us:</h6>
                        <a href="#">info@e-cannabis.com , mail@e-cannabis.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>



<section id="footer-bottom2">
    <div class="container">
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
        <p class="text-center"> © 2018. All Rights Reserved By: <a href="#"><strong>e-cannabis.com</strong></a></p>
    </div>
</section>










<!--required-js-->

<script src="<?php echo  get_template_directory_uri();?>/js/jquery-1.11.3.js"></script>

<script>
    $(window).scroll(function() {
        if($(this).scrollTop()>5) {
            $( "#area-navbar" ).addClass("fixed-me");
        } else {
            $( "#area-navbar" ).removeClass("fixed-me");
        }
    });
</script>
<script src="<?php echo  get_template_directory_uri();?>/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-45901861-2', 'auto');
    ga('send', 'pageview');

</script>
<script src="<?php echo  get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<script src="<?php echo  get_template_directory_uri();?>/js/bootstrap-dropdown-on-hover.js"></script>
<script src="<?php echo  get_template_directory_uri();?>/js/custom.js"></script>

<?php wp_footer();?>
</body>
</html>