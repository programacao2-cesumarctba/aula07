<?php

class Prod_model extends CI_Model
{
    public function listaProdutos()
    {
        $objMysql = $this->db->get('produtos');
        return $objMysql->result();
    }

    public function buscaProduto($id)
    {
        $objMysql = $this->db->get_where('produtos', ['id' => $id]);
        return $objMysql->result();
    }

    public function salvaBanco($produto)
    {
        $this->db->insert('produtos', $produto);
    }

    public function editaBanco($produto)
    {
        $this->db->replace('produtos', $produto);
    }

    public function excluiBanco($produto)
    {
        $this->db->delete('produtos', $produto);
    }
}