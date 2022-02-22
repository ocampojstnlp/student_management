<?php 

# App file inclusion
require $_SERVER['DOCUMENT_ROOT'] . '/school/private/core/app.php';

# Database file inclusion
require 'database.php';

# Config file
require 'config.php';

#controller
require 'controller.php';
#Model
require 'Model.php';

spl_autoload_register(function ($class) {
    require '../private/models/' . $class . '.php';
});

$app = new App();


$conn = new Database();

