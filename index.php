<?php include 'header.php' ?>

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">

	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<img border="0" alt="myHome" src="assets/img/floralRobo.png">
					<h4 class="monoFont">Hi, I am Juliano Garcia, a Computer Science student, and this is my personal page.
						   </h4>
						<h4 class="monoFont">My main areas of interest are AI and machine learning, Python programming language,
							functional programming, applications of linear algebra and ∆ ＶＡＰＯＲＷＡＶΞ ∆  :)
							   </h4>
					<h4>Feel free to check my GitHub ➙ <a href="https://github.com/robotenique">
                    <img border="0" alt="myGit" src="assets/img/robt.png" width="100" height="100">
</a></h4>

				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->


	<!-- +++++ Projects Section +++++ -->
    <script type="text/javascript">
    // All images need to be loaded for this plugin to work so
    // we end up waiting for the whole window to load in this example
    $('.Collage').removeWhitespace().collagePlus();
    $(window).load(function () {
    $('.Collage').collagePlus();
    });
    function collage() {
    $('.Collage').collagePlus(
        {
            'fadeSpeed' : 2000
        }
    );
    };
    // Here we apply the actual CollagePlus plugin
    // This is just for the case that the browser window is resized
    var resizeTimer = null;
    $(window).bind('resize', function() {
        // hide all the images until we resize them
        $('.Collage .Image_Wrapper').css("opacity", 0);
        // set a timer to re-apply the plugin
        if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(collage, 200);
    });

    </script>

	<div class="container centered">
        <div class="Collage col-lg-16 ">
            <img src="assets/img/nicey.gif" alt="" />
            <img src="assets/img/syn1.gif" alt="" />
            <img src="assets/img/syn2.gif" alt="" />
            <img src="assets/img/paradise.gif" alt="" />
            <img src="assets/img/fog.gif" alt="" />
            <img src="assets/img/palms.gif" alt="" />
        </div>
	</div><!-- /container -->


	<?php include 'footer.php'; ?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
