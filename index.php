<?php include 'header.php' ?>

<h1 class="centered">Ｒｏｂｏｔｅｎｉｑｕｅ's  	&nbsp; 	&nbsp;Ｈｏｍｅ~</h1>

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">

	    <div class="container centered">
			<div class="row">
				<div class="col-lg-16 centered">
                    <img border="0" class="img-responsive" alt="myHome" src="assets/img/robovoid.jpg">
					<h4 class="monoFont">Hello everybody, this is my personal page. Here I write some interesting things and sometimes share my programming exercises and other programming I do sometimes :)    </h4>
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
