<?php

//Defino variables privadas para la clase Cliente
//Realizar los cambios necesarios de modo tal que la clase Cliente pase a ser una clase abstracta
abstract Class Cliente{
//Mover los atributos y métodos correspondientes (que sólo correspondan a personas físicas), de la clase Cliente a la clase Persona.
//Realizar los cambios necesarios de modo tal que la clase Cliente pase a ser una clase abstracta.

  protected $email;
  protected $pass;

//Creo una función constructora con sus parámetros necesarios

  public function __construct($nombre,$apellido,$documento,$nacimiento,$email,$pass){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->documento = $documento;
    $this->nacimiento = $nacimiento;
    $this->email = $email;
    $this->pass = $pass;
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado


  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }

  }
