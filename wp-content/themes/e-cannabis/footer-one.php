


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