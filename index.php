<?php

// Project constants
define('PROJECT_NAME', 'blog2');
define('DEFAULT_CONTROLLER', 'posts');
define('DEBUG', false);

// Load app
require 'system/classes/Application.php';
$app = new Application;
