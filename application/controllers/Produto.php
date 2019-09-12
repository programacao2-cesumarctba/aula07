<?php

class Produto extends CI_Controller
{
    public function index()
    {
        $this->load->model('prod_model');
        $produtos = $this->prod_model->listaProdutos();
        
        $vaiTemplate['produtos'] = $produtos;
        $this->load->view('listaprodutos', $vaiTemplate);
    }

    public function cadastraProdutoView()
    {
        $data['titulo'] = 'Cadastra Produto';
        $data['edita'] = false;
        $data['acao'] = 'cadastraProdutoBanco';
        $this->load->view('formprodutos', $data); 
    }


    public function editaProdutoView()
    {
        $id = $_GET['id'];
        $this->load->model('prod_model');
        $data['titulo'] = 'Edita Produto';
        $data['edita'] = true;
        $data['acao'] = 'editaProdutoBanco';
        $data['produto'] = $this->prod_model->buscaProduto($id);
        $this->load->view('formprodutos', $data); 
    }

    public function cadastraProdutoBanco()
    {
        $produto = [
            'nome' => $_POST['nome'],
            'preco'=> $_POST['preco']
        ];  

        $this->load->model('prod_model');
        $this->prod_model->salvaBanco($produto);

        $this->index();
    }

    public function editaProdutoBanco()
    {
        $produto = [
            'id'   => $_POST['id'],
            'nome' => $_POST['nome'],
            'preco'=> $_POST['preco']
        ];  

        $this->load->model('prod_model');
        $this->prod_model->editaBanco($produto);

        $this->index();
    }

    public function excluir() 
    {
        $id = $_GET['id'];
        
        $produto = [
            'id' => $id
        ];

        $this->load->model('prod_model');
        $this->prod_model->excluiBanco($produto);
        $this->index();
    }
}