<?php
session_start();
if(isset($_SESSION['log']))
{
	}
else
{
	echo "please fill proper details";
	header("refresh:1;url=index.php");// it takes 2 sec to go index page
}

?>