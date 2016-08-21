<?php 
// Default
$author = "Juliano Garcia";
$title  = "NULL";
$content = "NULL";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$title = htmlspecialchars($_POST['blog_title']);
	$content = htmlspecialchars($_POST['content']);
}

/* Create date string */
$month = date('F', mktime(0, 0, 0, date('m'), 10)); 
$day   = date('d');
$year  = date('Y');
$date  = ucfirst($month)." ".$day.","." ".$year;

/* Create the blog html code */

$code = "
<div id=\"white\">
<div class=\"container\">
			<div class=\"row\"> 
				<div class=\"col-lg-8 col-lg-offset-2\"> 
					<p><img src=\"assets/img/user.png\" width=\"50px\" height=\"50px\"> <ba>".$author."</ba></p>
					<p><bd>".$date."</bd></p>
					<h4>".$title."</h4>
					<p><img class=\"img-responsive\" src=\"xxx.xx\"></p>\n\n"
					.$content.
				   "\n		
					<hr><p><a href=\"index.php\">Back</a></p>
				</div> 
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /white -->\n
	    ";

echo nl2br(htmlspecialchars($code));

#echo $code;
?>







<!DOCTYPE html>
<html>
<head>
	<title>Generated Result</title>
</head>
<body>

</body>
</html>