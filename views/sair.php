<?php

	setcookie('id_SOCIAL_users', '', time() - 3600);
  	setcookie('SOCIAL_users', '', time() - 3600);

	header ('Location: ../views/login.php');
?>