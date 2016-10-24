# CI-Recaptcha
Biblioteca Simples para Recaptcha do Google

##
Versão do Codeigniter : 
```
3.X
```

## Descrição
reCAPTCHA é um serviço de CAPTCHA free da Google.
This is Google authored code that provides plugins for third-party integration
with reCAPTCHA.

## Instalação
Colocar na pasta library do CI.
Colocar a chave secreta na library `Recaptcha.php`:

```
 'secret' => 'Sua chave aqui',
```
## Como usar

```
<?php
  
  public function login(){
    	$this->load->library('recaptcha');
	  $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
	  $userIp=$this->input->ip_address();			
	  $status = $this->recaptcha->send($recaptchaResponse, $userIp);			
	  if($status->success){   
      //seu tratamento de login aqui
    }
  }
?>
```
