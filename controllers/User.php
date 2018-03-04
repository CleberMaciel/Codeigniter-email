<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index() {
        $this->load->helper('form');
        $this->load->view('enviar_email');
    }

    public function enviar_email() {
        $this->load->library('email');
        
        $email = $this->input->post("email");
        
        $mensagem = "Você recebeu um email especial.";
        $this->email->from("email@gmail.com", 'Sua empresa/setor');
        $this->email->subject("Assunto");
        $this->email->to($email);
        $this->email->message($mensagem);
        if ($this->email->send()) {
            $this->load->view('ok');
        } else {
            print_r($this->email->print_debugger());
        }
    }

}

