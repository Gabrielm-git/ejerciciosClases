<?php

include_once("cliente.php");
//Crear una clase Persona, una clase PYME y una clase Multinacional. Las 3 clases deben heredar de la clase Cliente
//Mover los atributos y métodos correspondientes (que sólo correspondan a personas físicas), de la clase Cliente a la clase Persona.
class  Persona extends Cliente {
  Private $nombre;
  Private $apellido;
  Private $documento;
  Private $nacimiento;

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  public function getApellido(){
    return $this->apellido;
  }
  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getDocumento(){
    return $this->documento;
  }
  public function setNacimiento($nacimiento){
    $this->nacimiento = $nacimiento;
  }
  public function getNacimiento(){
    return $this->nacimiento;
  }
  }
