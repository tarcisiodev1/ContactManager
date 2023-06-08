<?php

namespace Models;

class ContactModel extends BaseModel
{
    public function __construct()
    {
        parent::db_connect();
    }

    public function getAllContacts()
    {
        $results = $this->query("SELECT * FROM contatos ORDER BY id DESC");
        if ($results->status === 'success') {
            return $results->results;
        } else {
            return [];
        }
    }

    public function searchContacts($search)
    {
        $params = [
            ':search' => '%' . $search . '%'
        ];
        $results = $this->query(
            "SELECT * FROM contatos " .
                "WHERE nome LIKE :search OR telefone LIKE :search " .
                "ORDER BY id DESC",
            $params
        );
        if ($results->status === 'success') {
            return $results->results;
        } else {
            return [];
        }
    }

    public function getContactByPhone($telefone)
    {
        $sql = "SELECT id FROM contatos WHERE telefone = :telefone";
        $params = [':telefone' => $telefone];
        return $this->query($sql, $params);
    }

    public function addContact($nome, $telefone)
    {
        $sql = "INSERT INTO contatos VALUES(0, :nome, :telefone, NOW(), NOW())";
        $params = [':nome' => $nome, ':telefone' => $telefone];
        return $this->non_query($sql, $params);
    }
    public function deleteContact($id)
    {
        $sql = "DELETE FROM contatos WHERE id = :id";
        $params = [':id' => $id];
        return $this->non_query($sql, $params);
    }

    public function getContactById($id)
    {
        $sql = "SELECT * FROM contatos WHERE id = :id";
        $params = [':id' => $id];
        $result = $this->query($sql, $params);

        if ($result->status === 'success' && count($result->results) > 0) {
            return $result->results[0];
        } else {
            return null;
        }
    }
}
