<?php

include_once("cliente.php");
// Crear una clase Persona, una clase PYME y una clase Multinacional. Las 3 clases deben heredar de la clase Cliente
// Agregar a las clases PYME y Multinacional los atributos y métodos que correspondan. (ej: CUIT, Razón social, etc).
// Agregar constructor y métodos getters y setters.
class  Pyme extends Cliente {
  Private $cuit;
  Private $razonSocial;


  public function __construct($cuit,$razonSocial){
    $this->cuit = $cuit;
    $this->razonSocial = $razonSocial;

  }

  public function setNombre($cuit){
    $this->cuit = $cuit;
  }

  public function getNombre(){
    return $this->cuit;
  }

  public function setNombre($razonSocial){
    $this->razonSocial = $razonSocial;
  }
  public function getNombre(){
    return $this->razonSocial;
  }

  }
