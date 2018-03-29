<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index() {
        /**
        *Carrega help de formulario
        */
        $this->load->helper('form');
       /**
        *Carrega a view que contém o formulario de envio
        */
        $this->load->view('enviar_email');
    }

    public function enviar_email() {
        /**
        *carrega a biblioteca de email
        */
        $this->load->library('email');
        
        //Pega  o email digitado do formulario e envia a $mensagem
        $email = $this->input->post("email");
        
        //Mensagem que a pessoa receberá
        $mensagem = "Você recebeu um email especial.";
        
        //E-mail que aparecerá quando a pessoa receber  o email
        $this->email->from("email@gmail.com", 'Sua empresa/setor');
        
        //Assunto do e-mail recebido (ex: Confirmação de Cadastro)
        $this->email->subject("Assunto");
        
        //Recebe o $email do formulario vindo do post
        $this->email->to($email);
        
        //Carrega a $mensagem
        $this->email->message($mensagem);
        
        //Testa o se o e-mail foi enviado com a função da biblioteca carregada
        if ($this->email->send()) {
            
            //Se for verdadeiro, carrega a view de OK
            $this->load->view('ok');
        } else {
            
            //faz print_r do erro
            print_r($this->email->print_debugger());
        }
    }

}

