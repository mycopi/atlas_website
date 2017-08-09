<html>
<header><title>This is title</title></header>
<body>
<h1>Welcome to my home page!</h1>
<p>Some text.</p>

	<?php include 'db_login.php';?>
	<?php $request = http_request(GET, "http://192.168.1.108/list_address");
	echo $request;?>
<ol>

	<?php for ($i=0, $i<= $request->body, $i++) {
	 echo "<li>" . $request->body[$i] . "</li>";
	}
	?>

</ol>
<?php echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>"; ?>
</body>
</html>
