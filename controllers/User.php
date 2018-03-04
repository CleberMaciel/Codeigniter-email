 public function enviar_email() {
        $this->load->library('email');
        $mensagem = $this->load->view('emails/msg', $data, TRUE); //carrega uma view como mensagem
        $mensagem = "mensagem";//mensagem em texto
        $this->email->from("email@email", 'Name');
        $this->email->subject("Subject");
        $this->email->reply_to("email@email");
        $this->email->to("email2@email2);
        $this->email->cc('email@email');
        $this->email->bcc('email@email');
        $this->email->message($mensagem);
        if ($this->email->send()) {
            redirect('/page');
        } else {
            print_r($this->email->print_debugger());
        }
    }
