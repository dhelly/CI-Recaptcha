<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Recaptcha Class
 *
 * Trabalha com o recaptcha do Google.
 *
 * @package         CodeIgniter
 * @subpackage      Libraries
 * @category      Libraries
 * @author          Jaqueine Fernandes 
 */

class Recaptcha {

  function send($response, $ip){

    $curl = curl_init();

    curl_setopt_array($curl, [
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
      CURLOPT_FOLLOWLOCATION => 1,
      CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
      CURLOPT_POST => 1,
      CURLOPT_SSL_VERIFYPEER => 0,  
      CURLOPT_VERBOSE => 1,
      CURLOPT_POSTFIELDS => [
        'secret' => 'blablabla',
        'response' => $response,
        'remoteip' => $ip
      ],
    ]);

    $result = json_decode(curl_exec($curl));
    curl_close($curl);
	
    return $result;
  }


}

/* End of file Recaptcha.php */
/* Location: ./application/libraries/Recaptcha.php */
