<?php
session_start();
if(isset($_SESSION['log']))
{
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script >
$(window).bind('beforeunload', function(){
    $.ajax({
        type: 'get',
        async: false,
        url: 'logout.php'
    });
});
</script>
</head>
<body>
<div class="jumbotron text-center">

<h1>Welcome </h1>
<p>
		
	</p></div>
	<div class="jumbotron text-center">


<p>Password will change
		If you refresh <br>
	If you logout <br>
	If you change URL <br>
	If you close Browser <br>
	If you close Tab <br>

	<a href="logout.php" >logout</a>
	</p></div>
	<p>	
	
	
</p>

 

</body>
</html>
<?php
}
else
{
	echo "please fill proper details";
	header("refresh:2;url=index.php");
}

?>