<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//Escolhe o protocolo que será usado smtp, imap ou pop
$config['protocol'] = 'smtp';

//Seta o link do servior de email
$config['smtp_host'] = 'smtp.seu_servidor';

//Seta a porta do servidor de email
$config['smtp_port'] = 'porta';
$config['smtp_timeout'] = '30';

//Usuario e senha do servidor de email
$config['smtp_user'] = 'email@email';
$config['smtp_pass'] = 'pass';

//seta o chartset do email
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['mailtype'] = 'html';
