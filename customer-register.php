<?php
/**
 * FarmLink — Customer Registration Redirect
 * Redirects legacy customer registration requests to vendor-register.php
 */
header("Location: vendor-register.php");
exit();
