
    <div id="footerwrap">
        <div class="container">
            <h4>Created by <a href="http://madebydiesel.com">Made By Diesel</a> - Copyright 2017</h4>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/retina.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/smoothscroll.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/jquery-func.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/contact.js"></script>
</body>
<script>
  //Hamburger menu toggle
  $(".navbar-nav li a").click(function (event) {
    // check if window is small enough so dropdown is created
    var toggle = $(".navbar-toggle").is(":visible");
    if (toggle) {
      $(".navbar-collapse").collapse('hide');
    }
  });

(function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-7068778-21', 'auto');
ga('send', 'pageview');
</script>

</html>
