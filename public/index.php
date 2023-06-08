<?php

session_start();

use Models\ContactModel;
use System\Router;

require_once('../vendor/autoload.php');

// $contatoModel = new ContactModel();
// $contacts = $contatoModel->getAllContacts();
// echo "<pre>";
// echo "print-r($contacts)";

// die();




Router::dispatch();