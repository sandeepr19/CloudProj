<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

<script type="text/javascript">
	function goToNextPage(){
		location.href = "linkedInPeopleSearch2.php";
	}

	
//	LinkedIn
//	api key: rbjecyqtr9pn
//	secret key: c3Z22HhLxFY6FUIB
</script>

<script type="text/javascript" src="http://platform.linkedin.com/in.js">
  api_key: rbjecyqtr9pn
  authorize: true
</script>

</head>

<body>

<?php
echo "<h1>Welcome to RECRU SOCIAL</h1>";
 $test ="http://www.gmail.com";
?>


<form>
	
	<input type="button" onclick="goToNextPage()" name="linkedIn" value="Login to LinkedIn"/>
	<script type="IN/Login" data-onAuth="goToNextPage">
	</script>
	
</form>


</body>

</html>
