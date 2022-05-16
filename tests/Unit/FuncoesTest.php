<?php
  class FuncoesTest extends \PHPUnit\Framework\TestCase
  {
    public function testValidaTamanhoCpf()
    {
      $cpf = new App\Funcoes;
      $result = $cpf->validaTamanhoCpf("123.456.789-41");
    
      $this->assertEquals( true, $result);
    }


    public function testValidaCaracteresCpf()
    {
      $cpf = new App\Funcoes;
      $result = $cpf->validaCaracteresCpf("143.416.789-41");
    
      $this->assertEquals( true, $result);
    }


    public function testVerificaNumerosIguaisCpf() 
    {
      $cpf = new App\Funcoes;
      $result = $cpf->verificaNumerosIguaisCpf("222.222.222-42");
    
      $this->assertEquals( true, $result);
    }


    public function testValidateEmail()
    {
      $email = new App\Funcoes;
      $result = $email->validateEmail('firstlast@gmail.com');

      $this->assertEquals(true, $result);
    }


    public function testValidaTamanhoTelefone() 
    {
      $telefone = new App\Funcoes;
      $result = $telefone->validaTamanhoTelefone(38991320547);

      $this->assertEquals(true, $result);
    }

    
    public function testValidaTelefone()
    {
      $telefone = new App\Funcoes;
      $result = $telefone->validaTelefone("(038) 99132-0547");

      $this->assertEquals(true, $result);
    }
  }
?>