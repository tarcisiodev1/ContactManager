<?php

namespace Controllers;

use Controllers\BaseController;
use Controllers\ContactsController;
use Models\ContactModel;

class Main extends BaseController
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['text_search'])) {
            $searchTerm = $_POST['text_search'];
            $contactModel = new ContactModel();
            $contacts = $contactModel->searchContacts($searchTerm);
            $totalContacts = count($contacts);
        } else {
            $contactModel = new ContactModel();
            $contacts = $contactModel->getAllContacts();
            $totalContacts = count($contacts);
        }

        $data = [
            'contacts' => $contacts,
            'total_contacts' => $totalContacts
        ];

        $this->view('layouts/header');
        $this->view('navbar');
        $this->view('homepage', $data);
        $this->view('footer');
        $this->view('layouts/footer');
    }
}
