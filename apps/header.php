<?php
if (isset($_SESSION['username']))
	require('views/header_in.phtml');
else
	require('views/header.phtml');
?>