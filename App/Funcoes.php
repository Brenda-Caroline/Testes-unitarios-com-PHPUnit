<?php
  namespace App;

  class Funcoes
  {
    public function validaTamanhoCpf($valor)
    {
      $cpf = preg_replace('/[^0-9]/', "", $valor);

      if (strlen($cpf) == 11) {
        return true;
      } else {
        return false;
      }
    }

    public function validaCaracteresCpf($cpf)
    {
      if(preg_match("^([0-9]){3}\.([0-9]){3}\.([0-9]){3}-([0-9]){2}$^", $cpf)) {
        return true;
      } else {
        return false;
      }
    }

    public function verificaNumerosIguaisCpf($valor)
    {
      $cpf = preg_replace('/[^0-9]/', "", $valor);
      if (strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)) {
        return false;
      } else {
        return true;
      } 
    }

    public function validateEmail($email) 
    {
      $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
      if(preg_match($regex, $email))
        return true;
      else
        return false;
    }

    public function validaTamanhoTelefone($valor) 
    {
      if(strlen($valor) == 11)
      {
        return true;
      } else {
        return false;
      }
    }

    public function validaTelefone($valor)
    {
      if(!preg_match('^\(+[0-9]{2,3}\) [0-9]{5}-[0-9]{4}$^', $valor)){
        return false;
      } else {
        return true;
      }
    }
  }
  
?>