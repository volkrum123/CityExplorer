<?php 

#Step1: use the Dotenv class
use Dotenv\Dotenv;

#Step2: Call the autoload file from the vendor folder
require __DIR__.'/../vendor/autoload.php';

#Step3: tell the Dotenv the filepath to the .env file
$dotenv = Dotenv::createImmutable(__DIR__,'/../');
$dotenv->load();
?>