<?php

namespace Controllers;

use Models\ContactModel;

class ContactsController extends BaseController
{
    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }

    public function index()
    {
        $contacts = $this->contactModel->getAllContacts();
        $total_contacts = count($contacts);

        // Pass data to the view
        $data = [
            'contacts' => $contacts,
            'total_contacts' => $total_contacts
        ];

        // Render the view
        $this->view('contacts/index', $data);
    }

    public function search()
    {
        $search = $_POST['text_search'];
        $contacts = $this->contactModel->searchContacts($search);
        $total_contacts = count($contacts);

        // Pass data to the view
        $data = [
            'contacts' => $contacts,
            'total_contacts' => $total_contacts
        ];

        // Render the view
        $this->view('contacts/index', $data);
    }


    public function addContact()
    {
        $erro = null;

        // check if there was a post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $contatoModel = new ContactModel();

            // get post data
            $nome = $_POST['text_nome'];
            $telefone = $_POST['text_telefone'];

            // check if the phone is already registered
            $contact = $contatoModel->getContactByPhone($telefone);

            if ($contact->affected_rows != 0) {
                // there is already another contact with the same phone
                $erro = 'Já existe outro contato com o mesmo número de telefone.';
            } else {
                // store the contact in the database
                $contatoModel->addContact($nome, $telefone);

                header('Location: index.php');
                exit();
            }
        }

        $data = ['erro' => $erro];
        $this->view('layouts/header');
        $this->view('navbar');
        $this->view('add_contact', $data);
        $this->view('footer');
        $this->view('layouts/footer');
    }

    public function eliminar($id, $delete = null)
    {
        if (empty($id)) {
            header('Location: index.php');
            exit;
        }

        $contatoModel = new ContactModel();
        $contato = $contatoModel->getContactById($id);

        if (!empty($contato)) {
            if (!empty($delete)) {
                $contatoModel->deleteContact($id);
                header('Location: index.php');
                exit;
            }

            $data = [
                'contato' => $contato
            ];

            $this->view('layouts/header');
            $this->view('navbar');
            $this->view('eliminar_contato', $data);
            $this->view('footer');
            $this->view('layouts/footer');
        } else {
            header('Location: index.php');
            exit;
        }
    }
}
