<?php
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
	srand(strtotime("17 Feb 2023 23:34:07 GMT"));
	$activation_code = "";
	for ($i = 0; $i < 32; $i++) {
		$activation_code = $activation_code . $chars[rand(0, strlen($chars) - 1)];
	}
	print($activation_code);

?>
