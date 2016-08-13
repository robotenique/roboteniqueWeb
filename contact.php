<?php include 'header.php' ;
$result = '';
if (isset($_POST["submit"])) {
	$name = $_POST['nameC'];
	$email = $_POST['emailC'];
	$message = $_POST['messageC'];

	$from = 'Robotenique Web form'; 
	$to = 'julianogarcia_1997@hotmail.com'; 
	$subject = 'Message from Robotenique Web ';
	 
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";

	// Check if name has been entered
		if (!$_POST['nameC']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['emailC'] || !filter_var($_POST['emailC'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['messageC']) {
			$errMessage = 'Please enter your message';
		}





	// If there are no errors, send the email	
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}	
}



?>
 

	
	
	<!-- +++++ Contact Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>CONTACT ME</h3>
				<hr>				
			</div>
		</div>
		<div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">
				<h4> The best way to contact me is  by email: <a href="mailto:julianogarcia_1997@hotmail.com?Subject=Robotenique%20Web" target="_top">julianogarcia_1997@hotmail.com</a>
				<br>
				<br>
				<h6>You can try to use the form below, but it still under construction!</h6>
				<form role="form">
				  <div class="form-group">
				    <input name="nameC" type="name" class="form-control" id="NameInputEmail1" placeholder="Your Name">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="email" name="emailC" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				    <br>
				  </div>					  
				  <textarea class="form-control" name="messageC" rows="6" placeholder="Enter your text here"></textarea>
				    <br>
				  <button type="submit" class="btn btn-success">SUBMIT</button>				  		
							<div class="col-sm-10 col-sm-offset-2">
								<?php echo $result; ?>
							</div>
						
				</form>    			
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	
	
	<?php include 'footer.php'; ?>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
