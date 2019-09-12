<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    // atributos
    public $id;
    public $nome;
    public $email;

    // public listar usuarios
    public function getUsers($id = null)
    {
        if ($id === null) {
            // select * from usuarios
            $query = $this->db->get('usuarios');
        } else {
            $query = $this->db->get_where('usuarios', ['id' => $id]);
        }   
        
        return $query->result();
    }

    public function getUserByNome($nome)
    {
       
        $query = $this->db->get_where('usuarios', ['nome' => $nome]);
        
        return $query->result();
    }

    public function insere($data)
    {
        $this->db->insert('usuarios', $data);
    }

    public function altera($data)
    {
        $this->db->replace('usuarios', $data);
    }

    public function exclui($data)
    {
        $this->db->delete('usuarios', $data);
    }

    
}

