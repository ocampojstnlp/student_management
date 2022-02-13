<?php 

# App file inclusion
require $_SERVER['DOCUMENT_ROOT'] . '/school/private/core/app.php';

# Database file inclusion
require 'database.php';

# Config file
require 'config.php';

#controller
require 'controller.php';

$app = new App();


$conn = new Database();

