<?php include 'headerB.php' ?>
 	<div id="white">
 		<div class="container">
 			<div class="row"> 
 				<div class="col-lg-8 col-lg-offset-2"> 
 					<p>
 						<img src="../assets/img/user.png" width="50px" height="50px"> 
 						<ba>Juliano Garcia</ba>
 					</p>
 					<p><bd>October 06, 2016</bd></p>
 					<h4>Python Map</h4>
 					<p>
 						A Subway map to know more about the things you can do with Python! 
 					</p>
 					<p>
 					<a href="../assets/img/pymap.png">
 					<img class="img-responsive" src="../assets/img/pymap.png">
 					</a></p> 
 					by <a href="http://hairysun.com/blog/2014/05/06/subway-map-to-python/">Hairy Sun - Geek blog</a>								   	
 					<hr><p><a href="../index.php">Back</a></p>
 				</div> 
 			</div><!-- /row -->
 		</div> <!-- /container -->
 	</div><!-- /white -->
	<div id="white">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-8 col-lg-offset-2"> 
					<p>
						<img src="../assets/img/user.png" width="50px" height="50px"> 
						<ba>Juliano Garcia</ba>
					</p>
					<p><bd>September 24, 2016</bd></p>
					<h4>How to create an online server in one line of code</h4>
					<p><img class="img-responsive" src="../assets/img/pythonLO.png"></p>
					<p>
						<b><i>Requirements: Python</i></b><br>
						Just open the terminal and type <i>$ python -m SimpleHTTPServer</i>.
						The server will be created in the IP of your machine.
						(To find the IP, type <i>ifconfig -all</i> or <i>ip a</i>.)
						<br><u> OBS: </u> If you use a newer version of Python (3.x) you should type <i> $ python -m http.server </i>.
					</p>			   	
					<hr><p><a href="../index.php">Back</a></p>
				</div> 
			</div><!-- /row -->
		</div> <!-- /container -->
	</div><!-- /white -->

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
					<b> NOTE: </b> To install gdb in debian or another debian based distro, just use <i>4 sudo apt-get gdb</i>.<br>
					Using gdb helps to debug C programs in real execution time, i.e. you can put break points in the program to evaluate the value of variables, detect when something has gone wrong, and many other uses. Here I'll cover the basics that I use to debug simple programs.
					</p>					
					<p>
					<b> NOTE (2): </b>If your program receives <i>CLI</i> args, the <i>gdb</i> have support for it using the <i>--args</i> tag, but for testing purposes it's better to just automate the input inside the program (i.e. automatically create a test input and not reading from the <i>CLI</i>).<br>
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
					This is just the very basic of <i>gdb</i>. For those who want something a little more sophisticated, I reccomend to study the <b>frame</b>, <b>backtrack</b> and navigation command in <i>gdb</i> (usually the <b>up</b> and <b>continue</b>).
					For more information and details about each argument used in the commands, I recommend the following pages:
					<br><a href="https://gcc.gnu.org/bugs/segfault.html">How to debug a GCC segmentation fault

					</a><br>
					<a href="http://www.unknownroad.com/rtfm/gdbtut/gdbbreak.html">How do I use breakpoints?</a>
					</p>			   	
					<hr><p><a href="../index.php">Back</a></p>
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
