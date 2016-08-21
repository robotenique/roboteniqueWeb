<?php include 'headerB.php' ?>
 
	
	<div id="white">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-8 col-lg-offset-2"> 
					<p>
						<img src="../assets/img/user.png" width="50px" height="50px"> 
						<ba>Juliano Garcia</ba>
					</p>
					<p><bd>August 21, 2016</bd></p>
					<h4>Debug C programs using <i> gdb </i></h4>
					<p><img class="img-responsive" src="../assets/img/gdb-logo.png"></p>
					<p>
					<b> NOTE: </b> To install gdb in debian, just use <i>4 sudo apt-get gdb</i>.<br>
					Using gdb helps to debug C programs in real execution time, i.e. you can put break points in the program to evaluate the value of variables, detect when something has gone wrong, and many other uses. Here I'll cover the basics that I use to debug simple programs.
					</p>
					<p>
					<h4> How to use</h4>
					<ul class="list-group">
					  <li class="list-group-item">1. Compile it with <i>$ cc -g file.c</i> </li>
					  <li class="list-group-item">2.Open the generated file with <i> $ gdb a.out </i></li>
					  <li class="list-group-item">3. The <b>gdb</b> should open it. Now if you want to, you can create a break point using <i> $ break file.c:xx</i> . Replace 'xx' with the number of line to pause the execution</li>
					<li class="list-group-item">4. Run the program with <i>$ run -v -da -Q </i></li>
					<li class="list-group-item">5. As the program executes, you can print the value of variables using <i>$ print x </i>, where <b>x </b> is the name of the variable. </li>
					<li class="list-group-item">6. A segmentation Fault will display more info, allowing you to debug your program more easily! To exit the gdb and go back to your default terminal, just type <i> $ quit </i> </li>
					</ul>
					</p>
					<p>
					For more information and details about each argument used in the commands, I recommend the following pages:
					<br><a href="https://gcc.gnu.org/bugs/segfault.html">How to debug a GCC segmentation fault

					</a><br>
					<a href="http://www.unknownroad.com/rtfm/gdbtut/gdbbreak.html">How do I use breakpoints?</a>
					</p>			   	
					<hr><p><a href="index.php">Back</a></p>
				</div> 
			</div><!-- /row -->
		</div> <!-- /container -->
	</div><!-- /white -->
	
	
	
	
<?php include '../footer.php'; ?>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html> 