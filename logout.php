<?php
	
	session_start();
	$con = mysqli_connect("localhost", "root", "", "login");
	if(isset($_SESSION['log']))
	{


		function usernameGen() 
		{ 
			$n = 4;

			$generated_string = ""; 
			
			$domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"; 
			
			$len = strlen($domain); 
			
			for ($i = 0; $i < $n; $i++) 
			{  
				$index = rand(0, $len - 1); 
				
				$generated_string = $generated_string . $domain[$index]; 
			} 
			return $generated_string; 
		} 
		
		$vid = $_SESSION['log'];
		//echo $vid;
			$sql = "update login_info set password = '".usernameGen()."' where uname ='$vid'";
			if(mysqli_query($con, $sql))
			{
		//		echo "update";
			}
	}
 
	session_unset();
	session_destroy();
	echo "Logout ";
	header('Location: ./index.php');
?>